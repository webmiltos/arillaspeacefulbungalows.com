<?php
// enqueue the child theme scripts and stylesheets
function add_assets()
{
    wp_enqueue_style('childstyle', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'), 'all');

    // Cookies JS
    // wp_enqueue_script( 'cookies', '//cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js', array (), '1.0', true);

    // Popup JS
    wp_enqueue_script('popup', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), '1.0', true);

    //Popup CSS
    wp_enqueue_style('popup-style', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css',  array(), '1.0.0', 'all');

    //Slider CSS
    wp_enqueue_style('slider-css', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',  array(), '1.0.0', 'all');

    //Slider JS
    wp_enqueue_script('slider', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0', true);

    //flatpickr Script
    wp_enqueue_script('flat-pickr', '//cdn.jsdelivr.net/npm/flatpickr', array(), null, true);

    //flatpickr CSS
    wp_enqueue_style('flat-pickr-style', '//cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',  array(), '1.0.0', 'all');

    //Google Maps JS
    wp_enqueue_script('google-maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyDi2hLgXm_UJiMb8NEowwUoFdW5tGvxKs8', array(), null, true);

    // Anime JS
    // wp_enqueue_script( 'anime', get_template_directory_uri() . '/assets/includes/anime.min.js', array ('jquery'), filemtime( get_stylesheet_directory() . '/assets/includes/anime.min.js'), true);

    // Script JS
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/scripts.js'), true);

    // Sliders JS
    wp_enqueue_script('sliders', get_template_directory_uri() . '/assets/js/sliders.js', array('jquery', 'slider'), filemtime(get_stylesheet_directory() . '/assets/js/sliders.js'), true);

    // Google JS
    wp_enqueue_script('google', get_template_directory_uri() . '/assets/js/google.js', array('jquery', 'google-maps'), filemtime(get_stylesheet_directory() . '/assets/js/google.js'), true);

    // Animations JS
    wp_enqueue_script('animations', get_template_directory_uri() . '/assets/js/animations.js', array('jquery'), filemtime(get_stylesheet_directory() . '/assets/js/animations.js'), true);
}
add_action('wp_enqueue_scripts', 'add_assets');





//Admin Options ACF
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Admin Options',
        'menu_title'    => 'Admin Options',
        'menu_slug'        => 'admin-options',
        'capability'     => 'edit_posts',
        'parent_slug'    => '',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'General',
        'menu_title'    => 'General',
        'menu_slug'        => 'admin-options-general',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'admin-options',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Contact',
        'menu_title'    => 'Contact',
        'menu_slug'        => 'admin-options-contact',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'admin-options',
        'position'        => false,
        'icon_url'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Privacy Policy',
        'menu_title'    => 'Privacy Policy',
        'menu_slug'        => 'admin-options-policy',
        'capability'     => 'edit_posts',
        'parent_slug'    => 'admin-options',
        'position'        => false,
        'icon_url'        => false
    ));
    // acf_add_options_sub_page(array(
    // 	'page_title'	=> 'Submit Review',
    // 	'menu_title'	=> 'Submit Review',
    // 	'menu_slug'		=> 'admin-options-submit-review',
    // 	'capability' 	=> 'edit_posts',
    // 	'parent_slug'	=> 'admin-options',
    // 	'position'		=> false,
    // 	'icon_url'		=> false
    // ));
    add_filter('acf/settings/google_api_key', function () {
        return 'AIzaSyC7JjsmbyO6y3O9NZXYo7XzdIJazXtrObs';
    });
}



//Featured image
function gocreations_theme_support()
{

    // Add theme Custom Logo
    add_theme_support('custom-logo');

    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');

    // Set post thumbnail size.
    set_post_thumbnail_size(1200, 9999);

    // Custom image sizes
    add_image_size('full', 1920, 9999); // 1920 pixels wide (and unlimited height)
    add_image_size('very_large', 1400, 9999); // 1400 pixels wide (and unlimited height)
    add_image_size('large', 1200, 9999); // 1200 pixels wide (and unlimited height)
    add_image_size('regular', 600, 9999); // 600 pixels wide (and unlimited height)
    add_image_size('optimize', 450, 9999); // 450 pixels wide (and unlimited height)
    add_image_size('small', 200, 200); // 200x200 & no crop
    add_image_size('icon', 50, 50); // 50x50 & no crop


    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );
}

add_action('after_setup_theme', 'gocreations_theme_support');

//Menus
function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'mobile-menu' => __('Mobile Menu'),
            'footer-menu' => __('Footer Menu'),
            'footer-menu-left' => __('Footer Menu Left'),
            'footer-menu-right' => __('Footer Menu Right'),
            'footer-menu-company' => __('Footer Menu Company'),
            'footer-menu-useful' => __('Footer Menu Useful'),
            'footer-menu-right' => __('Footer Menu Right'),
            'footer-menu-locations' => __('Footer Menu Locations'),
            'footer-menu-copyright' => __('Footer Menu Copyright'),
            'sidebar-menu' => __('Sidebar Menu'),

        )
    );
}
add_action('init', 'register_my_menus');


// WPML CUSTOM WIDGET
// function wpml_custom_widget() {
//
//     $args = array(
//         'id' => 'wpml-custom-widget',
//         'name' => __( 'Wpml Widget', 'text_domain' ),
//         'description' => __( 'Add custom switcher.', 'text_domain' ),
//         'before_title' => '<h3 class="widget-title">',
//         'after_title' => '</h3>',
//         'before_widget' => '<section id="%1$s" class="header_wpml_widget widget %2$s">',
//         'after_widget' => '</section>',
//     );
//     register_sidebar( $args );
// }
// add_action( 'widgets_init', 'wpml_custom_widget' );
//
//
//
// function wpml_custom_widget_mobile() {
//
//     $args = array(
//         'id' => 'wpml-custom-widget-mobile',
//         'name' => __( 'Wpml Widget Mobile', 'text_domain' ),
//         'description' => __( 'Add custom switcher.', 'text_domain' ),
//         'before_title' => '<h3 class="widget-title">',
//         'after_title' => '</h3>',
//         'before_widget' => '<section id="%1$s" class="header_wpml_widget widget %2$s">',
//         'after_widget' => '</section>',
//     );
//     register_sidebar( $args );
// }
// add_action( 'widgets_init', 'wpml_custom_widget_mobile' );



//Custom Style On Dashboard
add_action('admin_head', 'custom_dashboard_items');
function custom_dashboard_items()
{
    echo '<style>
        .admin-item {
            background: #CD9B4A;
            transition: ease-in-out all 0.3s;
        }
        .admin-item:hover {
            background: #B49761 !important;
            transition: ease-in-out all 0.3s;
            color:#fff !important;
        }
        .admin-item:hover .wp-menu-image:before {
            color:#fff !important;
        }
        #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
            background: #B49761;
            color: #fff;
        }
        #adminmenu li a:focus div.wp-menu-image::before, #adminmenu li.opensub div.wp-menu-image::before, #adminmenu li:hover div.wp-menu-image::before {
            color: #fff;
        }
        #adminmenu li.menu-top:hover, #adminmenu li.opensub > a.menu-top, #adminmenu li > a.menu-top:focus {
            color: #fff;
        }
    </style>';
}


// Remove Admin bar items
add_action('wp_before_admin_bar_render', 'wpse200296_before_admin_bar_render');

function wpse200296_before_admin_bar_render()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('wp-logo');
}




// Change WP Admin Logo
function gocreations_custom_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png);
            height: 105px;
            width: 250px;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'gocreations_custom_login_logo');

// Change WP Admin Logo URL
add_filter('login_headerurl', 'gocreations_custom_login_url');
function gocreations_custom_login_url($url)
{
    return esc_url(home_url('/'));
}



// function pine_dynamic_select_field_values ( $scanned_tag, $replace ) {
//
//     if ( $scanned_tag['name'] != 'service-select' )
//         return $scanned_tag;
//
//
//     if( have_rows('services_repeater',75) ) {
//         while( have_rows('services_repeater',75) ) {
//             the_row();
//
//            $scanned_tag['raw_values'][] = get_sub_field('title') . '|' . get_sub_field('title');
//         }
//     }
//
//     $pipes = new WPCF7_Pipes($scanned_tag['raw_values']);
//
//     $scanned_tag['values'] = $pipes->collect_befores();
//     $scanned_tag['labels'] = $pipes->collect_afters();
//     $scanned_tag['pipes'] = $pipes;
//
//     return $scanned_tag;
// }
//
// add_filter( 'wpcf7_form_tag', 'pine_dynamic_select_field_values', 10, 2);









/**
 *  Menu items - Add "Custom sub-menu" in menu item render output
 *  if menu item has class "has-child"
 */
add_filter('walker_nav_menu_start_el', 'wpdocs_menu_item_custom_output', 10, 4);
function wpdocs_menu_item_custom_output($item_output, $item, $depth, $args)
{

    $menu_item_classes = $item->classes;
    if (empty($menu_item_classes) || !in_array('has-child', $menu_item_classes)) {
        return $item_output;
    }

    ob_start();
?>

    <!-- post-type dropdown menu -->
    <div class="megamenu-dropdown-wrapper updated">
        <div class="container-dropdown-wrapper">

            <?php
            $type = 'bungalows';
            $pageurl = get_permalink();
            $paged = (get_query_var('page')) ? get_query_var('page') : 1;
            $args = array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'orderby'    => 'date',
                'order'  => 'ASC',
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) { ?>

                <ul class="megamenu-child-items-wrapper container">
                    <li>
                        <?php
                        while ($my_query->have_posts()) : $my_query->the_post();
                            $image = get_the_post_thumbnail();
                            $title = get_post(get_post_thumbnail_id())->post_title; ?>

                            <div class="product-item">
                                <a class="header-link" href="<?php the_permalink(); ?>">
                                    <div class="title-wrapper">
                                        <?php the_title(); ?>
                                    </div>
                                </a>
                                <?php if (have_rows('available_repeater')) : ?>
                                    <?php while (have_rows('available_repeater')) : the_row(); ?>
                                        <?php $main_text = get_sub_field('main_text'); ?>
                                        <a class="package-link" href="<?php the_permalink(); ?>?package=<?php echo the_sub_field('package_id'); ?>&main_text=<?php echo urlencode($main_text); ?>">
                                            <div class="text-item">
                                                <p><?php the_sub_field('text'); ?></p>
                                            </div>
                                        </a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <div class="photo-wrap">
                                    <?php
                                    $featured_image = the_post_thumbnail('medium_large');
                                    ?>
                                    <?php echo $featured_image; ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </li>
                </ul>
        </div>
    <?php }
            wp_reset_query(); ?>
    </div>
    <!-- post-type dropdown menu END -->


<?php
    $custom_sub_menu_html = ob_get_clean();

    // Append after <a> element of the menu item targeted
    $item_output .= $custom_sub_menu_html;

    return $item_output;
}
