<div class="flex items-center gap-16">
  <span class="text-10 font-montserrat font-light tracking-[0.1em] whitespace-nowrap"><?php echo esc_html($args['label']); ?></span>
  <div class="flex-1 border-b border-dashed border-border"></div>
  <span class="<?php echo esc_attr($args['value_class'] ?? 'text-10 font-light'); ?><?php if (!empty($args['montserrat'])) echo ' font-montserrat'; ?> whitespace-nowrap">
    <?php echo $args['html'] ?? esc_html($args['value'] ?? ''); ?>
    <?php if (!empty($args['suffix'])) : ?><span class="text-10 ml-4"><?php echo esc_html($args['suffix']); ?></span><?php endif; ?>
  </span>
</div>
