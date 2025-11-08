const hamburger = document.querySelector(".wrapper-hamburger");
const nav = document.querySelector("nav");
let state = false;

hamburger.addEventListener("click", () => {
    if (state == true) {
        hamburger.classList.remove("is-active");
        nav.classList.remove("is-open");
        state = false;
    } else {
        hamburger.classList.add("is-active");
        nav.classList.add("is-open");
        state = true;
    }
});

function ControlWidth() {
    const sirka = window.innerWidth;
    if (sirka > 768) {
        hamburger.classList.remove("is-active");
        nav.classList.remove("is-open");
        state = false;
    }
}
window.addEventListener('resize', ControlWidth);

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// --- SIDE NAVIGATION ACTIVE STATE ---
const sections = document.querySelectorAll("section");
const navDots = document.querySelectorAll(".side-nav .dot");

window.addEventListener("scroll", () => {
  let current = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop - 300; // offset kvůli výšce viewportu
    const sectionHeight = section.clientHeight;

    if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight - 150) {
      current = section.getAttribute("id");
    }
  });

  // Pokud jsi úplně nahoře, nastav active na Home
  if (window.scrollY < 100) {
    current = "Home";
  }

  navDots.forEach((dot) => {
    dot.classList.remove("active");
    if (dot.getAttribute("data-section") === current) {
      dot.classList.add("active");
    }
  });
});

// --- Smooth scroll při kliknutí na tečky ---
document.querySelectorAll(".side-nav a").forEach(anchor => {
  anchor.addEventListener("click", function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({ behavior: "smooth" });
    }
  });
});

