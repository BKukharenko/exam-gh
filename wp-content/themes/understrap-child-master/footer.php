<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer">

    <div class="row">

        <div class="col-md-12">

            <footer class="site-footer py-5" id="colophon">
                <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

                </div>
            </footer><!-- #colophon -->

        </div><!--col end -->

    </div><!-- row end -->

</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

