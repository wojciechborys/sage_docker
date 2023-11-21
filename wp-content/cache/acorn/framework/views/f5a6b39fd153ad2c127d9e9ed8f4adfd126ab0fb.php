<header>
    <?php echo $__env->make('sections.header_upper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container mx-auto">
      <nav class="nav__main">
        <a class="nav__main--logo" href="<?php echo e(get_home_url()); ?>">
          Casa in Umbria
        </a>
        <?php if(has_nav_menu('left_navigation')): ?>
            <?php echo wp_nav_menu(['theme_location' => 'left_navigation', 'menu_class' => 'nav__main--left', 'echo' => false]); ?>

        <?php endif; ?>         
      </nav>
    </div>
</header>
<?php /**PATH /var/www/html/wp-content/themes/umbria-theme/resources/views/sections/header.blade.php ENDPATH**/ ?>