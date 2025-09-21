   
   
const setting_toggle = document.getElementById('setting_toggle');

setting_toggle.addEventListener('click', function () {
    
    const icon = document.getElementById('settIcon');
    const menu = document.getElementById('dropdownMenu');

    icon.classList.toggle('rotate');
    menu.classList.toggle('show');
});
