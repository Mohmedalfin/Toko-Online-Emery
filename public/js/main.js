document.addEventListener("DOMContentLoaded", function () {
  const openBtn = document.getElementById("mobile-menu-open");
  const closeBtn = document.getElementById("mobile-menu-close");
  const menu = document.getElementById("mobile-menu");

  openBtn.addEventListener("click", () => {
    menu.classList.remove("hidden");
  });

  closeBtn.addEventListener("click", () => {
    menu.classList.add("hidden");
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const template = document.getElementById("nav-menu-template");
  const desktop = document.getElementById("desktop-nav");
  const mobile = document.getElementById("mobile-nav");

  if (template && desktop && mobile) {
    const menuItems = template.content.cloneNode(true);
    const menuItemsClone = template.content.cloneNode(true);

    desktop.classList.add("ml-8", "flex", "items-center", "space-x-8");
    mobile.classList.add("flex-col");

    desktop.append(...menuItems.children);
    mobile.append(...menuItemsClone.children);
  }
});

function toggleSearch() {
  const searchBox = document.getElementById("searchInputContainer");
  searchBox.classList.toggle("hidden");
}

// Optional: Close if click outside
document.addEventListener("click", function (e) {
  const button = e.target.closest("button");
  const box = document.getElementById("searchInputContainer");

  if (!box.contains(e.target) && !button) {
    box.classList.add("hidden");
  }
});

function toggleDropdown(dropdownId, iconId) {
  const dropdown = document.getElementById(dropdownId);
  const icon = document.getElementById(iconId);

  if (!dropdown || !icon) return;

  dropdown.classList.toggle("hidden");
  icon.classList.toggle("rotate-180");

  // Tutup dropdown lain (jika kamu ingin satu-satu terbuka saja)
  document.querySelectorAll(".dropdown-open").forEach((el) => {
    if (el.id !== dropdownId) {
      el.classList.add("hidden");
    }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  (function initHeroSlider() {
    const slider = document.getElementById("heroImageSlider");
    if (!slider) return; // jika tidak ditemukan, hentikan

    let current = 0;
    const total = slider.children.length;

    setInterval(() => {
      current = (current + 1) % total;
      slider.style.transform = `translateX(-${current * 100}%)`;
    }, 4000); // 4 detik antar slide
  })();
});

// Filter Produk
function filterCards(category) {
  const cards = document.querySelectorAll("#productGrid > div[data-category]");

  cards.forEach((card) => {
    const cardCategory = card.getAttribute("data-category");

    if (category === "all" || cardCategory === category) {
      card.classList.remove("hidden");
    } else {
      card.classList.add("hidden");
    }
  });
}

// Search Produk
const toggleBtn = document.getElementById("toggleSearchBar");
const closeBtn = document.getElementById("closeSearchBar");
const searchBar = document.getElementById("searchBar");

toggleBtn.addEventListener("click", function (e) {
  e.preventDefault();
  searchBar.classList.remove("hidden");
});

closeBtn.addEventListener("click", function () {
  searchBar.classList.add("hidden");
});

// Register/Login Form Toggle
