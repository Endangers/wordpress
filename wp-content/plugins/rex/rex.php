<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Rex
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 *
 * @wordpress-plugin
 * Plugin Name:       Rex
 * Plugin URI:        @TODO
 * Description:       @TODO
 * Version:           1.0.0
 * Author:            @TODO
 * Author URI:        @TODO
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/<owner>/<repo>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-rex.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
register_activation_hook( __FILE__, array( 'Rex', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Rex', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
add_action( 'plugins_loaded', array( 'Rex', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() ) {

    require_once( plugin_dir_path( __FILE__ ) . 'admin/class-rex-admin.php' );
    add_action( 'plugins_loaded', array( 'Rex_Admin', 'get_instance' ) );
    add_action( 'admin_post_submit-form', 'rex_process_form_input' ); //wp_ajax_rex_process_form_input


}

add_filter( 'template_include', 'include_template_function', 1 );
function include_template_function( $template_path ) {
    if ( get_post_type() == 'rex' ) {
        if( is_author()){
    if ( $theme_file = locate_template( array ( 'author-rexes.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/author-rexes.php';
 
            }
        }else if ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-rexes.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-rexes.php';
 
            }
        }
    if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-rexes.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-rexes.php';
            }
        }
    }
    return $template_path;
}

function rex_process_form_input(){
	try{

        $post_content = 'This is a placeholder String.';

		$new_post = array(
			'post_title'   		=> sanitize_text_field( $_GET['book-select-title'] ),
			'post_content' 		=> wp_kses_post($post_content),
            'post_type'         => 'rex',
            'post_status'       => 'publish'
            
		);

		$post_ID = wp_insert_post($new_post, true);
		if(is_wp_error($new_post_id)){
			throw new Exception($post_ID->get_error_message(), 1);
        }
        
        update_post_meta($post_ID, 'book_title',  sanitize_text_field( $_GET['book-select-title'] ));
        
        if ( isset( $_GET['book-select-isbn'] ) ) {
			update_post_meta( $post_ID, 'book_isbn', $_GET['book-select-isbn'] );
		}

		if ( isset( $_GET['book-select-author'] ) ) {
			update_post_meta( $post_ID, 'book_author', $_GET['book-select-author'] );
		}

		if ( isset( $_GET['book-select-description'] ) ) {
			update_post_meta( $post_ID, 'book_description', $_GET['book-select-description'] );
		}

		if ( isset( $_GET['book-select-url'] ) ) {
			update_post_meta( $post_ID, 'book_url', $_GET['book-select-url'] );
		}

		if ( isset( $_GET['book-select-thumbnail'] ) ) {
			update_post_meta( $post_ID, 'book_thumbnail', $_GET['book-select-thumbnail'] );
		}

		if ( isset( $_GET['book-recommendation-description'] ) ) {
			update_post_meta( $post_ID, 'book_blurb', $_GET['book-recommendation-description'] );
        }
        
        if ( isset( $_GET['book-select-tag'] ) ) {
			wp_set_object_terms( $post_ID, $_GET['book-select-tag'], 'category_tags' );
        }
        
        if ( isset( $_GET['book-select-audience'] ) ) {
			wp_set_object_terms( $post_ID, $_GET['book-select-audience'], 'age_group_tags' );
        }
        
		$data['success'] = true;
		$data['post_id'] = $new_post_id;
		$data['message'] = 'Your Recommendation has been posted successfully!<br/>';
	}
	catch(Exception $ex){
		$data['success'] = false;
		$data['message'] = '<h2>Your submission has errors. Please try again!</h2>'.$ex->getMessage();
        die(json_encode($data));
	}
	wp_redirect( home_url() ); exit;
}

add_action( 'init', 'my_script_enqueuer' );

function my_script_enqueuer() {
   wp_register_script( 'book-query', WP_PLUGIN_URL.'/rex/js/book-query.js', array('jquery') );
   wp_localize_script( 'book-query', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'book-query' );

}

