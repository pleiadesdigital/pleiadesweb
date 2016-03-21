<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pleiades_Web
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-content">

			<div class="socialmedia">
				<ul class="group">
					<li><a href="#"><img class="icon" src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/socialmedia/facebook.png" alt="icon for facebook"></a></li>
					<li><a href="#"><img class="icon" src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/socialmedia/twitter.png" alt="icon for twitter"></a></li>
					<li><a href="#"><img class="icon" src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/socialmedia/youtube.png" alt="icon for youtube"></a></li>
				</ul>
			</div><!-- .socialmedia -->
			<hr>
			<?php get_sidebar('footer'); ?>
			
		</div><!-- .footer-content -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
