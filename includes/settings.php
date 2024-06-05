<?php

function range_slider_plugin_settings() {
    add_options_page(
        'Range Slider Settings',
        'Range Slider',
        'manage_options',
        'range-slider-plugin',
        'range_slider_plugin_settings_page'
    );
}

add_action('admin_menu', 'range_slider_plugin_settings');

function range_slider_plugin_settings_page() {
    ?>
    <div class="wrap">
        <h1>Range Slider Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('range_slider_plugin_options_group');
            do_settings_sections('range-slider-plugin');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function range_slider_plugin_register_settings() {
    register_setting('range_slider_plugin_options_group', 'range_slider_percentage_1');
    register_setting('range_slider_plugin_options_group', 'range_slider_percentage_2');

    add_settings_section('range_slider_plugin_main_section', 'Main Settings', null, 'range-slider-plugin');

    add_settings_field(
        'range_slider_percentage_1',
        'Percentage 1',
        'range_slider_plugin_percentage_1_callback',
        'range-slider-plugin',
        'range_slider_plugin_main_section'
    );

    add_settings_field(
        'range_slider_percentage_2',
        'Percentage 2',
        'range_slider_plugin_percentage_2_callback',
        'range-slider-plugin',
        'range_slider_plugin_main_section'
    );
}

add_action('admin_init', 'range_slider_plugin_register_settings');

function range_slider_plugin_percentage_1_callback() {
    $percentage1 = get_option('range_slider_percentage_1', 1);
    echo '<input type="number" name="range_slider_percentage_1" value="' . esc_attr($percentage1) . '" />';
}

function range_slider_plugin_percentage_2_callback() {
    $percentage2 = get_option('range_slider_percentage_2', 3);
    echo '<input type="number" name="range_slider_percentage_2" value="' . esc_attr($percentage2) . '" />';
}
