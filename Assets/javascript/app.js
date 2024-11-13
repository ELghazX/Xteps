const toggleButton = document.getElementById('toggle-btn');
const sidebar = document.getElementById('sidebar');

function toggleSidebar() {
    sidebar.classList.toggle('close');
    closeAllSubMenus(); // Close all submenus when toggling the sidebar
}

function toggleSubMenu(button) {
    const subMenu = button.nextElementSibling;

    // Close other open submenus if the current submenu is not shown
    if (!subMenu.classList.contains('show')) {
        closeAllSubMenus();
    }

    // Toggle current submenu
    subMenu.classList.toggle('show');
    button.classList.toggle('rotate');
}

function closeAllSubMenus() {
    sidebar.querySelectorAll('.show').forEach(subMenu => {
        subMenu.classList.remove('show');
    });
}
