import "../css/front-page.css";
import { gsap } from "gsap";
import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
import "@splidejs/splide/css/core";

const gsapDisabled = new URLSearchParams(window.location.search).get("gsap") === "off";

if ("scrollRestoration" in history) {
  history.scrollRestoration = gsapDisabled ? "auto" : "manual";
}

document.addEventListener("DOMContentLoaded", () => {
  if (!gsapDisabled) {
    window.scrollTo(0, 0);

    window.addEventListener(
      "load",
      () => {
        window.scrollTo(0, 0);
      },
      { once: true },
    );
  }

  //// fv背景
  const fvBg = document.querySelector(".js-fv-bg");

  if (fvBg) {
    if (gsapDisabled) {
      fvBg.style.opacity = "0.6";
    } else {
      gsap.to(fvBg, {
        opacity: 0.6,
        duration: 3,
        delay: 3,
        ease: "power2.out",
      });
    }
  }
  //// end fv背景

  //// fvヘッダー
  const fvHeaders = document.querySelectorAll(".js-fv-header");

  if (fvHeaders.length && (gsapDisabled || window.matchMedia("(prefers-reduced-motion: reduce)").matches)) {
    fvHeaders.forEach((header) => {
      header.style.visibility = "visible";
      header.style.opacity = "1";
    });
  } else if (fvHeaders.length) {
    gsap.to(fvHeaders, {
      autoAlpha: 1,
      duration: 0.3,
      delay: 3,
      ease: "power2.out",
    });
  }
  //// end fvヘッダー

  //// splide 無限スライダー
  const infinitySplideEl = document.querySelector(".splide-infinity");

  if (infinitySplideEl) {
    new Splide(infinitySplideEl, {
      type: "loop",
      drag: "free",
      arrows: false,
      pagination: false,
      gap: "64rem",
      fixedWidth: "250rem",
      perPage: 2,
      perMove: 1,
      autoScroll: {
        speed: 0.5,
        pauseOnHover: false,
        pauseOnFocus: false,
      },
    }).mount({ AutoScroll });
  }
  //// end splide 無限スライダー

  const panels = Array.from(document.querySelectorAll("[data-panel]"));
  if (!panels.length) return;

  const indicators = Array.from(document.querySelectorAll(".js-panel-indicator"));

  let currentIndex = 0;
  let isAnimating = false;
  let wheelLocked = false;
  let wheelDistance = 0;
  let wheelIdleTimer;
  let isScrollIndicatorTicking = false;

  const DURATION = 1.05;
  const EASE = "power3.inOut";
  const WHEEL_THRESHOLD = 30;

  const setPanelPosition = (panel, yPercent, zIndex) => {
    if (gsapDisabled) {
      panel.style.transform = `translateY(${yPercent}%)`;
      panel.style.zIndex = zIndex;
      return;
    }

    gsap.set(panel, { yPercent, zIndex });
  };

  panels.forEach((panel, index) => {
    setPanelPosition(panel, index === 0 ? 0 : 100, index === 0 ? panels.length + 1 : index + 1);
  });

  const updateActiveIndicator = (activeIndicator) => {
    indicators.forEach((item) => {
      const isActive = item === activeIndicator;
      item.classList.toggle("w-32", isActive);
      item.classList.toggle("opacity-100", isActive);
      item.classList.toggle("w-16", !isActive);
      item.classList.toggle("opacity-60", !isActive);
      item.classList.toggle("is-current", isActive);
    });
  };

  const updateActivePanelClass = (activeIndex) => {
    panels.forEach((panel, index) => {
      panel.classList.toggle("is-active", index === activeIndex);
    });

    indicators.forEach((indicator, index) => {
      const isActive = index === activeIndex;
      indicator.classList.toggle("w-32", isActive);
      indicator.classList.toggle("opacity-100", isActive);
      indicator.classList.toggle("w-16", !isActive);
      indicator.classList.toggle("opacity-60", !isActive);
      indicator.classList.toggle("is-current", isActive);
    });
  };

  const resetPanels = (activeIndex) => {
    panels.forEach((panel, index) => {
      if (index < activeIndex) {
        setPanelPosition(panel, -100, index + 1);
      } else if (index === activeIndex) {
        setPanelPosition(panel, 0, panels.length + 1);
      } else {
        setPanelPosition(panel, 100, index + 1);
      }
    });

    updateActivePanelClass(activeIndex);
  };

  requestAnimationFrame(() => {
    if (!isAnimating) {
      updateActivePanelClass(currentIndex);
    }
  });

  function goToSection(nextIndex, direction) {
    if (isAnimating) return;
    if (nextIndex === currentIndex) return;
    if (nextIndex < 0 || nextIndex >= panels.length) return;

    isAnimating = true;

    const currentPanel = panels[currentIndex];
    const nextPanel = panels[nextIndex];

    const nextStart = direction === 1 ? 100 : -100;
    const currentEnd = direction === 1 ? -100 : 100;

    if (gsapDisabled) {
      currentIndex = nextIndex;
      resetPanels(currentIndex);
      isAnimating = false;
      return;
    }

    currentPanel.classList.remove("is-active");
    nextPanel.classList.remove("is-active");

    gsap.set(nextPanel, {
      yPercent: nextStart,
      zIndex: panels.length + 2,
    });

    gsap.set(currentPanel, {
      zIndex: panels.length + 1,
    });

    gsap
      .timeline({
        defaults: {
          duration: DURATION,
          ease: EASE,
        },
        onComplete: () => {
          currentIndex = nextIndex;
          resetPanels(currentIndex);
          isAnimating = false;
        },
      })
      .to(
        currentPanel,
        {
          yPercent: currentEnd,
        },
        0,
      )
      .to(
        nextPanel,
        {
          yPercent: 0,
        },
        0,
      );
  }

  const scrollTargetIndicators = indicators.filter((indicator) => {
    return indicator.dataset.scrollTarget;
  });

  const scrollTargetItems = scrollTargetIndicators
    .map((indicator) => {
      const target = document.querySelector(indicator.dataset.scrollTarget);

      if (!target) return null;

      return {
        indicator,
        target,
      };
    })
    .filter(Boolean);

  const updateScrollTargetIndicator = () => {
    isScrollIndicatorTicking = false;

    if (window.scrollY <= 1) {
      updateActivePanelClass(currentIndex);
      return;
    }

    const viewportCenter = window.innerHeight / 2;

    let activeItem = null;
    let minDistance = Infinity;

    scrollTargetItems.forEach((item) => {
      const rect = item.target.getBoundingClientRect();

      if (rect.bottom < 0 || rect.top > window.innerHeight) {
        return;
      }

      const targetCenter = rect.top + rect.height / 2;
      const distance = Math.abs(targetCenter - viewportCenter);

      if (distance < minDistance) {
        minDistance = distance;
        activeItem = item;
      }
    });

    if (!activeItem) return;

    updateActiveIndicator(activeItem.indicator);
  };

  window.addEventListener(
    "scroll",
    () => {
      if (isScrollIndicatorTicking) return;

      isScrollIndicatorTicking = true;

      requestAnimationFrame(updateScrollTargetIndicator);
    },
    { passive: true },
  );

  window.addEventListener(
    "wheel",
    (event) => {
      // Trackpads emit small pixel deltas; cancel native scrolling before
      // applying the threshold, otherwise scrollY > 0 disables every panel.
      if (event.ctrlKey || Math.abs(event.deltaX) > Math.abs(event.deltaY)) return;
      if (document.body.classList.contains("is-sp-menu-scroll-locked") ||
          document.body.classList.contains("is-kids-course-modal-scroll-locked")) return;
      const unit = event.deltaMode === 1 ? 16 : event.deltaMode === 2 ? window.innerHeight : 1;
      const delta = event.deltaY * unit;
      if (!delta || window.scrollY > 1) return;

      const isScrollDown = delta > 0;
      const isScrollUp = delta < 0;
      const isFirstPanel = currentIndex === 0;
      const isLastPanel = currentIndex === panels.length - 1;

      // Finish the claimed gesture before releasing the first/last boundary.
      // Restart the idle timer for momentum events, not just the first event.
      if (!isAnimating && !wheelLocked &&
          ((isLastPanel && isScrollDown) || (isFirstPanel && isScrollUp))) {
        wheelDistance = 0;
        return;
      }
      if (!event.cancelable) return;
      event.preventDefault();
      clearTimeout(wheelIdleTimer);
      wheelIdleTimer = setTimeout(() => {
        wheelLocked = false;
        wheelDistance = 0;
      }, 180);

      if (isAnimating || wheelLocked) return;
      if (wheelDistance * delta < 0) wheelDistance = 0;
      wheelDistance += delta;
      if (Math.abs(wheelDistance) < WHEEL_THRESHOLD) return;

      const direction = wheelDistance > 0 ? 1 : -1;
      wheelDistance = 0;
      wheelLocked = true;
      goToSection(currentIndex + direction, direction);
    },
    { passive: false },
  );

  // Keep native scrolling outside the stacked panels, and at their boundaries.
  // Listen on the panel wrapper so menu gestures never become panel gestures.
  const panelContainer = panels[0].parentElement;
  const SWIPE_THRESHOLD = 40; // Touch coordinates use CSS pixels, not theme rem.
  let swipe = null;

  const isPanelTouchBlocked = () =>
    document.body.classList.contains("is-sp-menu-scroll-locked") ||
    document.body.classList.contains("is-kids-course-modal-scroll-locked") ||
    (window.visualViewport?.scale ?? 1) > 1;

  panelContainer.addEventListener("touchstart", (event) => {
    swipe = null;
    if (event.touches.length !== 1 || window.scrollY > 1 || isPanelTouchBlocked()) return;
    if (event.target.closest("a, button, input, textarea, select, [contenteditable], [role='button']")) return;

    const touch = event.touches[0];
    swipe = {
      id: touch.identifier,
      x: touch.clientX,
      y: touch.clientY,
      handled: isAnimating,
    };
  }, { passive: true });

  panelContainer.addEventListener("touchmove", (event) => {
    if (!swipe) return;
    if (event.touches.length !== 1 || isPanelTouchBlocked()) {
      swipe = null;
      return;
    }

    const touch = event.touches[0];
    if (touch.identifier !== swipe.id) {
      swipe = null;
      return;
    }

    // Consume the rest of a claimed gesture, including after animation ends.
    if (swipe.handled) {
      if (event.cancelable) event.preventDefault();
      return;
    }

    const deltaX = touch.clientX - swipe.x;
    const deltaY = swipe.y - touch.clientY;
    // Small sideways movement is finger jitter, not a horizontal gesture.
    // Do not discard the touch before it has travelled far enough to decide.
    if (Math.abs(deltaX) >= SWIPE_THRESHOLD && Math.abs(deltaX) > Math.abs(deltaY)) {
      swipe = null;
      return;
    }
    if (deltaY === 0) return;

    const direction = deltaY > 0 ? 1 : -1;
    const nextIndex = currentIndex + direction;
    if (window.scrollY > 1 || nextIndex < 0 || nextIndex >= panels.length || !event.cancelable) {
      swipe = null;
      return;
    }

    // Cancel from the first vertical move; waiting for the threshold lets the
    // browser begin native scrolling before the panel animation can claim it.
    event.preventDefault();
    if (Math.abs(deltaY) < SWIPE_THRESHOLD || Math.abs(deltaY) <= Math.abs(deltaX)) return;

    swipe.handled = true;
    goToSection(nextIndex, direction);
  }, { passive: false });

  const resetSwipe = () => { swipe = null; };
  panelContainer.addEventListener("touchend", resetSwipe, { passive: true });
  panelContainer.addEventListener("touchcancel", resetSwipe, { passive: true });

  window.addEventListener("keydown", (event) => {
    if (isAnimating) return;

    const isFirstPanel = currentIndex === 0;
    const isLastPanel = currentIndex === panels.length - 1;

    if (event.key === "ArrowDown" || event.key === "PageDown") {
      if (window.scrollY > 0) return;
      if (isLastPanel) return;

      event.preventDefault();
      goToSection(currentIndex + 1, 1);
    }

    if (event.key === "ArrowUp" || event.key === "PageUp") {
      if (window.scrollY > 0) return;
      if (isFirstPanel) return;

      event.preventDefault();
      goToSection(currentIndex - 1, -1);
    }
  });

  //// splide
  const fvSplideEl = document.querySelector(".js-splide-fv");

  if (fvSplideEl) {
    const splide = new Splide(fvSplideEl, {
      type: "fade",
      rewind: true,
      arrows: false,
      pagination: false,
      autoplay: true,
      interval: 8000,
      speed: 1500,
      pauseOnHover: false,
      pauseOnFocus: false,
      drag: false,
    });

    const slides = Array.from(fvSplideEl.querySelectorAll(".splide__slide"));

    const getImage = (index) => {
      const slide = slides[index];
      if (!slide) return null;
      return slide.querySelector(".splide-fv-image");
    };

    const resetImage = (image) => {
      if (!image) return;
      image.classList.remove("is-motion");
    };

    const startImageMotion = (image) => {
      if (!image) return;

      image.classList.remove("is-motion");
      void image.offsetWidth;

      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          image.classList.add("is-motion");
        });
      });
    };

    splide.on("mounted", () => {
      const firstImage = getImage(splide.index);
      startImageMotion(firstImage);
    });

    splide.on("move", (newIndex) => {
      const nextImage = getImage(newIndex);
      resetImage(nextImage);
      startImageMotion(nextImage);
    });

    splide.on("moved", (newIndex, prevIndex) => {
      const prevImage = getImage(prevIndex);
      resetImage(prevImage);
    });

    splide.mount();
  }
  //// end splide
});
