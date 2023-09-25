<section id="dossier">
        <div class="icono-dossier">
            <img src="<?php echo get_template_directory_uri(); ?>/img/presentacion.svg" alt="Icono dossier">
        </div>
        <?php
        $texto = get_field('texto_footer','option');
        $archivo = get_field('archivo_footer','option');

        if (!empty($texto) && is_array($archivo) && !empty($archivo['url'])) {
            echo '<a href="'. esc_url($archivo['url']) .'" target="_blank">' . $texto . '</a>';

        } else {
            echo '<a href="' . esc_url(get_template_directory_uri() . '/assets/cf14092023.pdf') .'" target="_blank">Descarga nuestro dossier comercial haciendo clic aquí</a>';
        }
        ?>

    </section>
    
    <?php wp_footer(); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>