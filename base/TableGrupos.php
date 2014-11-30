<?php

require_once ('bd.php');
require_once('Const.php');

class TableGrupos {

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
      Crea una tupla en la base de dato grupo ; Crea un grupo de usuario
      @param String $sName almacena el Nombre del grupo maximo 255 caracteristica .

      @return integer numero de tupla o -1 si falla la creacion
     */
    public function Crear($sName) {
        $query = sprintf("INSERT INTO `grupo` "
                . "(`ID`, `NOMBRE`) "
                . "VALUES (NULL, '%s');", $sName);
        $this->bd->DoQuery($query);

        return $this->bd->GetCount();
    }

    /**
     * 
      lista todos los grupos de la base de datos

      @return integer numero de tupla o -1 si falla la creacion
     */
    public function ListarGrupo() {
        $query = sprintf("select ID,NOMBRE,ESTADO FROM grupo");
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
