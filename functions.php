<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'html5', array( 'search-form', 'comment-list', 'comment-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'align-wide' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'editor-styles' );
add_editor_style( 'editor-style.css' );
add_theme_support( 'appearance-tools' );
add_theme_support( 'woocommerce' );
global $content_width;
if ( !isset( $content_width ) ) {
$content_width = 1920;
}
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
}
add_action( 'admin_notices', 'blankslate_notice' );
function blankslate_notice() {
$user_id = get_current_user_id();
if ( !$user_id || !current_user_can( 'manage_options' ) || get_user_meta( $user_id, 'blankslate_notice_dismissed_2026', true ) ) {
return;
}
$dismiss_url = add_query_arg( array( 'blankslate_dismiss' => '1', 'blankslate_nonce' => wp_create_nonce( 'blankslate_dismiss_notice' ) ), admin_url() );
echo '<div class="notice notice-info"><p><a href="' . esc_url( $dismiss_url ) . '" class="alignright" style="text-decoration:none"><big>' . esc_html__( '×', 'blankslate' ) . '</big></a><big><strong>' . esc_html__( '📝 Thank you for using BlankSlate!', 'blankslate' ) . '</strong></big><p>' . esc_html__( 'Powering over 10k websites! Buy me a sandwich! 🥪', 'blankslate' ) . '</p><a href="https://github.com/webguyio/blankslate/issues/57" class="button-primary" target="_blank" rel="noopener noreferrer"><strong>' . esc_html__( 'How do you use BlankSlate?', 'blankslate' ) . '</strong></a> <a href="https://opencollective.com/blankslate" class="button-primary" style="background-color:green;border-color:green" target="_blank" rel="noopener noreferrer"><strong>' . esc_html__( 'Donate', 'blankslate' ) . '</strong></a> <a href="https://wordpress.org/support/theme/blankslate/reviews/#new-post" class="button-primary" style="background-color:purple;border-color:purple" target="_blank" rel="noopener noreferrer"><strong>' . esc_html__( 'Review', 'blankslate' ) . '</strong></a> <a href="https://github.com/webguyio/blankslate/issues" class="button-primary" style="background-color:orange;border-color:orange" target="_blank" rel="noopener noreferrer"><strong>' . esc_html__( 'Support', 'blankslate' ) . '</strong></a></p></div>';
}
add_action( 'admin_init', 'blankslate_notice_dismissed' );
function blankslate_notice_dismissed() {
$user_id = get_current_user_id();
if ( isset( $_GET['blankslate_dismiss'], $_GET['blankslate_nonce'] ) && wp_verify_nonce( $_GET['blankslate_nonce'], 'blankslate_dismiss_notice' ) && current_user_can( 'manage_options' ) ) {
add_user_meta( $user_id, 'blankslate_notice_dismissed_2026', 'true', true );
}
}
add_action( 'wp_enqueue_scripts', 'blankslate_enqueue' );
function blankslate_enqueue() {
    $theme_version = wp_get_theme()->get( 'Version' ) ? wp_get_theme()->get( 'Version' ) : '1.1.0';
    wp_enqueue_style(
        'blankslate-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script(
        'custom-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array( 'jquery' ),
        $theme_version,
        true
    );
}
add_action( 'wp_footer', 'blankslate_footer' );
function blankslate_footer() {
?>
<script>
(function() {
const ua = navigator.userAgent.toLowerCase();
const html = document.documentElement;
if (/(iphone|ipod|ipad)/.test(ua)) {
html.classList.add('ios', 'mobile');
}
else if (/android/.test(ua)) {
html.classList.add('android', 'mobile');
}
else {
html.classList.add('desktop');
}
if (/chrome/.test(ua) && !/edg|brave/.test(ua)) {
html.classList.add('chrome');
}
else if (/safari/.test(ua) && !/chrome/.test(ua)) {
html.classList.add('safari');
}
else if (/edg/.test(ua)) {
html.classList.add('edge');
}
else if (/firefox/.test(ua)) {
html.classList.add('firefox');
}
else if (/brave/.test(ua)) {
html.classList.add('brave');
}
else if (/opr|opera/.test(ua)) {
html.classList.add('opera');
}
})();
</script>
<?php
}
add_filter( 'document_title_separator', 'blankslate_document_title_separator' );
function blankslate_document_title_separator( $sep ) {
$sep = esc_html( '|' );
return $sep;
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return esc_html( '...' );
} else {
return wp_kses_post( $title );
}
}
function blankslate_schema_type() {
$schema = 'https://schema.org/';
if ( is_single() ) {
$type = "Article";
} elseif ( is_author() ) {
$type = 'ProfilePage';
} elseif ( is_search() ) {
$type = 'SearchResultsPage';
} else {
$type = 'WebPage';
}
echo 'itemscope itemtype="' . esc_url( $schema ) . esc_attr( $type ) . '"';
}
add_filter( 'nav_menu_link_attributes', 'blankslate_schema_url', 10 );
function blankslate_schema_url( $atts ) {
$atts['itemprop'] = 'url';
return $atts;
}
if ( !function_exists( 'blankslate_wp_body_open' ) ) {
function blankslate_wp_body_open() {
do_action( 'wp_body_open' );
}
}
add_action( 'wp_body_open', 'blankslate_skip_link', 5 );
function blankslate_skip_link() {
echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'blankslate' ) . '</a>';
}
add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
if ( !is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
if ( !is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'blankslate' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
unset( $sizes['1536x1536'] );
unset( $sizes['2048x2048'] );
return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blankslate_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
if ( !is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

/**
 * Single-Page Redirect Handler
 * Safely redirects non-homepage URLs to canonical homepage without breaking robots.txt, sitemaps, REST API, feeds or admin
 */
function kineva_redirect_users_to_homepage() {

    // Don't redirect WordPress admin
    if ( is_admin() ) {
        return;
    }

    // Don't redirect logged-in administrators
    if ( is_user_logged_in() && current_user_can( 'manage_options' ) ) {
        return;
    }

    // Don't redirect search engine robots, feeds, favicons, or sitemaps
    if ( is_robots() || is_feed() || is_favicon() || get_query_var( 'sitemap' ) || get_query_var( 'sitemap-stylesheet' ) ) {
        return;
    }

    // Don't redirect REST API requests
    if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
        return;
    }

    $request_uri = $_SERVER['REQUEST_URI'] ?? '';

    // Don't redirect preview URLs
    if ( strpos( $request_uri, 'prev-' ) !== false ) {
        return;
    }

    // Don't redirect robots.txt or XML sitemaps
    if ( strpos( $request_uri, 'robots.txt' ) !== false || preg_match( '/sitemap(_index)?\.xml(\.gz)?/i', $request_uri ) ) {
        return;
    }

    // Don't redirect homepage
    if ( is_front_page() ) {
        return;
    }

    // Redirect everything else permanently (301) to canonical homepage
    wp_safe_redirect( home_url( '/' ), 301 );
    exit;
}
add_action( 'template_redirect', 'kineva_redirect_users_to_homepage' );

/**
 * Custom robots.txt Directives
 * Ensures search engines properly crawl assets while declaring the official sitemap
 */
function kineva_custom_robots_txt( $output, $public ) {
    if ( '0' === (string) $public ) {
        return "User-agent: *\nDisallow: /\n";
    }

    $sitemap_url = home_url( '/sitemap_index.xml' );
    $custom  = "User-agent: *\n";
    $custom .= "Disallow: /wp-admin/\n";
    $custom .= "Allow: /wp-admin/admin-ajax.php\n";
    $custom .= "Allow: /wp-content/uploads/\n";
    $custom .= "Allow: /wp-content/themes/\n\n";
    $custom .= "Sitemap: " . esc_url( $sitemap_url ) . "\n";

    return $custom;
}
add_filter( 'robots_txt', 'kineva_custom_robots_txt', 20, 2 );

/**
 * SEO Title Handling
 * Sets optimal commercial title for WordPress native document title and Yoast SEO
 */
function kineva_seo_title( $title ) {
    if ( is_front_page() ) {
        return 'Shopify & WordPress Development Agency | Kineva Studios';
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'kineva_seo_title', 20 );
add_filter( 'wpseo_title', 'kineva_seo_title', 20 );

/**
 * SEO Meta Description Handling
 * Filters Yoast SEO meta description for homepage
 */
function kineva_seo_description( $desc ) {
    if ( is_front_page() ) {
        return 'Build, customize and optimize Shopify and WordPress websites with Kineva Studios. Explore custom development, eCommerce solutions, bug fixes and website support.';
    }
    return $desc;
}
add_filter( 'wpseo_metadesc', 'kineva_seo_description', 20 );

/**
 * Yoast Social & Open Graph Filters
 */
add_filter( 'wpseo_opengraph_title', 'kineva_seo_title', 20 );
add_filter( 'wpseo_opengraph_desc', 'kineva_seo_description', 20 );
add_filter( 'wpseo_twitter_title', 'kineva_seo_title', 20 );
add_filter( 'wpseo_twitter_description', 'kineva_seo_description', 20 );

/**
 * Fallback SEO Metadata (runs if Yoast/RankMath are inactive)
 */
function kineva_fallback_meta_tags() {
    if ( ! is_front_page() ) {
        return;
    }

    $is_seo_plugin_active = defined( 'WPSEO_VERSION' ) || class_exists( 'RankMath' ) || defined( 'AIOSEO_VERSION' );
    if ( $is_seo_plugin_active ) {
        return;
    }

    $desc          = 'Build, customize and optimize Shopify and WordPress websites with Kineva Studios. Explore custom development, eCommerce solutions, bug fixes and website support.';
    $canonical_url = home_url( '/' );
    $logo_url      = get_template_directory_uri() . '/assets/images/kineva-studios-logo.png';
    $site_name     = get_bloginfo( 'name' );

    echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
    echo '<link rel="canonical" href="' . esc_url( $canonical_url ) . '" />' . "\n";
    echo '<meta property="og:locale" content="' . esc_attr( get_locale() ) . '" />' . "\n";
    echo '<meta property="og:type" content="website" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( 'Shopify & WordPress Development Agency | Kineva Studios' ) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $desc ) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $canonical_url ) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '" />' . "\n";
    echo '<meta property="og:image" content="' . esc_url( $logo_url ) . '" />' . "\n";
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( 'Shopify & WordPress Development Agency | Kineva Studios' ) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '" />' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url( $logo_url ) . '" />' . "\n";
}
add_action( 'wp_head', 'kineva_fallback_meta_tags', 1 );

/**
 * Structured Data (Schema.org JSON-LD)
 * Adds verified Service and Organization entities describing actual capabilities
 */
function kineva_output_structured_data() {
    if ( ! is_front_page() ) {
        return;
    }

    $home_url = esc_url( home_url( '/' ) );
    $logo_url = esc_url( get_template_directory_uri() . '/assets/images/kineva-studios-logo.png' );

    $schema_graph = array(
        '@context' => 'https://schema.org',
        '@graph'   => array(
            array(
                '@type'        => 'Organization',
                '@id'          => $home_url . '#organization',
                'name'         => 'Kineva Studios',
                'url'          => $home_url,
                'logo'         => array(
                    '@type'      => 'ImageObject',
                    '@id'        => $home_url . '#logo',
                    'url'        => $logo_url,
                    'contentUrl' => $logo_url,
                    'caption'    => 'Kineva Studios',
                ),
                'description'  => 'Shopify and WordPress development agency specializing in custom themes, eCommerce solutions, and Core Web Vitals performance optimization.',
            ),
            array(
                '@type'       => 'Service',
                '@id'         => $home_url . '#service-shopify',
                'name'        => 'Custom Shopify Development & Theme Customization',
                'serviceType' => 'Shopify Development Services',
                'provider'    => array(
                    '@type' => 'Organization',
                    '@id'   => $home_url . '#organization',
                    'name'  => 'Kineva Studios',
                ),
                'description' => 'Bespoke Shopify theme development, Liquid customization, conversion-focused landing pages, and storefront troubleshooting.',
                'areaServed'  => 'Global',
            ),
            array(
                '@type'       => 'Service',
                '@id'         => $home_url . '#service-wordpress',
                'name'        => 'Custom WordPress Development & Block Themes',
                'serviceType' => 'WordPress Development Services',
                'provider'    => array(
                    '@type' => 'Organization',
                    '@id'   => $home_url . '#organization',
                    'name'  => 'Kineva Studios',
                ),
                'description' => 'Lightweight Gutenberg block theme engineering, Elementor visual architecture, custom WordPress websites, and security hardening.',
                'areaServed'  => 'Global',
            ),
            array(
                '@type'       => 'Service',
                '@id'         => $home_url . '#service-ecommerce',
                'name'        => 'WooCommerce & Shopify Store Development',
                'serviceType' => 'eCommerce Development Services',
                'provider'    => array(
                    '@type' => 'Organization',
                    '@id'   => $home_url . '#organization',
                    'name'  => 'Kineva Studios',
                ),
                'description' => 'Turnkey eCommerce architecture, frictionless checkout workflows, payment gateway integrations, and product catalog configuration.',
                'areaServed'  => 'Global',
            ),
            array(
                '@type'       => 'Service',
                '@id'         => $home_url . '#service-optimization',
                'name'        => 'Shopify & WordPress Performance Optimization and Bug Fixing',
                'serviceType' => 'Website Optimization & Technical Support',
                'provider'    => array(
                    '@type' => 'Organization',
                    '@id'   => $home_url . '#organization',
                    'name'  => 'Kineva Studios',
                ),
                'description' => 'Core Web Vitals speed tuning, database query reduction, asset deduplication, rapid bug troubleshooting, and ongoing technical maintenance.',
                'areaServed'  => 'Global',
            ),
        ),
    );

    echo "\n" . '<script type="application/ld+json">' . "\n";
    echo wp_json_encode( $schema_graph, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
    echo "\n" . '</script>' . "\n";
}
add_action( 'wp_head', 'kineva_output_structured_data', 30 );