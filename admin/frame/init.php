<?php
include_once '../base/Permisos.php';
$permisos = new permisos();
if (!$permisos->validarPermiso($Pagina)) {
        header("pages_error_404.php");
}