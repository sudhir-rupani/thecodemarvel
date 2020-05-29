<?php

/**
 * thecodemarvel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thecodemarvel
 */
if (!function_exists('thecodemarvel_setup')) :

    function thecodemarvel_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on thecodemarvel, use a find and replace
         * to change 'thecodemarvel' to the name of your theme in all the template files.
         */
        load_theme_textdomain('thecodemarvel', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');


        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'thecodemarvel'),
        ));


        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('thecodemarvel_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }

endif;
add_action('after_setup_theme', 'thecodemarvel_setup');

function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin/style.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


function thecodemarvel_scripts() {
    wp_enqueue_style('thecodemarvel-style', get_stylesheet_uri());

    //wp_enqueue_script( 'thecodemarvel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}



add_action('wp_enqueue_scripts', 'thecodemarvel_scripts');
add_action( 'wp_ajax_update_job_status', 'update_job_status' );
add_action( 'wp_ajax_nopriv_update_job_status', 'update_job_status' );

function update_job_status(){

   global $wpdb; // this is how you get access to the database
    $job_id = intval($_POST['job_id']);
    $allowed_status =array('review','done');
    if(in_array($_POST['status'], $allowed_status)  && isset($job_id))
    {
        $status = ($_POST['status'] == 'done')?'publish':$_POST['status'] ; 
         $my_post = array(
          'ID'           => $job_id,
          'post_status'   => $status,
      );
  
    $postUpdate = wp_update_post($my_post);
    if(is_wp_error($postUpdate)){
        exit;
        }
        echo 'sucess';
        }
 wp_die();
}
//add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
//function special_nav_class($classes, $item){
//     if( in_array('current-menu-item', $classes) ){
//         echo"<pre>";
//         print_r($classes);
//         print_r($item);
//         echo"</pre>";
//             $classes[] = 'active ';
//     }
//     return $classes;
//}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Registering custom post status 
// Rejected
function wpb_custom_post_status(){
    register_post_status('rejected', array(
        'label'                     => _x( 'Rejected', 'orderlist' ),
        'public'                    => false,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop( 'Rejected <span class="count">(%s)</span>', 'Rejected <span class="count">(%s)</span>' ),
    ) );

//In Progress

    register_post_status('inprogress', array(
        'label'                     => _x( 'In Progress', 'orderlist' ),
        'public'                    => false,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop( 'In Progress <span class="count">(%s)</span>', 'In Progress <span class="count">(%s)</span>' ),
    ) );

    register_post_status('review', array(
        'label'                     => _x( 'In Review', 'orderlist' ),
        'public'                    => false,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop( 'In Review <span class="count">(%s)</span>', 'In Review <span class="count">(%s)</span>' ),
    ) );

// In ready
    register_post_status('ready', array(
        'label'                     => _x( 'In Ready', 'orderlist' ),
        'public'                    => false,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop( 'In Ready <span class="count">(%s)</span>', 'In Ready <span class="count">(%s)</span>' ),
    ) );
}
add_action( 'init', 'wpb_custom_post_status' );
 
// Using jQuery to add it to post status dropdown
add_action('admin_footer-post.php', 'wpb_append_post_status_list');
function wpb_append_post_status_list()
{
global $post;
$complete = '';
$label = '';
$label1 = '';
$label2 = '';
$label3 = '';
if($post->post_type == 'orderlist'){
if($post->post_status == 'rejected'){
$complete = ' selected="selected"';
$label = '<span id="post-status-display"> Rejected</span>';
}
if($post->post_status == 'inprogress'){
$complete = ' selected="selected"';
$label1 = '<span id="post-status-display"> In Progress</span>';
}
if($post->post_status == 'review'){
$complete = ' selected="selected"';
$labe2 = '<span id="post-status-display"> In Review</span>';
}
if($post->post_status == 'ready'){
$complete = ' selected="selected"';
$labe3 = '<span id="post-status-display"> In Ready</span>';
}
echo '
<script>
jQuery(document).ready(function($){
$("select#post_status").append("<option value=\"rejected\" '.$complete.'>Rejected</option>");
$("select#post_status").append("<option value=\"review\" '.$complete.'>In Review</option>");
$("select#post_status").append("<option value=\"inprogress\" '.$complete.'>In Progress</option>");
$("select#post_status").append("<option value=\"ready\" '.$complete.'>In Ready</option>");
$(".misc-pub-section label").append("'.$label.'");
$(".misc-pub-section label").append("'.$label1.'");
$(".misc-pub-section label").append("'.$label2.'");

$(".misc-pub-section label").append("'.$label3.'");
});
</script>
';
}
}



add_filter( 'woocommerce_checkout_fields' , 'virtual_products_less_fields' );
 
function virtual_products_less_fields( $fields ) {
     
    // set our flag to be true until we find a product that isn't virtual
    $virtual_products = true;
     
   //	 loop through our cart
    // foreach( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
     //Check if there are non-virtual products and if so make it false
        // if ( ! $cart_item['data']->is_virtual() ) $virtual_products = false; 
    // }

    // only unset fields if virtual_products is true so we have no physical products in the cart
        unset($fields['billing']['billing_company']);
        unset($fields['billing']['billing_address_1']);
        unset($fields['billing']['billing_address_2']);
        unset($fields['billing']['billing_city']);
        unset($fields['billing']['billing_postcode']);
        unset($fields['billing']['billing_country']);
        unset($fields['billing']['billing_state']);
        unset($fields['billing']['billing_phone']);
    
	add_filter( 'woocommerce_enable_order_notes_field', '__return_false',9999 ); 
     
    return $fields;
}


add_filter('woocommerce_billing_fields','wpb_custom_billing_fields');

function wpb_custom_billing_fields( $fields = array() ) {

	unset($fields['billing_company']);
	unset($fields['billing_address_1']);
	unset($fields['billing_address_2']);
	unset($fields['billing_state']);
	unset($fields['billing_city']);
	unset($fields['billing_phone']);
	unset($fields['billing_postcode']);
	unset($fields['billing_country']);

	return $fields;
}

//After payment complete

add_action( 'woocommerce_payment_complete', 'so_payment_complete' );
function so_payment_complete( $order_id ){
    $order = wc_get_order( $order_id );
    $user = $order->get_user();
    if( $user ){
		$rest_hour = (int)get_user_meta($user->ID,'user_subscription_hour',true);
		$item_hour = 0 ;
		foreach ($order->get_items() as $item_id => $item_data	) {
			$product = $item_data->get_product();
			$product_id = $product->get_id(); // Get the product name
			$item_hour1 =(int)get_post_meta($product_id, 'product_hour', true);
			if($item_hour1){
				$item_hour = $item_hour +$item_hour1;
			}
			 
		}
		$rest_hour = $rest_hour + $item_hour ; 	
		update_user_meta($user->ID,'user_subscription_hour',$rest_hour);
	}

}

add_action('show_user_profile', 'custom_user_profile_fields');
add_action('edit_user_profile', 'custom_user_profile_fields');

// @param WP_User $user
function custom_user_profile_fields( $user ) {
?>
    <table class="form-table">
        <tr>
            <th>
                <label for="user_subscription_hour"><?php _e( 'User Hour') ?></label>
            </th>
            <td>
                <input disabled="disabled" type="text" name="user_subscription_hour" id="user_subscription_hour" value="<?php echo esc_attr( get_the_author_meta( 'user_subscription_hour', $user->ID ) ); ?>" class="regular-text" />
            </td>
        </tr>
    </table>
<?php
}

add_action( 'personal_options_update', 'update_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'update_extra_profile_fields' );

function update_extra_profile_fields( $user_id ) {
//    if ( current_user_can( 'edit_user', $user_id ) )
 //       update_user_meta( $user_id, 'user_subscription_hour', $_POST['user_subscription_hour'] );
}

function my_manage_users_columns( $columns ) {
    $columns[ 'custom_field' ] = 'Remaining Hour';
    return $columns;
}

add_filter( 'manage_users_columns', 'my_manage_users_columns', 10, 1 );

function my_manage_users_custom_column( $output, $column_key, $user_id ) {

    switch ( $column_key ) {
        case 'custom_field':
            $value = get_user_meta( $user_id, 'user_subscription_hour', true );
            return $value;
            break;
        default: break;
    }
    // if no column slug found, return default output value
    return $output;
}

add_filter( 'manage_users_custom_column', 'my_manage_users_custom_column', 10, 3 );





function global_notice_meta_box() {

    $screens = array( 'post', 'page', 'orderlist' );

    foreach ( $screens as $screen ) {
        add_meta_box(
            'uwlh',
            __( 'Order Worklog', 'uwlgh' ),
            'order_work_history',
            $screen
        );
    }
}

add_action( 'add_meta_boxes', 'global_notice_meta_box' );


/**
 * Output the HTML for the metabox.
 */
function order_work_history() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'tcm_worklog' );
    $tcm_sub_remain = get_user_meta($post->post_author, 'user_subscription_hour', true );
	echo '<span>User Remaining Hours : <h3>'.$tcm_sub_remain.'</h3></span>';
	echo '<hr><br/>';
	echo '<input type="number" placeholder="Enter worklog in Hour" name="tcm_worklog" class="widefat">';

	$worklog_history = get_post_meta( $post->ID, 'tcm_worklog_history', true );
	$history_array = maybe_unserialize($worklog_history);

if($history_array){
	foreach($history_array as $log){
		echo '<div class="misc-pub-section curtime misc-pub-curtime">
				<span id="timestamp">'.$log['worklog'].' Hour <b>On : '.$log['date'].' </b>	</span>
				</div>';
	}
}
}
/**
 * Save the metabox data
 */
function wpt_save_post_meta( $post_id, $post ) {


	// Return if the user doesn't have edit permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	if ( ! isset( $_POST['tcm_worklog'] )) {
		return $post_id;
	}
	$worklog_data = esc_textarea( $_POST['tcm_worklog'] );
	
	if($worklog_data){
		$tcm_worklog_history = array();
		$history_array = array();
		$tcm_worklog_history = get_post_meta( $post_id, 'tcm_worklog_history', true );
		$data_prepare['date'] = get_the_date();
		$data_prepare['worklog'] =(int) $worklog_data;
		if(is_array($tcm_worklog_history)){
		array_push($tcm_worklog_history,$data_prepare) ;			
		}else {
			$tcm_worklog_history = array($data_prepare);	
		}
        $tcm_subscription_hour = get_user_meta($post->post_author, 'user_subscription_hour', true );
		$tcm_subscription_hour = ($tcm_subscription_hour - ((int)$worklog_data) ) ;
		update_user_meta($post->post_author, 'user_subscription_hour', $tcm_subscription_hour );
	
		if($tcm_subscription_hour < 1){
			
		 // To doo	
		}
		  //exit;
		 // $tcm_worklog_history ='';
		update_post_meta( $post_id, 'tcm_worklog_history', $tcm_worklog_history);
		$tcm_worklog_history = get_post_meta( $post_id, 'tcm_worklog_history', true );
	}
		return $post_id;


}
add_action( 'save_post', 'wpt_save_post_meta', 1, 2 );