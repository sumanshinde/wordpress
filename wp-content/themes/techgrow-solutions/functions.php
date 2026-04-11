<?php
/**
 * TechGrow Solutions functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function techgrow_solutions_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'techgrow-solutions' ),
		'footer'  => esc_html__( 'Footer Menu', 'techgrow-solutions' ),
	) );
}
add_action( 'after_setup_theme', 'techgrow_solutions_setup' );

function techgrow_solutions_scripts() {
	wp_enqueue_style( 'techgrow-solutions-style', get_stylesheet_uri() );
	wp_enqueue_style( 'techgrow-solutions-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Poppins:wght@400;600;700;800&display=swap' );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' );
    wp_enqueue_style( 'aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
    
    wp_enqueue_script( 'aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true );
    wp_add_inline_script( 'aos-script', 'AOS.init({ duration: 1000, once: true });' );

    wp_enqueue_script( 'techgrow-contact', get_template_directory_uri() . '/js/contact.js', array('jquery'), '1.1', true );
    wp_localize_script( 'techgrow-contact', 'techgrow_ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'techgrow_contact_nonce' )
    ));
}
add_action( 'wp_enqueue_scripts', 'techgrow_solutions_scripts' );

/**
 * Portfolio CPT
 */
function techgrow_register_portfolio_cpt() {
    register_post_type( 'portfolio', array(
        'labels'      => array( 'name' => 'Portfolio', 'singular_name' => 'Project' ),
        'public'      => true,
        'menu_icon'   => 'dashicons-portfolio',
        'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'has_archive' => true,
    ));
}
add_action( 'init', 'techgrow_register_portfolio_cpt' );

/**
 * Database Table for Contact Submissions
 */
function techgrow_create_contact_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'techgrow_submissions';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        message text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
add_action( 'after_switch_theme', 'techgrow_create_contact_table' );

/**
 * AJAX Handler with DB Storage
 */
function techgrow_handle_contact_form() {
    check_ajax_referer( 'techgrow_contact_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name'] );
    $email   = sanitize_email( $_POST['email'] );
    $message = sanitize_textarea_field( $_POST['message'] );

    if ( empty($name) || !is_email($email) || empty($message) ) {
        wp_send_json_error( 'Please provide valid information.' );
    }

    global $wpdb;
    $wpdb->insert( 
        $wpdb->prefix . 'techgrow_submissions', 
        array( 'time' => current_time( 'mysql' ), 'name' => $name, 'email' => $email, 'message' => $message ) 
    );

    wp_send_json_success( 'Your vision has been received. We will contact you shortly.' );
}
add_action( 'wp_ajax_techgrow_contact', 'techgrow_handle_contact_form' );
add_action( 'wp_ajax_nopriv_techgrow_contact', 'techgrow_handle_contact_form' );

/**
 * Admin Menu to View Submissions
 */
function techgrow_admin_menu() {
    add_menu_page( 'Submissions', 'Submissions', 'manage_options', 'techgrow-submissions', 'techgrow_submissions_page', 'dashicons-email-alt', 6 );
}
add_action( 'admin_menu', 'techgrow_admin_menu' );

function techgrow_submissions_page() {
    global $wpdb;
    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}techgrow_submissions ORDER BY id DESC" );
    ?>
    <div class="wrap techgrow-admin">
        <h1 style="margin-bottom: 30px;">Client Submissions</h1>
        <div class="card" style="max-width: 100%; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: none;">
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr style="background: #f8fbff;">
                        <th style="padding: 15px; font-weight: 700;">Date</th>
                        <th style="padding: 15px; font-weight: 700;">Name</th>
                        <th style="padding: 15px; font-weight: 700;">Email</th>
                        <th style="padding: 15px; font-weight: 700;">Message</th>
                        <th style="padding: 15px; font-weight: 700;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($results) : foreach ( $results as $row ) : ?>
                        <tr>
                            <td style="padding: 15px; vertical-align: middle;"><?php echo date('M d, Y H:i', strtotime($row->time)); ?></td>
                            <td style="padding: 15px; vertical-align: middle;"><strong><?php echo esc_html($row->name); ?></strong></td>
                            <td style="padding: 15px; vertical-align: middle;"><a href="mailto:<?php echo esc_attr($row->email); ?>"><?php echo esc_html($row->email); ?></a></td>
                            <td style="padding: 15px; vertical-align: middle;"><?php echo nl2br(esc_html($row->message)); ?></td>
                            <td style="padding: 15px; vertical-align: middle;">
                                <button class="button button-primary" onclick="alert('Replying feature would be integrated here.')">Reply</button>
                            </td>
                        </tr>
                    <?php endforeach; else : ?>
                        <tr><td colspan="5" style="text-align: center; padding: 30px;">No submissions yet.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <style>
        .techgrow-admin .widefat { border: none !important; }
        .techgrow-admin thead th { border-bottom: 2px solid #eee !important; }
    </style>
    <?php
}

/**
 * Customizer
 */
function techgrow_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'techgrow_info', array( 'title' => 'TechGrow Info' ) );
    
    $settings = array( 'email' => 'Email', 'phone' => 'Phone', 'address' => 'Address' );
    foreach($settings as $key => $label) {
        $wp_customize->add_setting( "techgrow_$key", array( 'default' => '' ) );
        $wp_customize->add_control( "techgrow_$key", array( 'label' => $label, 'section' => 'techgrow_info' ) );
    }

    $wp_customize->add_section( 'techgrow_social', array( 'title' => 'Social Links' ) );
    foreach(array('facebook','twitter','linkedin','instagram') as $social) {
        $wp_customize->add_setting( "techgrow_$social", array( 'default' => '#' ) );
        $wp_customize->add_control( "techgrow_$social", array( 'label' => ucfirst($social), 'section' => 'techgrow_social' ) );
    }
}
add_action( 'customize_register', 'techgrow_customize_register' );

function techgrow_front_page_template( $template ) {
    if ( is_front_page() ) {
        $new_template = locate_template( array( 'front-page.php' ) );
        if ( $new_template ) return $new_template;
    }
    return $template;
}
add_filter( 'template_include', 'techgrow_front_page_template' );
