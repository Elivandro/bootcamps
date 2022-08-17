/* Scroll reveal - 
Mostrar o elemento quando der scroll na página */

const scrollReveal = ScrollReveal({
  origin: "top",
  distance: "5px",
  duration: 700,
  reset: true,
});

scrollReveal.reveal(
  `
.cabecalho,
.nav-links, 
.hero-ironMan-section hero-ironMan-bg,
.content-hero,
.icone-iknows,
.sucess-section,
.about-section,
.about-texto,
.cases-section,
.cases-figures,
.contato-section,
.contato-texto,
.contato-form,
.rodape`,
  { interval: 60 }
);

const nav = document.querySelector(".cabecalho .tamanho-minmax-container .nav-menu");

const toggle = document.querySelectorAll(".toggle");

for (element of toggle) {
  element.addEventListener("click", () => {
    nav.classList.toggle("show");
  });
}

const links = document.querySelectorAll(
  ".nav-menu .menu .links, nav .btn-yellow-links, .nav-menu .links li a, .btn-black-links"
);

for (const link of links) {
  link.addEventListener("click", () => {
    nav.classList.remove("show");
  });
}
