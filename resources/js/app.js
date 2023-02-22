import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.data("navigation", navigation);
Alpine.start();

function navigation() {
    return {
        navigations: [
            { name: "Home", link: "#home" },
            { name: "About", link: "#about" },
            { name: "Skills", link: "#skills" },
            { name: "Portfolio", link: "#portfolio" },
            { name: "Services", link: "#services" },
            { name: "Contact", link: "#contact" },
        ],
        scrollBg: false,
        setScrollBg: function (value) {
            this.scrollBg = value;
        },
        changeNavBg: function () {
            window.addEventListener("scroll", () => {
                return window.scrollY > 50
                    ? this.setScrollBg(true)
                    : this.setScrollBg(false);
            });
        },
    };
}
