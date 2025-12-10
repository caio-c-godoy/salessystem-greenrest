<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Green Rest') }} | Sono profundo com tecnologia MedFIR</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --green-900: #0b2f26;
            --green-700: #125c4b;
            --green-500: #18bfa0;
            --green-300: #c3efe4;
            --sand: #f5f1e9;
            --text: #1a1a17;
            --muted: #51514d;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Poppins", system-ui, -apple-system, sans-serif;
            color: var(--text);
            background: #ffffff;
            line-height: 1.6;
            scroll-behavior: smooth;
        }
        a { color: inherit; text-decoration: none; }
        .page {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }
        header {
            position: sticky;
            top: 0;
            z-index: 20;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(6px);
            border-bottom: 1px solid #e8e8e4;
        }
        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 14px 0;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            letter-spacing: 0.02em;
            color: var(--green-900);
        }
        .brand span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: var(--green-300);
            color: var(--green-900);
            font-weight: 700;
        }
        nav {
            display: flex;
            align-items: center;
            gap: 18px;
            font-weight: 500;
            color: var(--muted);
        }
        nav a { padding: 6px 0; }
        .actions { display: flex; align-items: center; gap: 12px; }
        .actions .btn { font-size: 15px; }
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 18px;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.2s ease, background 0.2s ease;
        }
        .btn-primary {
            background: linear-gradient(120deg, var(--green-700), var(--green-500));
            color: #fff;
            box-shadow: 0 12px 30px rgba(18, 92, 75, 0.25);
        }
        .btn-secondary {
            background: #fff;
            color: var(--green-700);
            border: 1px solid #dfe8e4;
        }
        .btn:hover { transform: translateY(-2px); }
        .hero {
            position: relative;
            overflow: hidden;
            background: radial-gradient(circle at 20% 20%, #e3f7ef, #f6faf8);
        }
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url("https://mygreenrest.com/wp-content/webp-express/webp-images/uploads/2025/02/dormir5.png.webp") center/cover no-repeat;
            opacity: 0.16;
        }
        .hero-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            align-items: center;
            gap: 40px;
            padding: 68px 0 40px;
            position: relative;
        }
        .badge-row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 18px;
        }
        .pill {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            border-radius: 999px;
            background: #fff;
            border: 1px solid #e3e8e4;
            box-shadow: 0 4px 14px rgba(11, 47, 38, 0.08);
            font-weight: 500;
            color: var(--green-900);
        }
        .hero h1 {
            font-size: clamp(34px, 4vw, 46px);
            margin: 0 0 12px;
            line-height: 1.15;
            color: var(--green-900);
        }
        .hero p {
            margin: 0 0 20px;
            color: var(--muted);
            font-size: 17px;
        }
        .hero-card {
            background: #fff;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 18px 60px rgba(11, 47, 38, 0.12);
        }
        .hero-card h3 { margin: 0 0 8px; color: var(--green-700); }
        .hero-card ul {
            margin: 8px 0 0 18px;
            color: var(--muted);
            padding-left: 6px;
        }
        .section {
            padding: 56px 0;
        }
        .section header h2 {
            margin: 0 0 10px;
            font-size: clamp(26px, 3vw, 34px);
            color: var(--green-900);
            text-align: center;
        }
        .section header p {
            margin: 0 auto 28px;
            max-width: 640px;
            text-align: center;
            color: var(--muted);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 18px;
        }
        .card {
            background: #fff;
            border-radius: 16px;
            padding: 18px;
            border: 1px solid #e5ebe6;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.04);
        }
        .card h3 { margin: 0 0 8px; color: var(--green-700); }
        .card p { margin: 0; color: var(--muted); }
        .flag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 10px;
            background: var(--green-300);
            color: var(--green-900);
            font-weight: 600;
            font-size: 14px;
        }
        .tech {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 28px;
            align-items: center;
        }
        .tech img {
            width: 100%;
            border-radius: 18px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
        }
        .list {
            margin: 12px 0 0;
            padding-left: 18px;
            color: var(--muted);
        }
        .products {
            background: var(--sand);
            border-radius: 22px;
            padding: 28px;
        }
        .product-card {
            border: 1px solid #e1ddd3;
            padding: 18px;
            border-radius: 14px;
            background: #fff;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .product-card small { color: var(--muted); font-weight: 500; }
        .quote {
            border-left: 4px solid var(--green-500);
            padding-left: 14px;
            color: var(--muted);
            margin: 0;
        }
        .cta {
            background: linear-gradient(135deg, var(--green-900), var(--green-700));
            color: #fff;
            border-radius: 24px;
            padding: 36px 28px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            align-items: center;
            gap: 18px;
        }
        .cta h3 { margin: 0 0 6px; font-size: 26px; }
        .cta p { margin: 0 0 14px; color: #d8f8f0; }
        footer {
            padding: 28px 0 40px;
            color: var(--muted);
            text-align: center;
            font-size: 14px;
        }
        @media (max-width: 768px) {
            .page { padding: 0 16px; }
            nav { display: none; }
            .topbar { padding: 10px 0; gap: 8px; }
            .actions { gap: 8px; }
            .actions .btn { padding: 10px 12px; font-size: 13px; border-radius: 10px; }
            .hero-grid { grid-template-columns: 1fr; padding: 40px 0 20px; gap: 24px; }
            .hero-card { order: 2; }
            .section { padding: 36px 0; }
            .products { padding: 18px; }
            .grid { gap: 12px; }
        }
        @media (max-width: 900px) {
            nav { display: none; }
            .topbar { padding: 14px 0; }
            .hero-grid { padding: 50px 0 24px; }
            .hero-card { order: 2; }
        }
    </style>
</head>
<body>
    <header>
        <div class="page topbar">
            <div class="brand">
                <span>GR</span> Green Rest
            </div>
            <nav aria-label="Navegação principal">
                <a href="#tecnologia">Tecnologia</a>
                <a href="#beneficios">Benefícios</a>
                <a href="#colecao">Coleção</a>
                <a href="#depoimentos">Depoimentos</a>
                <a href="#contato">Contato</a>
            </nav>
            <div class="actions">
                <a class="btn btn-secondary" href="/login">Área do parceiro</a>
                <a class="btn btn-primary" href="#contato">Quero falar</a>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="page hero-grid">
            <div>
                <div class="flag">MedFIR® • Sono terapêutico</div>
                <h1>Sono profundo e recuperação real em colchões feitos à mão.</h1>
                <p>Leve para casa a mesma tecnologia que médicos recomendam: camadas premium, materiais responsivos e a exclusividade MedFIR® para aliviar dores e renovar sua energia.</p>
                <div class="badge-row">
                    <div class="pill">Envio grátis para EUA e Canadá*</div>
                    <div class="pill">Garantia limitada de até 15 anos*</div>
                    <div class="pill">Feitos na Flórida, EUA</div>
                </div>
                <div style="display:flex;gap:12px;margin-top:20px;flex-wrap:wrap;">
                    <a class="btn btn-primary" href="#colecao">Ver coleção</a>
                    <a class="btn btn-secondary" href="#tecnologia">Conhecer a tecnologia</a>
                </div>
            </div>
            <div class="hero-card">
                <h3>O que você sente na primeira noite</h3>
                <ul>
                    <li>Alívio imediato de pressão nos pontos de dor.</li>
                    <li>Temperatura equilibrada para dormir a noite toda.</li>
                    <li>Suporte progressivo que abraça a coluna.</li>
                    <li>Materiais hipoalergênicos e certificados.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section" id="tecnologia">
        <div class="page">
            <header>
                <h2>MedFIR®: tecnologia do futuro, agora no seu quarto</h2>
                <p>Inspirada em protocolos médicos, a MedFIR® combina camadas de espuma responsiva, malhas respiráveis e partículas que estimulam microcirculação para reduzir tensão muscular durante o sono.</p>
            </header>
            <div class="tech">
                <img src="https://mygreenrest.com/wp-content/webp-express/webp-images/uploads/2025/02/dormir4.png.webp" alt="Tecnologia MedFIR em detalhes">
                <div>
                    <h3 style="margin:0 0 10px;color:var(--green-700);">O que faz diferença</h3>
                    <ul class="list">
                        <li>Camada MedFIR® para relaxamento e recuperação muscular.</li>
                        <li>Estrutura de suporte que mantém a coluna alinhada.</li>
                        <li>Textil respirável que dissipa calor e umidade.</li>
                        <li>Produção artesanal e controle de qualidade feito à mão.</li>
                    </ul>
                    <div style="margin-top:18px;display:flex;gap:12px;flex-wrap:wrap;">
                        <a class="btn btn-primary" href="#contato">Falar com um especialista</a>
                        <a class="btn btn-secondary" href="#depoimentos">Ver experiências reais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="beneficios">
        <div class="page">
            <header>
                <h2>Por que escolher a Green Rest</h2>
                <p>Mais do que conforto: construímos um sistema completo para sono, performance e qualidade de vida.</p>
            </header>
            <div class="grid">
                <div class="card">
                    <h3>Suporte progressivo</h3>
                    <p>Espumas de alta densidade entregam firmeza inteligente para diferentes biotipos e posturas.</p>
                </div>
                <div class="card">
                    <h3>Alívio de pressão</h3>
                    <p>Distribui o peso de forma uniforme, reduzindo compressão em ombros, lombar e quadril.</p>
                </div>
                <div class="card">
                    <h3>Clima equilibrado</h3>
                    <p>Malha respirável e canais de ventilação para noites sem superaquecimento.</p>
                </div>
                <div class="card">
                    <h3>Durabilidade real</h3>
                    <p>Materiais premium, costura reforçada e produção 100% norte-americana.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="colecao">
        <div class="page products">
            <header>
                <h2>Coleção Green Rest</h2>
                <p>Escolha o nível de conforto que combina com seu sono e sua rotina.</p>
            </header>
            <div class="grid">
                <div class="product-card">
                    <small>Essencial</small>
                    <h3>Green Rest Core</h3>
                    <p>Suporte firme com acolhimento na medida e tecnologia MedFIR® de série.</p>
                    <ul class="list">
                        <li>Espumas certificadas CertiPUR-US®.</li>
                        <li>Malha fria com toque de nuvem.</li>
                        <li>Altura ideal para qualquer base.</li>
                    </ul>
                </div>
                <div class="product-card">
                    <small>Equilíbrio</small>
                    <h3>Green Rest Hybrid</h3>
                    <p>Combina camadas de espuma responsiva e suporte flutuante para máxima adaptação.</p>
                    <ul class="list">
                        <li>Alívio avançado de pressão.</li>
                        <li>Ventilação 360º para clima regulado.</li>
                        <li>Perfeito para quem divide a cama.</li>
                    </ul>
                </div>
                <div class="product-card">
                    <small>Premium</small>
                    <h3>Green Rest Luxe</h3>
                    <p>Construção artesanal, toque ultra macio e experiência de hotel 5 estrelas em casa.</p>
                    <ul class="list">
                        <li>Tecido hipoalergênico com acabamento luxuoso.</li>
                        <li>Suporte segmentado por zonas.</li>
                        <li>Garantia estendida e montagem white-glove.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="depoimentos">
        <div class="page">
            <header>
                <h2>Resultados reais</h2>
                <p>Histórias de quem acordou renovado depois de migrar para um Green Rest.</p>
            </header>
            <div class="grid">
                <div class="card">
                    <p class="quote">“Tinha dores lombares crônicas. Em duas semanas senti alívio e passei a dormir sem acordar de madrugada.”</p>
                    <p><strong>Mariana •</strong> Orlando, FL</p>
                </div>
                <div class="card">
                    <p class="quote">“O equilíbrio térmico é real. Mesmo no verão da Flórida, a cama fica fresca a noite toda.”</p>
                    <p><strong>Rafael •</strong> Tampa, FL</p>
                </div>
                <div class="card">
                    <p class="quote">“Sou médica e recomendo a pacientes com dor. O suporte progressivo faz diferença.”</p>
                    <p><strong>Dra. Silva •</strong> Miami, FL</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contato">
        <div class="page cta">
            <div>
                <h3>Pronto para dormir melhor?</h3>
                <p>Fale com um especialista Green Rest e descubra qual modelo se encaixa no seu perfil.</p>
                <div style="display:flex;gap:12px;flex-wrap:wrap;">
                    <a class="btn btn-secondary" href="mailto:contato@greenrest.com">contato@greenrest.com</a>
                    <a class="btn btn-primary" href="/login">Área do parceiro</a>
                </div>
            </div>
            <div>
                <p style="margin:0 0 8px;font-weight:600;">Diferenciais inclusos:</p>
                <div class="badge-row">
                    <div class="pill">Frete grátis*</div>
                    <div class="pill">Garantia de até 15 anos*</div>
                    <div class="pill">Produção feita nos EUA</div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="page">
            Green Rest • Tecnologia MedFIR® • Feito na Flórida, EUA. Envio gratuito para EUA e Canadá (*consulte condições).
        </div>
    </footer>
</body>
</html>
