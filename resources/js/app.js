import Prism from 'prismjs';
import 'prismjs/components/prism-clike';
import 'prismjs/components/prism-javascript';
import 'prismjs/components/prism-markup';
import 'prismjs/components/prism-markup-templating';
import 'prismjs/components/prism-jsx';
import 'prismjs/components/prism-bash';

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initDocsSidebar();
    initDocsScrollSpy();
    initSectionDotGrid();
    initOceanCursor();
    initCodeBlocks();
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

function initDocsSidebar() {
    const button = document.getElementById('docs-sidebar-button');
    const closeButton = document.getElementById('docs-sidebar-close');
    const drawer = document.getElementById('docs-sidebar-drawer');
    const panel = drawer?.querySelector('[data-docs-sidebar-panel]');

    if (!button || !drawer || !panel) {
        return;
    }

    const isOpen = () => drawer.dataset.open === 'true';

    const setOpen = (open) => {
        button.setAttribute('aria-expanded', open ? 'true' : 'false');
        button.setAttribute('aria-label', open ? 'Close documentation menu' : 'Open documentation menu');
        drawer.dataset.open = open ? 'true' : 'false';
        drawer.classList.toggle('is-open', open);
        panel.classList.toggle('-translate-x-full', !open);
        panel.classList.toggle('translate-x-0', open);

        if (open) {
            drawer.removeAttribute('aria-hidden');
            document.body.classList.add('overflow-hidden', 'docs-sidebar-open');
            button.classList.add('is-open');
        } else {
            drawer.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('overflow-hidden', 'docs-sidebar-open');
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

    drawer.querySelector('[data-docs-sidebar-backdrop]')?.addEventListener('click', () => {
        setOpen(false);
    });

    drawer.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && isOpen()) {
            setOpen(false);
        }
    });
}

function initDocsScrollSpy() {
    const links = Array.from(document.querySelectorAll('[data-component-link]'));

    if (links.length === 0) {
        return;
    }

    const byId = Object.fromEntries(
        links.map((link) => [link.getAttribute('data-component-link'), link]),
    );

    const setActive = (id) => {
        links.forEach((link) => {
            link.classList.remove('bg-charcoal/5', 'text-ink', 'font-medium');
        });

        const activeLink = byId[id];

        if (activeLink) {
            activeLink.classList.add('bg-charcoal/5', 'text-ink', 'font-medium');
        }
    };

    const observer = new IntersectionObserver((entries) => {
        const visible = entries
            .filter((entry) => entry.isIntersecting)
            .sort((a, b) => a.boundingClientRect.top - b.boundingClientRect.top);

        if (visible[0]) {
            setActive(visible[0].target.id);
        }
    }, { rootMargin: '-20% 0px -70% 0px', threshold: 0 });

    document.querySelectorAll('section[id]').forEach((section) => {
        observer.observe(section);
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

function initCodeBlocks() {
    document.querySelectorAll('[data-code-block] code[class*="language-"]').forEach((el) => {
        Prism.highlightElement(el);
    });

    document.querySelectorAll('[data-code-block]').forEach((block) => {
        const btn = block.querySelector('[data-copy]');
        const code = block.querySelector('code');

        if (!btn || !code) {
            return;
        }

        btn.addEventListener('click', () => {
            navigator.clipboard.writeText(code.textContent ?? '').then(() => {
                const label = btn.querySelector('[data-copy-label]');
                const icon = btn.querySelector('i');

                if (label) {
                    label.textContent = 'Copied';
                }

                if (icon) {
                    icon.className = 'bi bi-check2';
                }

                setTimeout(() => {
                    if (label) {
                        label.textContent = 'Copy';
                    }

                    if (icon) {
                        icon.className = 'bi bi-clipboard';
                    }
                }, 1500);
            });
        });
    });
}
