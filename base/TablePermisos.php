<?php

require_once ('bd.php');
require_once('Const.php');

class TablePermisos {

    public $bd;

    /**
      Descripcion aqui

      @return type description
     */
    function __construct() {
        $this->bd = new bd();
    }

    /**
     * ejemplo
      Crea una tupla en la base de dato Permiso ; Crea un Permisos de usuario
      @param String $sName almacena el Nombre del permisos maximo 255 caracteristica .

      @return integer numero de tupla o -1 si falla la creacion
     */
    public function Crear($sName) {
        $query = sprintf("INSERT INTO `permisos` "
                . "(`ID`, `NOMBRE`) "
                . "VALUES (NULL, '%s');", $sName);
        $this->bd->DoQuery($query);

        return $this->bd->GetCount();
    }

    /**
     * 
      lista todos los Permisos de la base de datos

      @return integer numero de tupla o -1 si falla la creacion
     */
    public function ListarPermisos() {
        $query = sprintf("select ID,NOMBRE FROM permisos");
        $this->bd->DoQuery($query);

        return $this->bd->GetCount();
    }

    public function ValidarPermiso($iIDPermisosAValidar, $iIDGrupo) {

        $query = sprintf("select ID,ID_GRUPO,ID_PERMISO FROM "
                . "`r_grupo_permisos` WHERE ID_PERMISO='%s' and ID_GRUPO='%s'", $iIDPermisosAValidar, $iIDGrupo);
        
        $this->bd->DoQuery($query);

        return $this->bd->GetCount();
    }

    public function Eliminar($sID) {
        $query = sprintf("delete from grupo where ID='%s'",$sID);
        //$query = sprintf("UPDATE  `juegos`.`grupo` SET  `ESTADO` =  '1' WHERE  `grupo`.`ID` ='%s';", $sID);
        $this->bd->DoQuery($query);
        return $this->bd->GetCount();
    }

}
