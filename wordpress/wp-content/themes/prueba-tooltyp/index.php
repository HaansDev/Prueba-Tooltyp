<?php get_header() ?>

    <section id="slider-show">
        <div id="fondo-desktop">

            <?php
                $fondo_alta_resolucion = get_field('fondo_desktop_alta_resolucion', 'option');
                $fondo_resolucion_normal = get_field('fondo_desktop_baja_resolucion', 'option');
                $fondo_predeterminado_alta_resolucion = get_template_directory_uri() . '/img/foto-fondo@2x.png';
                $fondo_predeterminado_resolucion_normal = get_template_directory_uri() . '/img/foto-fondo.png';

                if ($fondo_alta_resolucion && isset($fondo_alta_resolucion['url']) && !empty($fondo_alta_resolucion['url']) &&
                    $fondo_resolucion_normal && isset($fondo_resolucion_normal) && !empty($fondo_resolucion_normal['url'])) {
                    echo '<img src="' . esc_url($fondo_resolucion_normal['url']) . '" alt="Fondo Slider" srcset="' . esc_url($fondo_resolucion_normal['url']) . ' 1x,' . esc_url($fondo_alta_resolucion['url']) . ' 2x" sizes="(min-width: 857px) 2x, 1x">';
                } elseif ($fondo_alta_resolucion && isset($fondo_alta_resolucion['url']) && !empty($fondo_alta_resolucion['url'])) {
                    echo '<img src="' . esc_url($fondo_alta_resolucion['url']) . '" alt="Fondo Slider" sizes="(min-width: 857px) 2x, 1x">';
                } elseif ($fondo_resolucion_normal && isset($fondo_resolucion_normal['url']) && !empty($fondo_resolucion_normal['url'])) {
                    echo '<img src="' . esc_url($fondo_resolucion_normal['url']) . '" alt="Fondo Slider" sizes="(min-width: 857px) 2x, 1x">';
                } else {
                    echo '<img src="' . esc_url($fondo_predeterminado_resolucion_normal) . '" alt="Fondo Slider" srcset="' . esc_url($fondo_predeterminado_resolucion_normal) . ' 1x,' . esc_url($fondo_predeterminado_alta_resolucion) . ' 2x" sizes="(min-width: 857px) 2x, 1x">';
                }
            ?>
        </div>
        <div id="fondo-mobile">
            <?php
                $fondo_mobile_alta_resolucion = get_field('fondo_mobile_alta_resolucion', 'option');
                $fondo_mobile_resolucion_normal = get_field('fondo_mobile_baja_resolucion', 'option');
                $fondo_predeterminado_mobile_alta_resolucion = get_template_directory_uri() . '/img/foto-fondo-mobile@2x.png';
                $fondo_predeterminado_mobile_resolucion_normal = get_template_directory_uri() . '/img/foto-fondo-mobile.png';
                       
                if ($fondo_mobile_alta_resolucion && isset($fondo_mobile_alta_resolucion['url']) && !empty($fondo_mobile_alta_resolucion['url'])) {
                    echo '<img src="' . esc_url($fondo_mobile_alta_resolucion['url']) . '" class="fondo-mobile-ar" alt="Fondo Slider">';
                } elseif ($fondo_mobile_resolucion_normal && isset($fondo_mobile_resolucion_normal['url']) && !empty($fondo_mobile_resolucion_normal['url'])) {
                    echo '<img src="' . esc_url($fondo_mobile_resolucion_normal['url']) . '" class="fondo-mobile-no" alt="Fondo Slider">';
                } else {
                    echo '<img src="' . esc_url($fondo_predeterminado_mobile_alta_resolucion) . '" class="fondo-predeterminado-mob-ar" alt="Fondo Slider">';
                    echo '<img src="' . esc_url($fondo_predeterminado_mobile_resolucion_normal) . '" class="fondo-predeterminado-mob-no" alt="Fondo Slider">';
                }
                
            ?>

        </div>

        <div id="slider-container">
            <div id="carousel-show" class="carousel slide" data-bs-ride="carousel">
            <?php
                $counter = 0;
                    if (have_rows('slider', 'option')) {
                        echo '<div class="carousel-indicators">';
                        while (have_rows('slider', 'option')) {
                            the_row();
                            $titulo = get_sub_field('titulo');
                            $texto = get_sub_field('texto');
                            $enlace = get_sub_field('boton');
                            $active = $counter == 0 ? 'active' : '';
                            echo "<button type='button' data-bs-target='#carousel-show' data-bs-slide-to='{$counter}' class='{$active}' aria-label='Slide {$counter}'></button>";
                            $counter++;
                        }
                        echo '</div>';
                        $counter = 0;
                        echo '<div class="carousel-inner">';
                        while (have_rows('slider', 'option')) {
                            the_row();
                            $titulo = get_sub_field('titulo');
                            $texto = get_sub_field('texto');
                            $enlace = get_sub_field('boton');
                            $active = $counter == 0 ? 'active' : '';
                            ?>

                                <div class="carousel-item <?php echo $active; ?>">
                                    <h2><?php echo $titulo ;?></h2>
                                    <p><?php echo $texto ;?></p>
                                    <a href="<?php echo $enlace ;?>" target="_blank" rel="noopener noreferrer" class="btn">Ver más</a>
                                </div>

                            <?php
                            $counter++;
                        }                         
                        echo '</div>';

                    } else {
                        ?>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-show" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-show" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-show" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2>Muchas gracias por particiar en esta prueba</h2>
                                <p>Sabemos que te va a llevar cierto tiempo realizarla, pero para nosotros es muy importante y te permite demostrar todas tus
                                    capacidades, al margen de los títulos y formación que puedas tener.
                                </p>
                                <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Ver más</a>
                            </div>
                            <div class="carousel-item">
                                <h2>Muchas gracias por particiar en esta prueba, Cristian Fernández Moreno</h2>
                                <p>Sabemos que te va a llevar cierto tiempo realizarla, pero para nosotros es muy importante y te permite demostrar todas tus
                                    capacidades, al margen de los títulos y formación que puedas tener.
                                </p>
                                <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Ver más</a>
                            </div>
                            <div class="carousel-item">
                                <h2>Muchas gracias por particiar en esta prueba, Cristian</h2>
                                <p>Sabemos que te va a llevar cierto tiempo realizarla, pero para nosotros es muy importante y te permite demostrar todas tus
                                    capacidades, al margen de los títulos y formación que puedas tener.
                                </p>
                                <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Ver más</a>
                            </div>
                        </div>
            </div>
                    <?php
                    }     
            ?>
        </div>
    </section>

    <main id="bloque-destacado" class="container">
        <div class="row justify-content-center">
            <div class="col-10">
            <?php 
                $bloque_destacado = get_field('bloque_destacado', 'options');

                if (!empty($bloque_destacado['subtitulo']) || !empty($bloque_destacado['titulo']) || !empty($bloque_destacado['parrafo']) || !empty($bloque_destacado['enlace_boton'])) {
                    $subtitulo = $bloque_destacado['subtitulo'];
                    $titulo = $bloque_destacado['titulo'];
                    $parrafo = $bloque_destacado['parrafo'];
                    $enlace_boton = $bloque_destacado['enlace_boton'];

                    ?>
                    <h3><?php echo $subtitulo; ?></h3>
                    <h1><?php echo $titulo; ?></h1>
                    <p><?php echo $parrafo; ?></p>
                    <a href="<?php echo $enlace_boton; ?>" class="btn">Ver más</a>
                    <?php
                } else {
                    ?>
                    <h3>INTRODUCCIÓN</h3>
                    <h1>Texto titular de un bloque destacado</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Ver más</a>
                    <?php
                }
            ?>
            </div>
        </div>
    </main>

    <div class="swiper mySwiper container-fluid" id="bloque-noticias">
        <div class="swiper-wrapper row" id="noticias-destacadas">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DEC'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="swiper-slide card noticia col">
                        <a href="<?php the_permalink(); ?>" alt="noticia destacada">
                            <?php $imagen = get_field( 'imagen' ); ?>
                            <?php if ( $imagen ) : ?>
                            <img class="card-img-top" src="<?php echo esc_url($imagen['url']); ?>" alt="Portada noticia">
                            <?php endif; ?>
                            <div class="card-body">
                                <h3><?php the_field('categoria'); ?></h3>
                                <h5 class="card-title"><?php the_field('titulo'); ?></h5>
                                <p class="card-text"><?php the_field('extracto'); ?></p>
                            </div>
                        </a>
                    </div>
            <?php
                }
                wp_reset_postdata();
            } else {
            ?>
            <div class="swiper-slide card noticia col">
                <a href="#" alt="noticia destacada">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/iStock-1173262510.png" srcset="<?php echo get_template_directory_uri(); ?>/img/iStock-1173262510.png 1x, <?php echo get_template_directory_uri(); ?>/img/iStock-1173262510@2x.png 2x" alt="Portada noticia">
                    <div class="card-body">
                        <h3>RETAIL</h3>
                        <h2 class="card-title">Texto titular de un bloque destacado</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </a>
            </div>

            <div class="swiper-slide card noticia col custom-glutter">
                <a href="#" alt="noticia destacada">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/iStock-1173262510-2.png" srcset="<?php echo get_template_directory_uri(); ?>/img/iStock-1173262510-2.png 1x, <?php echo get_template_directory_uri(); ?>/img/iStock-1173262510-2@2x.png 2x" alt="Portada noticia">
                    <div class="card-body">
                        <h3>GASTRONOMIA</h3>
                        <h2 class="card-title">Texto titular de un bloque destacado</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </a>
            </div>

            <div class="swiper-slide card noticia col">
                <a href="#" alt="noticia destacada">
                    <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/iStock-1173262510-1.png" srcset="<?php echo get_template_directory_uri(); ?>/img/iStock-1173262510-1.png 1x, <?php echo get_template_directory_uri(); ?>/img/iStock-1173262510-1@2x.png 2x" alt="Portada noticia">
                    <div class="card-body">
                        <h3>MILLENIAL</h3>
                        <h2 class="card-title">Texto titular de un bloque destacado</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>
        </div>
    </div>

    <section id="newsletter">
        <div>
            <h3>NEWSLETTER</h3>
            <h2>Suscríbete a nuestro boletín</h2>
            <?php
                $response = array('status' => '', 'message' => '');

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $terms = isset($_POST['terms']) ? $_POST['terms'] : '';

                    $validacionExitosa = true;

                    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $validacionExitosa = false;
                        $response['status'] = 'error';
                        $response['message'] = 'Correo electrónico no válido.';
                    }

                    if ($terms !== 'on') {
                        $validacionExitosa = false;
                        $response['status'] = 'error';
                        $response['message'] = 'Debes aceptar los términos y condiciones.';
                    }

                    if ($validacionExitosa) {
                        $table_name = $wpdb->prefix . 'newsletter';
                    
                        $existing_email = $wpdb->get_var($wpdb->prepare("SELECT email FROM {$table_name} WHERE email = %s", $email));
                    
                        if ($existing_email) {
                            $response['status'] = 'error';
                            $response['message'] = 'Este correo electrónico ya está registrado.';
                        } else {
                            $wpdb->insert($table_name, array('email' => $email));
                            $response['status'] = 'success';
                        }
                    }
                    error_log('Este es un mensaje de depuración');
                    echo 'Este es otro mensaje de depuración';

                    echo json_encode($response);
                    exit;
                }
                ?>
            <form id="suscripcion" method="POST" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" onsubmit="return validarYEnviar(event)">
                <div class="top-section">
                    <input type="email" id="email" name="email" placeholder="Introduce tu e-mail">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Enviar">
                    </button>
                </div>
                <div class="bottom-section">
                    <input type="checkbox" id="terms" name="terms">
                    <label for="terms">Has leído y aceptas nuestro Aviso Legal</label>
                </div>
            </form>

        </div>
    </section>


    <?php get_footer(); ?>