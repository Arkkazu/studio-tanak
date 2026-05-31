import "../css/front-page.css";
import { gsap } from "gsap";
import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
import "@splidejs/splide/css/core";

if ("scrollRestoration" in history) {
  history.scrollRestoration = "manual";
}

document.addEventListener("DOMContentLoaded", () => {
  window.scrollTo(0, 0);

  window.addEventListener(
    "load",
    () => {
      window.scrollTo(0, 0);
    },
    { once: true },
  );

  //// fv背景
  const fvBg = document.querySelector(".js-fv-bg");

  if (fvBg) {
    gsap.to(fvBg, {
      opacity: 0.6,
      duration: 5,
      delay: 3,
      ease: "power2.out",
    });
  }
  //// end fv背景

  //// splide 無限スライダー
  new Splide(".splide-infinity", {
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
  //// end splide 無限スライダー

  const panels = Array.from(document.querySelectorAll("[data-panel]"));
  if (!panels.length) return;

  const indicators = Array.from(document.querySelectorAll(".js-panel-indicator"));

  let currentIndex = 0;
  let isAnimating = false;
  let wheelLocked = false;
  let isScrollIndicatorTicking = false;

  const DURATION = 1.05;
  const EASE = "power3.inOut";
  const WHEEL_THRESHOLD = 30;

  gsap.set(panels, {
    yPercent: 100,
  });

  gsap.set(panels[0], {
    yPercent: 0,
    zIndex: panels.length + 1,
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
        gsap.set(panel, {
          yPercent: -100,
          zIndex: index + 1,
        });
      } else if (index === activeIndex) {
        gsap.set(panel, {
          yPercent: 0,
          zIndex: panels.length + 1,
        });
      } else {
        gsap.set(panel, {
          yPercent: 100,
          zIndex: index + 1,
        });
      }
    });

    updateActivePanelClass(activeIndex);
  };

  requestAnimationFrame(() => {
    updateActivePanelClass(0);
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

  function handleWheel(event) {
    if (isAnimating) return;

    const delta = event.deltaY;

    if (Math.abs(delta) < WHEEL_THRESHOLD) return;

    if (delta > 0) {
      goToSection(currentIndex + 1, 1);
    } else {
      goToSection(currentIndex - 1, -1);
    }
  }

  window.addEventListener(
    "wheel",
    (event) => {
      const delta = event.deltaY;

      if (Math.abs(delta) < WHEEL_THRESHOLD) return;

      const isScrollDown = delta > 0;
      const isScrollUp = delta < 0;
      const isFirstPanel = currentIndex === 0;
      const isLastPanel = currentIndex === panels.length - 1;

      if (window.scrollY > 0) return;
      if (isLastPanel && isScrollDown) return;
      if (isFirstPanel && isScrollUp) return;

      event.preventDefault();

      if (wheelLocked) return;

      wheelLocked = true;
      handleWheel(event);

      setTimeout(() => {
        wheelLocked = false;
      }, 180);
    },
    { passive: false },
  );

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
