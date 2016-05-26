<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pleiades_Web
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
  <div class="fb-like" data-href="https://www.facebook.com/pleiadesdigital" data-width="350" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
</aside><!-- #secondary -->
