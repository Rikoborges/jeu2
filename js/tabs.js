document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-button");
  const forms = document.querySelectorAll(".form-section");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      tabs.forEach((t) => t.classList.remove("active"));
      forms.forEach((f) => f.style.display = "none");

      tab.classList.add("active");
      const targetId = tab.dataset.tab;
      document.getElementById(targetId).style.display = "block";
    });
  });

  // Ativar a primeira aba automaticamente
  document.querySelector(".tab-button").click();
});
