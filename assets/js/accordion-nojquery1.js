document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".accordion .link");

  links.forEach(link => {
    link.addEventListener("click", function () {
      const parentLi = this.parentElement;
      const isActive = parentLi.classList.contains("active");

      // Close all open dropdowns
      document.querySelectorAll(".accordion li").forEach(li => li.classList.remove("active"));

      // Toggle current dropdown
      if (!isActive) {
        parentLi.classList.add("active");
      }
    });
  });
});
