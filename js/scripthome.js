// Toggle class Active agar icon humburger bisa diklik
const navbarNav = document.querySelector(".navbar-nav");
// ketika humbuger di klik
document.querySelector("#humburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};
