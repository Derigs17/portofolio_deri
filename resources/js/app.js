import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const html = document.documentElement;
    const toggle = document.getElementById("themeToggle");
    const icon = document.getElementById("themeIcon");

    function applyTheme(theme) {
        html.setAttribute("data-bs-theme", theme);
        if (icon) {
            icon.src = theme === "dark"
                ? "/images/icon-sun.svg"
                : "/images/icon-moon.svg";
            icon.alt = theme === "dark" ? "Switch to Light" : "Switch to Dark";
        }
    }

    const savedTheme = localStorage.getItem("theme") || "light";
    applyTheme(savedTheme);

    toggle?.addEventListener("click", () => {
        const current = html.getAttribute("data-bs-theme");
        const next = current === "dark" ? "light" : "dark";
        localStorage.setItem("theme", next);
        applyTheme(next);
    });
}); 
 