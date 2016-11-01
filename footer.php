<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Amadeus
 */
?>

	</div><!-- #content -->
	
	<?php if ( is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) || is_active_sidebar( 'sidebar-6' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="scroll-container">
			<a href="#" class="scrolltop"><i class="fa fa-chevron-up"></i></a>
		</div>
		<div class="site-info container">
			<!-- <?php do_action('amadeus_footer'); ?> -->
			<a id="footer-lib-img-link" href="https://www.lib.ua.edu/"><img src="https://strategiccommunications.ua.edu/img/logos/DIVISIONS/LIB/UA-DepartmentLogoSetup-OfficLogo-dept-Libraries.png" alt="University of Alabama Libraries Logo" width="300px"></a> 
			<a href="https://www.lib.ua.edu/using-the-library/digital-humanities-center/"><img id="footer-adhc-logo" style="padding-left: 2em;" src="https://alabama.box.com/shared/static/k66z25tjl1wfqo5yx9l3n52yebhxbf6e.png" alt="Alabama Digital Humanities Center Logo" width="130px"><br></a>
			<a id="footer-adhc-text-link" href="https://www.lib.ua.edu/using-the-library/digital-humanities-center/">Alabama Digital Humanities Center</a>
			<br>
			<div class="required-subfooter">
				<a href="http://www.ua.edu/">University of Alabama</a>
				•
				<a href="http://www.lib.ua.edu/">University Libraries</a>
				•
				<a href="http://www.ua.edu/disclaimer.html">Disclaimer</a>
				•
				<a href="http://www.ua.edu/privacy.html">Privacy</a>
				•
				<a href=" http://www.ua.edu/copyright.html">Copyright</a>
        	</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>