<?php       //wordpress necessita di link per eseguire le sue funzioni
            //le specifico qui sotto con id e link
function child_scripts(){
                        //id                      //link
    wp_enqueue_style("bootstrap-css","https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");

    wp_enqueue_script("bootstrap-1","https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array('jquery2'));

    wp_enqueue_script("bootstrap-2","https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array('jquery2'));

    wp_enqueue_style("slick_css","//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");

    wp_enqueue_script("slick_js", "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array('jquery2'));

    wp_enqueue_script("my_script", get_stylesheet_directory_uri() . "/script.js", array('jquery2'));

    wp_enqueue_script("jquery2", "https://code.jquery.com/jquery-3.4.1.min.js");

    wp_enqueue_style("slick_theme", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css");
    
}
add_action('wp_enqueue_scripts','child_scripts');

function child_setup() {
    register_nav_menus( array(
        'main'   => 'main menu',
        'sidebar'=> 'sidebar menu'
    ) );
}
add_action('after_setup_theme', 'child_setup');