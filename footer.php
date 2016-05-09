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
		<div class="footer-main">

			<div class="socialmedia">
				<ul class="group">
					<li><a href="#"><img class="icon" src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/socialmedia/facebook.png" alt="icon for facebook"></a></li>
					<li><a href="#"><img class="icon" src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/socialmedia/twitter.png" alt="icon for twitter"></a></li>
					<li><a href="#"><img class="icon" src="http://localhost/~ronyortiz/pleiadesweb/wp-content/themes/pleiadesweb/images/socialmedia/youtube.png" alt="icon for youtube"></a></li>
				</ul>
			</div><!-- .socialmedia -->

			<div class="footer-content">
				<?php get_sidebar('footer'); ?>
				<div class="contact-footer">
					<h2>Ponte en contacto</h2>
					<p>Av. Jose Maria Aguirre Achá</p>
					<p>Esq. calle 7, Los Pinos</p>
					<p>La Paz - Bolivia</p>
					<hr>
					<p>Telf: +591-2-2792197</p>
					<p>Móvil: +591-77799006</p>
					<p>Correo Electrónico: <a href="mailto:info@pleiadesdigital.com" target="_top">info@pleiadesdigital.com</a></p>
				</div><!--class="contact-footer"-->
			</div><!--class="footer-content"-->

		</div><!-- .footer-main -->
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
