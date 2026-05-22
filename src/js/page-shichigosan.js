import "../css/page-shichigosan.css";

document.addEventListener("DOMContentLoaded", () => {
  // accordion
  const accordionTriggers = document.querySelectorAll(".js-accordion-trigger");

  accordionTriggers.forEach((trigger) => {
    trigger.addEventListener("click", () => {
      const item = trigger.closest(".js-accordion-item");
      const content = item.querySelector(".js-accordion-content");
      const icon = trigger.querySelector(".js-accordion-icon");
      const isOpen = item.dataset.open === "true";

      // close all others
      document.querySelectorAll(".js-accordion-item").forEach((other) => {
        if (other !== item) {
          other.dataset.open = "false";
          const otherContent = other.querySelector(".js-accordion-content");
          const otherIcon = other.querySelector(".js-accordion-icon");
          if (otherContent) otherContent.style.maxHeight = "0";
          if (otherIcon) otherIcon.textContent = "+";
        }
      });

      if (isOpen) {
        item.dataset.open = "false";
        content.style.maxHeight = "0";
        icon.textContent = "+";
      } else {
        item.dataset.open = "true";
        content.style.maxHeight = content.scrollHeight + "px";
        icon.textContent = "−";
      }
    });
  });

  // tab
  document.querySelectorAll(".js-tab-group").forEach((group) => {
    const tabs = group.querySelectorAll(".js-tab-btn");
    const panels = group.querySelectorAll(".js-tab-panel");

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        const target = tab.dataset.tab;

        tabs.forEach((t) => t.setAttribute("aria-selected", "false"));
        panels.forEach((p) => p.setAttribute("aria-hidden", "true"));

        tabs.forEach((t) => {
          if (t.dataset.tab === target) t.setAttribute("aria-selected", "true");
        });
        const panel = group.querySelector(`[data-tab-panel="${target}"]`);
        if (panel) panel.setAttribute("aria-hidden", "false");

        // accordion height recalc
        const content = group.closest(".js-accordion-content");
        if (content) content.style.maxHeight = content.scrollHeight + "px";
      });
    });
  });
});
