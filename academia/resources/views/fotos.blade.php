<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Galeria de fotos da Ferro & Giz, com ambiente, treino e funcionalidade da academia.">
    <title>Galeria | Ferro &amp; Giz</title>
    <style>
        :root {
            --bg: #E4E8E3;
            --paper: #F7F8F5;
            --ink: #1B2623;
            --muted: #5C6B65;
            --line: #C3CCC5;
            --red: #B5573C;
            --blue: #2F6F86;
            --green: #5F8F6B;
            --gold: #DDA94B;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: Archivo, system-ui, sans-serif;
            background: var(--bg);
            color: var(--ink);
        }
        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; display: block; }
        button, input, select { font: inherit; }
        .wrap { width: min(1100px, calc(100% - 32px)); margin: 0 auto; }
        header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(228, 232, 227, 0.96);
            border-bottom: 2px solid var(--ink);
            backdrop-filter: blur(8px);
        }
        .bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            min-height: 72px;
        }
        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: -0.03em;
        }
        .brand-mark {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2px;
            width: 24px;
            height: 24px;
        }
        .brand-mark i { display: block; }
        .brand-mark i:nth-child(1) { background: var(--red); }
        .brand-mark i:nth-child(2) { background: var(--blue); }
        .brand-mark i:nth-child(3) { background: var(--gold); }
        .brand-mark i:nth-child(4) { background: var(--green); }
        nav {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        nav a {
            color: var(--muted);
            font-weight: 600;
        }
        nav a:hover, nav a.active { color: var(--ink); }
        .nav-btn {
            border: 2px solid var(--ink);
            background: var(--ink);
            color: var(--paper);
            padding: 8px 14px;
            font-weight: 700;
        }
        main { padding: 48px 0 72px; }
        .hero {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 28px;
        }
        h1 {
            margin: 0;
            font-size: clamp(2.4rem, 6vw, 4rem);
            line-height: 0.96;
            letter-spacing: -0.03em;
        }
        .eyebrow {
            display: inline-block;
            margin-bottom: 12px;
            padding: 6px 12px;
            border: 2px solid var(--ink);
            background: var(--paper);
            font-size: 0.74rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }
        .muted { color: var(--muted); }
        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 18px;
            margin-bottom: 22px;
            flex-wrap: wrap;
        }
        .filters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .filter-btn {
            border: 2px solid var(--ink);
            background: transparent;
            color: var(--ink);
            padding: 8px 14px;
            font-weight: 700;
            cursor: pointer;
        }
        .filter-btn.is-active {
            background: var(--ink);
            color: var(--paper);
        }
        .counter {
            padding: 6px 10px;
            border: 2px solid var(--line);
            font-size: 0.88rem;
            font-weight: 700;
            background: var(--paper);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }
        .card {
            background: var(--paper);
            border: 2px solid var(--ink);
            overflow: hidden;
            transition: transform 0.18s ease;
        }
        .card:hover { transform: translateY(-3px); }
        .card img {
            width: 100%;
            aspect-ratio: 4 / 3;
            object-fit: cover;
            border-bottom: 2px solid var(--ink);
        }
        .card-body {
            padding: 16px 16px 18px;
        }
        .badge {
            display: inline-block;
            margin-bottom: 10px;
            font-size: 0.76rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
        }
        .card h3 {
            margin: 0;
            font-size: 1.42rem;
            line-height: 1.1;
        }
        .card.hidden { display: none; }
        .modal {
            position: fixed;
            inset: 0;
            display: none;
            place-items: center;
            background: rgba(27, 38, 35, 0.66);
            z-index: 50;
        }
        .modal.is-open { display: grid; }
        .modal-box {
            width: min(800px, calc(100% - 32px));
            background: var(--paper);
            border: 2px solid var(--ink);
            overflow: hidden;
        }
        .modal-box img {
            width: 100%;
            max-height: 70vh;
            object-fit: cover;
        }
        .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 16px 18px;
            border-top: 2px solid var(--ink);
        }
        .modal-title { font-size: 1.1rem; font-weight: 800; }
        .close {
            border: 2px solid var(--ink);
            background: transparent;
            width: 38px;
            height: 38px;
            font-size: 1.4rem;
            cursor: pointer;
        }
        @media (max-width: 760px) {
            .bar { min-height: 64px; flex-wrap: wrap; padding: 10px 0; }
            nav { width: 100%; justify-content: center; }
            .grid { grid-template-columns: 1fr 1fr; }
            .hero { display: block; }
        }
        @media (max-width: 520px) {
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <header>
        <div class="wrap bar">
            <a class="brand" href="/academia" aria-label="Voltar para a home">
                <span class="brand-mark" aria-hidden="true"><i></i><i></i><i></i><i></i></span>
                Ferro&amp;Giz
            </a>
            <nav aria-label="Menu principal">
                <a href="/academia">Academia</a>
                <a class="active" href="/fotos">Galeria</a>
                <a href="/sobre">Sobre</a>
                <a class="nav-btn" href="/login">Entrar</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="wrap">
            <div class="hero">
                <div>
                    <span class="eyebrow">Ferro &amp; Giz</span>
                    <h1>Ambiente que motiva o treino.</h1>
                </div>
                <p class="muted" style="max-width: 44ch; margin: 0;">Veja como o espaço funciona na prática: força, cardio, mobilidade, recuperação e rotina que respeita o seu ritmo.</p>
            </div>

            <div class="toolbar">
                <div class="filters" aria-label="Filtros da galeria">
                    <button class="filter-btn is-active" type="button" data-filter="all" aria-pressed="true">Todos</button>
                    <button class="filter-btn" type="button" data-filter="forca" aria-pressed="false">Força</button>
                    <button class="filter-btn" type="button" data-filter="cardio" aria-pressed="false">Cardio</button>
                    <button class="filter-btn" type="button" data-filter="bem-estar" aria-pressed="false">Bem-estar</button>
                </div>
                <span class="counter" data-counter>0 itens</span>
            </div>

            <div class="grid" data-gallery></div>
        </div>
    </main>

    <div class="modal" data-modal aria-hidden="true">
        <div class="modal-box">
            <img data-modal-image src="" alt="Imagem ampliada">
            <div class="modal-header">
                <span class="modal-title" data-modal-title>Ferro &amp; Giz</span>
                <button class="close" type="button" data-close-modal aria-label="Fechar">×</button>
            </div>
        </div>
    </div>

    <script>
        const gallery = document.querySelector('[data-gallery]');
        const modal = document.querySelector('[data-modal]');
        const modalImage = document.querySelector('[data-modal-image]');
        const modalTitle = document.querySelector('[data-modal-title]');
        const counter = document.querySelector('[data-counter]');
        const filters = document.querySelectorAll('.filter-btn');

        const defaultCards = [
            { title: 'Área de força', category: 'forca', image: 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=1200&q=80' },
            { title: 'Cardio em movimento', category: 'cardio', image: 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=1200&q=80' },
            { title: 'Yin e alongamento', category: 'bem-estar', image: 'https://images.unsplash.com/photo-1518611012118-696072aa579a?auto=format&fit=crop&w=1200&q=80' },
            { title: 'Rack e anilhas', category: 'forca', image: 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=1200&q=80' },
            { title: 'Treino em circuito', category: 'cardio', image: 'https://images.unsplash.com/photo-1599058917212-d750089bc07e?auto=format&fit=crop&w=1200&q=80' },
            { title: 'Recuperação e mobilidade', category: 'bem-estar', image: 'https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?auto=format&fit=crop&w=1200&q=80' }
        ];

        function fallbackCards() {
            try {
                const saved = JSON.parse(localStorage.getItem('fg_gallery_extra') || '[]');
                return [...saved, ...defaultCards];
            } catch (error) {
                return [...defaultCards];
            }
        }

        const categories = {
            forca: 'Força',
            cardio: 'Cardio',
            'bem-estar': 'Bem-estar'
        };

        function renderCards(filter = 'all') {
            const cards = fallbackCards();
            let visible = cards.filter((card) => filter === 'all' || card.category === filter);

            gallery.innerHTML = visible.map((card) => `
                <article class="card" data-category="${card.category}">
                    <img src="${card.image}" alt="${card.title}" loading="lazy">
                    <div class="card-body">
                        <span class="badge">${categories[card.category] || 'Academia'}</span>
                        <h3>${card.title}</h3>
                    </div>
                </article>
            `).join('');

            document.querySelectorAll('.card').forEach((card) => {
                card.addEventListener('click', () => {
                    const image = card.querySelector('img').src;
                    const title = card.querySelector('h3').textContent;
                    modalImage.src = image;
                    modalTitle.textContent = title;
                    modal.classList.add('is-open');
                    modal.setAttribute('aria-hidden', 'false');
                });
            });

            counter.textContent = `${visible.length} ${visible.length === 1 ? 'item' : 'itens'}`;
        }

        filters.forEach((button) => {
            button.addEventListener('click', () => {
                const selected = button.dataset.filter;
                filters.forEach((item) => {
                    const active = item === button;
                    item.classList.toggle('is-active', active);
                    item.setAttribute('aria-pressed', String(active));
                });
                renderCards(selected);
            });
        });

        document.querySelector('[data-close-modal]').addEventListener('click', () => {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
        });

        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.remove('is-open');
                modal.setAttribute('aria-hidden', 'true');
            }
        });

        renderCards();
    </script>
</body>
</html>
