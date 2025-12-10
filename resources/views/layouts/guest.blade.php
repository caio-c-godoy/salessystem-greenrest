<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Green Rest') }}</title>

    @include('layouts.brand-styles')
    <style>
        body {
            background: radial-gradient(circle at 15% 20%, #e3f7ef, #f6faf8 40%, #f6faf8 100%);
            min-height: 100vh;
        }
        .auth-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 28px;
            align-items: center;
            padding: 40px 0 24px;
        }
        .auth-hero {
            display: grid;
            gap: 14px;
        }
        .auth-hero h1 {
            font-size: clamp(26px, 3vw, 34px);
            margin: 0;
            color: var(--green-900);
            line-height: 1.2;
        }
        .auth-hero p {
            margin: 0;
            color: var(--muted);
        }
        .auth-card {
            padding: 24px;
        }
        .auth-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 10px;
        }
        .auth-logo span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: var(--green-300);
            color: var(--green-900);
            font-weight: 700;
            letter-spacing: 0.02em;
        }
        .auth-card h2 {
            margin: 0 0 6px;
            color: var(--green-900);
            font-size: 22px;
        }
        .auth-card small {
            color: var(--muted);
        }
        .auth-footer {
            text-align: center;
            margin-top: 18px;
            color: var(--muted);
            font-size: 13px;
        }
        @media (max-width: 640px) {
            .auth-wrapper {
                padding: 20px 0 12px;
            }
            .auth-card {
                order: 1;
                padding: 18px;
            }
            .auth-hero {
                order: 2;
            }
            .auth-hero h1 {
                font-size: 24px;
            }
            .brand-btn { width: 100%; justify-content: center; }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="page-container auth-wrapper">
        <div class="auth-hero">
            <div class="pill">Sono terapêutico com tecnologia MedFIR</div>
            <h1>Bem-vindo ao portal Green Rest.</h1>
            <p>Entre ou crie sua conta para acompanhar pedidos, parceiros e dashboards com a mesma energia que você encontra no nosso site.</p>
            <div class="brand-tag">Feito na Flórida • Frete grátis EUA/Canadá*</div>
        </div>
        <div class="auth-card glass-card">
            <div class="auth-logo">
                <span>GR</span>
                <div>
                    <strong>Green Rest</strong><br>
                    <small>Portal seguro</small>
                </div>
            </div>
            {{ $slot }}
        </div>
    </div>
    <div class="auth-footer page-container">
        Tecnologia MedFIR® • Segurança de acesso para parceiros e admins.
    </div>
</body>
</html>
