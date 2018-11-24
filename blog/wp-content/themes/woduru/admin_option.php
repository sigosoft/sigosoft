<?php
//Theme Options 

add_action('admin_menu', 'sw_create_menu');
function sw_create_menu() {
	add_menu_page('Theme Settings', 'Theme Options', 'administrator', __FILE__, 'sw_settings_page',plugins_url('/images/icon.png', __FILE__),1);
	add_action( 'admin_init', 'register_mysettings' );
}
function register_mysettings() {
	register_setting( 'sw-settings-group', 'fb_url' );
	register_setting( 'sw-settings-group', 'twt_url' );
	register_setting( 'sw-settings-group', 'yt_url' );
	register_setting( 'sw-settings-group', 'feed' );	
}
function sw_settings_page() {
?>
<div class="wrap">
<h2><b style="color:#848585;">&nbsp;&nbsp;AGC Theme Options</b></h2>
<form method="post" action="options.php">
    <?php settings_fields( 'sw-settings-group' ); ?>
    <table class="form-table">
    
        <tr valign="top">
        <th scope="row">Facebook fanpage url:</th>
        <td><input size="95" type="text" name="contact" value="<?php echo get_option('fb_url'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Twitter feeds url:</th>
        <td><input size="95" type="text" name="contact" value="<?php echo get_option('twt_url'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Youtube url:</th>
        <td><input size="95" type="text" name="contact" value="<?php echo get_option('yt_url'); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Feeds url:</th>
        <td><input size="95" type="text" name="contact" value="<?php echo get_option('feed'); ?>" /></td>
        </tr>         
     </table>
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>
</form>
</div>
<?php } ?>