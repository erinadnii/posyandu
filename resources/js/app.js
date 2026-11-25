import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    initMobileSidebar();
    initDismissibleAlerts();
});

/**
 * Mengatur buka-tutup menu samping (sidebar) pada layar HP/tablet.
 */
function initMobileSidebar() {
    const drawer = document.querySelector('[data-sidebar-drawer]');
    const backdrop = document.querySelector('[data-sidebar-backdrop]');
    const openButtons = document.querySelectorAll('[data-sidebar-open]');
    const closeButtons = document.querySelectorAll('[data-sidebar-close]');

    if (!drawer || !backdrop) {
        return;
    }

    const openSidebar = () => {
        drawer.classList.remove('-translate-x-full');
        drawer.classList.add('translate-x-0');
        backdrop.classList.remove('hidden');
        document.body.classList.add('overflow-hidden', 'lg:overflow-auto');
        openButtons.forEach((btn) => btn.setAttribute('aria-expanded', 'true'));
    };

    const closeSidebar = () => {
        drawer.classList.add('-translate-x-full');
        drawer.classList.remove('translate-x-0');
        backdrop.classList.add('hidden');
        document.body.classList.remove('overflow-hidden', 'lg:overflow-auto');
        openButtons.forEach((btn) => btn.setAttribute('aria-expanded', 'false'));
    };

    openButtons.forEach((btn) => btn.addEventListener('click', openSidebar));
    closeButtons.forEach((btn) => btn.addEventListener('click', closeSidebar));
    backdrop.addEventListener('click', closeSidebar);

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !backdrop.classList.contains('hidden')) {
            closeSidebar();
        }
    });
}

/**
 * Mengatur tombol "Tutup" pada komponen kotak notifikasi.
 */
function initDismissibleAlerts() {
    document.addEventListener('click', (event) => {
        const closeButton = event.target.closest('[data-alert-close]');
        if (!closeButton) {
            return;
        }

        const alertBox = closeButton.closest('[data-alert-box]');
        if (alertBox) {
            alertBox.classList.add('hidden');
        }
    });
}
