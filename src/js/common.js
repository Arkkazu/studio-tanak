const initSpMenu = () => {
  const burger = document.querySelector(".js-burger");
  const spMenu = document.querySelector(".js-sp-menu");
  const burgerLabel = burger?.querySelector(".js-burger-label");
  const shootingMenuTrigger = document.querySelector(".js-sp-shooting-menu-trigger");
  const shootingMenuPanel = document.querySelector(".js-sp-shooting-menu-panel");
  const shootingMenuTriggerIcon = document.querySelector(".js-sp-shooting-menu-trigger-icon");
  const fixedElements = [...new Set([burger, document.querySelector("header"), ...document.querySelectorAll(".js-scroll-lock-fixed")].filter(Boolean))];
  const backgroundElements = [document.querySelector("header"), document.querySelector(".js-scroll-container")].filter(Boolean);

  if (!burger || !spMenu) return;

  if (!spMenu.id) spMenu.id = "sp-menu";

  burger.setAttribute("aria-controls", spMenu.id);

  let scrollLockReleaseTimer;
  let scrollLockTransitionEndHandler;

  const clearScrollLockRelease = () => {
    if (scrollLockReleaseTimer) {
      window.clearTimeout(scrollLockReleaseTimer);
      scrollLockReleaseTimer = undefined;
    }

    if (scrollLockTransitionEndHandler) {
      spMenu.removeEventListener("transitionend", scrollLockTransitionEndHandler);
      scrollLockTransitionEndHandler = undefined;
    }
  };

  const releaseScrollLock = () => {
    clearScrollLockRelease();
    document.body.classList.remove("is-sp-menu-scroll-locked");
    document.body.style.removeProperty("padding-right");
    fixedElements.forEach((element) => element.style.removeProperty("right"));
  };

  const lockScroll = () => {
    clearScrollLockRelease();

    if (document.body.classList.contains("is-sp-menu-scroll-locked")) return;

    const scrollbarWidth = Math.max(0, window.innerWidth - document.documentElement.clientWidth);
    const bodyPaddingRight = Number.parseFloat(window.getComputedStyle(document.body).paddingRight) || 0;

    document.body.style.paddingRight = `${bodyPaddingRight + scrollbarWidth}px`;
    fixedElements.forEach((element) => {
      const right = Number.parseFloat(window.getComputedStyle(element).right) || 0;
      element.style.right = `${right + scrollbarWidth}px`;
    });
    document.body.classList.add("is-sp-menu-scroll-locked");
  };

  const getScrollLockReleaseDelay = () => {
    const styles = window.getComputedStyle(spMenu);
    const durations = styles.transitionDuration.split(",").map((value) => Number.parseFloat(value) * (value.includes("ms") ? 1 : 1000));
    const delays = styles.transitionDelay.split(",").map((value) => Number.parseFloat(value) * (value.includes("ms") ? 1 : 1000));

    return Math.max(...durations.map((duration, index) => duration + (delays[index] ?? delays[0] ?? 0)), 0) + 50;
  };

  const releaseScrollLockAfterMenuTransition = () => {
    if (!document.body.classList.contains("is-sp-menu-scroll-locked")) return;

    scrollLockTransitionEndHandler = (event) => {
      if (event.target !== spMenu || event.propertyName !== "opacity") return;
      releaseScrollLock();
    };

    spMenu.addEventListener("transitionend", scrollLockTransitionEndHandler);
    scrollLockReleaseTimer = window.setTimeout(releaseScrollLock, getScrollLockReleaseDelay());
  };

  const focusableMenuElements = () => [
    burger,
    ...spMenu.querySelectorAll('a[href], button:not([disabled])'),
  ];

  const setMenuState = (isOpen) => {
    if (isOpen) {
      lockScroll();
      document.body.classList.add("is-sp-menu-opened");
    } else {
      document.body.classList.remove("is-sp-menu-opened");
      releaseScrollLockAfterMenuTransition();
    }

    burger.setAttribute("aria-expanded", String(isOpen));
    burger.setAttribute("aria-label", isOpen ? "メニューを閉じる" : "メニューを開く");
    if (burgerLabel) burgerLabel.textContent = isOpen ? "CLOSE" : "MENU";
    spMenu.style.opacity = isOpen ? "1" : "0";
    spMenu.style.pointerEvents = isOpen ? "auto" : "none";
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

  spMenu.querySelectorAll("a[href]").forEach((link) => {
    link.addEventListener("click", () => {
      setMenuState(false);
    });
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

const initKidsCourseModal = () => {
  const triggers = document.querySelectorAll(".js-kids-course-modal-trigger");
  const closeButtons = document.querySelectorAll(".js-kids-course-modal-close");
  const modals = document.querySelectorAll(".js-kids-course-modal");
  const lastTriggers = new WeakMap();
  const fixedElements = [...new Set([
    document.querySelector("header"),
    document.querySelector(".js-burger"),
    ...document.querySelectorAll(".js-scroll-lock-fixed"),
  ].filter(Boolean))];
  const backgroundState = new Map();
  const modalFocusableElements = (modal) => [...modal.querySelectorAll(
    'a[href], button:not([disabled]), input:not([disabled]):not([type="hidden"]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])',
  )].filter((element) => !element.hidden && element.getClientRects().length > 0);

  const setBackgroundInert = (activeModal) => {
    [...document.body.children].forEach((element) => {
      if (element === activeModal) return;

      backgroundState.set(element, {
        ariaHidden: element.getAttribute("aria-hidden"),
        inert: element.inert,
      });
      element.inert = true;
      element.setAttribute("aria-hidden", "true");
    });
  };

  const releaseBackgroundInert = () => {
    backgroundState.forEach((state, element) => {
      element.inert = state.inert;
      if (state.ariaHidden === null) {
        element.removeAttribute("aria-hidden");
        return;
      }
      element.setAttribute("aria-hidden", state.ariaHidden);
    });
    backgroundState.clear();
  };

  if (!modals.length || !triggers.length) return;

  modals.forEach((modal) => {
    modal.inert = !modal.open;
  });

  const lockMainScroll = () => {
    if (document.body.classList.contains("is-kids-course-modal-scroll-locked")) return;

    const scrollbarWidth = Math.max(0, window.innerWidth - document.documentElement.clientWidth);
    const bodyPaddingRight = Number.parseFloat(window.getComputedStyle(document.body).paddingRight) || 0;

    document.body.style.paddingRight = `${bodyPaddingRight + scrollbarWidth}px`;
    fixedElements.forEach((element) => {
      const right = Number.parseFloat(window.getComputedStyle(element).right) || 0;
      element.style.right = `${right + scrollbarWidth}px`;
    });
    document.body.classList.add("is-kids-course-modal-scroll-locked");
  };

  const releaseMainScroll = () => {
    document.body.classList.remove("is-kids-course-modal-scroll-locked");
    document.body.style.removeProperty("padding-right");
    fixedElements.forEach((element) => element.style.removeProperty("right"));
  };

  const closeModal = (modal) => {
    if (!modal?.open || modal.dataset.closing === "true") return;

    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      modal.close();
      return;
    }

    modal.dataset.closing = "true";
    modal.classList.remove("opacity-100", "is-kids-course-modal-visible");

    const finishClosing = (event) => {
      if (event && (event.target !== modal || event.propertyName !== "opacity")) return;

      modal.removeEventListener("transitionend", finishClosing);
      if (modal.open) modal.close();
    };

    modal.addEventListener("transitionend", finishClosing);
    window.setTimeout(finishClosing, 350);
  };

  triggers.forEach((trigger) => {
    trigger.addEventListener("click", () => {
      const modal = document.getElementById(trigger.dataset.kidsCourseModalTarget);
      if (!modal || typeof modal.showModal !== "function") return;

      const title = modal.querySelector("[data-kids-course-modal-name]");
      const group = modal.querySelector("[data-kids-course-modal-group]");
      const groupJa = modal.querySelector("[data-kids-course-modal-group-ja]");
      const price = modal.querySelector("[data-kids-course-modal-price]");

      if (title) title.textContent = trigger.dataset.kidsCourseModalName ?? "";
      if (group) group.textContent = trigger.dataset.kidsCourseModalGroup ?? "";
      if (groupJa) groupJa.textContent = trigger.dataset.kidsCourseModalGroupJa ?? "";
      if (price) {
        price.textContent = trigger.dataset.kidsCourseModalPrice ?? "";
        price.hidden = !price.textContent;
      }

      lastTriggers.set(modal, trigger);
      lockMainScroll();
      modal.inert = false;
      modal.showModal();
      setBackgroundInert(modal);
      window.requestAnimationFrame(() => {
        modal.classList.add("opacity-100", "is-kids-course-modal-visible");
        modal.querySelector(".js-kids-course-modal-close")?.focus();
      });
    });
  });

  closeButtons.forEach((button) => {
    button.addEventListener("click", () => closeModal(button.closest(".js-kids-course-modal")));
  });

  modals.forEach((modal) => {
    modal.addEventListener("click", (event) => {
      if (event.target === modal) closeModal(modal);
    });

    modal.addEventListener("cancel", (event) => {
      event.preventDefault();
      closeModal(modal);
    });

    modal.addEventListener("close", () => {
      delete modal.dataset.closing;
      modal.classList.remove("opacity-100", "is-kids-course-modal-visible");
      modal.inert = true;
      releaseMainScroll();
      releaseBackgroundInert();
      lastTriggers.get(modal)?.focus();
    });
  });

  document.addEventListener("keydown", (event) => {
    if (event.key !== "Tab") return;

    const activeModal = [...modals].find((modal) => modal.open);
    if (!activeModal) return;

    const focusableElements = modalFocusableElements(activeModal);
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

  const initialModal = new URLSearchParams(window.location.search).get("course-modal");
  if (initialModal === "light") {
    document.querySelector('[data-kids-course-modal-target="kids-course-modal-light"]')?.click();
  }
};

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", () => {
    initSpMenu();
    initKidsCourseModal();
  }, { once: true });
} else {
  initSpMenu();
  initKidsCourseModal();
}
