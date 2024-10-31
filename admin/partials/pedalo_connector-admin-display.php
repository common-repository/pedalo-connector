	<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.pedalo.co.uk
 * @since      1.0.0
 *
 * @package    Pedalo_connector
 * @subpackage Pedalo_connector/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<!-- <h1>Pedalo Connector Settings</h1>
<form method="post" action="options.php"> 
	<label for="token">Token:</label>
	<input type="text" class="form-control" id="token" required>
	<?php // submit_button(); ?>
</form> -->
<form method="post" action="options.php">
	<?php settings_fields('pedalo-connector'); ?>
	<?php do_settings_sections('pedalo-connector'); ?>
	<?php submit_button('Save Changes'); ?>
</form>

