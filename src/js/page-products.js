const dialog = document.querySelector('.js-products-dialog');

if (dialog) {
  const triggers = [...document.querySelectorAll('.js-products-trigger')];
  const panels = [...dialog.querySelectorAll('.js-products-panel')];
  const scrollArea = dialog.querySelector('.js-products-scroll');
  let currentIndex = 0;

  const showProduct = (index) => {
    currentIndex = (index + panels.length) % panels.length;
    panels.forEach((panel, panelIndex) => {
      panel.hidden = panelIndex !== currentIndex;
    });
    dialog.setAttribute('aria-labelledby', `products-panel-title-${currentIndex}`);
    if (scrollArea) scrollArea.scrollTop = 0;
  };

  triggers.forEach((trigger) => {
    trigger.addEventListener('click', () => {
      showProduct(Number(trigger.dataset.productIndex));
    }, { capture: true });
  });

  dialog.querySelector('.js-products-prev')?.addEventListener('click', () => showProduct(currentIndex - 1));
  dialog.querySelector('.js-products-next')?.addEventListener('click', () => showProduct(currentIndex + 1));
}

const cards = [...document.querySelectorAll('[data-products-reveal]')];
if (cards.length && 'IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  cards.forEach((card) => card.classList.add('opacity-0', 'translate-y-12'));
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      const rowTop = entry.target.offsetTop;
      cards.filter((card) => card.offsetTop === rowTop).forEach((card) => {
        card.classList.remove('opacity-0', 'translate-y-12');
        observer.unobserve(card);
      });
    });
  }, { threshold: 0.15 });
  cards.forEach((card) => observer.observe(card));
}
