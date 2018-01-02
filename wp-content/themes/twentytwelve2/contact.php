<?php
/*
Template Name: Contact
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
</div>

<div class="content">

	<div class="mobile_return">
		<a href="/" class="back">Accueil</a> 
	</div>

	<h1><?php the_title(); ?> <br/><span><?php the_field('description_article'); ?></span></h1>

	<div id="map">
		<div class="top">
			<div class="coord">
				<?php the_field('nom_du_cabinet'); ?> <span><?php the_field('adresse'); ?></span>
			</div>
			<div class="num"><?php the_field('telephone'); ?></div>
			<div style="clear: left"></div>
		</div>

		<div class="google-map">
			<iframe width="730" height="308" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('google_map'); ?>"></iframe>
		</div>
	</div>

	<div id="contact-form">    
                                           
        <div id="contact-desc">                        
            <h2><?php the_field('titre_formulaire_contact'); ?></h2>                                
            <p><?php the_field('description_formulaire_contact'); ?></p>                             
            <a href="/" class="back">Retour Accueil</a>                    
        </div>             
                        
        <!-- AJAX CONTACT FORM -->
        <div id="contact-container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>