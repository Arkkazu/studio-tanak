import "../css/front-page.css";
import { gsap } from "gsap";
import Splide from "@splidejs/splide";
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

  const panels = Array.from(document.querySelectorAll("[data-panel]"));
  if (!panels.length) return;

  const indicators = Array.from(document.querySelectorAll(".js-panel-indicator"));

  let currentIndex = 0;
  let isAnimating = false;
  let wheelLocked = false;

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

  const updateActivePanelClass = (activeIndex) => {
    panels.forEach((panel, index) => {
      panel.classList.toggle("is-active", index === activeIndex);
    });

    indicators.forEach((indicator, index) => {
      indicator.classList.toggle("w-40", index === activeIndex);
      indicator.classList.toggle("opacity-100", index === activeIndex);
      indicator.classList.toggle("w-24", index !== activeIndex);
      indicator.classList.toggle("opacity-60", index !== activeIndex);
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

  indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => {
      if (isAnimating) return;
      if (index === currentIndex) return;

      const direction = index > currentIndex ? 1 : -1;
      goToSection(index, direction);
    });
  });

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

    if (event.key === "ArrowDown" || event.key === "PageDown") {
      event.preventDefault();
      goToSection(currentIndex + 1, 1);
    }

    if (event.key === "ArrowUp" || event.key === "PageUp") {
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
        image.classList.add("is-motion");
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
});
