<?php
/**
 * Default template for displaying Footer
 * @package sampression framework v 1.0
 * @theme naya 1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit( 'restricted access' );
?>
        <footer id="footer" class="block">
            <div class="container">
                <div class="eleven columns">
                    <div class="site-info"> &copy; <?php _e(date('Y')); ?>. "<?php bloginfo( 'name' ); ?>". <?php do_action( 'sampression_credits' ); ?></div>
                </div>
                <div class="five columns">
                    <div class="social-connect social-footer">
                        <?php sampression_social_media_icons() ?>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--/#inner-wrapper-->
</div>
<!--/#wrapper-->
<?php do_action('sampression_after_footer'); ?>
<!--[if lt IE 9]>
    <script src="<?php echo SAM_FW_JS_URL; ?>/selectivizr.js?v=1.0.1"></script>
<![endif]-->
<!-- Prompt IE 6 users to install Chrome Frame -->
<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/js/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png-bg'); </script>
<![endif]-->
<?php wp_footer();  ?>
</body>
</html>