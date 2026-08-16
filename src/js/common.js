const initSpMenu = () => {
  const burger = document.querySelector(".js-burger");
  const spMenu = document.querySelector(".js-sp-menu");
  const burgerLabel = burger?.querySelector(".js-burger-label");
  const shootingMenuTrigger = document.querySelector(".js-sp-shooting-menu-trigger");
  const shootingMenuPanel = document.querySelector(".js-sp-shooting-menu-panel");
  const shootingMenuTriggerIcon = document.querySelector(".js-sp-shooting-menu-trigger-icon");
  const backgroundElements = [document.querySelector("header"), document.querySelector(".js-scroll-container")].filter(Boolean);

  if (!burger || !spMenu) return;

  if (!spMenu.id) spMenu.id = "sp-menu";

  burger.setAttribute("aria-controls", spMenu.id);

  const focusableMenuElements = () => [
    burger,
    ...spMenu.querySelectorAll('a[href], button:not([disabled])'),
  ];

  const setMenuState = (isOpen) => {
    document.body.classList.toggle("is-sp-menu-opened", isOpen);
    burger.setAttribute("aria-expanded", String(isOpen));
    burger.setAttribute("aria-label", isOpen ? "メニューを閉じる" : "メニューを開く");
    if (burgerLabel) burgerLabel.textContent = isOpen ? "CLOSE" : "MENU";
    spMenu.setAttribute("aria-hidden", String(!isOpen));
    spMenu.inert = !isOpen;
    backgroundElements.forEach((element) => {
      element.inert = isOpen;
    });

    if (isOpen) {
      window.requestAnimationFrame(() => burger.focus());
    }
  };

  setMenuState(false);

  burger.addEventListener("click", () => {
    setMenuState(!document.body.classList.contains("is-sp-menu-opened"));
  });

  if (shootingMenuTrigger && shootingMenuPanel) {
    const setShootingMenuState = (isOpen) => {
      if (shootingMenuPanel.dataset.animating === "true") return;

      const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
      const currentHeight = shootingMenuPanel.getBoundingClientRect().height;
      const targetHeight = isOpen ? shootingMenuPanel.scrollHeight : 0;

      shootingMenuTrigger.setAttribute("aria-expanded", String(isOpen));
      shootingMenuTriggerIcon?.classList.toggle("scale-y-0", isOpen);

      if (isOpen) {
        shootingMenuPanel.inert = false;
        shootingMenuPanel.setAttribute("aria-hidden", "false");
      }

      if (prefersReducedMotion) {
        shootingMenuPanel.style.height = isOpen ? "auto" : "0px";
        if (!isOpen) {
          shootingMenuPanel.inert = true;
          shootingMenuPanel.setAttribute("aria-hidden", "true");
        }
        return;
      }

      shootingMenuPanel.dataset.animating = "true";
      shootingMenuPanel.style.height = `${currentHeight}px`;

      window.requestAnimationFrame(() => {
        shootingMenuPanel.style.height = `${targetHeight}px`;
      });

      const handleTransitionEnd = (event) => {
        if (event.propertyName !== "height") return;

        shootingMenuPanel.removeEventListener("transitionend", handleTransitionEnd);
        delete shootingMenuPanel.dataset.animating;

        if (isOpen) {
          shootingMenuPanel.style.height = "auto";
          return;
        }

        shootingMenuPanel.inert = true;
        shootingMenuPanel.setAttribute("aria-hidden", "true");
      };

      shootingMenuPanel.addEventListener("transitionend", handleTransitionEnd);
    };

    shootingMenuTrigger.addEventListener("click", () => {
      setShootingMenuState(shootingMenuTrigger.getAttribute("aria-expanded") !== "true");
    });
  }

  document.addEventListener("keydown", (event) => {
    if (!document.body.classList.contains("is-sp-menu-opened")) return;

    if (event.key === "Escape") {
      setMenuState(false);
      burger.focus();
      return;
    }

    if (event.key !== "Tab") return;

    const focusableElements = focusableMenuElements();
    const firstElement = focusableElements[0];
    const lastElement = focusableElements[focusableElements.length - 1];

    if (!firstElement || !lastElement) return;

    if (event.shiftKey && document.activeElement === firstElement) {
      event.preventDefault();
      lastElement.focus();
      return;
    }

    if (!event.shiftKey && document.activeElement === lastElement) {
      event.preventDefault();
      firstElement.focus();
    }
  });
};

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initSpMenu, { once: true });
} else {
  initSpMenu();
}
