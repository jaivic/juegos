
$(document).ready(function() {

    FormGrupo.Iniciar();
  
});

/*
 
 Created on : 5-octubre-2014
Modificado :  25-octubre-2014 - se agrego obj MangoMensaje
 Author     : jv
 */

/*
 TODO  obj js para el formulario de Grupo
 */

/**
 * Clase que hace funcionar el formulario grupo
 
 * 
 * @author jaivic villegas
 * @version 2
 * @access public
 */
FormGrupo = function() {

    var sInputName;
    var BtGuardar;
    var BtModificar;
     var objMangoMensaje;
    /**
     * Formgrupo::Inicio
     *
     Inicial la clase formulario
     se cargan todos los elementos 
     *
     * 
     * @return 
     *
     */
    function Iniciar() {
        sInputName = $("#sNombre");
        BtGuardar = $("#BtAgregar");
        BtModificar = $("#BtModificar");
        sInputName.val("");
        objMangoMensaje=new MangoMensaje;
        objMangoMensaje.Iniciar("FormMensaje")
        BtGuardar.click(Guardar);
        //  BtModificar.click(modificar);
    }

    /**
     * FormGrupo::Guardar
     *
     * Guarda el nombre del grupo 
     */
    function Guardar() {

        $.post("ajax/AgregarGrupo.php", {
            sName: sInputName.val()
        }, function(o) {
            if (o.Tupla > 0) {
            
                sInputName.val("");
                objMangoMensaje.MensajeExito(o.sMensaje);
            } else {
                 sInputName.focus();
                objMangoMensaje.MensajeError(o.sMensaje);
            }
        }, "json");
    }/* fin de funcion Guardar*/
   
    return {
        Iniciar: Iniciar,
        Guardar: Guardar
       
    }
}();













