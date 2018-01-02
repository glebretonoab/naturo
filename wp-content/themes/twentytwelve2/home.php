<?php 
/*
Template Name: Home
*/


/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php get_header(); ?>

<div class="visuel"><img src="<?php the_field('grande_image_home'); ?>" /></div>

<div class="menu_home">
	<?php 
		$defaults = array(
			'theme_location'  => '',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => 'menu',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '<span class="arrow"></span>',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);

		wp_nav_menu($defaults); 
	?>
</div>

<div class="context">

	<div class="tree">&nbsp;</div>

	<div class="message">
		<div class="libelle">&nbsp;</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>