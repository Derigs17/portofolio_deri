import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const html = document.documentElement;
    const navbar = document.getElementById("navbar");
    const toggle = document.getElementById("themeToggle");
    const icon = document.getElementById("themeIcon");
    const brand = document.getElementById("brandName");

    function updateThemeUI() {
        const isDark = html.getAttribute("data-bs-theme") === "dark";

        // Navbar mode
        navbar.classList.remove("navbar-light", "navbar-dark");
        navbar.classList.add(isDark ? "navbar-dark" : "navbar-light");

        // Ganti icon src sesuai tema
        if (icon) {
            icon.src = isDark
                ? "/images/icon-sun.svg"
                : "/images/icon-moon.svg";
        }

        // Ganti warna brand
        brand.classList.remove("text-white", "text-dark");
        brand.classList.add(isDark ? "text-white" : "text-dark");
    }

    // Inisialisasi UI saat pertama load
    updateThemeUI();

    // Scroll behavior
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });

    // Theme switcher click
    toggle?.addEventListener("click", () => {
        const current = html.getAttribute("data-bs-theme");
        const next = current === "dark" ? "light" : "dark";
        html.setAttribute("data-bs-theme", next);
        updateThemeUI();
    });
});
