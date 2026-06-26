/* ============================================
   AUDE VTC — JS vanilla
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  /* --- Header scroll --- */
  const header = document.getElementById('header');
  const topbar = document.getElementById('topbar');

  const onScroll = () => {
    const topbarH = topbar ? topbar.offsetHeight : 0;
    const scrollY = window.scrollY;

    if (scrollY > topbarH) {
      header.classList.add('scrolled');
      header.style.top = '0';
    } else {
      header.classList.remove('scrolled');
      header.style.top = topbarH + 'px';
    }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* --- Menu mobile --- */
  const burger  = document.querySelector('.burger');
  const overlay = document.querySelector('.nav-overlay');
  const closeBtn = document.querySelector('.nav-overlay-close');

  const openMenu  = () => { overlay?.classList.add('open'); document.body.style.overflow = 'hidden'; };
  const closeMenu = () => { overlay?.classList.remove('open'); document.body.style.overflow = ''; };

  burger?.addEventListener('click', openMenu);
  closeBtn?.addEventListener('click', closeMenu);
  overlay?.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));

  document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });

  /* --- Reveal au scroll --- */
  const reveals = document.querySelectorAll('.reveal');

  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    reveals.forEach(el => io.observe(el));
  } else {
    reveals.forEach(el => el.classList.add('visible'));
  }

  /* --- Active nav link --- */
  const currentPath = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-menu a, .nav-overlay a').forEach(a => {
    if (a.getAttribute('href') === currentPath) a.classList.add('active');
  });

  /* --- Formulaire réservation index → redirige vers contact.php --- */
  const formResa = document.getElementById('form-reservation');
  formResa?.addEventListener('submit', e => {
    e.preventDefault();
    const data = Object.fromEntries(new FormData(formResa));
    // Construire les query params pour pré-remplir le formulaire contact
    const params = new URLSearchParams({
      depart:    data.depart    || '',
      arrivee:   data.arrivee   || '',
      date:      data.date      || '',
      heure:     data.heure     || '',
      nom:       data.nom       || '',
      telephone: data.telephone || '',
      email:     data.email     || '',
      message:   data.message   || '',
    });
    if (data.allerretour) params.set('allerretour', '1');
    window.location.href = '/contact.php?' + params.toString();
  });

  /* --- Carrousel avis (swipe mobile) --- */
  const slider = document.querySelector('.avis-slider');
  if (slider && window.innerWidth <= 768) {
    let startX = 0;
    slider.addEventListener('touchstart', e => startX = e.touches[0].clientX, { passive: true });
    slider.addEventListener('touchend', e => {
      const diff = startX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 50) {
        slider.scrollBy({ left: diff > 0 ? 320 : -320, behavior: 'smooth' });
      }
    }, { passive: true });
  }


  /* --- Lazy loading images background --- */
  const lazyBgs = document.querySelectorAll('[data-bg]');
  if (lazyBgs.length && 'IntersectionObserver' in window) {
    const bgIO = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.backgroundImage = `url(${entry.target.dataset.bg})`;
          bgIO.unobserve(entry.target);
        }
      });
    }, { rootMargin: '200px' });
    lazyBgs.forEach(el => bgIO.observe(el));
  }

  /* --- Optimisation INP : defer non-critical interactions --- */
  if ('scheduler' in window && 'postTask' in window.scheduler) {
    window.scheduler.postTask(() => {
      document.querySelectorAll('.card-hover').forEach(card => {
        card.addEventListener('mouseenter', () => card.classList.add('hovered'), { passive: true });
        card.addEventListener('mouseleave', () => card.classList.remove('hovered'), { passive: true });
      });
    }, { priority: 'background' });
  }

});
