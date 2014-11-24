<?php

// son 5 pasos para repondan una peticion de ajax
// 1 incluye todo los archivos necesarios e instancia clases
// 2 recibe parametros por el get o post
// 3 validad si cualquier cosas necesaria
// 4 (si todo esta correcto)ejecuta el query
// 5 responde resultado
include_once '../../base/TableGrupos.php'; //paso 1
$bd = new TableGrupos();
$json = new stdClass();
$bError = false;
$iResultado = -1;

if (isset($_POST["sID"])) {//Paso 2
    $sID = $_POST["sID"];
} else {
    $bError = true;
}
if ($bError == true) {
    $json->Tupla = -1;
    $json->sMensaje = "el campo de nombre esta vacio";
} else {
    $iResultado = $bd->Eliminar($sID);

    if ($iResultado > 0) {

        $json->Tupla = $iResultado;
    } else {
        $json->Tupla = -1;
        $json->sMensaje = $bd->bd->GetError();
    }
}
echo json_encode($json);
?>