<?php 

// Custom post (hotels.)
function wyw_posttype_hotels() {
     $labels = array(
         'name'                  => _x( 'Opciones', 'wyw' ),
         'singular_name'         => _x( 'Hotel',  'wyw' ),
         'menu_name'             => _x( 'Hotels', 'Admin Menu text', 'wyw' ),
         'name_admin_bar'        => _x( 'Hotel', 'Add New on Toolbar', 'wyw' ),
         'add_new'               => __( 'Add New', 'wyw' ),
         'add_new_item'          => __( 'Add New Hotel', 'wyw' ),
         'new_item'              => __( 'New Hotel', 'wyw' ),
         'edit_item'             => __( 'Edit Hotel', 'wyw' ),
         'view_item'             => __( 'View Hotel', 'wyw' ),
         'all_items'             => __( 'All Hotels', 'wyw' ),
         'search_items'          => __( 'Search Hotels', 'wyw' ),
         'parent_item_colon'     => __( 'Parent Hotels:', 'wyw' ),
         'not_found'             => __( 'Hotels not found.', 'wyw' ),
         'not_found_in_trash'    => __( 'Hotels not found in trash', 'wyw' ),
         'featured_image'        => _x( 'Feature Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wyw' ),
         'set_featured_image'    => _x( 'Add Feature Image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wyw' ),
         'remove_featured_image' => _x( 'del Feature Image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wyw' ),
         'use_featured_image'    => _x( 'use Feature Image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wyw' ),
         'archives'              => _x( 'Hotels Files', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wyw' ),
         'insert_into_item'      => _x( 'Add Hotels', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wyw' ),
         'uploaded_to_this_item' => _x( 'Uploaded in Hotel', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wyw' ),
         'filter_items_list'     => _x( 'Hotel List Filter', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wyw' ),
         'items_list_navigation' => _x( 'Hotels Nav', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wyw' ),
         'items_list'            => _x( 'Hotels List', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wyw' ),
     );
  
     $args = array(
         'labels'             => $labels,
         'public'             => true,
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'query_var'          => true,
         'rewrite'            => array( 'slug' => 'hotel-list' ),
         'capability_type'    => 'post',
         'has_archive'        => true,
         'menu_icon'          => 'dashicons-building',//'dashicons-welcome-learn-more',
         // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
         'hierarchical'       => false,
         'menu_position'      => 6,
         'supports'           => array( 'title', 'editor',  'thumbnail' ),
         'show_in_rest'       => true,
         'rest_base'          => 'hotel-list',
 
     );
  
     register_post_type( 'hotel_class', $args );
 }
 add_action( 'init', 'wyw_posttype_hotels' );



// custom post - Cruisers.
 function wyw_posttype_cruiser() {
    $labels = array(
        'name'                  => _x( 'Opciones', 'wyw' ),
        'singular_name'         => _x( 'Cruiser',  'wyw' ),
        'menu_name'             => _x( 'Cruiser', 'Admin Menu text', 'wyw' ),
        'name_admin_bar'        => _x( 'Cruiser', 'Add New on Toolbar', 'wyw' ),
        'add_new'               => __( 'Add New', 'wyw' ),
        'add_new_item'          => __( 'Add New Cruiser', 'wyw' ),
        'new_item'              => __( 'New Cruiser', 'wyw' ),
        'edit_item'             => __( 'Edit Cruiser', 'wyw' ),
        'view_item'             => __( 'View Cruiser', 'wyw' ),
        'all_items'             => __( 'All Cruiser', 'wyw' ),
        'search_items'          => __( 'Search Cruiser', 'wyw' ),
        'parent_item_colon'     => __( 'Parent Cruiser:', 'wyw' ),
        'not_found'             => __( 'Cruiser not found.', 'wyw' ),
        'not_found_in_trash'    => __( 'Cruiser not found in trash', 'wyw' ),
        'featured_image'        => _x( 'Feature Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wyw' ),
        'set_featured_image'    => _x( 'Add Feature Image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wyw' ),
        'remove_featured_image' => _x( 'del Feature Image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wyw' ),
        'use_featured_image'    => _x( 'use Feature Image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wyw' ),
        'archives'              => _x( 'Cruiser Files', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wyw' ),
        'insert_into_item'      => _x( 'Add Cruiser', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wyw' ),
        'uploaded_to_this_item' => _x( 'Uploaded in Cruiser', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wyw' ),
        'filter_items_list'     => _x( 'Cruiser List Filter', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wyw' ),
        'items_list_navigation' => _x( 'Cruiser Nav', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wyw' ),
        'items_list'            => _x( 'Cruiser List', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wyw' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cruiser-list' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-admin-site-alt3',//'dashicons-welcome-learn-more',
        // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor',  'thumbnail' ),
        'show_in_rest'       => true,
        'rest_base'          => 'cruiser-list',
    );
 
    register_post_type( 'cruiser_class', $args );
}
add_action( 'init', 'wyw_posttype_cruiser' );


// Custom - Posts para los destinos
function wyw_posttype_destinations() {
    $labels = array(
        'name'                  => _x( 'Opciones', 'wyw' ),
        'singular_name'         => _x( 'destinations',  'wyw' ),
        'menu_name'             => _x( 'Destinations', 'Admin Menu text', 'wyw' ),
        'name_admin_bar'        => _x( 'destinations', 'Add New on Toolbar', 'wyw' ),
        'add_new'               => __( 'Add New', 'wyw' ),
        'add_new_item'          => __( 'Add New destinations', 'wyw' ),
        'new_item'              => __( 'New destinations', 'wyw' ),
        'edit_item'             => __( 'Edit destinations', 'wyw' ),
        'view_item'             => __( 'View destinations', 'wyw' ),
        'all_items'             => __( 'All destinations', 'wyw' ),
        'search_items'          => __( 'Search destinations', 'wyw' ),
        'parent_item_colon'     => __( 'Parent destinations:', 'wyw' ),
        'not_found'             => __( 'destinations not found.', 'wyw' ),
        'not_found_in_trash'    => __( 'destinations not found in trash', 'wyw' ),
        'featured_image'        => _x( 'Feature Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'wyw' ),
        'set_featured_image'    => _x( 'Add Feature Image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'wyw' ),
        'remove_featured_image' => _x( 'del Feature Image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'wyw' ),
        'use_featured_image'    => _x( 'use Feature Image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'wyw' ),
        'archives'              => _x( 'destinations Files', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'wyw' ),
        'insert_into_item'      => _x( 'Add destinations', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'wyw' ),
        'uploaded_to_this_item' => _x( 'Uploaded in destinations', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'wyw' ),
        'filter_items_list'     => _x( 'destinations List Filter', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'wyw' ),
        'items_list_navigation' => _x( 'destinations Nav', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'wyw' ),
        'items_list'            => _x( 'destinations List', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'wyw' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'destinations-list' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-location',//'dashicons-welcome-learn-more',
        // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor',  'thumbnail' ),
        'show_in_rest'       => true,
        'rest_base'          => 'destinations-list',


    );
 
    register_post_type( 'destinations_class', $args );
}
add_action( 'init', 'wyw_posttype_destinations' );


 ?>