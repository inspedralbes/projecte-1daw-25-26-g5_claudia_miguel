<?php
$mysqli = include_once "conexio.php";

$sql = "SELECT i.id_incidencia, i.descripcio, i.data_inici, i.prioritat, i.resolta, d.nom_departament 
        FROM INCIDENCIA i, DEPARTAMENT d 
        WHERE i.resolta = 0
        AND i.id_departament = d.id_departament 
        ORDER BY i.data_inici DESC";

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
            <?php foreach ($incidencies as $inc): ?>
            <tr>
                <td><?php echo $inc["id_incidencia"]; ?></td>
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