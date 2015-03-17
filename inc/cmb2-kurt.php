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

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
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