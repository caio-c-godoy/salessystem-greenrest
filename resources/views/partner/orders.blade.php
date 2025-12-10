<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meus pedidos | Green Rest</title>
    @include('layouts.brand-styles')
    <style>
        .orders-grid { display: grid; gap: 14px; }
        .order-card { padding: 16px; }
        .order-meta { display: flex; flex-wrap: wrap; gap: 12px; font-size: 14px; color: var(--muted); }
        .order-title { display: flex; align-items: center; gap: 10px; }
        .badge { background: #fff; border: 1px solid #e3e8e4; padding: 6px 10px; border-radius: 999px; font-weight: 600; }
        .items { margin-top: 10px; }
        .items li { margin-bottom: 4px; color: var(--text); }
        .price { font-weight: 700; color: var(--green-700); }
    </style>
</head>
<body>
    <div class="page-container" style="padding: 24px 16px;">
        <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;margin-bottom:12px;">
            <div>
                <div class="pill">Meus pedidos</div>
                <h1 style="margin:10px 0 4px;color:var(--green-900);">Pedidos do parceiro</h1>
                <p style="margin:0;color:var(--muted);">Apenas pedidos associados ao seu partner_id são exibidos aqui.</p>
            </div>
            <a href="{{ route('partner.catalog') }}" class="brand-btn secondary">Ver catálogo</a>
        </div>

        @if(session('status'))
            <div class="glass-card p-3 mb-3" style="color:var(--green-700); font-weight:600;">
                {{ session('status') }}
            </div>
        @endif

        @if($orders->isEmpty())
            <div class="glass-card p-5">
                <p class="text-sm text-gray-600">Nenhum pedido encontrado.</p>
            </div>
        @else
            <div class="orders-grid">
                @foreach($orders as $order)
                    <div class="glass-card order-card">
                        <div class="order-title">
                            <span class="badge">#{{ $order->id }}</span>
                            <strong>Status: {{ $order->status }}</strong>
                        </div>
                        <div class="order-meta">
                            <span>Subtotal: <span class="price">${{ number_format($order->subtotal, 2) }}</span></span>
                            <span>Criado em: {{ $order->created_at?->format('d/m/Y') }}</span>
                            @if($order->invoice)
                                <span>Invoice: <a class="text-[#125c4b]" href="{{ $order->invoice->pdf_url ?? '#' }}">Ver invoice</a></span>
                            @endif
                        </div>
                        <ul class="items">
                            @foreach($order->items as $item)
                                <li>{{ $item->description }} (x{{ $item->qty }}) — ${{ number_format($item->amount, 2) }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>
