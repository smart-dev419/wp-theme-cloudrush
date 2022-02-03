<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Cloud Rush
 * @since Cloud Rush 1.0
 */
?>

	</main><!-- #main -->

	<footer id="site-footer" role="contentinfo">
		<div class="main_container">
			<a href="<?=home_url()?>">
				<img src="<?=get_template_directory_uri();?>/images/logo_white.png" alt="brand">
			</a>
			<p>Atlanta Tech Village<br/>3423 Piedmont Road NE Suite 589<br/>Atlanta, GA 30305<br/>  info@cloud-rush.com</p>
			<p class="copyright">COPYRIGHT CLOUD RUSH 2021 - <a href="">TERMS & CONDITIONS  PRIVACY POLICY</a></p>
			<ul class="social_list">
				<li><a href=""><img src="<?=get_template_directory_uri();?>/images/icon_twitter.png" alt="Twitter Icon"></a></li>
				<li><a href=""><img src="<?=get_template_directory_uri();?>/images/icon_facebook.png" alt="Facebook Icon"></a></li>
				<li><a href=""><img src="<?=get_template_directory_uri();?>/images/icon_rss.png" alt="Rss Icon"></a></li>
				<li><a href=""><img src="<?=get_template_directory_uri();?>/images/icon_instagram.png" alt="Instagram Icon"></a></li>
			</ul>
		</div>
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>
