<?php
    /*
        Template Name: Makersite: MarketPlace
    */
?>

<?php

// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

    // This will build our "base URL" ... Also accounts for HTTPS :)
    $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

    // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
    $breadcrumbs = Array("<a href=\"$base\">$home</a>");

    // Find out the index for the last value in our path array
    $last = end(array_keys($path));

    // Build the rest of the breadcrumbs
    foreach ($path AS $x => $crumb) {
        // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
        $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

        // If we are not on the last index, then display an <a> tag
        if ($x != $last)
            $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
        // Otherwise, just display the title (minus)
        else
            $breadcrumbs[] = $title;
    }

    // Build our temporary array (pieces of bread) into one big string :)
    return implode($separator, $breadcrumbs);
}

?>

<p><?= breadcrumbs() ?></p>
<p><?= breadcrumbs(' > ') ?></p>
<p><?= breadcrumbs(' ^^ ', 'Index') ?></p>


<?php $sidebar = qode_startit_sidebar_layout(); ?>
<?php get_header(); ?>
	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>
	<div class="qodef-container">
		<?php do_action('qode_startit_after_container_open'); ?>
		<div class="qodef-container-inner clearfix">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php if(($sidebar == 'default')||($sidebar == '')) : ?>
					<?php the_content(); ?>
					<?php do_action('qode_startit_page_after_content'); ?>
				<?php elseif($sidebar == 'sidebar-33-right' || $sidebar == 'sidebar-25-right'): ?>
					<div <?php echo qode_startit_sidebar_columns_class(); ?>>
						<div class="qodef-column1 qodef-content-left-from-sidebar">
							<div class="qodef-column-inner">
								<?php the_content(); ?>
								<?php do_action('qode_startit_page_after_content'); ?>
							</div>
						</div>
						<div class="qodef-column2">
							<?php get_sidebar(); ?>
						</div>
					</div>
				<?php elseif($sidebar == 'sidebar-33-left' || $sidebar == 'sidebar-25-left'): ?>
					<div <?php echo qode_startit_sidebar_columns_class(); ?>>
						<div class="qodef-column1">
							<?php get_sidebar(); ?>
						</div>
						<div class="qodef-column2 qodef-content-right-from-sidebar">
							<div class="qodef-column-inner">
								<?php the_content(); ?>
								<?php do_action('qode_startit_page_after_content'); ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php do_action('qode_startit_before_container_close'); ?>
	</div>
<?php get_footer(); ?>