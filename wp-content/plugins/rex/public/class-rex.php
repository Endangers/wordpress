<?php
/**
 * Plugin Name: Class Rex
 *
 * @package   Rex
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Your Name or Company Name
 */

/**
 * Plugin class. This class should ideally be used to work with the
 * public-facing side of the WordPress site.
 *
 * If you're interested in introducing administrative or dashboard
 * functionality, then refer to `class-plugin-name-admin.php`
 *
 * @package Rex
 * @author  Your Name <email@example.com>
 */
class Rex {

	/**
	 * Plugin version, used for cache-busting of style and script file references.
	 *
	 * @since   1.0.0
	 *
	 * @var     string
	 */
	const VERSION = '1.0.0';

	/**
	 * Unique identifier for your plugin.
	 *
	 *
	 * The variable name is used as the text domain when internationalizing strings
	 * of text. Its value should match the Text Domain file header in the main
	 * plugin file.
	 *
	 * @since    1.0.0
	 *
	 * @var      string
	 */
	protected $plugin_slug = 'rex';

	/**
	 * Instance of this class.
	 *
	 * @since    1.0.0
	 *
	 * @var      object
	 */
	protected static $instance = null;

	/**
	 * Initialize the plugin by setting localization and loading public scripts
	 * and styles.
	 *
	 * @since     1.0.0
	 */
	private function __construct() {

		// Load plugin text domain
		add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

		// Activate plugin when new blog is added
		add_action( 'wpmu_new_blog', array( $this, 'activate_new_site' ) );

		// Load public-facing style sheet and JavaScript.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		/* Define custom functionality.
		 * Refer To http://codex.wordpress.org/Plugin_API#Hooks.2C_Actions_and_Filters
		 */
		add_action( 'init', array( $this, 'create_custom_post' ) );
		
		//Adds the shortcode for the front end form
		add_shortcode( 'rex-bpf', array($this, 'prf_shortcode') );
		
		//Includes the ajax file that will be posted to later
        //include 'wp-content/plugins/book-post-form/book-post-ajax.php';
        
		// Custom taxonomies won't be necessary until we make this custom post completely generic
		// and start allowing users to define their own categories
		add_action( 'init', array( $this, 'create_custom_taxonomies' ) );

	}



	function get_pub_page_title()
	{

		/*if ( !is_user_logged_in() ) {
			$redirect = 'https://booklist.ics.uci.edu/wp-login';
			echo wp_login_url( $redirect );
		}*/

		//If not logged it, redirect
		/*if (!is_user_logged_in()) {
			echo 'NOT LOGGED IN!';
			//echo "<script language='javascript'> window.location = 'https://booklist.ics.uci.edu/wp-login'</script>"
			//header('Location: https://booklist.ics.uci.edu/wp-login');
		}*/
    
	    echo"
    <!-- CSS Files are in enqueue scripts-->
    <!-- Actual Book Post Form -->
    <form action='".get_admin_url()."admin-post.php'>
    <input type='hidden' name='action' value='submit-form' />
        <div class='book-wrap book-wrap-half'>
            <div id='book-search-text' class='book-wrap book-wrap-left book-search'></div>

            <div class='under-selector'>
                <div class='book-wrap'>
    				<label id='book-recommendation-label' for='book-recommendation-description'>
    					<p class='user-selection'><strong>Why are you recommending this?</strong></p></label>
    					<textarea class='large-text book-label editable' rows='6' id='book-recommendation-description' name='book-recommendation-description' ></textarea>
    				
                
                
                    <div class='book-tags'>
                        <label id='book-select-tag-label' for='book-select-tags'>
                            <p class='user-selection'><strong>Categories</strong></p></label>
                            <input type='checkbox' id='book-select-tag[]' name='book-select-tag[]' value='Software Engineering'/>Software Engineering<br>
                            <input type='checkbox' id='book-select-tag[]' name='book-select-tag[]' value='Human-Computer Interaction'/>Human-Computer Interaction<br>
                            <input type='checkbox' id='book-select-tag[]' name='book-select-tag[]' value='Health Informatics'/>Health Informatics<br>
                            <input type='checkbox' id='book-select-tag[]' name='book-select-tag[]' value='IT in Society and Organizations'/>IT in Society and Organizations<br>
                            <input type='checkbox' id='book-select-tag[]' name='book-select-tag[]' value='Games and Virtual Worlds' />Games and Virtual Worlds<br>

                        <label id='book-select-tag-label' for='book-select-tags'>
                            <p class='user-selection'><strong>Audience</strong></p></label>
                            <input type='checkbox' id='book-select-audience[]' name='book-select-audience[]' value='ug'/>Entering Undergraduate<br>
                            <input type='checkbox' id='book-select-audience[]' name='book-select-audience[]' value='grad'/>Senior Undergraduate<br>
                            <input type='checkbox' id='book-select-audience[]' name='book-select-audience[]' value='pgrad'/>Graduate Student<br>
                        
                    </div>
                </div>
            </div>
            <br/>
            <input type='submit' class='button' name='submit' value='Submit' />
        </div>

        <div class='book-wrap book-wrap-half'>
            <label id='book-select-title-label' for='book-select-title'>
                <p class='book-info-fields'><strong>Title</strong></p></label>
                <input class='large-text book-label' id='book-select-title' type='text' name='book-select-title' readonly />
            

            <label id='book-select-author-label' for='book-select-author'>
                <p class='book-info-fields'><strong>Author</strong></p></label>
                <input class='large-text book-label' id='book-select-author' type='text' name='book-select-author' readonly />
            

            <label id='book-select-url-label' for='book-select-url'>
                <p class='book-info-fields'><strong>Book URL</strong></p></label>
                <input class='large-text book-label' id='book-select-url' type='text' name='book-select-url' readonly />
            

            <label id='book-select-isbn-label' for='book-select-isbn'>
                <p class='book-info-fields'><strong>ISBN</strong></p></label>
                <input class='large-text book-label' id='book-select-isbn' type='text' name='book-select-isbn' readonly />
            

            <label id='book-select-description-label' for='book-select-description'>
                <p class='book-info-fields'><strong>Official Description</strong></p></label>
                <textarea class='large-text book-label' rows='6' id='book-select-description' name='book-select-description' readonly></textarea>
            

            <label id='book-select-thumbnail-label' for='book-select-thumbnail'>
                <p class='book-info-fields'><strong>Thumbnail</strong></p></label>
                <input class='large-text book-label' type='text' name='book-select-thumbnail' id='book-select-thumbnail' hidden />
            
            <img id='book-select-thumbnail-img' src='' />
            
            <br/>
        </div>

        <!-- Used for clearing floats -->
        <div style='clear: both;'></div>
    </form>
    <!-- JS Files are in enqueue scripts-->
    ";
    
	}

	/**
	 * Return the plugin slug.
	 *
	 * @since    1.0.0
	 *
	 * @return    Plugin slug variable.
	 */
	public function get_plugin_slug() {
		return $this->plugin_slug;
	}

	/**
	 * Return an instance of this class.
	 *
	 * @since     1.0.0
	 *
	 * @return    object    A single instance of this class.
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Fired when the plugin is activated.
	 *
	 * @since    1.0.0
	 *
	 * @param    boolean    $network_wide    True if WPMU superadmin uses
	 *                                       "Network Activate" action, false if
	 *                                       WPMU is disabled or plugin is
	 *                                       activated on an individual blog.
	 */
	public static function activate( $network_wide ) {

		if ( function_exists( 'is_multisite' ) && is_multisite() ) {

			if ( $network_wide  ) {

				// Get all blog ids
				$blog_ids = self::get_blog_ids();

				foreach ( $blog_ids as $blog_id ) {

					switch_to_blog( $blog_id );
					self::single_activate();
				}

				restore_current_blog();

			} else {
				self::single_activate();
			}

		} else {
			self::single_activate();
		}

	}

	/**
	 * Fired when the plugin is deactivated.
	 *
	 * @since    1.0.0
	 *
	 * @param    boolean    $network_wide    True if WPMU superadmin uses
	 *                                       "Network Deactivate" action, false if
	 *                                       WPMU is disabled or plugin is
	 *                                       deactivated on an individual blog.
	 */
	public static function deactivate( $network_wide ) {

		if ( function_exists( 'is_multisite' ) && is_multisite() ) {

			if ( $network_wide ) {

				// Get all blog ids
				$blog_ids = self::get_blog_ids();

				foreach ( $blog_ids as $blog_id ) {

					switch_to_blog( $blog_id );
					self::single_deactivate();

				}

				restore_current_blog();

			} else {
				self::single_deactivate();
			}

		} else {
			self::single_deactivate();
		}

	}

	/**
	 * Fired when a new site is activated with a WPMU environment.
	 *
	 * @since    1.0.0
	 *
	 * @param    int    $blog_id    ID of the new blog.
	 */
	public function activate_new_site( $blog_id ) {

		if ( 1 !== did_action( 'wpmu_new_blog' ) ) {
			return;
		}

		switch_to_blog( $blog_id );
		self::single_activate();
		restore_current_blog();

	}

	/**
	 * Get all blog ids of blogs in the current network that are:
	 * - not archived
	 * - not spam
	 * - not deleted
	 *
	 * @since    1.0.0
	 *
	 * @return   array|false    The blog ids, false if no matches.
	 */
	private static function get_blog_ids() {

		global $wpdb;

		// get an array of blog ids
		$sql = "SELECT blog_id FROM $wpdb->blogs
			WHERE archived = '0' AND spam = '0'
			AND deleted = '0'";

		return $wpdb->get_col( $sql );

	}

	/**
	 * Fired for each blog when the plugin is activated.
	 *
	 * @since    1.0.0
	 */
	private static function single_activate() {
		// @TODO: Define activation functionality here
	}

	/**
	 * Fired for each blog when the plugin is deactivated.
	 *
	 * @since    1.0.0
	 */
	private static function single_deactivate() {
		// @TODO: Define deactivation functionality here
	}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		$domain = $this->plugin_slug;
		$locale = apply_filters( 'plugin_locale', get_locale(), $domain );

		load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
		load_plugin_textdomain( $domain, FALSE, basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/' );

	}

	/**
	 * Register and enqueue public-facing style sheet.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_slug . '-plugin-styles1', plugins_url( 'assets/css/public.css', dirname(__FILE__) ), array(), self::VERSION );
		wp_enqueue_style( $this->plugin_slug . '-plugin-styles2', plugins_url( 'css/select2.css', dirname(__FILE__) ), array(), self::VERSION );
		wp_enqueue_style( $this->plugin_slug . '-plugin-styles3', plugins_url( 'css/book-select.css', dirname(__FILE__) ), array(), self::VERSION );
	}

	/**
	 * Register and enqueues public-facing JavaScript files.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_slug . '-plugin-script1', plugins_url( 'js/jquery.min.js', dirname(__FILE__) ), array( 'jquery' ), self::VERSION );
		wp_enqueue_script( $this->plugin_slug . '-plugin-script2', plugins_url( 'js/select2.min.js', dirname(__FILE__ )), array( 'jquery' ), self::VERSION );
		wp_enqueue_script( $this->plugin_slug . '-plugin-script3', plugins_url( 'js/book-query.js', dirname(__FILE__) ), array( 'jquery' ), self::VERSION );
		wp_enqueue_script( $this->plugin_slug . '-plugin-script4', plugins_url( 'js/admin-meta-boxes.js', dirname(__FILE__) ), array( 'jquery' ), self::VERSION );
		wp_enqueue_script( $this->plugin_slug . '-plugin-script5', plugins_url( 'js/public.js', dirname(__FILE__) ), array( 'jquery' ), self::VERSION );
		
	}

	/**
	 * Create custom post type, using this plugin's slug as the post type.
	 *
	 * @since    1.0.0
	 */
	public function create_custom_post() {
		register_post_type( $this->plugin_slug,
			array(
			'labels' 			=> array(
				'name' 					=> __( 'Book Recommendations' ),
				'singular_name' => __( 'Book Recommendation' ),
				'all_items'			=> __( 'Show All'),
				'add_new'				=> __( 'Add New' ),
				'add_new_item' 	=> __( 'Add New Book Recommendation' ),
				'edit_item' 		=> __( 'Edit Book Recommendation' ),
				'new_item' 			=> __( 'New Book Recommendation' ),
				'view_item' 		=> __( 'View Book Recommendation' ),
				'search_items' 	=> __( 'Search Book Recommendations' ),
				'not_found' 		=> __( 'No book recommendations found' ),
				'not_found_in_trash' => __( 'No book recommendations found in trash' ),
				),
			'public' 			=> true,
			'has_archive'	=> true,
			'supports'		=> array(
				'custom_fields'	// for "liking" a rex
				)
			)
		);
	}

	/**
	 * Registers user-defined taxonomies for this custom post type.
	 * Also allows other plugins -- through 'rex_register_taxonomy' hook -- to 
	 * 		define additional taxonomies. 
	 * $taxonomies is an associative array, where key is the name of the taxonomy, and
	 * 		value defines the taxonomy args.
	 *
	 * @since    1.0.0
	 */
	public function create_custom_taxonomies() {
		$taxonomies = apply_filters( $this->plugin_slug . '_register_taxonomies', array() );
		$taxonomies = array_merge( $taxonomies, array(
			'category_tags' 	=> array(
				'labels' 							=> array(
					'name' 								=> 'Category Tags',
					'singular_name' 			=> 'Category Tag',
					'all_items'						=> 'All Categories',
					'edit_item'						=> 'Edit Category',
					'view_item'						=> 'View Category',
					'update_item'					=> 'Update Category',
					'add_new_item'				=> 'Add New Category',
					'new_item_name'				=> 'New Category Name',
				), 
				'hierarchical'				=> true,
				'capabilities'				=> array( // Only allow administrators to edit taxonomies
					'manage_terms' 				=> 'manage_options',	// Admin-level
					'edit_terms'					=> 'manage_options',	// Admin-level
					'delete_terms'				=> 'manage_options',	// Admin-level
					'assign_terms'				=> 'upload_files',		// Author-level
				),
			),
			'age_group_tags' 	=> array(
				'labels' 							=> array(
					'name' 								=> 'Age Group Tags',
					'singular_name' 			=> 'Age Group Tag',
					'all_items'						=> 'All Age Groups',
					'edit_item'						=> 'Edit Age Group',
					'view_item'						=> 'View Age Group',
					'update_item'					=> 'Update Age Group',
					'add_new_item'				=> 'Add New Age Group',
					'new_item_name'				=> 'New Age Group Name',
				), 
				'hierarchical'				=> true,
				'capabilities'				=> array( // Only allow administrators to edit taxonomies
					'manage_terms' 				=> 'manage_options',	// Admin-level
					'edit_terms'					=> 'manage_options',	// Admin-level
					'delete_terms'				=> 'manage_options',	// Admin-level
					'assign_terms'				=> 'upload_files',		// Author-level
				),
			),
		));

		foreach ( $taxonomies as $key => $taxonomy ) {
			register_taxonomy( $key, $this->plugin_slug, $taxonomy );
			register_taxonomy_for_object_type( $key, $this->plugin_slug );
		}
	}

	
	/**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */
	public function add_action_links( $links ) {

		return array_merge(
			array(
				'settings' => '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_slug ) . '">' . __( 'Settings', $this->plugin_slug ) . '</a>'
			),
			$links
		);

	}

	/**
	 * @since    1.0.0
	 */

	public function prf_shortcode() {
		ob_start();
		$this->get_pub_page_title();
		return ob_get_clean();
	}

	

}
