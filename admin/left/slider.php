<?php $opacityRange = range(5,100,5); ?>
<h3><?php _e('Slider settings', 'SNFL'); ?></h3>
<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" id="SNFL_settings">
    <table width="100%" class="options" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td class="catLeft"><?php _e('Position:', 'SNFL'); ?></td>
                <td class="inputTD">
                    <select name="position" id="position" onchange="SNFL_selectPosition()">
                        <option <?php if ($position == 'left') echo 'selected="selected"'; ?> value="left"><?php _e('left', 'SNFL'); ?></option>
                        <option <?php if ($position == 'right') echo 'selected="selected"'; ?> value="right"><?php _e('right', 'SNFL'); ?></option>
                        <option <?php if ($position == 'top') echo 'selected="selected"'; ?> value="top"><?php _e('top', 'SNFL'); ?></option>
                        <option <?php if ($position == 'bottom') echo 'selected="selected"'; ?> value="bottom"><?php _e('bottom', 'SNFL'); ?></option>
                    </select>
                </td>
                <td class="extra small"><?php _e('Position of slider', 'SNFL'); ?></td>
            </tr>
            <tr>
                <td class="catLeft"><?php _e('Top position:', 'SNFL'); ?></td>
                <td class="inputTD_small"><input id="topPosition" type="text" name="top_position" value="<?php echo $top_position; ?>" /></td>
                <td class="extra small"><?php _e('Number of pixels from the top edge (Works only at left or right position)', 'SNFL'); ?></td>
            </tr>
            <tr>
                <td class="catLeft"><?php _e('Left position:', 'SNFL'); ?></td>
                <td class="inputTD_small"><input readonly="readonly" type="text" id="leftPosition" name="left_position" value="<?php echo $left_position; ?>" /></td>
                <td class="extra small"><?php _e('Number of pixels from the left edge (Works only at top or bottom position)', 'SNFL'); ?></td>
            </tr>
            <tr>
                <td class="catLeft"><?php _e('Logo position:', 'SNFL'); ?></td>
                <td class="inputTD_small"><input type="text" id="leftPosition" name="logo_position" value="<?php echo $logo_position; ?>" /></td>
                <td class="extra small"><?php _e('Logo position in px', 'SNFL'); ?></td>
            </tr>
            <tr>
                <td class="catLeft"><?php _e('Action:', 'SNFL'); ?></td>
                <td class="inputTD">
                    <select name="action">
                        <option <?php if ($action == 'hover') echo 'selected="selected"'; ?> value="hover"><?php _e('hover', 'SNFL'); ?></option>
                        <option <?php if ($action == 'click') echo 'selected="selected"'; ?> value="click"><?php _e('click', 'SNFL'); ?></option>
                    </select>
                </td>
                <td class="extra small"><?php _e('Slider action after hover or click', 'SNFL'); ?></td>
            </tr>
            <tr>
                <td class="catLeft"><?php _e('Open time:', 'SNFL'); ?></td>
                <td class="inputTD_small"><input type="text" name="open_time" value="<?php echo $open_time; ?>" /></td>
                <td class="extra small"><?php _e('Slider opening time in ms.', 'SNFL'); ?></td>
            </tr>
            <tr>
                <td class="catLeft"><?php _e('Close time:', 'SNFL'); ?></td>
                <td class="inputTD_small"><input type="text" name="close_time" value="<?php echo $close_time; ?>" /></td>
                <td class="extra small"><?php _e('Slider closing time in ms.', 'SNFL'); ?></td>
            </tr>
            
            <tr>
                <td class="catLeft"><?php _e('Rounded corners:', 'SNFL'); ?></td>
                <td class="inputTD">
                    <select name="rounded_corners">
                        <option <?php if ($rounded_corners == 'true') echo 'selected="selected"'; ?> value="true"><?php _e('yes', 'SNFL'); ?></option>
                        <option <?php if ($rounded_corners == 'false') echo 'selected="selected"'; ?> value="false"><?php _e('no', 'SNFL'); ?></option>
                    </select>
                </td>
                <td class="extra small"><?php _e('Start opacity of "SN Facebook Like" box', 'SNFL'); ?></td>
            </tr>
            
            <tr>
                <td class="catLeft"><?php _e('Start opacity:', 'SNFL'); ?></td>
                <td class="inputTD">
                    <select name="start_opacity">
                        <?php foreach ($opacityRange as $k => $oValue): ?>
                        <option <?php if ($start_opacity == $oValue) echo 'selected="selected"'; ?> value="<?php echo $oValue; ?>"><?php echo $oValue; ?>%</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="extra small"><?php _e('Start opacity of "SN Facebook Like" box', 'SNFL'); ?></td>
            </tr>
            
            <tr>
                <td class="catLeft"><?php _e('Open opacity:', 'SNFL'); ?></td>
                <td class="inputTD">
                    <select name="open_opacity">
                        <?php foreach ($opacityRange as $k => $oValue): ?>
                        <option <?php if ($open_opacity == $oValue) echo 'selected="selected"'; ?> value="<?php echo $oValue; ?>"><?php echo $oValue; ?>%</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="extra small"><?php _e('Open opacity of "SN Facebook Like" box', 'SNFL'); ?></td>
            </tr>
            
            <tr>
                <td class="catLeft"><?php _e('Close opacity:', 'SNFL'); ?></td>
                <td class="inputTD">
                    <select name="close_opacity">
                        <?php foreach ($opacityRange as $k => $oValue): ?>
                        <option <?php if ($close_opacity == $oValue) echo 'selected="selected"'; ?> value="<?php echo $oValue; ?>"><?php echo $oValue; ?>%</option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td class="extra small"><?php _e('Close opacity of "SN Facebook Like" box', 'SNFL'); ?></td>
            </tr>
            
            <tr>
                <td class="catLeft"><?php _e('Icon:', 'SNFL'); ?></td>
                <td class="inputTD">
                    <table>
                        <tbody>
                        <?php if (is_array($SNFL_IconsArray) && count($SNFL_IconsArray) > 1): ?>
                            <?php foreach ($SNFL_IconsArray as $k => $fIcon):
                                $checked = ($icon == $fIcon) ? 'checked="checked"' : '';
                             ?>
                            <tr>
                                <td><input <?php echo $checked; ?> type="radio" name="icon" value="<?php echo $fIcon; ?>" /></td>
                                <td><img src="<?php echo SNFL_PLUGIN_URL . 'img/'.$fIcon; ?>" alt="<?php echo $fIcon; ?>" /></td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </td>
                <td class="extra small"><?php _e('Slider icon', 'SNFL'); ?></td>
            </tr>
            <tr>
                <td class="catLeft"></td>
                <td colspan="2">
                    <input type="hidden" name="SNFL_action" value="slider">
                    <input type="submit" id="SNFLsubmit-icon" name="SNFL_submit" class="button-primary" value="<?php _e('Save settings', 'SNFL'); ?>" />
                </td>
            </tr>
        </tbody>
    </table>
</form>