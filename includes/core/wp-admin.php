<?php
    /*--------------------------------------------------
        | Custom Login Page
    --------------------------------------------------*/

        # Enqueue custom stylesheet
        function sixthstory_login_enqueue() {
            wp_enqueue_style( 'custom-login', get_template_directory_uri().get_asset_path('app.min.css'), '', false);
        }
        add_action( 'login_enqueue_scripts', 'sixthstory_login_enqueue' );

        # Login Logo URL destination
        function my_login_logo_url() {
            return home_url();
        }
        add_filter( 'login_headerurl', 'my_login_logo_url' );

        # Change the hover text on the logo
        function my_login_logo_url_title() {
            return get_bloginfo('name');
        }
        add_filter( 'login_headertext', 'my_login_logo_url_title' );

        

    /*--------------------------------------------------
        | Changes to Admin Area
    --------------------------------------------------*/

        # Sixth Story Branding to WP Admin footer
        function rename_admin_footer() {
            echo get_bloginfo('name') . ' dashboard | Built by <a href="https://sixthstory.co.uk" target="_blank">Sixth Story</a></p>';
        }
        add_filter( 'admin_footer_text', 'rename_admin_footer' );


        # Remove 'Wordpress News and Events' widget
        function disable_wordpress_news_widget() {
            remove_meta_box('dashboard_primary', 'dashboard', 'core');
        }
        add_action('admin_menu', 'disable_wordpress_news_widget');


        # Remove 'Appearance - Editor' from admin menu
        function remove_editor_menu() {
            remove_action('admin_menu', '_add_themes_utility_last', 101);
        }
        add_action('_admin_menu', 'remove_editor_menu', 1);


        # Limit stored post revisions to 3
        if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 3);
        if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', false);



    /*--------------------------------------------------
        | Removing Comment Functionality
    --------------------------------------------------*/

        # Disable and remove commenting functionality
        add_action('admin_init', function () {
            // Redirect any user trying to access comments page
            global $pagenow;
            
            if ($pagenow === 'edit-comments.php') {
                wp_redirect(admin_url());
                exit;
            }

            // Remove comments metabox from dashboard
            remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

            // Disable support for comments and trackbacks in post types
            foreach (get_post_types() as $post_type) {
                if (post_type_supports($post_type, 'comments')) {
                    remove_post_type_support($post_type, 'comments');
                    remove_post_type_support($post_type, 'trackbacks');
                }
            }
        });

        // Close comments on the front-end
        add_filter('comments_open', '__return_false', 20, 2);
        add_filter('pings_open', '__return_false', 20, 2);

        // Hide existing comments
        add_filter('comments_array', '__return_empty_array', 10, 2);

        // Remove comments page in menu
        add_action('admin_menu', function () {
            remove_menu_page('edit-comments.php');
        });

        // Remove comments links from admin bar
        add_action('init', function () {
            if (is_admin_bar_showing()) {
                remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
            }
        });
