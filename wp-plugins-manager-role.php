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

// via: https://make.wordpress.org/core/2010/10/27/plugin-activation-hooks-no-longer-fire-for-updates/
//
// the theory behind the right way to do this. the proper way to handle an
// upgrade path is to only run an upgrade procedure when you need to. ideally,
// you would store a “version” in your plugin’s database option, and then a
// version in the code. if they do not match, you would fire your upgrade
// procedure, and then set the database option to equal the version in the code.
// this is how many plugins handle upgrades, and this is how core works as well.

function plugin_version() {
  $version = '0.0.1';
  return $version;
}
function check_version () {
  // TODO
}



function add_custom_role() {
  $role_internal_name = 'plugin_manager';
  $role_display_name = 'Plugin Manager';

  # TODO: enable an admin screen which allows to enable/disable each one of these,
  #       or maybe on a per-user basis
  $plugin_manager_roles = array(
    # general
    // 'upload_files' => true,
    'read' => true,

    # themes
    'switch_themes' => true,
    // 'install_themes' => true,
    // 'update_themes' => true,
    // 'edit_theme_options' => true,
    // 'edit_themes' => true,
    // 'delete_themes' => true,

    # plugins
    'activate_plugins' => true,
    'edit_plugins' => true,
    'install_plugins' => true,
    'update_plugins' => true,
    'delete_plugins' => true,
  );

  add_role( $role_internal_name, $role_display_name, $plugin_manager_roles );
}

  add_action( 'admin_init', 'add_custom_role' );

  // $role = get_role( $role_internal_name );
  // $role->add_cap( 'read' );

  // $role = get_role( $role_internal_name );
  // $role->remove_cap( 'switch_themes' );
?>
