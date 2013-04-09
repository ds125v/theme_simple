<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Custom CSS file.
    $name = 'theme_simple/customcss';
    $title = get_string('customcss','theme_simple');
    $description = get_string('customcssdesc', 'theme_simple');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_simple/footnote';
    $title = get_string('footnote','theme_simple');
    $description = get_string('footnotedesc', 'theme_simple');
    $default = get_string('footnotetxt', 'theme_simple');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $settings->add($setting);
}