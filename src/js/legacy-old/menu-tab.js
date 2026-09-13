// [hidden] は display:none と等価（テーマにより未定義の場合の保険）
// CSS 側に記述済みなら本行は不要です。
(function () {
  var s = document.createElement("style");
  s.textContent = "[hidden]{display:none;}";
  document.head.appendChild(s);
})();

document.addEventListener("click", function (e) {
  const tab = e.target.closest('[role="tab"]');
  if (!tab) return;

  // タブリストと同一セクション（js-menu-block）を特定
  const tablist = tab.closest('[role="tablist"]');
  const section = tablist.closest(".js-menu-block");
  if (!section) return;

  const tabs = tablist.querySelectorAll('[role="tab"]');
  const panels = section.querySelectorAll('[role="tabpanel"]');
  const panelId = tab.getAttribute("aria-controls");
  const panelEl = panelId ? section.querySelector("#" + CSS.escape(panelId)) : null;

  // すべてのタブを非選択化
  tabs.forEach(function (t) {
    t.setAttribute("aria-selected", "false");
    t.setAttribute("tabindex", "-1");
  });

  // すべてのパネルを非表示
  panels.forEach(function (p) {
    p.setAttribute("hidden", "");
  });

  // 対象タブを選択状態に
  tab.setAttribute("aria-selected", "true");
  tab.setAttribute("tabindex", "0");

  // 対応パネルを表示
  if (panelEl) {
    panelEl.removeAttribute("hidden");
  }
});

// キーボード操作（← → Home End）対応（任意）
document.addEventListener("keydown", function (e) {
  const current = e.target.closest('[role="tab"]');
  if (!current) return;

  const tablist = current.closest('[role="tablist"]');
  const tabs = Array.from(tablist.querySelectorAll('[role="tab"]'));
  const idx = tabs.indexOf(current);
  if (idx === -1) return;

  let next = null;
  if (e.key === "ArrowRight") next = tabs[(idx + 1) % tabs.length];
  if (e.key === "ArrowLeft") next = tabs[(idx - 1 + tabs.length) % tabs.length];
  if (e.key === "Home") next = tabs[0];
  if (e.key === "End") next = tabs[tabs.length - 1];

  if (next) {
    e.preventDefault();
    next.focus();
    next.click(); // クリックと同じ切替処理を実行
  }
});
