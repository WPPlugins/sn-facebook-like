<?php

if (!function_exists('SNFL_ScriptInit')) {
    function SNFL_ScriptInit()
    {
        $jsReady = SNFL_JSReady();
        $html = '<script type="text/javascript">' . "\n";
        $html .= "  jQuery(document).ready(function(){jQuery('." . SNFL_ID . "').retioSlider({" . $jsReady . "});});\n";
        $html .= '</script>' . "\n";
        return $html;
    }
}

if (!function_exists('SNFL_Footer')) {
    function SNFL_Footer()
    {
        return '<div class="sn-footer-url"><a rel="nofollow" href="' . SNFL_URL . '" title="' . SNFL_NAME . '">' . SNFL_NAME . '</a></div>' . "\n";
    }
}

if (!function_exists('SNFL_LikeBox')) {
    function SNFL_LikeBox($onlyIframe = false)
    {
        global $SNFL_DefaultOptions;

        $options = get_option("SNFL_Settings");
        if (!$options) {
            $options = $SNFL_DefaultOptions;
        }

        if (empty($options['pageURL'])) {
            return false;
        }

        $params = array(
            'href'        => $options['pageURL'],
            'width'       => $options['likebox_width'],
            'height'      => $options['likebox_height'],
            'colorscheme' => $options['likebox_colorscheme'],
            'show_faces'  => $options['likebox_show_faces'],
            'stream'      => $options['likebox_stream'],
            'header'      => $options['likebox_header'],
        );

        $corners = ($options['rounded_corners'] == 'true') ? ' SN-Facebook-Like-Corners' : '';


        $darkStyles = ($params['colorscheme'] == 'dark')
            ? ' SN-Facebook-Like-Dark'
            : '';

        if ($params['colorscheme'] == 'dark') {
            $params['border_color'] = '#333333';
        }

        $urlParams = http_build_query($params);

        $iframe = '<iframe src="http://www.facebook.com/plugins/likebox.php?' . $urlParams . '" ';
        $iframe .= 'scrolling="no" ';
        $iframe .= 'frameborder="0" ';
        $iframe .= 'style="border:none;overflow:hidden;width:' . $options['likebox_width'] . 'px;height:' . $options['likebox_height'] . 'px" ';
        $iframe .= 'allowTransparency="true"';
        $iframe .= '></iframe>' . "\n";

        if ($onlyIframe == false) {
            $imageURL = SNFL_IMAGE_URL . $options['icon'];
            list ($iWidth, $iHeight) = getimagesize(SNFL_IMAGE_DIR . $options['icon']);

            $html = '<!-- ' . SNFL_NAME . ' ' . SNFL_VERSION . ' START -->' . "\n";
            $html .= SNFL_ScriptInit();
            $html .= '<div class="' . SNFL_ID . ' slider-box">' . "\n";
            $html .= '  <div class="slider-content ' . $darkStyles . $corners . '">' . "\n";
            $html .= $iframe;
            $html .= SNFL_Footer();
            $html .= '</div>' . "\n";
            $html .= '  <div class="slider-logo"><img src="' . $imageURL . '" width="' . $iWidth . '" height="' . $iHeight . '" /></div>' . "\n";
            $html .= '</div>' . "\n";
            $html .= '<!-- ' . SNFL_NAME . ' ' . SNFL_VERSION . ' END -->' . "\n";
            echo $html;
        } else {
            echo $iframe;
        }
    }
}

if (!function_exists('SNFL_LikeButton')) {

    function SNFL_LikeButton($onlyIframe = false)
    {
        global $SNFL_DefaultOptions;

        $options = get_option("SNFL_Settings");
        if (!$options) {
            $options = $SNFL_DefaultOptions;
        }

        if (empty($options['pageURL'])) {
            return false;
        }

        $params = array(
            'href'        => $options['pageURL'],
            'width'       => $options['likebtn_width'],
            'height'      => $options['likebtn_height'],
            'colorscheme' => $options['likebtn_colorscheme'],
            'show_faces'  => $options['likebtn_show_faces'],
            'action'      => $options['likebtn_action'],
            'layout'      => $options['likebtn_layout'],
            'send'        => 'false'
        );
        $corners = ($options['rounded_corners'] == 'true') ? ' SN-Facebook-Like-Corners' : '';

        $darkStyles = ($params['colorscheme'] == 'dark')
            ? ' SN-Facebook-Like-Dark'
            : '';

        $urlParams = http_build_query($params);

        $iframe = '<iframe src="//www.facebook.com/plugins/like.php?' . $urlParams . '"';
        $iframe .= 'scrolling="no" ';
        $iframe .= 'frameborder="0" ';
        $iframe .= 'style="border:none;overflow:hidden;width:' . $options['likebtn_width'] . 'px;height:' . $options['likebtn_height'] . 'px" ';
        $iframe .= 'allowTransparency="true"';
        $iframe .= '></iframe>' . "\n";
        if ($onlyIframe == false) {
            $snFooterURL = '<div class="sn-footer-url"><a href="' . SNFL_URL . '" title="' . SNFL_NAME . '">' . SNFL_NAME . '</a></div>' . "\n";

            $imageURL = SNFL_IMAGE_URL . $options['icon'];
            list ($iWidth, $iHeight) = getimagesize(SNFL_IMAGE_DIR . $options['icon']);

            $html = '<!-- ' . SNFL_NAME . ' ' . SNFL_VERSION . ' START -->' . "\n";
            $html .= SNFL_ScriptInit();
            $html .= '<div class="' . SNFL_ID . ' slider-box">' . "\n";
            $html .= '  <div class="slider-content ' . $darkStyles . $corners . '">' . "\n";
            $html .= $iframe;
            $html .= SNFL_Footer();
            $html .= '</div>' . "\n";
            $html .= '  <div class="slider-logo"><img alt="" src="' . $imageURL . '" width="' . $iWidth . '" height="' . $iHeight . '" /></div>' . "\n";
            $html .= '</div>' . "\n";
            $html .= '<!-- ' . SNFL_NAME . ' ' . SNFL_VERSION . ' END -->' . "\n";
            echo $html;
        } else {
            echo $iframe;
        }
    }
}

if (!function_exists('SNFL_CSS')) {
    function SNFL_CSS()
    {
        wp_register_style("SNFL_CUSTOM_CSS", SNFL_PLUGIN_URL . 'css/sn-facebook-like.css', null, SNFL_VERSION);
        wp_enqueue_style('SNFL_CUSTOM_CSS');
    }
}

if (!function_exists('RetioSlider_CSS')) {
    function RetioSlider_CSS()
    {
        wp_register_style("SNFL_CSS", SNFL_PLUGIN_URL . 'css/retioSlider.css', null, SNFL_VERSION);
        wp_enqueue_style('SNFL_CSS');
    }
}

if (!function_exists('RetioSlider_JS')) {
    function RetioSlider_JS()
    {
        wp_enqueue_script('jquery');
        wp_register_script('SNFL_JS', SNFL_PLUGIN_URL . 'js/retioSlider.min.js');
        wp_enqueue_script('SNFL_JS');
    }
}

if (!function_exists('SNFL_INIT')) {
    function SNFL_INIT()
    {
        global $SNFL_DefaultOptions;
        $options = get_option("SNFL_Settings");
        if (!$options) {
            $options = $SNFL_DefaultOptions;
        }

        if ($options['like_plugin'] == 'like_box') {
            SNFL_LikeBox();
        } else {
            if ($options['like_plugin'] == 'like_button') {
                SNFL_LikeButton();
            }
        }
    }
}

if (!function_exists('SNFL_Widget')) {
    function SNFL_Widget()
    {
        global $SNFL_DefaultOptions;
        $options = get_option("SNFL_Settings");
        if (!$options) {
            $options = $SNFL_DefaultOptions;
        }

        if ($options['like_plugin'] == 'like_box') {
            SNFL_LikeBox(true);
        } else {
            if ($options['like_plugin'] == 'like_button') {
                SNFL_LikeButton(true);
            }
        }
    }
}


if (!function_exists('SNFL_WidgetInit')) {
    function SNFL_WidgetInit()
    {
        wp_register_sidebar_widget('SNFL_Widget', SNFL_NAME . ' Widget', 'SNFL_Widget');
    }
}

/**
 * Others func
 */

function LikeBoxHeight($faces, $stream, $header)
{
    $faces = ($faces == 'true') ? true : false;
    $stream = ($stream == 'true') ? true : false;
    $header = ($header == 'true') ? true : false;

    $height = 0;
    switch (true) {
        case (!$faces && !$stream):
            $height = 62;
            break;
        case ($faces && !$stream && !$header):
            $height = 258;
            break;
        case ($faces && !$stream && $header):
            $height = 290;
            break;
        case (!$faces && $stream && !$header):
            $height = 395;
            break;
        case ($faces && $stream && $header):
            $height = 590;
            break;
        case (!$faces && $stream && $header):
            $height = 427;
            break;
        case ($faces && $stream && !$header):
        default:
            $height = 558;
            break;
    }
    return intval($height);
}

function LikeButtonHeight($layout, $faces)
{
    $faces = ($faces == 'true') ? true : false;

    $height = 0;
    switch ($layout) {
        case ($layout == 'standard' && $faces):
            $height = 80;
            break;
        case ($layout == 'standard' && !$faces):
            $height = 35;
            break;
        case 'button_count':
            $height = 21;
            break;
        case 'box_count':
        default:
            $height = 90;
            break;
    }
    return intval($height);
}

function SNFL_comma2dot($val)
{
    $newVal = str_replace(',', '.', $val);
    return $newVal;
}

function SNFL_JSReady()
{
    global $SNFL_DefaultOptions, $SNFL_StringValParams;

    $options = get_option("SNFL_Settings");
    if (!$options) {
        $options = $SNFL_DefaultOptions;
    }

    $params = array();
    $params['direction'] = $options['position'];
    switch ($params['direction']) {
        case 'left':
        case 'right':
            if ($options['top_position'] >= 0) {
                $params['topPosition'] = $options['top_position'];
            }
            break;
        case 'top':
        case 'bottom':
            if ($options['left_position'] >= 0) {
                $params['leftPosition'] = $options['left_position'];
            }
            break;
    }

    $params['startOpacity'] = SNFL_comma2dot($options['start_opacity'] / 100);
    $params['openOpacity'] = SNFL_comma2dot($options['open_opacity'] / 100);
    $params['closeOpacity'] = SNFL_comma2dot($options['close_opacity'] / 100);

    $params['openTime'] = ($options['open_time'] >= 0) ? $options['open_time'] : 0;
    $params['closeTime'] = ($options['close_time'] >= 0) ? $options['close_time'] : 0;
    $params['action'] = $options['action'];
    $params['logoPosition'] = ($options['logo_position'] >= 0) ? $options['logo_position'] : 0;

    $p = '';
    foreach ($params as $name => $value) {
        $p .= (in_array($name, $SNFL_StringValParams)) ? "'$name':'$value'," : "'$name':$value,";
    }

    $p = (substr($p, -1) == ',') ? substr($p, 0, -1) : $p;
    return $p;
}