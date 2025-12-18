
// Burger mobile
document.addEventListener('DOMContentLoaded', () => {
  const burger = document.getElementById('burger');
  const menu = document.getElementById('menu');
  if (burger && menu) {
    burger.addEventListener('click', () => menu.classList.toggle('is-open'));
  }

  // Lightbox (optionnel) : si une page a une galerie .shot + modal #modal
  const modal = document.getElementById('modal');
  const modalImg = document.getElementById('modalImg');
  const modalClose = document.getElementById('modalClose');

  if (modal && modalImg) {
    document.querySelectorAll('.shot[data-full]').forEach(el => {
      el.addEventListener('click', () => {
        const src = el.getAttribute('data-full');
        modalImg.src = src;
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
      });
    });

    const closeModal = () => {
      modal.classList.remove('is-open');
      modal.setAttribute('aria-hidden', 'true');
      modalImg.src = '';
    };

    if (modalClose) modalClose.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => { if (e.target === modal) closeModal(); });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.classList.contains('is-open')) closeModal();
    });
  }
});
