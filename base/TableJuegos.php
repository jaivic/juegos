<?php

require_once ('bd.php');
require_once('Const.php');

class TableJuegos {

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
      Crea una tupla en la base de dato gallery ; agrega una imagen en la tabla gallery
      @param String $sTitle almacena el titulo maximo 255 caracteristica .
      @param integer $iTypeMedia 0:imagen;1:gif;2:videoyoutube;3:videovine;
      @param String $sInfoMedia html para incrustar dependiendo que tipo de media sea
      @param String $sUrl direccion de la imagen base a mostrar cuando sea cargado el post
      @param String $sTag cadenas de etiquetas en json
      @param Integer $iNMore puntos positivos del post
      @param Integer $iNLess puntos negativos del post
      @param Integer $iNComment numero de comentarios
      @param String $sComment html de memes o comentarios adicionales

      @return integer numero de tupla o -1 si falla la creacion
     */
    public function Create($sTitle, $iTypeMedia, $sInfoMedia, $sUrl, $sTag, $sComment, $sMeta = "",$b) {
        $query = sprintf("INSERT INTO `gallery` "
                . "(`ID`, `TITLE`, `TYPEMEDIA`, `INFOMEDIA`,"
                . " `URL`, `DATE`, `TAG`, `N_MORE`, `N_LESS`,"
                . " `N_COMMENT`, `COMMENT_ADDITIONAL`,STATE,META) "
                . "VALUES (NULL, '%s', '%s', '%s', '%s', CURRENT_TIMESTAMP, '%s',"
                . " 0, 0, 0, '%s','1','%s','%s');", 
                $sTitle, 
                $iTypeMedia, 
                $sInfoMedia, 
                $sUrl, $sTag, 
                $sComment, 
                $sMeta,
                $b);
        $this->bd->DoQuery($query);

        return $this->bd->GetCount();
    }

}
