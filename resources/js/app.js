document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initSectionDotGrid();
    initOceanCursor();
});

function initMobileMenu() {
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
}

function initSectionDotGrid() {
    const gridSize = 28;
    const influenceRadius = 130;
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    document.querySelectorAll('[data-dot-cursor]').forEach((section) => {
        const container = section.querySelector('.section-dot-grid__pulses');

        if (!container) {
            return;
        }

        let dots = [];

        const buildDots = () => {
            container.replaceChildren();
            dots = [];

            const { width, height } = section.getBoundingClientRect();
            const cols = Math.ceil(width / gridSize);
            const rows = Math.ceil(height / gridSize);

            for (let row = 0; row < rows; row += 1) {
                for (let col = 0; col < cols; col += 1) {
                    if ((row * 7 + col * 5) % 9 !== 0) {
                        continue;
                    }

                    const dot = document.createElement('span');
                    const x = col * gridSize + gridSize / 2;
                    const y = row * gridSize + gridSize / 2;

                    dot.style.left = `${x}px`;
                    dot.style.top = `${y}px`;
                    dot.dataset.x = String(x);
                    dot.dataset.y = String(y);

                    if ((row + col) % 5 === 0) {
                        dot.classList.add('is-accent');
                    }

                    if (prefersReducedMotion || !canHover) {
                        dot.style.setProperty('--dot-pulse-delay', `${((row + col) % 6) * 0.55}s`);
                        dot.style.setProperty('--dot-pulse-duration', `${3.6 + (row % 4) * 0.4}s`);
                    }

                    container.appendChild(dot);
                    dots.push(dot);
                }
            }
        };

        const resetPulse = () => {
            section.classList.remove('is-cursor-active');

            dots.forEach((dot) => {
                dot.style.setProperty('--pulse', '0');
            });
        };

        const updateCursor = (clientX, clientY) => {
            const rect = section.getBoundingClientRect();
            const x = clientX - rect.left;
            const y = clientY - rect.top;

            section.style.setProperty('--cursor-x', `${x}px`);
            section.style.setProperty('--cursor-y', `${y}px`);
            section.classList.add('is-cursor-active');

            dots.forEach((dot) => {
                const dx = x - Number(dot.dataset.x);
                const dy = y - Number(dot.dataset.y);
                const distance = Math.hypot(dx, dy);
                const intensity = Math.max(0, 1 - distance / influenceRadius);
                const eased = intensity * intensity;

                dot.style.setProperty('--pulse', eased.toFixed(3));
            });
        };

        buildDots();

        if (prefersReducedMotion || !canHover) {
            section.classList.add('is-ambient');
            window.addEventListener('resize', buildDots);
            return;
        }

        section.addEventListener('mousemove', (event) => {
            updateCursor(event.clientX, event.clientY);
        });

        section.addEventListener('mouseleave', resetPulse);

        window.addEventListener('resize', () => {
            buildDots();
            resetPulse();
        });
    });
}

function initOceanCursor() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    if (prefersReducedMotion || !canHover) {
        return;
    }

    document.querySelectorAll('[data-ocean-cursor]').forEach((section) => {
        const resetCursor = () => {
            section.classList.remove('is-cursor-active');
        };

        const updateCursor = (clientX, clientY) => {
            const rect = section.getBoundingClientRect();
            const x = clientX - rect.left;
            const y = clientY - rect.top;

            section.style.setProperty('--cursor-x', `${x}px`);
            section.style.setProperty('--cursor-y', `${y}px`);
            section.classList.add('is-cursor-active');
        };

        section.addEventListener('mousemove', (event) => {
            updateCursor(event.clientX, event.clientY);
        });

        section.addEventListener('mouseleave', resetCursor);
    });
}
