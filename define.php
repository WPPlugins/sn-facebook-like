<?php
define('SNFL_ID', 'SN-Facebook-Like');
define('SNFL_NAME', 'SN Facebook Like');
define('SNFL_VERSION', '1.5.4');
define('SNFL_AUTHOR', 'Mateusz Lerczak');

define('SNFL_DIR', basename(dirname(__FILE__)));
define('SNFL_IMAGE_DIR', WP_PLUGIN_DIR. '/' . SNFL_DIR . '/img/');
define('SNFL_IMAGE_URL', WP_PLUGIN_URL. '/' . SNFL_DIR . '/img/');

define('SNFL_MAIN_FILE', SNFL_DIR.'.php');
define('SNFL_PLUGIN_URL', WP_PLUGIN_URL . '/' . SNFL_DIR . '/');

define('SNFL_FB_URL', 'https://www.facebook.com/WP.Extend');
define('SNFL_URL', 'http://wp-extend.info/plugins/facebook/sn-facebook-like/');

$SNFL_DefaultOptions = array(
    'pageURL'       => '',
    'likebox_colorscheme'   => 'light',
    'likebox_show_faces'    => 'true',
    'likebox_stream'        => 'true',
    'likebox_header'        => 'false',
    'likebox_width'         => 292,
    'likebox_height'        => 558,
    
    'likebtn_width'         => 55,
    'likebtn_layout'        => 'box_count',
    'likebtn_show_faces'    => 'true',
    'likebtn_action'        => 'like',
    'likebtn_colorscheme'   => 'light',
    
    'like_plugin'           => 'like_box',
    'position'              => 'left',
    'left_position'         => 50,
    'top_position'          => 150,
    'logo_position'         => 0,
    'action'                => 'hover',
    'icon'                  => 'left.png',
    'open_time'             => 500,
    'close_time'            => 500,
    'start_opacity'         => 75,
    'open_opacity'          => 100,
    'close_opacity'         => 75,
    'rounded_corners'       => 'false'
);


$SNFL_StringValParams = array(
    'action',
    'direction'
);

$likeBtn_minWidth = array(
    'standard'      => 225,
    'button_count'  => 90,
    'box_count'     => 55,
);

$SNFL_IconsArray = array(
    'left.png',
    'right.png',
    'top.png',
    'bottom.png',
    'fb-icon-1.png',
    'fb-icon-2.png',
    'fb-icon-3.png',
    'fb-icon-4.png',
    'fb-icon-5.png',
    'fb-icon-6.png',
    'fb-icon-7.png',
    'fb-icon-8.png',
    'fb-icon-9.png',
    'fb-icon-10.png',
    'fb-icon-11.png'
);