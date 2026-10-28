<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natureza & Co.</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <div class="shell header-inner">
            <a class="brand" href="/">
                <span class="brand-mark">N</span>
                <span>Natureza</span>
            </a>

            <nav class="main-nav" aria-label="Menu principal">
                <a class="active" href="/">Início</a>
                <a href="/fotos">Fotos</a>
                <a href="/fotos2">Adicionar</a>
                <a href="/sobre">Sobre</a>
            </nav>

            <button class="theme-toggle" type="button" data-theme-toggle>Trocar tema</button>
        </div>
    </header>

    <main class="shell page-hero">
        <section class="hero-grid">
            <div class="hero-copy">
                <span class="eyebrow">Galeria visual</span>
                <h1>Criar uma experiência memorável com paisagens e histórias.</h1>
                <p>
                    Este portfólio combina design moderno, filtros interativos e uma galeria dinâmica
                    para explorar cenas de montanhas, rios e praias com uma navegação leve e elegante.
                </p>

                <div class="cta-row">
                    <a class="primary-btn" href="/fotos">Explorar galeria</a>
                    <a class="secondary-btn" href="/sobre">Conhecer a ideia</a>
                </div>

                <div class="hero-stats">
                    <div class="stat-box">
                        <strong>03</strong>
                        <span>categorias</span>
                    </div>
                    <div class="stat-box">
                        <strong>+120</strong>
                        <span>cenas inspiradas</span>
                    </div>
                    <div class="stat-box">
                        <strong>24/7</strong>
                        <span>navegação</span>
                    </div>
                </div>
            </div>

            <div class="hero-art">
                <div class="visual-card">
                    <div style="display:grid; gap:1rem;">
                        <div style="display:grid; grid-template-columns:1.2fr 0.8fr; gap:1rem;">
                            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=900&q=80" alt="Montanhas" style="height:220px; object-fit:cover; border-radius:1.2rem;">
                            <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=900&q=80" alt="Rio" style="height:220px; object-fit:cover; border-radius:1.2rem;">
                        </div>
                        <div style="display:grid; grid-template-columns:0.9fr 1.1fr; gap:1rem;">
                            <div style="background: rgba(79, 70, 229, 0.08); border:1px solid rgba(79,70,229,0.2); border-radius:1.2rem; padding:1rem;">
                                <p style="margin:0 0 0.35rem; color:var(--text-soft);">Tema</p>
                                <strong style="font-size:1.25rem;">Natureza</strong>
                            </div>
                            <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=80" alt="Praia" style="height:180px; object-fit:cover; border-radius:1.2rem;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
