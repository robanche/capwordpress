<?php
/**
 * Version Control
 *
 *
 * @file           version.php
 * @package        WordPress 
 * @subpackage     Shell 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/shell-lite/includes/version.php
 * @link           N/A
 * @since          available since Release 1.0
 */
?>
<?php
$theme_data = get_theme_data(STYLESHEETPATH . '/style.css');
define('shell_current_theme', $theme_name = $theme_data['Name']);

function shell_template_data() {

    $theme_data = get_theme_data(TEMPLATEPATH . '/style.css');
    $shell_template_name = $theme_data['Name'];
    $shell_template_version = $theme_data['Version'];

    echo '<!-- We need this for debugging -->' . "\n";
    echo '<meta name="template" content="' . $shell_template_name . ' ' . $shell_template_version . '" />' . "\n";
}

add_action('wp_head', 'shell_template_data');

function shell_theme_data() {
    if (is_child_theme()) {
        $theme_data = get_theme_data(STYLESHEETPATH . '/style.css');
        $shell_theme_name = $theme_data['Name'];
        $shell_theme_version = $theme_data['Version'];

        echo '<meta name="theme" content="' . $shell_theme_name . ' ' . $shell_theme_version . '" />' . "\n";
    }
}

add_action('wp_head', 'shell_theme_data');