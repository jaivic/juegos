<?php

include_once '../../base/TablePermisos.php';//paso 1
$bd = new TablePermisos();
$json = new stdClass();
$bError = false;
$iResultado = -1;



if (isset($_POST["sName"])) {//Paso 2
    $sNombre = $_POST["sName"];
} else {
    $bError = true;
}
if ($bError == true) {

    $json->Tupla = -1;
    $json->sMensaje = "el campo de nombre esta vacio";
} else {
    $iResultado = $bd->Crear($sNombre);
    if ($iResultado > 0) {

        $json->Tupla = 1;
        $json->sMensaje = "todo correcto";
        $json->sNombre = $sNombre;
    } else {
        $json->Tupla = -1;
        $json->sMensaje = $bd->bd->GetError();
    }
}
echo json_encode($json);
?>