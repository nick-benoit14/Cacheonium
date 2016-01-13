<?php

  function add_cacheonium_roles(){


    /* Remove Standard Roles */
    $remove_roles = array('subscriber', 'contributor', 'author', 'editor');

    foreach($remove_roles as $role){
      remove_role( $role );
    }


    /* Add Cache Makers Roles */

    $staff = add_role(
        'staff',__( 'Staff' ),
        array(
            'read'         => true,  // true allows this capability
            'edit_posts'   => true,
            'delete_posts' => false, // Use false to explicitly deny
        ));

    $maker = add_role(
        'maker',__( 'Maker' ),
        array(
            'read'         => true,  // true allows this capability
        ));

    $leader = add_role(
        'leader',__( 'Leader' ),
        array(
            'read'         => true,  // true allows this capability
            'edit_posts'   => true,
            'delete_posts' => false, // Use false to explicitly deny
        ));

  }


  function modify_contact_methods($profile_fields) {

  	// Add new fields
  	$profile_fields['title'] = 'Title';
  	return $profile_fields;
  }
  add_filter('user_contactmethods', 'modify_contact_methods');

?>
