const galleryDialog = document.querySelector('[data-gallery-dialog]');
const galleryGrid = document.querySelector('[data-gallery-grid]');

if (galleryDialog && galleryGrid) {
  const triggers = [...galleryGrid.querySelectorAll('[data-gallery-modal-trigger]')];
  const heading = galleryDialog.querySelector('[data-gallery-modal-heading]');
  const detail = galleryDialog.querySelector('[data-gallery-modal-detail]');
  const previous = galleryDialog.querySelector('[data-gallery-modal-prev]');
  const next = galleryDialog.querySelector('[data-gallery-modal-next]');
  let activeIndex = 0;

  const showGalleryImage = (index) => {
    const trigger = triggers[index];
    const thumbnail = trigger?.querySelector('[data-gallery-modal-image]');
    if (!thumbnail || !detail || !heading) return;

    activeIndex = index;
    heading.textContent = trigger.dataset.galleryModalTitle;
    detail.src = thumbnail.src;
    detail.alt = trigger.dataset.galleryModalAlt;
    detail.width = Number(thumbnail.getAttribute('width')) || thumbnail.naturalWidth;
    detail.height = Number(thumbnail.getAttribute('height')) || thumbnail.naturalHeight;
    previous.disabled = triggers.length < 2;
    next.disabled = triggers.length < 2;
  };

  triggers.forEach((trigger, index) => {
    trigger.addEventListener('click', () => showGalleryImage(index), { capture: true });
  });

  previous.addEventListener('click', () => showGalleryImage((activeIndex - 1 + triggers.length) % triggers.length));
  next.addEventListener('click', () => showGalleryImage((activeIndex + 1) % triggers.length));
}
