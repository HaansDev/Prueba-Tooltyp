<?php

    function exportarSubs() {
        if (isset($_GET['exportar_csv'])) {
            exportarSubsCSV();
            exit();
        }
    }

    function exportarSubsCSV() {
        $subs = obtenerSubs();

        if (empty($subs)) {
            echo 'No hay suscriptores para exportar.';
            exit();
        }

        $archivo_csv = 'suscriptores.csv';

        // cabeceras HTTP para forzar la descarga
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $archivo_csv . '"');

        // salida directa al navegador
        $output = fopen('php://output', 'w');

        // encabezado del archivo
        fputcsv($output, array('Correo Electrónico'));

        // datos
        foreach ($subs as $sub) {
            fputcsv($output, array($sub->email));
        }

        // cierra el archivo
        fclose($output);

        exit();
    }

?>