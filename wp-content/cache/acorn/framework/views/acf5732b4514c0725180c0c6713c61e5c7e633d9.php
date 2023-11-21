<nav class="logo__nav">
    <ul>
        <li>
            <a href="mailto:<?= esc_attr(get_option('email')); ?>"><?php echo get_option('email'); ?></a>
        </li>
        <li>
            <a href="tel:<?= esc_attr(get_option('phone')); ?>"><?php echo get_option('phone'); ?></a>
        </li>
    </ul>
    <a class="brand" href="<?php echo e(home_url('/')); ?>">
        <img src="<?= esc_attr(get_option('logo')); ?>" alt="Logo">
    </a>
    <ul>
        <li>
            <a><img src="<?= \Roots\asset('images/instagram.svg'); ?>"></a>
        </li>
        <li>
            <a><img src="<?= \Roots\asset('images/facebook.svg'); ?>"></a>
        </li>
    </ul>
</nav><?php /**PATH /var/www/html/wp-content/themes/umbria-theme/resources/views/sections/header_logo.blade.php ENDPATH**/ ?>