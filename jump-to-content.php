<?php
/*
Plugin Name: zeev jump to content
Plugin URI: http://www.zeevm.co.il
Description: this plugin a jump to content hidden feild at the top of the site, it is activated with "tab" botton.
Version: 0.1
Author URI: ze'ev ma'ayan
Author URI: http://www.zeevm.co.il

/*  TM zeev.co.il */

add_action('wp_head', 'wpse_43672_wp_header', 0);
/**
 * Hooks into the `wp_head` action.
*/
function wpse_43672_wp_header(){ ?>
<style>
#skip {overflow: hidden;}
#skip ul li {list-style: none; padding: 0; margin: 0; background:#000; padding-left:15px;font-size:17px;}
#skip li a {text-decoration: none; display: block;color:#FFFFFF;}
</style>
<div id='skip' style='margin: 0;height: 1px;' >
	<ul>
						 <li><a onfocus="document.getElementById('skip').style.height='16px';this.className = 'visible-link'" onblur="document.getElementById('skip').style.height='1px';this.className = 'hidden-link'" href='#' class='hidden-link' tabindex="1">jump to content</a></li>
			 <li><a onfocus="document.getElementById('skip').style.height='16px';this.className = 'visible-link'" onblur="document.getElementById('skip').style.height='1px';this.className = 'hidden-link'" href='<?php echo get_option('jump1'); ?>' class='hidden-link' tabindex="1"><?php echo get_option('jump11'); ?></a></li>
			 <li><a onfocus="document.getElementById('skip').style.height='16px';this.className = 'visible-link'" onblur="document.getElementById('skip').style.height='1px';this.className = 'hidden-link'" href='<?php echo get_option('jump2'); ?>' class='hidden-link' ><?php echo get_option('jump22'); ?></a></li>
			 <li><a onfocus="document.getElementById('skip').style.height='16px';this.className = 'visible-link'" onblur="document.getElementById('skip').style.height='1px';this.className = 'hidden-link'" href='<?php echo get_option('jump3'); ?>' class='hidden-link' ><?php echo get_option('jump33'); ?></a></li>
			 <li><a onfocus="document.getElementById('skip').style.height='16px';this.className = 'visible-link'" onblur="document.getElementById('skip').style.height='1px';this.className = 'hidden-link'" href='<?php echo get_option('jump4'); ?>'  class='hidden-link' ><?php echo get_option('jump44'); ?></a></li>
			 <li><a onfocus="document.getElementById('skip').style.height='16px';this.className = 'visible-link'" onblur="document.getElementById('skip').style.height='1px';this.className = 'hidden-link'" href='<?php echo get_option('jump5'); ?>' class='hidden-link' ><?php echo get_option('jump55'); ?></a></li>
			 <li><a onfocus="document.getElementById('skip').style.height='16px';this.className = 'visible-link'" onblur="document.getElementById('skip').style.height='1px';this.className = 'hidden-link'" href='<?php echo get_option('jump6'); ?>' class='hidden-link' ><?php echo get_option('jump66'); ?></a></li>
	</ul>
</div>

<?php }?>
<?php
// create custom plugin settings menu  
add_action('admin_menu', 'zeev_create_menu');  
function zeev_create_menu() {  
    //create new top-level menu  
    add_menu_page('jump to content redirect', 'jump to content', 'administrator', __FILE__, 'zeev_settings_page');  
      //create new top-level menu  
    //call register settings function  
    add_action( 'admin_init', 'register_mysettings' );  
}  

add_action('admin_head', 'my_custom_admin_head');
function register_mysettings() {  
    //register our settings  
	register_setting( 'zeev-settings-group', 'jump1' ); 
	register_setting( 'zeev-settings-group', 'jump11' ); 
    register_setting( 'zeev-settings-group', 'jump2' ); 
	register_setting( 'zeev-settings-group', 'jump22' ); 
register_setting( 'zeev-settings-group', 'jump3' ); 
register_setting( 'zeev-settings-group', 'jump33' ); 
register_setting( 'zeev-settings-group', 'jump4' ); 
register_setting( 'zeev-settings-group', 'jump44' ); 
register_setting( 'zeev-settings-group', 'jump5' ); 
register_setting( 'zeev-settings-group', 'jump55' ); 
register_setting( 'zeev-settings-group', 'jump6' ); 
register_setting( 'zeev-settings-group', 'jump66' ); 	
} 
function zeev_settings_page() { ?>  
<div class="wrap">  
<h2>your jump to content properties</h2>  
<br/>
<h3>here you need to choose the content the TAB will jump to</h3>
<form method="post" action="options.php">  
    <?php settings_fields('zeev-settings-group'); ?>  
    <table class="form-table">  
        <tr valign="top">  
        <th scope="row">first div id/class/link to jump to (for example: ".menu") </th>
        <td><textarea name="jump1" cols="20" rows="1"><?php echo get_option('jump1'); ?></textarea></td>  
		<th scope="row">text user sees (example: jump to menu)</th>
        <td><textarea name="jump11" cols="30" rows="1"><?php echo get_option('jump11'); ?></textarea></td> 
        </tr> 
        <tr valign="top">  
        <th scope="row">second div id/class/link to jump to (for example: "#content") </th>
        <td><textarea name="jump2" cols="20" rows="1"><?php echo get_option('jump2'); ?></textarea></td> 
		<th scope="row">text user sees (example: jump to menu)</th>
        <td><textarea name="jump22" cols="30" rows="1"><?php echo get_option('jump22'); ?></textarea></td> 		
        </tr>  
		 <tr valign="top">  
        <th scope="row">third div id/class/link to jump to (for example: "#footer") </th>
        <td><textarea name="jump3" cols="20" rows="1"><?php echo get_option('jump3'); ?></textarea></td>  
				<th scope="row">text user sees (example: jump to menu)</th>
        <td><textarea name="jump33" cols="30" rows="1"><?php echo get_option('jump33'); ?></textarea></td> 		
        </tr>    
		 <tr valign="top">  
        <th scope="row">forth div id/class/link to jump to (for example: "http"//yourdomain.com/contact") </th>
        <td><textarea name="jump4" cols="20" rows="1"><?php echo get_option('jump4'); ?></textarea></td>  
				<th scope="row">text user sees (example: jump to menu)</th>
        <td><textarea name="jump44" cols="30" rows="1"><?php echo get_option('jump44'); ?></textarea></td> 		
        </tr> 
		 <tr valign="top">  
        <th scope="row">another one</th>
        <td><textarea name="jump5" cols="20" rows="1"><?php echo get_option('jump5'); ?></textarea></td>  
				<th scope="row">text user sees (example: jump to menu)</th>
        <td><textarea name="jump55" cols="30" rows="1"><?php echo get_option('jump55'); ?></textarea></td> 		
        </tr> 
		 <tr valign="top">  
        <th scope="row">another one</th>
        <td><textarea name="jump6" cols="20" rows="1"><?php echo get_option('jump6'); ?></textarea></td>  
				<th scope="row">text user sees (example: jump to menu)</th>
        <td><textarea name="jump66" cols="30" rows="1"><?php echo get_option('jump66'); ?></textarea></td> 		
        </tr> 
		
    </table>  
    <p class="submit">  
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
    </p>  
</form>  
</div>  
<?php } ?>