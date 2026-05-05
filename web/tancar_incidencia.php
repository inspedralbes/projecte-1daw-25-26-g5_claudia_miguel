<?php
$mysqli = include_once "conexio.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = intval($_POST['id_incidencia']);

    $sql = "UPDATE INCIDENCIA 
            SET resolta = 1, data_final = NOW()
            WHERE id_incidencia = $id";

    if ($mysqli->query($sql)) {
        header("Location: gestionarIncidencia.php?ok=1");
        exit;
    } else {
        header("Location: gestionarIncidencia.php?error=1");
        exit;
    }
}

header("Location: gestionarIncidencia.php");
exit;
?>