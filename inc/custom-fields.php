<?php 

/**
 * Custom Fields
 * agust 2019
 * bycap.
 */

add_action( 'cmb2_admin_init', 'wyw_homepage_fields' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function wyw_homepage_fields() {
	$prefix = 'wyw_cmb2_title_';

    $id_home = get_option( 'page_on_front' );
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$wyw_homepage_fields = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Home Page Fields', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );
    // Hero Title.
	$wyw_homepage_fields->add_field( array(
		'name' => esc_html__( 'Hero Title', 'cmb2' ),
		'desc' => esc_html__( 'Please input Hero Title', 'cmb2' ),
		'id'   => $prefix . 'hero_title',
		'type' => 'text',
	) );
    // Hero Place
	$wyw_homepage_fields->add_field( array(
		'name' => esc_html__( 'Hero Place', 'cmb2' ),
		'desc' => esc_html__( 'Please input Hero Place', 'cmb2' ),
		'id'   => $prefix . 'hero_place',
		'type' => 'text',
	) );
// Hero Description
	$wyw_homepage_fields->add_field( array(
		'name'    => esc_html__( 'Place Description', 'cmb2' ),
		'desc'    => esc_html__( 'Input place descrtiption', 'cmb2' ),
		'id'      => $prefix . 'hero_place_description',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
    //Hero Image
	$wyw_homepage_fields->add_field( array(
		'name' => esc_html__( 'Hero Image', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'hero_image',
		'type' => 'file',
    ) );
    
    // Exotic Destinations.

    $wyw_homepage_fields->add_field( array(
		'name' => esc_html__( 'Exotic Title', 'cmb2' ),
		'desc' => esc_html__( 'Please input Exotic Title', 'cmb2' ),
		'id'   => $prefix . 'exotic_title',
		'type' => 'text',
	) );
    // Exotic Place
	$wyw_homepage_fields->add_field( array(
		'name' => esc_html__( 'Exotic Place', 'cmb2' ),
		'desc' => esc_html__( 'Please input Exotic Place', 'cmb2' ),
		'id'   => $prefix . 'exotic_place',
		'type' => 'text',
	) );
// Exotic Description
	$wyw_homepage_fields->add_field( array(
		'name'    => esc_html__( 'Place Description', 'cmb2' ),
		'desc'    => esc_html__( 'Input place descrtiption', 'cmb2' ),
		'id'      => $prefix . 'exotic_place_description',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
    ) );
    //Exotic Image
	$wyw_homepage_fields->add_field( array(
		'name' => esc_html__( 'Exotic Image', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'exotic_image',
		'type' => 'file',
    ) );

}

// Campos para la seccion hoteles.
add_action( 'cmb2_admin_init', 'wyw_hotel_fields' );

function wyw_hotel_fields() {
	$prefix = 'wyw_hotel_fields_';
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$wyw_hotel_fields = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Hotel Fields', 'cmb2' ),
		'object_types' => array( 'hotel_class' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
 // Specific post IDs to display this metabox
    ) );

    $wyw_hotel_fields->add_field( array(
		'name' => esc_html__( 'Sub Title', 'cmb2' ),
		'desc' => esc_html__( 'Please insert content sub-title', 'cmb2' ),
		'id'   => $prefix . 'content_subtitle',
		'type' => 'text',
    ) );

	$wyw_hotel_fields->add_field( array(
		'name' => esc_html__( 'Hotel address', 'cmb2' ),
		'desc' => esc_html__( 'Hotel Address', 'cmb2' ),
		'id'   => $prefix . 'hotel_address',
		'type' => 'text',
    ) );

    
    $wyw_hotel_fields->add_field( array(
		'name' => esc_html__( 'Number of rooms', 'cmb2' ),
		'desc' => esc_html__( 'Input numer of rooms', 'cmb2' ),
		'id'   => $prefix . 'hotel_rooms',
		'type' => 'text',
	));
	
	$wyw_hotel_fields->add_field( array(
		'name' => esc_html__( 'Room Style', 'cmb2' ),
		'desc' => esc_html__( 'Input room style (i.e. Classic, Moderm, etc.)', 'cmb2' ),
		'id'   => $prefix . 'style_room',
		'type' => 'text',
    ));

	$wyw_hotel_fields->add_field( array(
		'name' => esc_html__( 'Vipe Type', 'cmb2' ),
		'desc' => esc_html__( 'Vipe Type', 'cmb2' ),
		'id'   => $prefix . 'vipe_type',
		'type' => 'text',
	));

	$wyw_hotel_fields->add_field( array(
		'name' => esc_html__( 'Hotel Site', 'cmb2' ),
		'desc' => esc_html__( 'i.g.: www.thehotel.com', 'cmb2' ),
		'id'   => $prefix . 'hotel_site',
		'type' => 'text',
    ));

}

// campos para la seccion cruceros y tours
add_action( 'cmb2_admin_init', 'wyw_cruiser_fields' );

function wyw_cruiser_fields() {
	$prefix = 'wyw_cruiser_field_';
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$wyw_cruiser_fields = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Cruiser/Tour Fields', 'cmb2' ),
		'object_types' => array( 'cruiser_class', 'destinations_class' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
 // Specific post IDs to display this metabox
    ) );

    $wyw_cruiser_fields->add_field( array(
		'name' => esc_html__( 'Ship', 'cmb2' ),
		'desc' => esc_html__( "Ship Name if it's cruisers", 'cmb2' ),
		'id'   => $prefix . 'ship',
		'type' => 'text',
	) );
	
	$wyw_cruiser_fields->add_field( array(
		'name' => esc_html__( 'Day Number', 'cmb2' ),
		'desc' => esc_html__( 'Input day number (i.e. 7,10,11 days)', 'cmb2' ),
		'id'   => $prefix . 'cruiser_days',
		'type' => 'text',
	) );
	
	$wyw_cruiser_fields->add_field( array(
		'name' => esc_html__( 'Departs', 'cmb2' ),
		'desc' => esc_html__( 'Departs Date', 'cmb2' ),
		'id'   => $prefix . 'cruiser_depart',
		'type' => 'text',
	) );
	

	$wyw_cruiser_fields->add_field( array(
		'name'    => esc_html__( 'What does include?', 'cmb2' ),
		'desc'    => esc_html__( 'Input what the cruisers/tours includes', 'cmb2' ),
		'id'      => $prefix . 'include',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$wyw_cruiser_fields->add_field( array(
		'name'    => esc_html__( 'What does not include?', 'cmb2' ),
		'desc'    => esc_html__( 'Input what the cruisers/tours does not include (optional)', 'cmb2' ),
		'id'      => $prefix . 'not_include',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
	
	$wyw_cruiser_fields->add_field( array(
		'name'    => esc_html__( 'Complementary', 'cmb2' ),
		'desc'    => esc_html__( 'Any copplement (optional)', 'cmb2' ),
		'id'      => $prefix . 'complement',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
	$wyw_cruiser_fields->add_field( array(
		'name' => esc_html__( 'Price', 'cmb2' ),
		'desc' => esc_html__( 'Price (i.e.: $1.900 per person ) ', 'cmb2' ),
		'id'   => $prefix . 'price',
		'type' => 'text',
	) );

}

add_action( 'cmb2_admin_init', 'wyw_itinerry' );

function wyw_itinerry() {
	$prefix = 'wyw_itinerary_';

	/**
	 * Repeatable Field Groups
	 */
	$wyw_itinerry = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Itinerary', 'cmb2' ),
        'object_types' => array('cruiser_class', 'destinations_class'),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $wyw_itinerry->add_field( array(
		'id'          => $prefix . 'intinerary',
		'type'        => 'group',
		'description' => esc_html__( 'Itinerary', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Itinerary day(n)', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Itinerary', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Itinerary', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );
	
	$wyw_itinerry->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Day Number', 'cmb2' ),
		'desc' => esc_html__( 'Input day number (i.e. Day 1 (navigation)', 'cmb2' ),
		'id'   => $prefix . 'day_itinerary',
		'type' => 'text',
    ) );

	$wyw_itinerry->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Entry Itinerary', 'cmb2' ),
		'desc'    => esc_html__( 'Input day(x) : ', 'cmb2' ),
		'id'      => $prefix . 'itinerary',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

}





// contenido comun para los posts.
add_action( 'cmb2_admin_init', 'wyw_content_page_photos' );

function wyw_content_page_photos() {
	$prefix = 'wyw_content_page_photos_';

	/**
	 * Repeatable Field Groups
	 */
	$wyw_content_page_photos = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Photo Group', 'cmb2' ),
        'object_types' => array( 'hotel_class', 'cruiser_class','destinations_class' ),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $wyw_content_page_photos->add_field( array(
		'id'          => $prefix . 'photo',
		'type'        => 'group',
		'description' => esc_html__( 'Content Photos', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Photos', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Photo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Photo', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
    ) );
    
	$wyw_content_page_photos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Entry Photo', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );

}

?>