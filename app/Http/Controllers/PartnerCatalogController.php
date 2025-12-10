<?php

namespace App\Http\Controllers;

use App\Models\ProductVariant;
use Illuminate\Http\Request;

class PartnerCatalogController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        abort_unless($user && $user->isPartner(), 403);

        $partner = $user->partner;

        $variants = ProductVariant::with('product')
            ->where('is_active', true)
            ->whereHas('product', fn($q) => $q->where('is_active', true))
            ->whereHas('partnerPrices', fn($q) use ($partner) {
                $q->where('partner_id', $partner?->id)->where('is_active', true);
            })
            ->get()
            ->map(function (ProductVariant $variant) use ($partner) {
                $price = $variant->priceForPartner($partner);
                return [
                    'id' => $variant->id,
                    'product' => $variant->product?->name,
                    'size' => $variant->size_label,
                    'price' => $price,
                    'custom' => $variant->partnerPrices()
                        ->where('partner_id', $partner?->id)
                        ->where('is_active', true)
                        ->value('custom_partner_price') !== null,
                ];
            });

        return view('partner.catalog', [
            'variants' => $variants,
            'partner' => $partner,
        ]);
    }
}
