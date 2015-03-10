<?php





// son 5 pasos para repondan una peticion de ajax
// 1 incluye todo los archivos necesarios e instancia clases
// 2 recibe parametros por el get o post
// 3 validad si cualquier cosas necesaria
// 4 (si todo esta correcto)ejecuta el query
// 5 responde resultado
include_once '../../base/TablePermisos.php'; //paso 1
$bd = new TablePermisos();
$json = new stdClass();
$bError = false;
$iResultado = -1;
$ARRAY = array();
$iResultado = $bd->ListarPermisos();
$array = array();

if ($iResultado > 0) {
    for ($i = 0; $i < $bd->bd->GetCount(); $i++) {
        $array[$i]["ID"] = $bd->bd->GetResult($i, "ID");

        $array[$i]["Nombre"] = $bd->bd->GetResult($i, "NOMBRE");
        
    }
    $json->Tupla = $iResultado;
       $json->Resultado = $array;
} else {
    $json->Tupla = -1;
    $json->sMensaje = $bd->bd->GetError();
}

echo json_encode($json);
?>