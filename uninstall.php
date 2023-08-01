<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit(403);
}

foreach (array('customizer', 'gutenberg', 'gutenberg_merge', 'gutenberg_force', 'css_vars', 'css_admin_vars', 'elementor', 'acf', 'suki_theme', 'fontpress', 'astra_theme', 'astra_theme_alpha', 'oxygen_vsb', 'gp', 'gp_alpha', 'oceanwp', 'oceanwp_alpha', 'beaverbuilder', 'palette', 'version', 'next_index', 'spread', 'clamps', 'blocks', 'block_size', 'block_axis', 'visual', 'clamp', 'luma', 'cols', 'rows', 'type', 'map') as $key) {
    delete_site_option("kt_color_grid_{$key}");
}

foreach (array('closedpostboxes', 'metaboxhidden', 'meta-box-order', 'screen_layout') as $key) {
    delete_metadata('user', null, "{$key}_settings_page_kt_tinymce_color_grid", null, true);
}

foreach (array('color_grid_autoname', 'export_settings', 'export_palette', 'export_format', 'export_css_vars_selector') as $key) {
    setcookie("kt_{$key}", '', 1);
}

foreach (array('css', 'css_vars', 'scss') as $key) {
    setcookie("kt_export_{$key}_color_format", '', 1);
    setcookie("kt_export_{$key}_color_compact", '', 1);
    foreach(array ('prefix', 'suffix') as $_key) {
        setcookie("kt_export_{$key}_{$_key}", '', 1);
    }
}
