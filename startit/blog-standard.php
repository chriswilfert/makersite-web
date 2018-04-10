<?php
    /*
        Template Name: Blog: Standard
    */
?>
<?php get_header(); ?>
<style>
@media (min-width: 1100px ) {
.qodef-main-menu {
    width: 1100px !important;
}
</style>
<?php get_template_part( 'title' ); ?>
<?php get_template_part('slider'); ?>
<div class="qodef-container">
    <?php do_action('qode_startit_after_container_open'); ?>
    <div class="qodef-container-inner" >
        <?php qode_startit_get_blog('standard'); ?>
    </div>
    <?php do_action('qode_startit_before_container_close'); ?>
</div>
<?php get_footer(); ?>