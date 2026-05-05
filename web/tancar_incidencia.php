<?php
$mysqli = include_once "conexio.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = intval($_POST['id_incidencia']);

    $sql = "UPDATE INCIDENCIA 
            SET resolta = 1, data_final = NOW()
            WHERE id_incidencia = $id";

    if ($mysqli->query($sql)) {
        header("Location: t_gestionar_incidencia.php?ok=1");
        exit;
    } else {
        header("Location: t_gestionar_incidencia.php?error=1");
        exit;
    }
}

header("Location: t_gestionar_incidencia.php");
exit;
?>