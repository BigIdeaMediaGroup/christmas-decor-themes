<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * Be sure to replace all instances of 'bimg_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/*
 * Home Page
 */
add_action( 'cmb2_init', 'bimg_register_home_feature_metabox' );
function bimg_register_home_feature_metabox() {
    $prefix = '_bimg_home_feature_';

    $bimg_home_feature = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => 'Feature',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 701, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_home_feature->add_field( array(
		'name' => 'Feature Title',
		'desc' => 'Set a title to appear in the feature box.',
		'id'   => $prefix . 'title',
		'type' => 'text',
    ) );

	$bimg_home_feature->add_field( array(
		'name' => 'Feature Text',
		'desc' => 'Provide additional text for the feature box.',
		'id'   => $prefix . 'text',
		'type' => 'textarea',
	) );
}

add_action( 'cmb2_init', 'bimg_register_home_services_metabox' );
function bimg_register_home_services_metabox() {
    $prefix = '_bimg_home_services_';

    $bimg_home_services = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => 'Services',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 701, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_home_services->add_field( array(
		'name' => 'Column 1 Title',
		'desc' => 'Set a title for the first column.',
		'id'   => $prefix . 'col1_title',
		'type' => 'text',
    ) );

	$bimg_home_services->add_field( array(
		'name' => 'Column 1 Image',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'col1_image',
		'type' => 'file',
	) );

	$bimg_home_services->add_field( array(
		'name' => 'Column 1 Text',
		'desc' => 'Provide a brief description for the first column.',
		'id'   => $prefix . 'col1_text',
		'type' => 'textarea',
	) );

	$bimg_home_services->add_field( array(
		'name' => 'Column 2 Title',
		'desc' => 'Set a title for the second column.',
		'id'   => $prefix . 'col2_title',
		'type' => 'text',
    ) );

	$bimg_home_services->add_field( array(
		'name' => 'Column 2 Image',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'col2_image',
		'type' => 'file',
	) );

	$bimg_home_services->add_field( array(
		'name' => 'Column 2 Text',
		'desc' => 'Provide a brief description for the second column.',
		'id'   => $prefix . 'col2_text',
		'type' => 'textarea',
	) );

	$bimg_home_services->add_field( array(
		'name' => 'Column 3 Title',
		'desc' => 'Set a title for the third column.',
		'id'   => $prefix . 'col3_title',
		'type' => 'text',
    ) );

	$bimg_home_services->add_field( array(
		'name'  => 'Column 3 Video',
		'desc'  => 'Enter a YouTube Video ID.',
		'id'    => $prefix . 'col3_video',
		'type'  => 'text',
		'after' => '<p>In the example below, the ID is the highlighted portion of the URL.<br><br>https://www.youtube.com/watch?v=<b style="background: yellow;">sDk1SDuZvT4</b></p>',
	) );

	$bimg_home_services->add_field( array(
		'name' => 'Column 3 Text',
		'desc' => 'Provide a brief description for the third column.',
		'id'   => $prefix . 'col3_text',
		'type' => 'textarea',
	) );
}

add_action( 'cmb2_init', 'bimg_register_home_list_metabox' );
function bimg_register_home_list_metabox() {
    $prefix = '_bimg_home_list_';

    $bimg_home_list = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => 'Why Choose Us?',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => false, // Show field names on the left
		'show_on'      => array( 'id' => array( 701, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_home_list->add_field( array(
		'name'    => 'Why Choose Us?',
		'desc'    => 'Enter a bullet list.',
		'id'      => $prefix . 'list',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );
}

/*
 * About Page
 */

add_action( 'cmb2_init', 'bimg_register_about_professionalism_metabox' );
function bimg_register_about_professionalism_metabox() {
    $prefix = '_bimg_about_professionalism_';

    $bimg_about_professionalism = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => 'Professionalism',
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'show_on'       => array( 'id' => array( 1786, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_about_professionalism->add_field( array(
		'name'       => 'Description',
		'desc'       => 'Short description of your company\'s professionalism.',
		'id'         => $prefix . 'description',
		'type'       => 'textarea',
    ) );

	$bimg_about_professionalism->add_field( array(
		'name' => 'Highlights List',
		'id'   => $prefix . 'list',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );
	
	$bimg_about_professionalism->add_field( array(
		'name' => 'Image 1',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image_1',
		'type' => 'file',
	) );
	
	$bimg_about_professionalism->add_field( array(
		'name' => 'Image 2',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image_2',
		'type' => 'file',
	) );
}

add_action( 'cmb2_init', 'bimg_register_about_products_metabox' );
function bimg_register_about_products_metabox() {
    $prefix = '_bimg_about_products_';

    $bimg_about_products = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => 'Premium Products',
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'show_on'       => array( 'id' => array( 1786, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_about_products->add_field( array(
		'name'       => 'Description',
		'desc'       => 'Short description of your company\'s products.',
		'id'         => $prefix . 'description',
		'type'       => 'textarea',
    ) );

	$bimg_about_products->add_field( array(
		'name' => 'Highlights List',
		'id'   => $prefix . 'list',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );
	
	$bimg_about_products->add_field( array(
		'name' => 'Image 1',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image_1',
		'type' => 'file',
	) );
	
	$bimg_about_products->add_field( array(
		'name' => 'Image 1',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image_2',
		'type' => 'file',
	) );
}

add_action( 'cmb2_init', 'bimg_register_about_inclusive_metabox' );
function bimg_register_about_inclusive_metabox() {
    $prefix = '_bimg_about_inclusive_';

    $bimg_about_inclusive = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => 'All-Inclusive',
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'show_on'       => array( 'id' => array( 1786, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_about_inclusive->add_field( array(
		'name'       => 'Description',
		'desc'       => 'Short description of your company\'s all-inclusive experience.',
		'id'         => $prefix . 'description',
		'type'       => 'textarea',
    ) );

	$bimg_about_inclusive->add_field( array(
		'name' => 'Highlights List',
		'id'   => $prefix . 'list',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );
	
	$bimg_about_inclusive->add_field( array(
		'name' => 'Image 1',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image_1',
		'type' => 'file',
	) );
	
	$bimg_about_inclusive->add_field( array(
		'name' => 'Image 1',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image_2',
		'type' => 'file',
	) );
}

add_action( 'cmb2_init', 'bimg_register_about_philanthropy_metabox' );
function bimg_register_about_philanthropy_metabox() {
    $prefix = '_bimg_about_philanthropy_';

    $bimg_about_philanthropy = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => 'Philanthropy',
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'show_on'       => array( 'id' => array( 1786, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_about_philanthropy->add_field( array(
		'name'       => 'Description',
		'desc'       => 'Short description of your company\'s philanthropy.',
		'id'         => $prefix . 'description',
		'type'       => 'textarea',
    ) );

	$bimg_about_philanthropy->add_field( array(
		'name' => 'Highlights List',
		'id'   => $prefix . 'list',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );
	
	$bimg_about_philanthropy->add_field( array(
		'name' => 'Image 1',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image_1',
		'type' => 'file',
	) );
	
	$bimg_about_philanthropy->add_field( array(
		'name' => 'Image 1',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image_2',
		'type' => 'file',
	) );
}

/*
 * Commercial & Residential Services Pages
 */
add_action( 'cmb2_init', 'bimg_register_services_about_metabox' );
function bimg_register_services_about_metabox() {
    $prefix = '_bimg_services_about_';

    $bimg_services_about = new_cmb2_box( array(
        'id'           => $prefix . 'metabox',
        'title'        => 'About',
		'object_types' => array( 'page', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array( 'id' => array( 1878, 1880, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_services_about->add_field( array(
		'name' => 'Title',
		'desc' => 'Set the title of this service.',
		'id'   => $prefix . 'title',
		'type' => 'text',
    ) );

	$bimg_services_about->add_field( array(
		'name' => 'Featured Image',
		'desc' => 'Upload an image or enter a URL.',
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );

	$bimg_services_about->add_field( array(
		'name' => 'Description',
		'desc' => 'Provide a description of this service.',
		'id'   => $prefix . 'description',
		'type' => 'textarea',
	) );
}

/*
 * This metabox only appears on the Commercial Services page, and should only have a single id.
 */
add_action( 'cmb2_init', 'bimg_register_client_services_metabox' );
function bimg_register_client_services_metabox() {
    $prefix = '_bimg_client_services_';

    $bimg_client_services = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => 'Client Services',
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'show_on'       => array( 'id' => array( 1878, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_client_services->add_field( array(
		'name'  => 'Column 1 Title',
		'desc'  => 'Set the title of this service.',
		'id'    => $prefix . 'col1_title',
		'type'  => 'text',
        'after' => '<p>Don\'t change this unless absolutely necessary. If you change the title, the corresponding icon may no longer be relevant.</p>',
    ) );

	$bimg_client_services->add_field( array(
		'name' => 'Column 1 Description',
		'desc' => 'Provide a description of this service.',
		'id'   => $prefix . 'col1_description',
		'type' => 'textarea',
	) );

	$bimg_client_services->add_field( array(
		'name'  => 'Column 2 Title',
		'desc'  => 'Set the title of this service.',
		'id'    => $prefix . 'col2_title',
		'type'  => 'text',
        'after' => '<p>Don\'t change this unless absolutely necessary. If you change the title, the corresponding icon may no longer be relevant.</p>',
    ) );

	$bimg_client_services->add_field( array(
		'name' => 'Column 2 Description',
		'desc' => 'Provide a description of this service.',
		'id'   => $prefix . 'col2_description',
		'type' => 'textarea',
	) );

	$bimg_client_services->add_field( array(
		'name'  => 'Column 3 Title',
		'desc'  => 'Set the title of this service.',
		'id'    => $prefix . 'col3_title',
		'type'  => 'text',
        'after' => '<p>Don\'t change this unless absolutely necessary. If you change the title, the corresponding icon may no longer be relevant.</p>',
    ) );

	$bimg_client_services->add_field( array(
		'name' => 'Column 3 Description',
		'desc' => 'Provide a description of this service.',
		'id'   => $prefix . 'col3_description',
		'type' => 'textarea',
	) );

	$bimg_client_services->add_field( array(
		'name'  => 'Column 4 Title',
		'desc'  => 'Set the title of this service.',
		'id'    => $prefix . 'col4_title',
		'type'  => 'text',
        'after' => '<p>Don\'t change this unless absolutely necessary. If you change the title, the corresponding icon may no longer be relevant.</p>',
    ) );

	$bimg_client_services->add_field( array(
		'name' => 'Column 4 Description',
		'desc' => 'Provide a description of this service.',
		'id'   => $prefix . 'col4_description',
		'type' => 'textarea',
	) );
}

add_action( 'cmb2_init', 'bimg_services_video_metabox' );
function bimg_services_video_metabox() {
    $prefix = '_bimg_services_video_';

    $bimg_services_video = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => 'Video',
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'show_on'       => array( 'id' => array( 1878, 1880, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_services_video->add_field( array(
		'name'  => 'Video ID',
		'desc'  => 'Enter a YouTube Video ID.',
		'id'    => $prefix . 'id',
		'type'  => 'text',
		'after' => '<p>In the example below, the ID is the highlighted portion of the URL.<br><br>https://www.youtube.com/watch?v=<b style="background: yellow;">sDk1SDuZvT4</b></p>',
	) );
}

add_action( 'cmb2_init', 'bimg_register_tabs_metabox' );
function bimg_register_tabs_metabox() {
    $prefix = '_bimg_services_tabs_';

    $bimg_services_tabs = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => 'Tab List',
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		'show_on'       => array( 'id' => array( 1878, 1880, ) ), // Specific post IDs to display this metabox
    ) );

	$bimg_services_tabs->add_field( array(
		'name' => 'Tab 1 Title',
		'id'   => $prefix . 'tab1_title',
		'type' => 'text',
    ) );

	$bimg_services_tabs->add_field( array(
		'name' => 'Tab 1 Text',
		'id'   => $prefix . 'tab1_text',
		'type' => 'textarea',
	) );

	$bimg_services_tabs->add_field( array(
		'name' => 'Tab 2 Title',
		'id'   => $prefix . 'tab2_title',
		'type' => 'text',
    ) );

	$bimg_services_tabs->add_field( array(
		'name' => 'Tab 2 Text',
		'id'   => $prefix . 'tab2_text',
		'type' => 'textarea',
	) );

	$bimg_services_tabs->add_field( array(
		'name' => 'Tab 3 Title',
		'id'   => $prefix . 'tab3_title',
		'type' => 'text',
    ) );

	$bimg_services_tabs->add_field( array(
		'name' => 'Tab 3 Text',
		'id'   => $prefix . 'tab3_text',
		'type' => 'textarea',
	) );

	$bimg_services_tabs->add_field( array(
		'name' => 'Tab 4 Title',
		'id'   => $prefix . 'tab4_title',
		'type' => 'text',
    ) );

	$bimg_services_tabs->add_field( array(
		'name' => 'Tab 4 Text',
		'id'   => $prefix . 'tab4_text',
		'type' => 'textarea',
	) );
}

