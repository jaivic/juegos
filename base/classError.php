<?php
class oError
{
    public $sModule;
    public $sClass;
    public $sFunction;
    public $sCode;
    public $sData;
    public $sMessage;
    public $sTime;
    public $sFile;
    public $sLine;
    public $sTrace;
    public $sFileOut;

    function __construct($sName)
    {
        $this->sFileOut = O_LOG.$sName;
        $this->sCode = 0;
    }

    Public function Res()
    {
        $this->sCode = 0;
    }

    public function IsError()
    {
        return $this->sCode;
    }

    function PrepareNotice($Module, $Class, $Function, $Code, $Data, $Message, $File, $Line, $Trace)
    {
        $this->sModule = $Module;
        $this->sClass = $Class;
        $this->sFunction = $Function;
        $this->sCode = $Code;
        $this->sData = $Data;
        $this->sMessage = $Message;
        $this->sFile = $File;
        $this->sLine = $Line;
        $this->sTrace = $Trace;
       $this->SetTime();
    }

    public function SetTime()
    {
        $this->time = date("Y-m-d H:i:s (T)");
    }

    public function __toString()
    {
        return json_encode($this);
    }

    public function Show()
    {
        if (O_DEBUG_MODE == false)
        {
            error_log(json_encode($this) . "
", 3, $this->sFileOut);
        }
        else
        {
            var_dump($this);
        }
    }

    public function SetError($sModule, $iCode, $sInfo, $mData)
    {
        $aError = debug_backtrace();
        $aError = $aError[count($aError) - 1];
        $this->PrepareNotice($sModule, $aError["class"], $aError["function"], $iCode, $mData, $sInfo, $aError["file"], $aError["line"], "");
        $this->show();
    }

}

?>
