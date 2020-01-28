<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); //questa è la funzione per richiamare il file header.php, aprendo il sito da wordpress troverò tutta la pagina iniziale dopo aver aggiunto il body (qui sotto)
?>			 				

	<div id="primary" class="content-area">
	<div class="container bodycont">
        <div class="row">
            <div class="col-8">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/smokin.jpg">
				<div id="slider">
					<img src="<?php echo get_field("galleria")["url"];?>" alt="">
					<img src="<?php echo get_field("galleria_2")["url"];?>" alt="">
					<img src="<?php echo get_field("galleria_3")["url"];?>" alt="">
				</div>
                <p>TESTO A CASISSIMO, all'interno di questo paragrafo mi divertirò a inserire parole a caso come:Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur eros et nunc pharetra dictum. Phasellus tortor elit, elementum in metus sed, suscipit sagittis ligula. Proin efficitur tincidunt eros in consectetur. Donec et cursus sem. Donec et congue dui. In hac habitasse platea dictumst. Suspendisse vestibulum nec sem sed condimentum. Phasellus sit amet ligula posuere, auctor massa eu, malesuada leo. Nam tempus eu ligula in convallis.

                    Aliquam mollis est ac dui tincidunt placerat. Nullam augue tortor, porttitor vel nisi nec, feugiat auctor erat. In luctus efficitur eros, non dignissim enim lobortis efficitur. Nulla pellentesque eros nibh, in aliquam metus tristique sit amet. Aenean vestibulum orci id eros iaculis convallis. Proin fringilla nibh dignissim mi interdum malesuada. Integer gravida sem augue, ut pharetra enim congue a. In hac habitasse platea dictumst. Suspendisse potenti. Vestibulum dapibus rutrum metus non consequat.
                    
                    Sed pulvinar gravida tempus.</p>
                <div class="menustronzo">
                    <a href="#Descripion">Descripion</a> 
                    <a href="#">Pages</a> 
                    <a href="#">Location</a> 
                    <a href="#">Ratings</a></div>
                    <a id="Descripion"></a>
                    <h2>Description</h2>
                </div>
                
                

                   
            <div class="col-4">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">metodo di pagamento</div>
                    <div class="card-body">
                      <h5 class="card-title">schei. quanti?</h5>
                      <p class="card-text">tanti</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

	</div><!-- #primary -->

<?php
get_footer();
