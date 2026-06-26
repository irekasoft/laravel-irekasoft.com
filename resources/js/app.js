document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('mobile-menu-button');
    const closeButton = document.getElementById('mobile-menu-close');
    const menu = document.getElementById('mobile-menu');

    if (!button || !menu) {
        return;
    }

    const isOpen = () => menu.dataset.open === 'true';

    const setOpen = (open) => {
        button.setAttribute('aria-expanded', open ? 'true' : 'false');
        button.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        menu.dataset.open = open ? 'true' : 'false';
        menu.classList.toggle('is-open', open);

        if (open) {
            menu.removeAttribute('aria-hidden');
            document.body.classList.add('overflow-hidden', 'mobile-menu-open');
            button.classList.add('is-open');
        } else {
            menu.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('overflow-hidden', 'mobile-menu-open');
            button.classList.remove('is-open');
        }
    };

    button.addEventListener('click', () => {
        setOpen(!isOpen());
    });

    closeButton?.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();
        setOpen(false);
    });

    menu.querySelector('[data-mobile-menu-backdrop]')?.addEventListener('click', () => {
        setOpen(false);
    });

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && isOpen()) {
            setOpen(false);
        }
    });
});
