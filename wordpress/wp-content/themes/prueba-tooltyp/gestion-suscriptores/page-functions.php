<?php

function paginaSubs() {
    echo '<div class="wrap">';
    echo '<h2>Gestión de Suscriptores</h2>';
    echo '<p>Aquí puedes administrar los correos electrónicos suscritos.</p>';

    echo '<a href="?page=gestion-suscriptores&exportar_csv=1" class="button">Exportar Suscriptores a CSV</a>';

    echo '<form method="POST" action="?page=gestion-suscriptores&action=eliminarSubsMasivo">';

    $subs = obtenerSubs();
    if (!empty($subs)) {
        echo '<h3>Listado de Suscriptores</h3>';
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr></th><th>Acciones</th><th>Correo Electrónico</th><th><input style="margin-left: 0px;" type="checkbox" id="select-all"></tr></thead>';
        echo '<tbody>';
        $perPage = 25;
        $currentPage = isset($_GET['paged']) ? max(1, intval($_GET['paged'])) : 1;
        $totalItems = count($subs);
        $totalPages = ceil($totalItems / $perPage);
        $start = ($currentPage - 1) * $perPage;
        $end = $start + $perPage - 1;
        for ($i = $start; $i <= $end && $i < $totalItems; $i++) {
            $sub = $subs[$i];
            echo '<tr>';
            echo '<td><a href="?page=gestion-suscriptores&action=eliminarSub&id=' . $sub->id . '">Eliminar</a></td>';
            echo '<td>' . $sub->email . '</td>';
            echo '<td><input type="checkbox" name="ids[]" value="' . $sub->id . '"></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

        if ($totalPages > 1) {
            echo '<div class="pagination" style="display: flex; justify-content: space-between;">';
            echo '<span class="current-page" style="font-size: 14px">Página ' . $currentPage . ' de ' . $totalPages . '</span>';
            echo '<span>';
            if ($currentPage > 1) {
                echo '<a style="margin-right: 15px; font-size: 14px" href="?page=gestion-suscriptores&paged=' . ($currentPage - 1) . '">Anterior</a>';
            }
            if ($currentPage < $totalPages) {
                echo '<a style="font-size: 14px" href="?page=gestion-suscriptores&paged=' . ($currentPage + 1) . '">Siguiente</a>';
            }
            echo '</span>';
            echo '</div>';
        }
    } else {
        echo '<p>No hay suscriptores almacenados.</p>';
    }

    echo '<br>';
    echo '<button type="submit" class="button" value="Eliminar seleccionados">Eliminar seleccionados</button>';

    echo '</form>';
    echo '</div>';

    echo '<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>';
    echo '<script>
        $(document).ready(function() {
            $("#select-all").click(function() {
                $("input[type=\'checkbox\']").not(this).prop("checked", this.checked);
            });
        });
    </script>';
}


?>