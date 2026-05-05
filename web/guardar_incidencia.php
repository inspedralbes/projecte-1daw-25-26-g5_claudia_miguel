<?php
$mysqli = include_once "conexio.php";

$id        = intval($_POST['id_incidencia']);
$prioritat = $_POST['prioritat'];
$id_tipus  = intval($_POST['id_tipus']);
$id_tecnic = intval($_POST['id_tecnic']);

$sql = "UPDATE INCIDENCIA 
        SET prioritat = '$prioritat', 
            id_tipus = $id_tipus, 
            id_tecnic = $id_tecnic
        WHERE id_incidencia = $id";

if ($mysqli->query($sql)) {
    header("Location: ri_llistat_incidencies.php?ok=1");
    exit;
} else {
    header("Location: ri_llistat_incidencies.php?error=1");
    exit;
}
?>