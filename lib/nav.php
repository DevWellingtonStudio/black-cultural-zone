<?php
/**
 * Navigation
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         http://wellington-studio.com
 * @author       Chris Parsons <wellington-studio.com>
 * @copyright    Copyright (c) 2015, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */

// remove primary & secondary nav from default position
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav' );

add_filter( 'wp_nav_menu_args', function( $args ) {

 // Get Menu Location
 $data_target = 'nav' . sanitize_html_class( '-' . $args['theme_location'] );

 $menu_classes = array(
	 'navbar-nav'
 );

 $navextra = get_theme_mod( 'navextra', false );

 if ( $navextra !== '' ) {
	$menu_classes[] = 'mr-auto';
 } else {
	$menu_classes[] = 'ml-auto';
 }

 if ( 'primary' === $args['theme_location'] ) {
	$args['container'] = 'div';
	$args['container_class'] = 'collapse navbar-collapse';
	$args['container_id'] = $data_target;
	$args['depth'] = 3;
	$args['menu_class'] = esc_attr( implode( ' ', $menu_classes ) );
	$args['fallback_cb'] = 'WP_Bootstrap_Navwalker::fallback';
	$args['walker'] = new WP_Bootstrap_Navwalker();
 }

 return $args;
} );

// add bootstrap markup around the nav
add_filter( 'wp_nav_menu', 'bfg_nav_menu_markup_filter', 10, 2 );
function bfg_nav_menu_markup_filter( $html, $args ) {
 // only add additional Bootstrap markup to
 // primary and secondary nav locations
 if ( 'primary' !== $args->theme_location ) {
	return $html;
 }

 $data_target = 'nav' . sanitize_html_class( '-' . $args->theme_location );

 $output = '';

 // only include blog name and description in the nav
 // if it is the primary nav location
 if ( 'primary' === $args->theme_location ) {
	$output .= apply_filters( 'bfg_navbar_brand', bfg_navbar_brand_markup() );
 }

 $output .= '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#'.$data_target.'" aria-controls="'.$data_target.'" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="fas fa-2x fa-bars"></i></span></button>';
 $output .= $html;

 $navextra = get_theme_mod( 'navextra', false );

 if ( $navextra == true ) {
	$output .= apply_filters( 'bfg_navbar_content', bfg_navbar_content_markup() );
 }

 return $output;
}

function bfg_navbar_brand_markup() {
 if ( get_theme_mod( 'custom_logo' ) ) {
	$output = get_custom_logo();
 } else {
	$output = '<a class="navbar-brand" title="'.esc_attr( get_bloginfo( 'name' ) ).'" href="'.esc_url( get_home_url( '/' ) ).'">'.get_bloginfo( 'name' ).'</a>';
 }
 return $output;
}

//* Navigation Extras
function bfg_navbar_content_markup() {
 $url = get_home_url();

 $choices = get_theme_mod( 'navextra', 'search' );

 $output = '';

 switch( $choices ) {
	case 'search':
	default:
	 $output .= '<form class="form-inline float-lg-right" method="get" action="'.$url.'" role="search">';
	 $output .= '<input class="form-control mr-sm-2" type="text" placeholder="Search" name="s">';
	 $output .= '<button class="btn btn-outline-success" type="submit">Search</button>';
	 $output .= '</form>';
	 break;
	case 'date':
	 $output .= '<p class="navbar-text navbar-right mb-0">';
	 $output .= date_i18n( get_option( 'date_format' ) );
	 $output .= '</p>';
	 break;
	case 'widget':
	 ob_start();
	 genesis_widget_area( 'header-right', array(
		 'before' => '<div class="header-right navbar-text navbar-right mb-0">',
		 'after' => '</div>'
	 ) );
	 $output .= ob_get_clean();
	 break;
	case '':
	 $output .= '';
	 break;
 }

 return $output;
}

// Filter menu link attributes and add missing .nav-link class to parent menu link class attribute
add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args, $depth ) {
 $item_classes = array();

 // Get the current menu item class
 $item_classes[] = sanitize_html_class( $atts['class'] );

 // Apply .nav-link class to parent menu item only
 if ( $depth == 0 ) {
	$item_classes[] = 'nav-link';
 }

 $atts['class'] = join( ' ', $item_classes );

 return $atts;
}, 10, 4 );


/*add_action( 'genesis_header', 'add_header_sub_nav', 12 );
function add_header_sub_nav() {
	$menu_locations = get_nav_menu_locations();
// Sub nav renders is assigned in Menu editor
	if($menu_locations && $menu_locations['header-sub'] !=0) :
		?>
      <nav id="header-sub" class="navbar navbar-expand-md navbar-light" role="navigation">
        <div class="sm-nav-container">
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'header-sub',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'container',
				'container_id'      => 'header-sub-nav',
				'menu_class'        => 'nav justify-content-end',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
        </div>
      </nav>
	<?php endif; ?>

<?php }*/

// Adds Footer Navigation
add_action( 'genesis_footer', 'add_footer_nav', 11 );
function add_footer_nav() {
$menu_locations = get_nav_menu_locations();
// Sub nav renders is assigned in Menu editor
if($menu_locations && $menu_locations['footer'] !=0) :
 ?>
 <nav id="footer-nav" class="navbar navbar-expand-md navbar-light" role="navigation">
	<div class="container">
	 <?php
	 wp_nav_menu( array(
		 'theme_location'    => 'footer',
		 'depth'             => 2,
		 'container'         => 'div',
		 'container_class'   => 'container',
		 'container_id'      => 'bs-example-navbar-collapse-1',
		 'menu_class'        => 'nav justify-content-end',
		 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		 'walker'            => new WP_Bootstrap_Navwalker(),
	 ) );
	 ?>
	</div>
 </nav>
<?php endif; ?>

<?php }

// Adds Sub Navigation Menu
// Action added in front-page.php
function sub_nav_menu() {
$menu_locations = get_nav_menu_locations();
// Sub nav renders is assigned in Menu editor
if($menu_locations && $menu_locations['subnav'] !=0) :
 ?>
 <nav id="sub-nav-fp" class="navbar navbar-expand-md navbar-light" role="navigation">
	<div class="container-fluid">
	 <!-- Brand and toggle get grouped for better mobile display -->
	 <button class="navbar-toggler subnav-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
		<span class="navbar-toggler-icon"><i class="fas fa-2x fa-bars"></i></span>
	 </button>
	 <!-- <a class="navbar-brand" href="#">Sub Navbar</a> -->
	 <?php
	 wp_nav_menu( array(
		 'theme_location'    => 'subnav',
		 'depth'             => 2,
		 'container'         => 'div',
		 'container_class'   => 'collapse navbar-collapse justify-content-center',
		 'container_id'      => 'bs-example-navbar-collapse-1',
		 'menu_class'        => 'nav navbar-nav subnav',
		 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		 'walker'            => new WP_Bootstrap_Navwalker(),
	 ) );
	 ?>
	</div>
 </nav>
<?php endif;

} ?>
