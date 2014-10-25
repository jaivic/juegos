<?php

class oCookie
{

    protected $iTime;
    protected $sDir;
    protected $bSecure;
    protected $bHTTPOnly;
    protected $bHaveInfo;
    protected $sVar;

    /**
     * Descripcion aqui    

     * @param Integer $iTime = '604800' 
     * @param String  $sDir = "/" 
     * @param Boolean  $bSecure = false 
     * @param Boolean  $bHTTPOnly = false 
     * @access public
     * @return null    
     */
    public function __construct($iTime = '604800', $sDir = "/", $bSecure = false, $bHTTPOnly = false)
    {
        $this->iTime = time() + $iTime;
        $this->sDir = $sDir;
        $this->bSecure = $bSecure;
        $this->bHTTPOnly = $bHTTPOnly;
        $this->sVar = array();
        $this->bHaveInfo = false;
        if (!empty($_COOKIE))
        {
            $this->bHaveInfo = true;
        }
    }

    /**
     * Descripcion aqui    

     * @access public
     * @return null    
     */
    public function GetITime()
    {
        return $this->iTime;
    }

    /**
     * Descripcion aqui    

     * @param Integer $iTime 
     * @access public
     * @return null    
     */
    public function SetITime($iTime)
    {
        $this->iTime = $iTime;
    }

    /**
     * Descripcion aqui    

     * @access public
     * @return null    
     */
    public function GetSDir()
    {
        return $this->sDir;
    }

    /**
     * Descripcion aqui    

     * @param String $sDir 
     * @access public
     * @return null    
     */
    public function SetSDir($sDir)
    {
        $this->sDir = $sDir;
    }

    /**
     * Descripcion aqui    

     * @access public
     * @return null    
     */
    public function GetBSecure()
    {
        return $this->bSecure;
    }

    /**
     * Descripcion aqui    

     * @param Boolean $bSecure 
     * @access public
     * @return null    
     */
    public function SetBSecure($bSecure)
    {
        $this->bSecure = $bSecure;
    }

    /**
     * Descripcion aqui    

     * @access public
     * @return null    
     */
    public function GetBHTTPOnly()
    {
        return $this->bHTTPOnly;
    }

    /**
     * Descripcion aqui    

     * @param Boolean $bHTTPOnly 
     * @access public
     * @return null    
     */
    public function SetBHTTPOnly($bHTTPOnly)
    {
        $this->bHTTPOnly = $bHTTPOnly;
    }

    /**
     * Descripcion aqui    

     * @access public
     * @return null    
     */
    public function GetBHaveInfo()
    {
        return $this->bHaveInfo;
    }

    /**
     * Descripcion aqui    

     * @param Boolean $bHaveInfo 
     * @access public
     * @return null    
     */
    public function SetBHaveInfo($bHaveInfo)
    {
        $this->bHaveInfo = $bHaveInfo;
    }

    /**
     * Descripcion aqui    

     * @param String $sName 
     * @access public
     * @return null    
     */
    public function GetSVar($sName)
    {
        if (isSet($_COOKIE[$sName]))
        {
            return $_COOKIE[$sName];
        }
        return null;
    }

    /**
     * Descripcion aqui    

     * @param String $sName 
     * @param String  $sValue 
     * @access public
     * @return null    
     */
    public function SetSVar($sName, $sValue)
    {
        $this->bHaveInfo = true;
        Setcookie($sName, $sValue, $this->iTime, $this->sDir, "");
    }

    /**
     * Descripcion aqui    

     * @access public
     * @return null    
     */
    public function SeeCookiesVars()
    {
        var_dump($_COOKIE);
    }

    /**
     * Descripcion aqui    

     * @access public
     * @return null    
     */
    public function deleteAll()
    {
        foreach ($_COOKIE as $key => $value)
        {
            Setcookie($key, "", time() - 42000, "/", "");
        }
    }

}

?>
