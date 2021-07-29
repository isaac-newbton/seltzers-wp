<?php

function aca_theme_add_admin_page(){
    add_menu_page('Seltzer\'s Theme Options', 'Seltzer\'s', 'manage_options', 'aca_seltzers', 'aca_theme_create_page', 'dashicons-admin-settings', 110);

    add_submenu_page('aca_seltzers', 'Seltzer\'s Theme Options', 'Settings', 'manage_options', 'aca_seltzers', 'aca_theme_create_page');

    add_action('admin_init', 'aca_theme_custom_settings');
}
add_action('admin_menu', 'aca_theme_add_admin_page');

function aca_theme_custom_settings(){
    register_setting('aca-settings', 'aca_footer_logo');
    register_setting('aca-settings', 'aca_facebook_profile_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_twitter_profile_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_linkedin_profile_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_instagram_profile_url', 'sanitize_social_url');
    register_setting('aca-settings', 'aca_footer_copyright');

    add_settings_section('aca-theme-settings', 'Theme Settings', 'aca_theme_options', 'aca_seltzers');

    add_settings_field('aca-footer-logo', 'Footer Logo', 'aca_footer_logo', 'aca_seltzers', 'aca-theme-settings');
    add_settings_field('aca-footer-copyright', 'Footer Copyright', 'aca_footer_copyright', 'aca_seltzers', 'aca-theme-settings');
    add_settings_field('aca-social-fb', 'Facebook URL', 'aca_facebook_url', 'aca_seltzers', 'aca-theme-settings');
    add_settings_field('aca-social-tw', 'Twitter URL', 'aca_twitter_url', 'aca_seltzers', 'aca-theme-settings');
    add_settings_field('aca-social-li', 'Linkedin URL', 'aca_linkedin_url', 'aca_seltzers', 'aca-theme-settings');
    add_settings_field('aca-social-in', 'Instagram URL', 'aca_instagram_url', 'aca_seltzers', 'aca-theme-settings');
}

function aca_footer_logo(){
    $value = esc_attr(get_option('aca_footer_logo'));
    echo '<div class="site-footer"><img id="footer_logo" width="200px" src="'.$value.'" /></div><input type="button" value="Set Footer Logo" id="upload_footer_logo_button" class="button button-secondary" /><input type="hidden" name="aca_footer_logo" id="upload_footer_logo_input" value="'.$value.'" />';
}

function aca_facebook_url(){
    $value = esc_attr(get_option('aca_facebook_profile_url'));
    echo '<input type="text" name="aca_facebook_profile_url" class="regular-text" value="'.$value.'" />';
}

function aca_twitter_url(){
    $value = esc_attr(get_option('aca_twitter_profile_url'));
    echo '<input type="text" name="aca_twitter_profile_url" class="regular-text" value="'.$value.'" />';
}

function aca_linkedin_url(){
    $value = esc_attr(get_option('aca_linkedin_profile_url'));
    echo '<input type="text" name="aca_linkedin_profile_url" class="regular-text" value="'.$value.'" />';
}

function aca_instagram_url(){
    $value = esc_attr(get_option('aca_instagram_profile_url'));
    echo '<input type="text" name="aca_instagram_profile_url" class="regular-text" value="'.$value.'" />';
}

function aca_footer_copyright(){
    $value = esc_attr(get_option('aca_footer_copyright'));
    echo '<span>&copy;' . date('Y') . ' </span><input type="text" name="aca_footer_copyright" class="regular-text" value="'.$value.'" />';
}

function sanitize_social_url($url){
    $url = sanitize_text_field($url);
    return $url;
}

function aca_theme_options(){
    echo 'Customize options';
}

function aca_theme_create_page(){
    require_once get_template_directory() . '/inc/templates/admin-options.php';
}