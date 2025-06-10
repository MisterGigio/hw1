document.addEventListener("DOMContentLoaded", function () {
  function onSeeMoreClick() {
    const section = document.querySelector("#container-more-reviews");
    const button = document.querySelector(".btn");

    section.classList.toggle("visible");

    const isVisible = section.classList.contains("visible");
    button.textContent = isVisible ? "SEE LESS" : "SEE MORE";
  }

  // -------------------- MENU OVERLAY --------------------

  const menuToggleBtn = document.querySelector(".menu-toggle-btn");
  const menuOverlay = document.getElementById("menuOverlay");

  menuToggleBtn.addEventListener("click", function () {
    menuOverlay.classList.toggle("active");
  });

  let lastScrollTop = 0;

  window.addEventListener("scroll", function () {
    const currentScroll =
      window.pageYOffset || document.documentElement.scrollTop;
    const nav = document.querySelector(".nav-bar");
    const line = document.querySelector(".menu-separator");

    if (currentScroll > lastScrollTop) {
      nav.classList.add("hide-on-scroll");
      line.classList.add("hide-on-scroll");
    } else {
      nav.classList.remove("hide-on-scroll");
      line.classList.remove("hide-on-scroll");
    }
  });
});
