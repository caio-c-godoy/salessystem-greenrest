<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo do parceiro | Green Rest</title>
    @include('layouts.brand-styles')
    <style>
        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
        }
        .catalog-card {
            padding: 16px;
        }
        .catalog-card h3 {
            margin: 0 0 6px;
            color: var(--green-900);
        }
        .catalog-card p {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }
        .price {
            margin-top: 10px;
            font-weight: 700;
            color: var(--green-700);
            font-size: 18px;
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 10px;
            border-radius: 999px;
            background: #fff;
            border: 1px solid #e3e8e4;
            font-size: 12px;
            color: var(--green-900);
        }
        .page-header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="page-container" style="padding: 24px 16px;">
        <div class="page-header">
            <div>
                <div class="pill">Catálogo parceiro</div>
                <h1 style="margin:10px 0 6px;color:var(--green-900);">Produtos liberados para {{ $partner?->company_name ?? 'parceiro' }}</h1>
                <p style="margin:0;color:var(--muted);">Visualize apenas variantes ativas com seus preços de parceiro ou customizados.</p>
            </div>
            <a href="{{ route('dashboard') }}" class="brand-btn secondary">Voltar ao dashboard</a>
        </div>

        @if($variants->isEmpty())
            <div class="glass-card p-5">
                <p class="text-sm text-gray-600">Nenhum produto liberado para este parceiro no momento.</p>
            </div>
        @else
            <form method="POST" action="{{ route('partner.orders.store') }}">
                @csrf
                <div class="catalog-grid">
                    @foreach($variants as $variant)
                        <div class="glass-card catalog-card">
                            <div class="badge">{{ $variant['product'] }}</div>
                            <h3>{{ $variant['size'] }}</h3>
                            <p>Preço de parceiro {{ $variant['custom'] ? '(customizado)' : '(padrão)' }}</p>
                            <div class="price">${{ number_format($variant['price'], 2) }}</div>
                            <div style="margin-top:10px;display:flex;gap:8px;align-items:center;">
                                <input type="hidden" name="items[{{ $variant['id'] }}][product_variant_id]" value="{{ $variant['id'] }}">
                                <label for="qty-{{ $variant['id'] }}" style="font-size:12px;color:var(--muted);">Qtd</label>
                                <input id="qty-{{ $variant['id'] }}" name="items[{{ $variant['id'] }}][qty]" type="number" min="0" value="0" style="width:80px;">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="glass-card p-4" style="margin-top:16px; display:grid; gap:10px;">
                    <label class="text-sm text-gray-700" for="shipping_address">Endereço de entrega</label>
                    <textarea id="shipping_address" name="shipping_address" required rows="2" placeholder="Rua, número, cidade"></textarea>
                    <label class="text-sm text-gray-700" for="shipping_zip">ZIP</label>
                    <input id="shipping_zip" name="shipping_zip" required type="text" placeholder="ZIP/CEP">
                    <button class="brand-btn primary fluid" type="submit">Enviar pedido</button>
                </div>
            </form>
        @endif
    </div>
</body>
</html>
