<?php
$mysqli = include_once "conexio.php";

/**
 * PREPARACIÓ DE LA CONSULTA SQL
 * Seleccionem les dades de la taula INCIDENCIA.
 * Fem un 'INNER JOIN' amb la taula DEPARTAMENT per canviar l'ID numèric pel nom real del departament.
 * 'ORDER BY' serveix per mostrar les incidències més recents primer.
 */

$sql = "SELECT i.id_incidencia, i.descripcio, i.data_inici, i.prioritat, i.resolta, d.nom_departament 
        FROM INCIDENCIA i, DEPARTAMENT d WHERE i.resolta = 0
        AND i.id_departament=d.id_departament 
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
<a href="ri_que_vols_fer.php" class="btn btn-dark text-white rounded-0 btn-sm">
  Tornar enrere
</a>

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
                <th>Acció</th>
            </tr>
        </thead>
        <tbody>
            <?php $comptador = 1; foreach ($incidencies as $inc): ?>
            <tr>
                <td><?php echo $comptador++; ?></td>
                <td><?php echo $inc["nom_departament"]; ?></td>
                <td><?php echo $inc["descripcio"]; ?></td>
                <td><?php echo $inc["data_inici"]; ?></td>
                <td><?php echo $inc["prioritat"]; ?></td>
                <td>
                    <button class="btn btn-primary btn-sm btn-modificar"
                    data-id="<?php echo $inc['id_incidencia']; ?>"
                    data-prioritat="<?php echo $inc['prioritat']; ?>">
                    Modificar
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once "pie.php"; ?>