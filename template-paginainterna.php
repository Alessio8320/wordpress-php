<?php
/*Template Name: pag_interna*/ 
//su pagine e su chi siamo(nome pagina),quindi la pagina attuale qui sotto,sulla destra c'è attributi della pagina da li seleziono il mio template che avrà il nome impostato da me qui sopra
?>

<?php
get_header();
?>

<div class="container">
        <div class="row">


            <!-- testo superiore -->
            <div class="col-3 separatore">
            </div>

            <div class="col-8 mission">
                <b>MISSION: Eccellenza nel Recruiting per il sistema Moda nel rispetto del più rigoroso codice etico</b>
            </div>

            <div class="col-1 separatore">
            </div>

        </div>





        <div class="row">


            <!-- sidebar -->
            <sidebar class="col-3 menu-laterale">

            <?php wp_nav_menu(array("theme_location" => "sidebar")); ?> <!-- questa funzione mi crea un div e una ul con li all'interno qui
                <!-- menu laterale 
                <a href="#">Profilo</a>
                <a href="#">Specializzazioni</a>
                <a href="#">Posizioni ricercabili</a>
                <a href="#">Banca Dati</a>
                <a href="#">Web Visibility</a>
                <a href="#">Codice etico</a>
                <a href="#">Lavora con noi</a>
                <a href="#">Copyright</a>-->



            </sidebar>

            <section class="col-8">

             <?php the_content(); ?> <!--cosi facendo stampo nella pagina il contenuto della pagina di wordpress -->
                <p><a href="#"><i class="fas fa-sign-in-alt"></i> CERC - Code of Practice</a></p>
                <p><a href="#"><i class="fas fa-sign-in-alt"></i> CERC - Directory</a></p>



            </section>

            <div class="col-1">



            </div>


<?php
get_footer();
?>