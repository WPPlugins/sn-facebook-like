function SNFL_selectPosition() {
    switch(jQuery("#position :selected").val()) {
        case 'left':
        case 'right':
            jQuery("#topPosition").removeAttr('readonly');
            jQuery("#leftPosition").attr('readonly', 'readonly');
        break;
        case 'top':
        case 'bottom':
            jQuery("#leftPosition").removeAttr('readonly');
            jQuery("#topPosition").attr('readonly', 'readonly');
        break;
    }
}

function SNFL_LikeButtonLayout() {
    switch(jQuery("#likebtn_layout :selected").val()) {
        case 'standard':
            jQuery("#likebtn_width").val('450');
        break;
        case 'button_count':
            jQuery("#likebtn_width").val('90');
        break;
        case 'box_count':
            jQuery("#likebtn_width").val('55');
        break;
    }
}

function SNFL_LikePlugin() {
    switch (jQuery("#like_plugin :selected").val()) {
        case 'like_box':
            jQuery("#like_box").show();
            jQuery("#like_button").hide();
        break;
        case 'like_button':
            jQuery("#like_button").show();
            jQuery("#like_box").hide();
        break;
    }
}

jQuery(document).ready(function(){
    SNFL_LikePlugin();
    SNFL_selectPosition();
});