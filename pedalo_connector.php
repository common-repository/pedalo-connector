<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 * 
 *  php version 7.2.34
 * 
 * @category Pedalo_Plugin
 * @package  Pedalo_Connector
 * @author   Pedalo <support@pedalo.co.uk>
 * @link     www.pedalo.co.uk
 * @since    1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Pedalo Connector
 * Description:       The Pedalo Connector plugin is used by Pedalo Web Agency to manage and support WordPress websites.
 * Version:           2.0.5
 * Author:            Pedalo
 * Author URI:        www.pedalo.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pedalo_connector
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('PEDALO_CONNECTOR_VERSION', '2.0.5');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pedalo_connector-activator.php
 *
 * @return Activates pedalo connector
 */
function activate_pedalo_connector()
{
    include_once plugin_dir_path(__FILE__) . 
    'includes/class-pedalo_connector-activator.php';
    Pedalo_connector_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pedalo_connector-deactivator.php
 *
 * @return Deactivates pedalo connector
 */
function deactivate_pedalo_connector()
{
    include_once plugin_dir_path(__FILE__) . 
    'includes/class-pedalo_connector-deactivator.php';
    Pedalo_connector_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_pedalo_connector');
register_deactivation_hook(__FILE__, 'deactivate_pedalo_connector');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-pedalo_connector.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since  1.0.0
 * @return running the plugin
 */
function run_pedalo_connector()
{
    $plugin = new Pedalo_connector();
    $plugin->run();
}
run_pedalo_connector();


/**
 * Pedalo connector plugin authentication and api result
 * 
 * @param array $wprequest gets plugins to be updated
 * 
 * @return Returns json for plugin informations
 */
function pedalo_connector_endpoint($wprequest)
{
	$pedalo_connector =  new Pedalo_connector_Public('pedalo_connector', '1.0');
	
	return $pedalo_connector->pedalo_connector_endpoint($wprequest);
}
