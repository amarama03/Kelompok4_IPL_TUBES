// Toggle class Active agar icon humburger bisa diklik
const navbarNav = document.querySelector(".navbar .navbar-nav");
// ketika humbuger di klik
document.querySelector("#humburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Toggle class Active untuk search form bisa di klik
const searchForm = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");

document.querySelector("#search-button").onclick = (e) => {
  searchForm.classList.toggle("active");
  searchBox.focus();
  e.preventDefault();
};

// klik diluar elemen
const hm = document.querySelector("#humburger-menu");
const sb = document.querySelector("#search-button");

document.addEventListener("click", function (e) {
  if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }

  if (!sb.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove("active");
  }
});
