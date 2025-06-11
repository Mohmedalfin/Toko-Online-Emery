
// --------- Keranjang ---------- //
document.addEventListener("DOMContentLoaded", () => {
  const cartButton = document.getElementById("cart-button");
  const cartContainer = document.getElementById("cart-slide-over-container");
  let isLoaded = false;

  cartButton.addEventListener("click", async () => {
    if (!isLoaded) {
      const response = await fetch("/public/komponen/keranjang.php");
      const html = await response.text();
      cartContainer.innerHTML = html;
      isLoaded = true;
    }

    const cartPanel = cartContainer.querySelector("#cart-panel");
    const closeBtn = cartContainer.querySelector("button");

    if (!cartPanel) return;
    cartContainer.classList.remove("hidden");

    requestAnimationFrame(() => {
      void cartPanel.offsetWidth;
      cartPanel.classList.remove("translate-x-full");
      cartPanel.classList.add("translate-x-0");
    });

    if (closeBtn && !closeBtn.dataset.bound) {
      closeBtn.dataset.bound = "true"; 
      closeBtn.addEventListener("click", () => {
        cartPanel.classList.remove("translate-x-0");
        cartPanel.classList.add("translate-x-full");
        setTimeout(() => {
          cartContainer.classList.add("hidden");
        }, 500);
      });
    }
  });
});