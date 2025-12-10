<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerOrderController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        abort_unless($user && $user->isPartner(), 403);

        $orders = Order::with(['items', 'invoice'])
            ->where('partner_id', $user->partner_id)
            ->orderByDesc('created_at')
            ->get();

        return view('partner.orders', compact('orders'));
    }

    public function store(Request $request)
    {
        $user = $request->user();
        abort_unless($user && $user->isPartner(), 403);

        $data = $request->validate([
            'shipping_address' => 'required|string',
            'shipping_zip' => 'required|string|max:20',
            'items' => 'required|array|min:1',
            'items.*.product_variant_id' => 'required|exists:product_variants,id',
            'items.*.qty' => 'required|integer|min:0',
        ]);

        $partner = $user->partner;

        $items = collect($data['items'] ?? [])
            ->filter(fn($item) => isset($item['qty']) && $item['qty'] > 0)
            ->values();

        if ($items->isEmpty()) {
            return back()->withErrors(['items' => 'Informe quantidade para pelo menos um produto.'])->withInput();
        }

        return DB::transaction(function () use ($data, $partner, $items) {
            $order = Order::create([
                'partner_id' => $partner?->id,
                'source' => 'PARTNER',
                'status' => 'NEW',
                'shipping_address' => $data['shipping_address'],
                'shipping_zip' => $data['shipping_zip'],
                'shipping_amount' => 0,
                'tax_amount' => 0,
                'subtotal' => 0,
                'total_amount' => 0,
            ]);

            $subtotal = 0;
            foreach ($items as $itemData) {
                $variant = ProductVariant::findOrFail($itemData['product_variant_id']);
                $unitPrice = $variant->priceForPartner($partner);
                $amount = $unitPrice * $itemData['qty'];
                $subtotal += $amount;

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_variant_id' => $variant->id,
                    'description' => $variant->product?->name . ' - ' . $variant->size_label,
                    'qty' => $itemData['qty'],
                    'unit_price' => $unitPrice,
                    'amount' => $amount,
                ]);
            }

            $order->update([
                'subtotal' => $subtotal,
                'total_amount' => $subtotal, // sem frete/taxa no envio inicial
            ]);

            return redirect()->route('partner.orders')->with('status', 'Pedido enviado com sucesso.');
        });
    }
}
