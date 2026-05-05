<?php
$mysqli = include_once "conexio.php";

//Recoge el ID de la incidència y quin botó s'ha premut (actuacio o finalitzar).
$id_incidencia = intval($_POST['id_incidencia']);
$accio = $_POST['accio'];


//Si has premut "Guardar Actuació":
if ($accio === 'actuacio') {
    // Guardar nova actuació
    $descripcio    = $_POST['descripcio_detallada'];
    $temps         = intval($_POST['temps_minuts']);
    $visible       = intval($_POST['visible_usuari']);
 
    $stmt = $mysqli->prepare(
        "INSERT INTO ACTUACIONS (id_incidencia, descripcio_detallada, temps_minuts, visible_usuari) VALUES (?, ?, ?, ?)"
    );
    $stmt->bind_param("isii", $id_incidencia, $descripcio, $temps, $visible);
    $stmt->execute();
    $stmt->close();
 

    //Després redirigeix de tornada a la mateixa pàgina per veure la nova actuació:
    header("Location: t_registrar_actuacio.php?id=$id_incidencia&ok=1");
    exit;
 

    //Si has premut "Marcar com a Resolta":
} elseif ($accio === 'finalitzar') {
    $data_final = $_POST['data_final'];
 
    //Fa un UPDATE a la taula INCIDENCIA posant resolta = 1 i guardant la data_final. Així la incidència desapareix del llistat del Responsable d'Informàtica.
    $stmt = $mysqli->prepare(
        "UPDATE INCIDENCIA SET resolta = 1, data_final = ? WHERE id_incidencia = ?"
    );
    $stmt->bind_param("si", $data_final, $id_incidencia);
    $stmt->execute();
    $stmt->close();
 

    //Després redirigeix al llistat:
    header("Location: t_llistat_incidencies.php?finalitzada=1");
    exit;
}
 
header("Location: t_llistat_incidencies.php");
exit;
?>
 
