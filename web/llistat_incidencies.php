<?php
$mysqli = include_once "conexio.php";

/**
 * PREPARACIÓ DE LA CONSULTA SQL
 * Seleccionem les dades de la taula INCIDENCIA.
 * Fem un 'INNER JOIN' amb la taula DEPARTAMENT per canviar l'ID numèric pel nom real del departament.
 * 'ORDER BY' serveix per mostrar les incidències més recents primer.
 */
$sql = "SELECT i.id_incidencia, i.descripcio, i.data_inici, i.prioritat, i.resolta, d.nom_departament 
        FROM INCIDENCIA i 
        INNER JOIN DEPARTAMENT d ON i.id_departament = d.id_departament 
        ORDER BY i.data_inici DESC";

/**
 * EXECUCIÓ I RECOLLIDA DE RESULTATS
 * Executem la consulta amb '$mysqli->query'.
 * 'fetch_all(MYSQLI_ASSOC)' transforma les files de la base de dades en una llista (array) de PHP.
 */
$resultado = $mysqli->query($sql);
$incidencies = $resultado->fetch_all(MYSQLI_ASSOC);

include_once "encabezado_titulo.php"; 
?>

<div class="container mt-5">
    <h1>Llistat d'Incidències</h1>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Departament</th>
                <th>Descripció</th>
                <th>Data</th>
                <th>Prioritat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($incidencies as $inc): ?>
            <tr>
                <td><?php echo $inc["id_incidencia"]; ?></td>
                <td><?php echo $inc["nom_departament"]; ?></td>
                <td><?php echo $inc["descripcio"]; ?></td>
                <td><?php echo $inc["data_inici"]; ?></td>
                <td><?php echo $inc["prioritat"]; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once "pie.php"; ?>