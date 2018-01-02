<?php
/*
Template Name: Article
*/

/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<?php get_header(); ?>

<div class="col_left">
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

	<div class="return">
		<a href="/" class="back">Retour Accueil</a> 
	</div>
</div>

<div class="content infos">

	<div class="mobile_return">
		<a href="/" class="back">Accueil</a> 
	</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?> <br/><span><?php the_field('description_article'); ?></span></h1>

		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>