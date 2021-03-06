
$(document).ready(function() {
FormPG.Iniciar();
    

});

/*
 
 Created on : 5-octubre-2014
Modificado :  25-octubre-2014 - se agrego obj MangoMensaje
 Author     : jv
 */

/*
 TODO  obj js para el formulario de permisos
 */

/**
 * Clase que hace funcionar el formulario permisos
 
 * 
 * @author jaivic villegas
 * @version 2
 * @access public
 */
FormPG = function() {

    var sInputName;
    var BtGuardar;
    var BtModificar;
     var objMangoMensaje;
    /**
     * FormPermisos::Inicio
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
        objMangoMensaje=MangoMensaje;
        objMangoMensaje.Iniciar("FormMensaje")
        BtGuardar.click(Guardar);
$.post("ajax/buscarTodoPermisos.php",function(res){
          var resul = jQuery.parseJSON(res);

          for(i=0;i<resul["Tupla"];i++ )
             $("#permiso").append("<option selected value="+resul["Resultado"][i]["Nombre"]+">"+resul["Resultado"][i]["Nombre"]+"<option>");
        });

        $.post("ajax/buscarTodoGrupos.php",function(res){
          var resul = jQuery.parseJSON(res);

          for(i=0;i<resul["Tupla"];i++ )
             $("#grupo").append("<option value="+resul["Resultado"][i]["Nombre"]+">"+resul["Resultado"][i]["Nombre"]+"<option>");
        });
        
        
    }

    /**
     * FormPermisos::Guardar
     *
     * Guarda el nombre del permisos
     */
    function Guardar() {
                
    
        $.post("ajax/AgregarPermisos.php", {
            sName: sInputName.val()
        }, function(o) {
            if (o.Tupla > 0) {
                sInputName.val("");
                objMangoMensaje.MensajeExito(o.sMensaje);
                objMangoTabla.CargaTabla();
            } else {
                 sInputName.focus();
                objMangoMensaje.MensajeError(o.sMensaje);
            }
        }, "json");
    }/* fin de funcion Guardar*/
    function Eliminar(id) {
        if (confirm("Desea eliminar el grupo")) {
            $.post("ajax/PermisosEliminar.php", {sID: id}, function(o) {
                if (o.Tupla > 0) {
                    objMangoTabla.CargaTabla();
                }
            }, "json");

        }
    }

   
    return {
        Iniciar: Iniciar,
        Guardar: Guardar,
        Eliminar: Eliminar
       
    }
}();

