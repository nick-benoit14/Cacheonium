<?php

  function add_cacheonium_roles(){
    $staff = add_role(
        'staff',
        __( 'Staff' ),
        array(
            'read'         => true,  // true allows this capability
            'edit_posts'   => true,
            'delete_posts' => false, // Use false to explicitly deny
        )
    );

  }


?>
