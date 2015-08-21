<?php

  $role_internal_name = 'plugin_manager';
  $role_display_name = 'Plugin Manager';

  # TODO: enable an admin screen which allows to enable/disable each one of these,
  #       or maybe on a per-user basis
  $plugin_manager_roles = array(
    'activate_plugins' => true
    'edit_plugins' => true
    'install_plugins' => true
    'update_plugins' => true
    'delete_plugins' => true
  );

  add_role( $role_name, $display_name, $plugin_manager_roles );
