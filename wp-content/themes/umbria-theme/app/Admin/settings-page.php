<div class="wrap">
    <h2>Opcje motywu</h2>
    <form method="post" action="options.php" enctype="multipart/form-data">
        <?php settings_fields('my-theme-settings'); ?>
        <?php do_settings_sections('my-theme-settings'); ?>
        <table class="form-table">
            <tr>
                <th scope="row">Logo</th>
                <td>
                    <input type="file" name="logo" accept="image/*">
                    <br>
                    <?php if (!empty($options['logo'])) : ?>
                        <img src="<?= esc_attr($options['logo']); ?>" style="max-width: 200px;">
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>
                    <input type="text" value="<?= esc_attr($options['email']); ?>" name="email" accept="text">        
                </td>
            </tr>
            <tr>
                <th scope="row">Telefon</th>
                <td>
                    <input type="text" value="<?= esc_attr($options['phone']); ?>" name="phone" accept="text">        
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
