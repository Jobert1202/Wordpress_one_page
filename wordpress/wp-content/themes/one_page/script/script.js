document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.getElementById("hamburger");
    const nav = document.getElementById("main-nav");

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("is-active");
        nav.classList.toggle("is-open");
    });

    window.addEventListener("resize", () => {
        if(window.innerWidth >= 768){
            hamburger.classList.remove("is-active");
            nav.classList.remove("is-open");
        }
    });

    // Smooth scroll + zavření menu
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e){
            e.preventDefault();
            document.querySelector(this.getAttribute("href")).scrollIntoView({ behavior: "smooth" });
            hamburger.classList.remove("is-active");
            nav.classList.remove("is-open");
        });
    });
});
