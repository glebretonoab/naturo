<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->

	<?php /*
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	*/ ?>

</div><!-- #page -->

<script type="text/javascript">

</script>

<div id="footer">
	<div class="content">
		<div class="localisation">
			<div class="title">
				<a href="<?php echo get_permalink('41'); ?>" title="Où nous trouver ?">Où me trouver ?</a>
			</div>
			<div class="map">
				<p>
					<span class="name"><?php the_field('nom_du_cabinet', 41); ?></span><br/>
					<?php the_field('adresse', 41); ?><br/>
					<span class="view_email"></span>
				</p>
			</div>
			<div class="tel">
				<div class="libelle">Pour me contacter</div>
				<div class="numero"><?php the_field('telephone', 41); ?></div>
			</div>
		</div>
		<div class="copyright">
			Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('url'); ?> - Tous droits réservés.
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>