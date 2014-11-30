<?php

class permisos {

    public $permisos;
    public $co;

    public function __construct() {
        require_once '../base/ClassCookie.php';
        require_once '../base/tablePermisos.php';
        $this->co = new oCookie();
        $this->co->SetSVar("iIDGrupo",1);//para pruebas iniciales
        $this->permisos = new TablePermisos();
    }

    public function validarPermiso($iIDPermisosAValidar) {
        
        if ($this->co->GetSVar("iIDGrupo")) {
            $this->permisos->ValidarPermiso($iIDPermisosAValidar, $this->co->GetSVar("iIDGrupo"));
            if ($this->permisos->bd->GetCount() > 0) {
               
                return true;
            }
        }
        return false;
    }

    function CrearLiMenu($Pagina, $iIDAValidar, $sDirMenu, $sNombre) {
        if ($this->validarPermiso($iIDAValidar)) {
            if ($Pagina == $iIDAValidar) {
                return '<li class="current"><a href="' . $sDirMenu . '"><span class="icon icon-table"></span>' . $sNombre . '</a></li>';
            } else {
                return '<li><a href="' . $sDirMenu . '"><span class="icon icon-table"></span>' . $sNombre . '</a></li>';
            }
        }
        return "";
    }

}

?>