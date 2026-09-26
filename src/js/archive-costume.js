const filters = document.querySelector('[data-costume-filters]');
const grid = document.querySelector('[data-costume-grid]');
const empty = document.querySelector('[data-costume-empty]');
const status = document.querySelector('[data-costume-status]');

if (filters && grid && empty && status && !filters.dataset.costumeReady) {
  filters.dataset.costumeReady = 'true';
  const links = [...filters.querySelectorAll('[data-costume-filter]')];
  const items = [...grid.querySelectorAll('[data-costume-item]')].map((element) => ({
    element,
    filters: element.dataset.costumeItem.split(' '),
  }));
  const currentFilter = () => {
    const key = (new URL(location.href).searchParams.get('costume_filter') || 'all')
      .toLowerCase().replace(/[^a-z0-9_-]/g, '');
    return links.some((link) => link.dataset.costumeFilter === key) ? key : 'all';
  };
  const render = (key, announce = true) => {
    let count = 0;
    for (const item of items) {
      item.element.hidden = !item.filters.includes(key);
      if (!item.element.hidden) count += 1;
    }
    for (const link of links) {
      const active = link.dataset.costumeFilter === key;
      link.classList.toggle('bg-[#605f5f]', active);
      link.classList.toggle('text-white', active);
      link.classList.toggle('bg-white', !active);
      link.classList.toggle('text-[#231815]', !active);
      if (active) link.setAttribute('aria-current', 'page');
      else link.removeAttribute('aria-current');
    }
    grid.hidden = count === 0;
    empty.hidden = count !== 0;
    if (announce) status.textContent = `${count}件の衣装を表示しています。`;
  };

  filters.addEventListener('click', (event) => {
    const link = event.target.closest('[data-costume-filter]');
    // Preserve new-tab, download and modified-click navigation.
    if (!link || !filters.contains(link) || event.defaultPrevented || event.button !== 0 ||
        event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return;
    const url = new URL(link.href);
    if (url.origin !== location.origin || url.pathname !== location.pathname) return;
    event.preventDefault();
    const key = link.dataset.costumeFilter;
    if (key !== currentFilter()) history.pushState(null, '', url);
    render(key);
  });
  window.addEventListener('popstate', () => render(currentFilter()));
  render(currentFilter(), false);
}

const costumeDialog = document.querySelector('[data-costume-dialog]');

if (costumeDialog && grid) {
  const triggers = [...grid.querySelectorAll('[data-costume-modal-trigger]')];
  const heading = costumeDialog.querySelector('[data-costume-modal-heading]');
  const detail = costumeDialog.querySelector('[data-costume-modal-detail]');
  const previous = costumeDialog.querySelector('[data-costume-modal-prev]');
  const next = costumeDialog.querySelector('[data-costume-modal-next]');
  let activeTrigger = null;

  const visibleTriggers = () => triggers.filter((trigger) => !trigger.closest('[data-costume-item]').hidden);
  const showCostume = (trigger) => {
    const thumbnail = trigger.querySelector('[data-costume-modal-image]');
    if (!thumbnail || !detail || !heading) return;
    activeTrigger = trigger;
    heading.textContent = trigger.dataset.costumeModalTitle;
    detail.src = thumbnail.src;
    detail.alt = trigger.dataset.costumeModalAlt;
    detail.width = Number(thumbnail.getAttribute('width')) || thumbnail.naturalWidth;
    detail.height = Number(thumbnail.getAttribute('height')) || thumbnail.naturalHeight;
    const multiple = visibleTriggers().length > 1;
    previous.disabled = !multiple;
    next.disabled = !multiple;
  };

  triggers.forEach((trigger) => {
    trigger.addEventListener('click', () => showCostume(trigger), { capture: true });
  });

  const step = (direction) => {
    const visible = visibleTriggers();
    if (!visible.length) return;
    const index = visible.indexOf(activeTrigger);
    showCostume(visible[(index + direction + visible.length) % visible.length]);
  };

  previous.addEventListener('click', () => step(-1));
  next.addEventListener('click', () => step(1));
}
