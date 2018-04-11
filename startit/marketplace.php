<?php
    /*
        Template Name: Makersite: MarketPlace
    */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php get_template_part( 'title' ); ?>
<?php get_template_part('slider'); ?>
	<div class="qodef-container">
		<?php do_action('qode_startit_after_container_open'); ?>
		<div class="qodef-container-inner">
			<?php qode_startit_get_blog_single(); ?>
		</div>
		<?php do_action('qode_startit_before_container_close'); ?>
	</div>
<?php get_footer(); ?>