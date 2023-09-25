<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();  ?>

    <style>
        #newsletter div #suscripcion .bottom-section input[type=checkbox]:checked + label:before {
            background: url("<?php echo get_template_directory_uri(); ?>/img/check.svg") 50% 50% no-repeat padding-box;
            background-size: 85%;
        }
    </style>

</head>
<body>

    <header>
        <div class="container">
            <div class="row justify-content-between encabezado">
                <div id="logo" class="col-lg-6 col-md-4 col-5">
                
                <?php
                    $logoImage = get_field('logo', 'option');

                    if ($logoImage && isset($logoImage['url']) && !empty($logoImage['url'])) {
                        $logoUrl = $logoImage['url'];
                    } else {
                        $logoUrl = get_template_directory_uri() . '/img/logo.svg';
                    }

                    echo '<img src="' . esc_url($logoUrl) . '" alt="logo">';
                ?>

                </div>
                <div id="rrss" class="col-lg-6 col-md-4 col-5">
                    <?php
                        if (have_rows('redes_sociales', 'option')) {
                            while (have_rows('redes_sociales', 'option')) {
                                the_row();
                                $redSocial = get_sub_field('red_social');
                                $iconoRS = get_sub_field('icono');
                                $enlaceRS = get_sub_field('enlace');

                                ?>
                                <span class="logo-rrss">
                                    <a href="<?php echo $enlaceRS; ?>" class="link-rrss <?php echo $redSocial; ?>" target="_blank"><img src="<?php echo $iconoRS['url']; ?>" alt="<?php echo $redSocial; ?>"></a>
                                </span>
                                <?php
                            }
                        }else {
                            ?>
                                <span class="logo-rrss">
                                    <a href="https://www.facebook.com/Tooltyp" class="link-rrss facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook"></a>
                                </span>
                                <span class="logo-rrss">
                                    <a href="https://twitter.com/tooltyp" class="link-rrss twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="twitter"></a>
                                </span>
                                <span class="logo-rrss">
                                    <a href="https://www.instagram.com/tooltyp" class="link-rrss instagram" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="instagram"></a>
                                </span>
                                <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </header>
    
</body>
</html>