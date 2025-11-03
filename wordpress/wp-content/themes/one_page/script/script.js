document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.querySelector(".wrapper-hamburger");
  const nav = document.querySelector("nav");

  if (!hamburger || !nav) return;

  let state = false;

  hamburger.addEventListener("click", () => {
    if (state === true) {
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

  // Smooth scroll s korekcí pro fixní header
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const targetSelector = this.getAttribute('href');
      const target = document.querySelector(targetSelector);
      if (!target) return;

      e.preventDefault();

      // zavři mobilní menu pokud otevřeno
      if (state === true) {
        hamburger.classList.remove("is-active");
        nav.classList.remove("is-open");
        state = false;
      }

      // header offset
      const header = document.querySelector('header');
      const headerHeight = header ? header.offsetHeight : 0;

      // cílová pozice v dokumentu (bere v potaz sticky header)
      const targetTop = Math.max(0, target.getBoundingClientRect().top + window.pageYOffset - headerHeight);

      // scroll s fallbackem
      if ('scrollBehavior' in document.documentElement.style) {
        window.scrollTo({ top: targetTop, behavior: 'smooth' });
      } else {
        // fallback pro staré prohlížeče (jednoduchý)
        window.scrollTo(0, targetTop);
      }

      // volitelně uprav hash v URL bez skoku:
      history.replaceState(null, '', targetSelector);
    });
  });
});
