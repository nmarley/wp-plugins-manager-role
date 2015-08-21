<?php
/**
 * Plugin Name: Plugin Manager Role
 * Plugin URI: http://nathanmarley.com/wp-plugins-manager-role
 * Description: This plugin adds a user type ("role") which allows them to only manage plugins.
 * Version: 0.0.1
 * Author: Nathan Marley
 * Author URI: http://nathanmarley.com
 * License: GPL2
 */

  defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

  $role_internal_name = 'plugin_manager';
  $role_display_name = 'Plugin Manager';

  # TODO: enable an admin screen which allows to enable/disable each one of these,
  #       or maybe on a per-user basis
  $plugin_manager_roles = array(
    'activate_plugins' => true,
    'edit_plugins' => true,
    'install_plugins' => true,
    'update_plugins' => true,
    'delete_plugins' => true,
  );

  add_role( $role_internal_name, $role_display_name, $plugin_manager_roles );

