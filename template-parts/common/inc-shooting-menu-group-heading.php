<?php
/**
 * Shooting menu group heading.
 *
 * @var array{group?: array<string, mixed>} $args
 */
$group = $args['group'] ?? [];

if (!is_array($group)) {
  return;
}
?>
<div class="flex flex-col gap-6">
  <h3 class="text-14 font-montserrat font-light leading-[1.2] tracking-[0.05em]">
    <?php echo esc_html($group['title'] ?? ''); ?>
  </h3>
  <p class="text-10 font-light leading-[1.2] text-gray">
    <?php echo esc_html($group['title_ja'] ?? ''); ?>
  </p>
</div>
