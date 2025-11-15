document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.getElementById("nav-icon1");
  const menu = document.querySelector(".mobile-menu");

  toggle.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    toggle.classList.toggle("open");
  });
});
