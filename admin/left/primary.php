<form method="post" id="SNFL_settings">
    <table width="100%" class="options">
        <tbody>
            <tr>
                <td class="catLeft"><?php _e('Facebook<br />Page URL:', 'SNFL'); ?></td>
                <td><input type="text" name="pageURL" value="<?php echo $pageURL; ?>" /></td>
            </tr>
            <tr>
                <td class="catLeft"></td>
                <td class="extra small"><?php _e('e.g. <i>' . SNFL_FB_URL . '</i>', 'SNFL'); ?></td>
            </tr>
            <tr>
                <td class="catLeft"><?php _e('Facebook<br />Like Plugin:', 'SNFL'); ?></td>
                <td class="inputTD">
                    <select id="like_plugin" onchange="SNFL_LikePlugin()" name="like_plugin">
                        <option <?php if ($like_plugin == 'like_box') echo 'selected="selected"'; ?> value="like_box"><?php _e('Like Box', 'SNFL'); ?></option>
                        <option <?php if ($like_plugin == 'like_button') echo 'selected="selected"'; ?> value="like_button"><?php _e('Like Button', 'SNFL'); ?></option>
                    </select>
                </td>
            </tr>
            
            
            <tr>
                <td class="catLeft"><input type="hidden" name="SNFL_action" value="primary" /></td>
                <td><input type="submit" id="SNFLsubmit" name="SNFLsubmit" class="button-primary" value="<?php _e('Save settings', 'SNFL'); ?>" /></td>
            </tr>
        </tbody>
    </table>
</form>