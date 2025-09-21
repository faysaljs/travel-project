function scroll_icon() {
    window.addEventListener("scroll", function () {
        const scrollBtn = document.querySelector(".scroll-to-top");
        if (window.scrollY > 200) {
            scrollBtn.style.display = "block";
        } else {
            scrollBtn.style.display = "none";
        }
    })
};

scroll_icon()

// loading 
window.addEventListener('load', function () {
    // Optional delay (e.g., 1500ms = 1.5 seconds)
    setTimeout(function () {
        document.getElementById('preloader').style.display = 'none';
        document.body.classList.remove('loading');
    }, 600);
});



//   lang 
// function changeLanguage() {
//     const lang = document.getElementById("language-select").value;
//     // Redirect to a page or change language settings
//     window.location.href = `?lang=${lang}`;
// }


// document.getElementById("language-select").addEventListener("change", function () {
//     const lang = this.value;
//     localStorage.setItem("selectedLang", lang);
//     translatePage(lang);
//   });

//   window.addEventListener("DOMContentLoaded", () => {
//     const lang = localStorage.getItem("selectedLang") || "en";
//     document.getElementById("language-select").value = lang;
//     translatePage(lang);
//   });




// dark or light mode 
const toggle = document.getElementById('mode-toggle');
toggle.addEventListener('change', function () {
    document.body.classList.toggle('dark');
    // Save mode to local storage
    localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
});

// Load saved theme on page load
window.addEventListener('load', () => {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        document.body.classList.add('dark');
        toggle.checked = true;
    }
});






