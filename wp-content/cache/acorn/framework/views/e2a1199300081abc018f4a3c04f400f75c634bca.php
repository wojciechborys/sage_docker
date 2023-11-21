<aside class="nav__upper--wrapper">
    <div class="container">
        <nav class="nav__upper">

        <ul class="nav__upper--contact">
            <li>
                <a href="mailto:<?= esc_attr(get_option('email')); ?>"><?php echo get_option('email'); ?></a>
            </li>
            <li>
                <a href="tel:<?= esc_attr(get_option('phone')); ?>"><?php echo get_option('phone'); ?></a>
            </li>
        </ul>

        <ul class="nav__upper--socials">
            <li>
                <a><img src="<?= \Roots\asset('images/instagram.svg'); ?>"></a>
            </li>
            <li>
                <a><img src="<?= \Roots\asset('images/facebook.svg'); ?>"></a>
            </li>
        </ul>
        </nav>
    </div>
</aside>
<?php /**PATH /var/www/html/wp-content/themes/umbria-theme/resources/views/sections/header_upper.blade.php ENDPATH**/ ?>