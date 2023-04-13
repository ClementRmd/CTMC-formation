<?php

$role = 'Développeur';
$display_name = 'Développeur';
$capabilities = get_role( 'administrator' )->capabilities;

add_role( $role, $display_name, $capabilities );
