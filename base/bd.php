<?php
include_once 'const.php';
include_once 'classError.php';
class bd extends PDO
{
    protected $oStmt;
    protected $aResult;
    protected $iCount;
    protected $iLastID;
    public $oError;
    protected $sQuery;
   /**
    * Descripcion aqui    
    
    *@access public
    *@return null    
    */
      public function __construct()
    {
        $this->oError = new oError("basedato");
        $this->sQuery = "";
        $dns = O_BD . ':dbname=' . O_DB_NAME . ";host=" . O_DB_SERVER;
        try
        {
            parent::__construct($dns, O_DB_USER, O_DB_PASS);
        }
        catch (PDOException $e)
        {
            $error = new oError("basedato");
            $error->PrepareNotice("connection attempt", "BD", "Constructor", $e->getCode(), $dns . ";user:" . O_DB_USER . ";pass:" . O_DB_PASS, $e->getMessage(), $e->getFile(), $e->getLine(), $e->getTraceAsString());
            $error->show();
        }
        restore_error_handler();
        $this->DoQuery("SET NAMES 'utf8'");
    }
   /**
    * Descripcion aqui    
    
    *@access public
    *@return null    
    */
      public function reset()
    {
        $this->iCount = -1;
        $this->iLastID = -1;
        $this->aResult = null;
        $this->sQuery = "";
        $this->oStmt = null;
    }
   /**
    * Descripcion aqui    
    
    *@param String $sQuery 
    *@access public
    *@return null    
    */
      public function DoQuery($sQuery)
    {
        $this->iCount = -1;
        $this->iLastID = -1;
        $this->aResult = null;
        $this->oError->Res();
        $this->sQuery = $sQuery;
        $this->oStmt = parent::query($sQuery);
        if ($this->oStmt != false)
        {
            if (preg_match("/^(insert|delete|update|replace)\s+/i", $sQuery))
            {
                $this->iCount = $this->oStmt->rowCount();
                if (preg_match("/^(insert|replace)\s+/i", $sQuery))
                {
                    $this->iLastID = parent::lastInsertId();
                }
            }
            else
            {
                $this->aResult = $this->oStmt->fetchAll();
                $this->iCount = count($this->aResult);
            }
            $this->oStmt->closeCursor();
        }
        else
        {
            $oLocalError = parent::errorInfo();
            if ($oLocalError)
            {
                $this->SetError($oLocalError[1], $oLocalError[2], $sQuery, "");
            }
        }
    }
   /**
    * Descripcion aqui    
    
    *@param String $sModule 
    *@param Integer  $iCode 
    *@param String  $sInfo 
    *@param Mix  $mData 
    *@access public
    *@return null    
    */
      public function SetError($sModule, $iCode, $sInfo, $mData)
    {
        $aError = debug_backtrace();
        $aError = $aError[count($aError) - 1];
        $this->oError->PrepareNotice($sModule, $aError["class"], $aError["function"], $iCode, $mData, $sInfo, $aError["file"], $aError["line"], "");
        $this->oError->show();
    }
   /**
    * Descripcion aqui    
    
    *@access public
    *@return null    
    */
      public function isError()
    {
        if ($this->oError->IsError() != 0)
        {
            return true;
        }
        return false;
    }
   /**
    * Descripcion aqui    
    
    *@access public
    *@return null    
    */
      public function GetError()
    {
        if ($this->isError())
        {
            return $this->oError;
        }
        return null;
    }
   /**
    * Descripcion aqui    
    
    *@access public
    *@return null    
    */
      public function GetCount()
    {
        return $this->iCount;
    }
   /**
    * Descripcion aqui    
    
    *@access public
    *@return null    
    */
      public function GetLastID()
    {
        return $this->iLastID;
    }
   /**
    * Descripcion aqui    
    
    *@param Integer $iIndex 
    *@param type  $ColummName 
    *@access public
    *@return null    
    */
      public function GetResult($iIndex, $ColummName)
    {
        $slocalModule = "obtener respuesta de la base de dato";
        if (!$this->isError())
        {
            if ($this->aResult != null)
            {
                if (isset($this->aResult[$iIndex]))
                {
                    if (isset($this->aResult[$iIndex][$ColummName]))
                    {
                        return $this->aResult[$iIndex][$ColummName];
                    }
                    else
                    {
                        $this->SetError($slocalModule, "ibd-00003", "No se encontro los indices [" . $iIndex . "][" . $ColummName . "] para la consulta " . $this->sQuery, " index:" . $iIndex . ", Col:" . $ColummName);
                    }
                }
                else
                {
                    $this->SetError($slocalModule, "ibd-00002", "No se encontro los indices [" . $iIndex . "]para la consulta " . $this->sQuery, " index:" . $iIndex . ", Col:" . $ColummName);
                }
            }
            else
            {
                $this->SetError($slocalModule, "ibd-00001", "No hay Matriz de respuesta para la consulta anterior " . $this->sQuery, $iIndex . $ColummName);
            }
        }
        return null;
    }
   /**
    * Descripcion aqui    
    
    *@param Integer $iIndex 
    *@access public
    *@return null    
    */
      public function GetRow($iIndex)
    {
        if (!$this->isError())
        {
            if ($this->aResult != null)
            {
                if (isset($this->aResult[$iIndex]))
                {
                    return $this->aResult[$iIndex];
                }
                else
                {
                    $this->SetError("ibd-00002", "No se encontro los indices [" . $iIndex . "]para la consulta " . $this->sQuery, " index:" . $iIndex . ", Col:" . $ColummName);
                }
            }
            else
            {
                $this->SetError("ibd-00001", "No hay Matriz de respuesta para la consulta anterior " . $this->sQuery, $iIndex . $ColummName);
            }
        }
        return null;
    }
   /**
    * Descripcion aqui    
    
    *@access public
    *@return array retorna el arreglo que respondio la consulta    
    */
      public function GetAllRow()
    {
        return $this->aResult;
    }
   /**
    * Descripcion aqui    
    
    *@access public
    *@return null    
    */
      public function PrintAllResult()
    {
        var_dump($this->aResult);
    }
}
?>
