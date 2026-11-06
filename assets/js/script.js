// Mobile navigation
const toggle = document.querySelector('.nav-toggle');
const menu = document.getElementById('menu');
if (toggle && menu) {
  toggle.addEventListener('click', () => {
    const open = menu.classList.toggle('open');
    toggle.setAttribute('aria-expanded', open);
  });
  menu.addEventListener('click', e => {
    if (e.target.tagName === 'A') { menu.classList.remove('open'); toggle.setAttribute('aria-expanded', false); }
  });
}

const navLinks = [...document.querySelectorAll('.links a')];
const sectionIds = navLinks
  .map(link => link.getAttribute('href'))
  .filter(Boolean)
  .map(href => href.includes('#') ? href.split('#')[1] : '')
  .filter(Boolean);
const sections = sectionIds
  .map(id => document.getElementById(id))
  .filter(Boolean);

const clearActiveLink = () => {
  navLinks.forEach(link => {
    link.classList.remove('active');
    link.removeAttribute('aria-current');
  });
};

const setActiveLink = (id) => {
  navLinks.forEach(link => {
    const href = link.getAttribute('href') || '';
    const hash = href.includes('#') ? href.split('#')[1] : '';
    const isActive = hash === id;
    link.classList.toggle('active', isActive);
    if (isActive) {
      link.setAttribute('aria-current', 'page');
    } else {
      link.removeAttribute('aria-current');
    }
  });
};

const updateActiveSection = () => {
  if (!sections.length) return;

  const homeSection = document.getElementById('home');
  if (homeSection) {
    const homeRect = homeSection.getBoundingClientRect();
    const heroInView = homeRect.top <= 140 && homeRect.bottom > window.innerHeight * 0.35;
    if (heroInView) {
      clearActiveLink();
      return;
    }
  }

  let activeId = sections[0].id;
  let smallestDistance = Number.POSITIVE_INFINITY;

  sections.forEach(section => {
    const rect = section.getBoundingClientRect();
    const distance = Math.abs(rect.top - 120);

    if (distance < smallestDistance) {
      smallestDistance = distance;
      activeId = section.id;
    }
  });

  setActiveLink(activeId);
};

if (sections.length) {
  updateActiveSection();
  window.addEventListener('scroll', updateActiveSection, { passive: true });
  window.addEventListener('load', updateActiveSection);
}

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(en => { if (en.isIntersecting) { en.target.classList.add('show'); revealObserver.unobserve(en.target); } });
}, { threshold: .15 });
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
