document.addEventListener('DOMContentLoaded', function () {
    const toggleSubmenu = document.querySelector('.toggle-submenu');
    const submenu = document.querySelector('.submenu');
    const icon = toggleSubmenu.querySelector('i');

    toggleSubmenu.addEventListener('click', function (e) {
      e.preventDefault(); // Prevent default link behavior

      if (submenu.style.display === 'none') {
        submenu.style.display = 'block';
        icon.classList.remove('bi-chevron-right');
        icon.classList.add('bi-chevron-down');
      } else {
        submenu.style.display = 'none';
        icon.classList.remove('bi-chevron-down');
        icon.classList.add('bi-chevron-right');
      }
    });
});