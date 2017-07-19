<?php
if (!function_exists('SNFL_AdminJS')) {
    function SNFL_AdminJS()
    {
        wp_enqueue_script('jquery');
        wp_register_script('SNFL_AdminJS', SNFL_PLUGIN_URL . 'js/admin.js');
        wp_enqueue_script('SNFL_AdminJS');
    }
}

if (!function_exists('SNFL_AdminCSS')) {
    function SNFL_AdminCSS()
    {
        wp_register_style("SNFL_AdminCSS", SNFL_PLUGIN_URL . 'css/admin.css', null, SNFL_VERSION);
        wp_enqueue_style('SNFL_AdminCSS');
    }

}

function SNFL_PluginSettings($action_links)
{
    $settings_link = '<a href="options-general.php?page=' . SNFL_ID . '">' . _e('Settings', 'SNFL') . '</a>';
    array_unshift($action_links, $settings_link);

    return $action_links;
}

if (!function_exists('SNFL_MenuOptions')) {
    function SNFL_MenuOptions()
    {
        add_options_page(SNFL_NAME, SNFL_NAME, 'manage_options', SNFL_ID, 'SNFL_SettingsPage');
    }
}


if (!function_exists('SNFL_SettingsPage')) {

    function SNFL_SettingsPage()
    {
        global $SNFL_IconsArray, $SNFL_DefaultOptions;
        $options = get_option("SNFL_Settings");
        if (!is_array($options)) {
            $options = $SNFL_DefaultOptions;
        }

        if (isset($_POST['SNFL_action']) && !empty($_POST['SNFL_action'])) {
            switch ($_POST['SNFL_action']) {
                case 'slider':
                    $options['position'] = strip_tags(stripslashes($_POST['position']));
                    $options['left_position'] = intval($_POST['left_position']);
                    $options['logo_position'] = intval($_POST['logo_position']);
                    $options['top_position'] = intval($_POST['top_position']);
                    $options['action'] = strip_tags(stripslashes($_POST['action']));
                    $options['icon'] = strip_tags(stripslashes($_POST['icon']));

                    $options['start_opacity'] = intval($_POST['start_opacity']);
                    $options['open_opacity'] = intval($_POST['open_opacity']);
                    $options['close_opacity'] = intval($_POST['close_opacity']);

                    $options['rounded_corners'] = ($_POST['rounded_corners'] == 'true') ? 'true' : 'false';
                    $options['open_time'] = intval($_POST['open_time']);
                    $options['close_time'] = intval($_POST['close_time']);
                    break;
                case 'primary':
                    $options['like_plugin'] = strip_tags(stripslashes($_POST['like_plugin']));
                    $options['pageURL'] = strip_tags(stripslashes($_POST['pageURL']));
                    break;
                case 'likebox':
                    $options['likebox_colorscheme'] = ($_POST['likebox_colorscheme'] == 'light') ? 'light' : 'dark';
                    $options['likebox_show_faces'] = ($_POST['likebox_show_faces'] == 'true') ? 'true' : 'false';
                    $options['likebox_stream'] = ($_POST['likebox_stream'] == 'true') ? 'true' : 'false';
                    $options['likebox_header'] = ($_POST['likebox_header'] == 'true') ? 'true' : 'false';
                    $options['likebox_width'] = intval($_POST['likebox_width']);
                    $options['likebox_height'] = LikeBoxHeight($options['likebox_show_faces'], $options['likebox_stream'], $options['likebox_header']);
                    break;
                case 'likebtn':
                    $options['likebtn_layout'] = strip_tags(stripslashes($_POST['likebtn_layout']));
                    $options['likebtn_colorscheme'] = ($_POST['likebtn_colorscheme'] == 'light') ? 'light' : 'dark';
                    $options['likebtn_show_faces'] = ($_POST['likebtn_show_faces'] == 'true') ? 'true' : 'false';
                    $options['likebtn_action'] = ($_POST['likebtn_action'] == 'like') ? 'like' : 'recommend';

                    $likebtn_width = intval($_POST['likebtn_width']);
                    $options['likebtn_width'] = ($likebtn_width > $likeBtn_minWidth[$options['likebtn_layout']]) ? $likebtn_width
                        : $likeBtn_minWidth[$options['likebtn_layout']];
                    $options['likebtn_height'] = LikeButtonHeight($options['likebtn_layout'], $options['likebtn_show_faces']);
                    break;
            }
            update_option("SNFL_Settings", $options);
        }

        $pageURL = htmlspecialchars($options['pageURL'], ENT_QUOTES);

        $likebox_colorscheme = htmlspecialchars($options['likebox_colorscheme'], ENT_QUOTES);
        $likebox_show_faces = htmlspecialchars($options['likebox_show_faces'], ENT_QUOTES);
        $likebox_stream = htmlspecialchars($options['likebox_stream'], ENT_QUOTES);
        $likebox_header = htmlspecialchars($options['likebox_header'], ENT_QUOTES);
        $likebox_width = $options['likebox_width'];

        $likebtn_width = $options['likebtn_width'];
        $likebtn_layout = htmlspecialchars($options['likebtn_layout'], ENT_QUOTES);
        $likebtn_colorscheme = htmlspecialchars($options['likebtn_colorscheme'], ENT_QUOTES);
        $likebtn_show_faces = htmlspecialchars($options['likebtn_show_faces'], ENT_QUOTES);
        $likebtn_action = htmlspecialchars($options['likebtn_action'], ENT_QUOTES);

        $like_plugin = $options['like_plugin'];

        $position = $options['position'];
        $top_position = $options['top_position'];
        $left_position = $options['left_position'];
        $logo_position = $options['logo_position'];

        $open_time = $options['open_time'];
        $close_time = $options['close_time'];

        $start_opacity = $options['start_opacity'];
        $open_opacity = $options['open_opacity'];
        $close_opacity = $options['close_opacity'];

        $rounded_corners = $options['rounded_corners'];
        $action = $options['action'];
        $icon = $options['icon'];

        require_once 'admin/main.php';
    }

}
add_action('admin_menu', 'SNFL_MenuOptions');
add_action('admin_init', 'SNFL_AdminJS');
add_action('admin_init', 'SNFL_AdminCSS');