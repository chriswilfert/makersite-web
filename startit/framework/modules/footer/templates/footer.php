<div class="web_blog">
<div class="column_1">
    <h2><span>UPCOMING<span> WEBINAR</h2>
    <a href="#">
        &quote;Circular Economy: New Developments And Success Factors For Businesses With Industrial, Technical And Durable Products&quote;
        <span class="date">Wednesday, May 9, 2018 03:00 PM Europe/London</span>
    </a>
    <a href="" class="bt_cta">Learn more</a>
</div>
<div class="column_2">
<h2><span>LATEST</span> POSTS</h2>
    <div class="latest_blog_posts">
        <a href="#">Your new toolkit for sustainable products</a>
        <a href="#">New supply chain tool helps businesses unearth the climate impact of their operations</a>
        <a href="#">Makersite Offers Faster Analysis of Product Sustainability, Costs, Supply Chain Stewardship</a>
        <a href="#">Digital tool maps the environmental impact of individual supply chains</a>
        <a href="#">Makersite Introduces Apps for Faster Ecodesign, Stewardship and Cost Analysis </a>
     </div>
</div>

<?php
/**
 * Footer template part
 */

qode_startit_get_content_bottom_area(); ?>
</div> <!-- close div.content_inner -->
</div>  <!-- close div.content -->

<footer <?php qode_startit_class_attribute($footer_classes); ?>>
	<div class="qodef-footer-inner clearfix">

		<?php

		if($display_footer_top) {
			qode_startit_get_footer_top();
		}
		if($display_footer_bottom) {
			qode_startit_get_footer_bottom();
		}
		?>

	</div>
</footer>

</div> <!-- close div.qodef-wrapper-inner  -->
</div> <!-- close div.qodef-wrapper -->
<?php wp_footer(); ?>
</body>
</html>