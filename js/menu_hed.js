// alert("ehyeheyehy")
function uncheckOnMinWidth() {
    const checkbox = document.getElementById('input_menu');
    const mediaQuery = window.matchMedia("(max-width: 768px)");

    if (mediaQuery.matches) {
        checkbox.checked = false;
    }
}

// Run on page load
uncheckOnMinWidth();

// Also listen for screen resize
window.addEventListener('resize', uncheckOnMinWidth);





