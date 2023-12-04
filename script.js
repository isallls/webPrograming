// Add this JavaScript to your existing script.js file or in a new script file
const menuIcon = document.getElementById('menu-icon');
const menu = document.querySelector('.menu');

menuIcon.addEventListener('click', () => {
  menu.classList.toggle('open'); // Toggle the "open" class on menu
});
