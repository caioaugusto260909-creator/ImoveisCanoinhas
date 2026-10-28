document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const themeToggle = document.querySelector('[data-theme-toggle]');
    const savedTheme = localStorage.getItem('site-theme');

    if (savedTheme === 'dark') {
        body.classList.add('dark-theme');
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-theme');
            localStorage.setItem(
                'site-theme',
                body.classList.contains('dark-theme') ? 'dark' : 'light'
            );
        });
    }

    const scrollButtons = document.querySelectorAll('[data-scroll-target]');
    scrollButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const targetId = button.dataset.scrollTarget;
            const target = document.getElementById(targetId);

            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    const gallery = document.querySelector('[data-gallery]');
    const modal = document.querySelector('[data-modal]');
    const modalTitle = document.querySelector('[data-modal-title]');
    const modalImage = document.querySelector('[data-modal-image]');

    const updateGallery = () => {
        if (!gallery) {
            return;
        }

        const filterButtons = document.querySelectorAll('[data-filter]');
        const activeFilter = document.querySelector('[data-filter].active')?.dataset.filter ?? 'all';
        const cards = [...gallery.querySelectorAll('.gallery-card')];
        let visible = 0;

        cards.forEach((card) => {
            const shouldShow = activeFilter === 'all' || card.dataset.category === activeFilter;
            card.classList.toggle('is-hidden', !shouldShow);

            if (shouldShow) {
                visible += 1;
            }
        });

        const counter = document.querySelector('[data-counter]');
        if (counter) {
            counter.textContent = `${visible} itens`; 
        }

        filterButtons.forEach((button) => {
            const isActive = button.dataset.filter === activeFilter;
            button.classList.toggle('active', isActive);
            button.setAttribute('aria-pressed', String(isActive));
        });
    };

    if (gallery) {
        const filterButtons = document.querySelectorAll('[data-filter]');
        filterButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                document.querySelectorAll('[data-filter]').forEach((item) => {
                    item.classList.toggle('active', item === button);
                    item.setAttribute('aria-pressed', String(item === button));
                });

                const cards = [...gallery.querySelectorAll('.gallery-card')];
                let visible = 0;

                cards.forEach((card) => {
                    const shouldShow = filter === 'all' || card.dataset.category === filter;
                    card.classList.toggle('is-hidden', !shouldShow);

                    if (shouldShow) {
                        visible += 1;
                    }
                });

                const counter = document.querySelector('[data-counter]');
                if (counter) {
                    counter.textContent = `${visible} itens`;
                }
            });
        });

        gallery.addEventListener('click', (event) => {
            const card = event.target.closest('[data-open-modal]');

            if (!card || !modal || !modalTitle || !modalImage) {
                return;
            }

            modalTitle.textContent = card.dataset.title || 'Imagem';
            modalImage.src = card.dataset.image;
            modal.classList.remove('hidden');
        });
    }

    const closeModalButton = document.querySelector('[data-close-modal]');
    if (closeModalButton && modal) {
        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    }

    if (modal) {
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                modal.classList.add('hidden');
            }
        });
    }

    const photoForm = document.querySelector('[data-photo-form]');
    if (photoForm) {
        const titleInput = photoForm.querySelector('[data-photo-title]');
        const imageInput = photoForm.querySelector('[data-photo-image]');
        const categoryInput = photoForm.querySelector('[data-photo-category]');
        const message = document.querySelector('[data-form-message]');

        photoForm.addEventListener('submit', (event) => {
            event.preventDefault();

            const title = titleInput?.value.trim();
            const image = imageInput?.value.trim();
            const category = categoryInput?.value ?? 'natureza';

            if (!title || !image) {
                if (message) {
                    message.textContent = 'Preencha título e URL para adicionar a foto.';
                    message.classList.add('error');
                }
                return;
            }

            const newCard = document.createElement('article');
            newCard.className = 'gallery-card';
            newCard.dataset.category = category;
            newCard.dataset.openModal = 'true';
            newCard.dataset.title = title;
            newCard.dataset.image = image;
            newCard.innerHTML = `
                <img src="${image}" alt="${title}" loading="lazy">
                <div class="card-body">
                    <span class="card-meta">${category}</span>
                    <h3>${title}</h3>
                </div>
            `;

            if (gallery) {
                gallery.prepend(newCard);
                const filter = document.querySelector('[data-filter].active')?.dataset.filter ?? 'all';
                const visibleCards = [...gallery.querySelectorAll('.gallery-card')];
                let visible = 0;

                visibleCards.forEach((card) => {
                    const shouldShow = filter === 'all' || card.dataset.category === filter;
                    card.classList.toggle('is-hidden', !shouldShow);

                    if (shouldShow) {
                        visible += 1;
                    }
                });

                if (document.querySelector('[data-counter]')) {
                    document.querySelector('[data-counter]').textContent = `${visible} itens`;
                }
            }

            photoForm.reset();

            if (message) {
                message.textContent = 'Nova foto adicionada com sucesso!';
                message.classList.remove('error');
            }
        });
    }

    updateGallery();
});
