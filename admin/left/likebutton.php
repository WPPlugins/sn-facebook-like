<div id="like_button">
    <h3><?php _e('Settings - Like Button', 'SNFL'); ?></h3>
    <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" id="SNFL_settings">
        <table width="100%" class="options">
            <tbody>
                <tr>
                    <td class="catLeft"><?php _e('Layout style:', 'SNFL'); ?></td>
                    <td class="inputTD">
                        <select id="likebtn_layout" name="likebtn_layout" onchange="SNFL_LikeButtonLayout()">
                            <option <?php if ($likebtn_layout == 'standard') echo 'selected="selected"'; ?> value="standard"><?php _e('standard', 'SNFL'); ?></option>
                            <option <?php if ($likebtn_layout == 'button_count') echo 'selected="selected"'; ?> value="button_count"><?php _e('button_count', 'SNFL'); ?></option>
                            <option <?php if ($likebtn_layout == 'box_count') echo 'selected="selected"'; ?> value="box_count"><?php _e('box_count', 'SNFL'); ?></option>
                        </select>
                    </td>
                    <td class="extra small"><?php _e('Determines the size and amount of social context next to the button.', 'SNFL'); ?></td>                
                </tr>
                <tr>
                    <td class="catLeft"><?php _e('Width:', 'SNFL'); ?></td>
                    <td class="inputTD_small"><input id="likebtn_width" type="text" name="likebtn_width" value="<?php echo $likebtn_width; ?>" /></td>
                    <td class="extra small"><?php _e('The width of the plugin in pixels.', 'SNFL'); ?></td>                
                </tr>
                <tr>
                    <td class="catLeft"><?php _e('Color scheme:', 'SNFL'); ?></td>
                    <td class="inputTD">
                        <select name="likebtn_colorscheme">
                            <option <?php if ($likebtn_colorscheme == 'light') echo 'selected="selected"'; ?> value="light"><?php _e('light', 'SNFL'); ?></option>
                            <option <?php if ($likebtn_colorscheme == 'dark') echo 'selected="selected"'; ?> value="dark"><?php _e('dark', 'SNFL'); ?></option>
                        </select>
                    </td>
                    <td class="extra small"><?php _e('The color scheme of the plugin.', 'SNFL'); ?></td>                
                </tr>
                <tr>
                    <td class="catLeft"><?php _e('Show faces:', 'SNFL'); ?></td>
                    <td class="inputTD">
                        <select name="likebtn_show_faces">
                            <option <?php if ($likebtn_show_faces == 'true') echo 'selected="selected"'; ?> value="true"><?php _e('yes', 'SNFL'); ?></option>
                            <option <?php if ($likebtn_show_faces == 'false') echo 'selected="selected"'; ?> value="false"><?php _e('no', 'SNFL'); ?></option>
                        </select>
                    </td>
                    <td class="extra small"><?php _e('Show profile photos in the plugin.', 'SNFL'); ?></td>
                </tr>
                <tr>
                    <td class="catLeft"><?php _e('Verb to display:', 'SNFL'); ?></td>
                    <td class="inputTD">
                        <select name="likebtn_action">
                            <option <?php if ($likebtn_action == 'like') echo 'selected="selected"'; ?> value="like"><?php _e('like', 'SNFL'); ?></option>
                            <option <?php if ($likebtn_action == 'recommend') echo 'selected="selected"'; ?> value="recommend"><?php _e('recommend', 'SNFL'); ?></option>
                        </select>
                    </td>
                    <td class="extra small"><?php _e('The verb to display in the button.', 'SNFL'); ?></td>
                </tr>

                <tr>
                    <td class="catLeft"></td>
                    <td colspan="2">
                        <input type="hidden" name="SNFL_action" value="likebtn" />
                        <input type="submit" name="SNFL_submit" class="button-primary" value="<?php _e('Save settings', 'SNFL'); ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>