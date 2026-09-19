<?php
/* Template Name: トップページ */
get_header();
?>

<body>
  <div class="max-pc:pb-40">

    <?php get_template_part('inc', 'header'); ?>

    <main class="py-70 pc:py-160 ">

      <?php get_template_part('inc', 'menu-kv'); ?>
      <?php get_template_part('inc', 'menu'); ?>

    </main>

    <?php get_template_part('inc', 'side-banner'); ?>
    <?php get_template_part('inc', 'footer'); ?>
    <?php get_template_part('inc', 'sp-menu'); ?>

  </div>
  <!-- l-wrap -->

  <script src="/wp-content/themes/studio-tanaka_theme/assets/js/common.js"></script>
  <script src="/wp-content/themes/studio-tanak_theme/src/js/legacy-old/menu-tab.js"></script>

  <?php wp_footer(); ?>
</body>

</html>
