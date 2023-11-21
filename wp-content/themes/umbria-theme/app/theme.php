<?php
namespace Umbria;
class Umbria {
    public function __construct() {
        add_action('admin_menu', [$this, 'add_admin_menu']);
        add_action('admin_init', [$this, 'register_settings']);
    }

    public function add_admin_menu() {
        add_menu_page('Moje Opcje', 'Moje Opcje', 'manage_options', 'my-theme-settings', [$this, 'settings_page']);
    }

    public function settings_page() {
        $options = include get_template_directory() . '/app/config.php';
        include get_template_directory() . '/app/Admin/settings-page.php';
    }

    public function register_settings() {
        register_setting('my-theme-settings', 'logo', [$this, 'sanitize_logo']);
        register_setting('my-theme-settings', 'email');
        register_setting('my-theme-settings', 'phone');
    }

    public function sanitize_logo($value) {
        if (isset($_FILES['logo']) && $_FILES['logo']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = wp_upload_dir();
            $file_name = sanitize_file_name($_FILES['logo']['name']);
            $file_path = $upload_dir['path'] . '/' . $file_name;
    
            move_uploaded_file($_FILES['logo']['tmp_name'], $file_path);
    
            $value = $upload_dir['url'] . '/' . $file_name;
        }
    
        return $value;
    }
}
?>