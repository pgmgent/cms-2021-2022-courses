<?php

/*===================================================================================
* Add global options
* =================================================================================*/

/**
 *
 * The page content surrounding the settings fields. Usually you use this to instruct non-techy people what to do.
 *
 */
function theme_settings_page(){ 
	?>
	<div class="wrap">
		<h1>Contact Info</h1>
		<p>This information is used around the website, so changing these here will update them across the website.</p>
		<form method="post" action="options.php">
			<?php
			settings_fields("section");
			do_settings_sections("theme-options");
			submit_button();
			?>
		</form>
	</div>
	
	<?php }

/**
 *
 * Next comes the settings fields to display. Use anything from inputs and textareas, to checkboxes multi-selects.
 *
 */

// Phone
function display_support_phone_element(){ ?>
	
	<input type="tel" name="support_phone" placeholder="Enter phone number" value="<?php echo get_option('support_phone'); ?>" size="35">

<?php }

// Fax
function display_support_fax_element(){ ?>
	
	<input type="tel" name="support_fax" placeholder="Enter fax number" value="<?php echo get_option('support_fax'); ?>" size="35">

<?php }

// Email
function display_support_email_element(){ ?>
	
	<input type="email" name="support_email" placeholder="Enter email address" value="<?php echo get_option('support_email'); ?>" size="35">
	
<?php }

/**
 *
 * Here you tell WP what to enqueue into the <form> area. You need:
 *
 * 1. add_settings_section
 * 2. add_settings_field
 * 3. register_setting
 *
 */

function display_custom_info_fields(){
	
	add_settings_section("section", "Company Information", null, "theme-options");

	add_settings_field("support_phone", "Support Phone No.", "display_support_phone_element", "theme-options", "section");
	add_settings_field("support_fax", "Support Fax No.", "display_support_fax_element", "theme-options", "section");
	add_settings_field("support_email", "Support Email address", "display_support_email_element", "theme-options", "section");

	register_setting("section", "support_phone");
	register_setting("section", "support_fax");
	register_setting("section", "support_email");
	
}

add_action("admin_init", "display_custom_info_fields");

/**
 *
 * Tie it all together by adding the settings page to wherever you like. For this example it will appear
 * in Settings > Contact Info
 *
 */

function add_custom_info_menu_item(){
	
	add_options_page("Contact Info", "Contact Info", "manage_options", "contact-info", "theme_settings_page");
	
}

add_action("admin_menu", "add_custom_info_menu_item");