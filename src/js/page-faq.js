/*
 * FAQのアコーディオン。
 * 開閉の作法は src/js/common.js のSPメニュー内アコーディオンに合わせている
 * （height をアニメーションさせ、閉じている間は inert + aria-hidden で
 * フォーカスと読み上げから外す。アニメーション中は二重起動を防ぐ）。
 * 各項目は独立して開閉する。デザイン指示が「↓押すと Answer 表示 / ↑で格納」で、
 * 他の項目を閉じる指定がないため、排他にはしない。
 */
const TRANSITION_MS = 500;
const triggers = [...document.querySelectorAll(".js-faq-trigger")];

triggers.forEach((trigger) => {
  const panelId = trigger.getAttribute("aria-controls");
  const panel = panelId ? document.getElementById(panelId) : null;
  const icon = trigger.querySelector(".js-faq-trigger-icon");

  if (!panel) return;

  const setPanelState = (isOpen) => {
    if (panel.dataset.animating === "true") return;

    const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const currentHeight = panel.getBoundingClientRect().height;
    const targetHeight = isOpen ? panel.scrollHeight : 0;

    trigger.setAttribute("aria-expanded", String(isOpen));
    icon?.classList.toggle("rotate-180", isOpen);

    if (isOpen) {
      panel.inert = false;
      panel.setAttribute("aria-hidden", "false");
    }

    if (prefersReducedMotion) {
      panel.style.height = isOpen ? "auto" : "0px";

      if (!isOpen) {
        panel.inert = true;
        panel.setAttribute("aria-hidden", "true");
      }

      return;
    }

    let fallbackTimer;

    // transition の完了時、または完了イベントが来なかったときの後始末。
    // 閉じ切るまで inert を外したままにすると、畳んだ回答へフォーカスが入る。
    const finalize = () => {
      window.clearTimeout(fallbackTimer);
      panel.removeEventListener("transitionend", handleTransitionEnd);
      delete panel.dataset.animating;

      if (isOpen) {
        panel.style.height = "auto";
        return;
      }

      panel.inert = true;
      panel.setAttribute("aria-hidden", "true");
    };

    // 子要素（リンクのopacity等）の transition が浮上してくるので、
    // 対象がこのパネル自身の height のときだけ完了として扱う。
    function handleTransitionEnd(event) {
      if (event.target !== panel || event.propertyName !== "height") return;
      finalize();
    }

    panel.dataset.animating = "true";
    panel.style.height = `${currentHeight}px`;

    // 開始値を確定させてから終了値を入れる。
    // height:auto から直接 0 へ飛ぶと auto が補間されず transition が発生せず、
    // transitionend も来ないため inert が戻らない（2026-09-26 に実測）。
    void panel.offsetHeight;

    window.requestAnimationFrame(() => {
      panel.style.height = `${targetHeight}px`;
    });

    panel.addEventListener("transitionend", handleTransitionEnd);
    fallbackTimer = window.setTimeout(finalize, TRANSITION_MS + 200);
  };

  trigger.addEventListener("click", () => {
    setPanelState(trigger.getAttribute("aria-expanded") !== "true");
  });
});
