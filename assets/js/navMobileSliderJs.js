const menu = document.getElementById('mobile-nav');
const toggle = document.getElementById('menu-toggle');
const closeBtn = document.getElementById('menu-close');
const overlay = document.getElementById('menu-overlay');
const wrapper = document.getElementById('site-wrapper');

function openMenu() {
  menu.classList.add('open');
  overlay.classList.add('visible');
  wrapper.classList.add('shifted');
}

function closeMenu() {
  menu.classList.remove('open');
  overlay.classList.remove('visible');
  wrapper.classList.remove('shifted');
}

toggle.addEventListener('click', openMenu);
closeBtn.addEventListener('click', closeMenu);
overlay.addEventListener('click', closeMenu);

document.addEventListener('keydown', e => {
  if (e.key === 'Escape') closeMenu();
});


