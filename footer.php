<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package punk
 */

?>

	<footer id="colophon" class="site-footer">

    <div class="fig">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/u45.png'; ?>" alt="">
        <p>© 2014-2022 - All Rights with ISOC Kyrgyzstan Chapter</p>
        <div class="social-icons">
            <a href="https://facebook.com/isockg"><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook_icon.png'; ?>" alt=""></a>
            <a href="https://www.instagram.com/isoc.kg/"><img src="<?php echo get_template_directory_uri() . '/assets/images/instagram_icon.png'; ?>" alt=""></a>
            <a href="https://www.linkedin.com/company/isockg/"><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin_icon.png'; ?>" alt=""></a>
        
            <a href="https://www.youtube.com/channel/UCsw3xrxEG6une2mUdmCRubw/featured"><img src="<?php echo get_template_directory_uri() . '/assets/images/youtube_icon.png'; ?>" alt=""></a>
        </div>
        <div class="all-resurses">
            <p><a href="https://isoc.kg/about-kyrgyz-chapter/">About ISOC Kyrgyzstan Chapter</a></p>
            <p><a href="https://isoc.kg/projects/">Projects</a></p>
            <p><a href="https://isoc.kg/events/">Events</a></p>
            <p><a href="https://isoc.kg/contact/">Contact us</a></p>
        </div>
        <div class="info">
            <p>office 33, 22 Togolok Moldo st.,Bishkek, Kyrgyzstan, 720040</p>
            <p>+996 755 330 335 available during business week</p>
            <p>info@isoc.kg, isockyrgyzchapter@gmail.com</p>
        </div>
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
