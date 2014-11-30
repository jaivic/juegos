<?php

//$Pagina = 0;

//require_once '../base/ClassCookie.php';
//require_once '../base/tablePermisos.php';
//$iIDGrupo = "-1";
//$iIDPermisosAValidar = 0;
//$co = new oCookie();
//
//$permisos = new TablePermisos();
//if ($co->GetSVar("iIDGrupo")) {
//    $permisos->ValidarPermiso($iIDPermisosAValidar, $co->GetSVar("iIDGrupo"));
//    if ($permisos->bd->GetCount() < 0) {
//
//        header("pages_error_404.php");
//    }
//} else {
//    header("pages_error_404.php");
//}

include_once '../base/Permisos.php';

$permisos = new permisos();

if (!$permisos->validarPermiso($Pagina)) {
   
        header("pages_error_404.php");
}