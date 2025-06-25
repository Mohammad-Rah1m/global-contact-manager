<?php
if (!defined('ABSPATH')) exit;

add_shortcode('global_primary_phone', function () {
    $options = get_option('gcm_contact_info');
    return isset($options['primary_phone']) ? esc_html($options['primary_phone']) : '';
});

add_shortcode('global_secondary_phone', function () {
    $options = get_option('gcm_contact_info');
    return isset($options['secondary_phone']) ? esc_html($options['secondary_phone']) : '';
});

add_shortcode('global_email_address', function () {
    $options = get_option('gcm_contact_info');
    return isset($options['email_address']) ? esc_html($options['email_address']) : '';
});

add_shortcode('global_address', function () {
    $options = get_option('gcm_contact_info');
    return isset($options['address']) ? esc_html($options['address']) : '';
});
