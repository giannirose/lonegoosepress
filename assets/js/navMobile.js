document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("menu-toggle");
  const closeButton = document.getElementById("menu-close");
  const navMenu = document.getElementById("mobile-nav");

  toggleButton.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });

    closeButton.addEventListener("click", () => {
    navMenu.classList.remove("active");
  });

  // Accordion submenu toggle
  const links = document.querySelectorAll(".accordion .link");
  links.forEach(link => {
    link.addEventListener("click", () => {
      const submenu = link.nextElementSibling;
      if (submenu && submenu.classList.contains("submenu")) {
        submenu.classList.toggle("open");
      }
    });
  });
});















