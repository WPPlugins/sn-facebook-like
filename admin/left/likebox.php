<div id="like_box"> 
    <h3><?php _e('Settings - Like Box', 'SNFL'); ?></h3>
    <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>" id="frm-SNFLsettings">
        <table width="100%" class="options">
            <tbody>
                <tr>
                    <td class="catLeft"><?php _e('Width:', 'SNFL'); ?></td>
                    <td class="inputTD_small"><input type="text" name="likebox_width" value="<?php echo $likebox_width; ?>" /></td>
                    <td class="extra small"><?php _e('The width of the plugin in pixels.', 'SNFL'); ?></td>                
                </tr>
                <tr>
                    <td class="catLeft"><?php _e('Color scheme:', 'SNFL'); ?></td>
                    <td class="inputTD">
                        <select name="likebox_colorscheme">
                            <option <?php if ($likebox_colorscheme == 'light') echo 'selected="selected"'; ?> value="light"><?php _e('light', 'SNFL'); ?></option>
                            <option <?php if ($likebox_colorscheme == 'dark') echo 'selected="selected"'; ?> value="dark"><?php _e('dark', 'SNFL'); ?></option>
                        </select>
                    </td>
                    <td class="extra small"><?php _e('The color scheme of the plugin.', 'SNFL'); ?></td>                
                </tr>
                <tr>
                    <td class="catLeft"><?php _e('Show faces:', 'SNFL'); ?></td>
                    <td class="inputTD">
                        <select name="likebox_show_faces">
                            <option <?php if ($likebox_show_faces == 'true') echo 'selected="selected"'; ?> value="true"><?php _e('yes', 'SNFL'); ?></option>
                            <option <?php if ($likebox_show_faces == 'false') echo 'selected="selected"'; ?> value="false"><?php _e('no', 'SNFL'); ?></option>
                        </select>
                    </td>
                    <td class="extra small"><?php _e('Show profile photos in the plugin.', 'SNFL'); ?></td>
                </tr>
                <tr>
                    <td class="catLeft"><?php _e('Stream:', 'SNFL'); ?></td>
                    <td class="inputTD">
                        <select name="likebox_stream">
                            <option <?php if ($likebox_stream == 'true') echo 'selected="selected"'; ?> value="true"><?php _e('yes', 'SNFL'); ?></option>
                            <option <?php if ($likebox_stream == 'false') echo 'selected="selected"'; ?> value="false"><?php _e('no', 'SNFL'); ?></option>
                        </select>
                    </td>
                    <td class="extra small"><?php _e('Show the profile stream for the public profile.', 'SNFL'); ?></td>
                </tr>
                <tr>
                    <td class="catLeft"><?php _e('Header:', 'SNFL'); ?></td>
                    <td class="inputTD">
                        <select name="likebox_header">
                            <option <?php if ($likebox_header == 'true') echo 'selected="selected"'; ?> value="true"><?php _e('yes', 'SNFL'); ?></option>
                            <option <?php if ($likebox_header == 'false') echo 'selected="selected"'; ?> value="false"><?php _e('no', 'SNFL'); ?></option>
                        </select>
                    </td>
                    <td class="extra small"><?php _e('Show the "Find us on Facebook" bar at top. Only shown when either stream or faces are present.', 'SNFL'); ?></td>
                </tr>

                <tr>
                    <td class="catLeft"></td>
                    <td colspan="2">
                        <input type="hidden" name="SNFL_action" value="likebox" />
                        <input type="submit" name="SNFL_submit" class="button-primary" value="<?php _e('Save settings', 'SNFL'); ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>