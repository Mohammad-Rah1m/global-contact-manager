<?php
if (!defined('ABSPATH')) exit;

// Register settings page
add_action('admin_menu', function () {
    add_menu_page(
        'Global Contact Info',
        'Contact Info',
        'manage_options',
        'gcm-settings',
        'gcm_render_settings_page',
        'dashicons-phone',
        90
    );
});

function gcm_render_settings_page() {
    ?>
    <div class="wrap">
        <h1>Global Contact Information</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('gcm_settings_group');
            do_settings_sections('gcm-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register settings
add_action('admin_init', function () {
    register_setting('gcm_settings_group', 'gcm_contact_info', 'gcm_sanitize_input');

    add_settings_section('gcm_section', '', null, 'gcm-settings');

    $fields = [
        'primary_phone' => 'Primary Phone Number',
        'secondary_phone' => 'Secondary Phone Number',
        'email_address' => 'Email Address',
        'address' => 'Physical Address'
    ];

    foreach ($fields as $key => $label) {
        add_settings_field(
            $key,
            $label,
            function () use ($key,$label) {
                $options = get_option('gcm_contact_info');
                $value = isset($options[$key]) ? esc_attr($options[$key]) : '';
                
                echo "<input type='text' placeholder='Enter {$label} ' name='gcm_contact_info[$key]' value='$value' class='regular-text'>";

                echo "<code>Shortcode: [global_{$key}]</code>";
            },
            'gcm-settings',
            'gcm_section'
        );
    }
});

function gcm_sanitize_input($input) {
    return [
        'primary_phone'   => sanitize_text_field($input['primary_phone']),
        'secondary_phone'   => sanitize_text_field($input['secondary_phone']),
        'email_address'   => sanitize_email($input['email_address']),
        'address' => sanitize_text_field($input['address']),
    ];
}
