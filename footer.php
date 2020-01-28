<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
        
	</div><!-- #content -->

	<footer class="container-fluid">
        <div class="row light">


            <div class="container">
                <div class="row">

                    <div class="col-3 text-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo2.png" alt=""></div>
                    <div class="col-6 text-center riservata">Area Riservata Clienti</div>
                    <div class="col-3 login">Login <i class="fas fa-sign-in-alt"></i></div>

                </div>

            </div>


        </div>


        <div class="row scurobottom">

            <div class="container">

                <div class="row">

                    <div class="col-9">
                        <p><b>Moda Research s.r.l. Società unipersonale</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="col-3 social">
                        <i class="fab fa-linkedin"></i> <i class="fab fa-facebook-square"></i> <i class="fab fa-twitter-square"></i>
                    </div>

                </div>

            </div>


        </div>


    </footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
