/*
 TODO obj general que permite mostrar mensaje usando el estilo mango
 */

/**
 * Clase muestra y oculta mensaje de error
 //<div class="alert success"><span class="icon"></span><span class="close">x</span><strong>Success!</strong> Now it's working :)</div>
 success
 info
 error
 warning
 note
 * 
 * @author jaivic villegas
 * @copyright 11-ago-2012, 
 * @version 1
 * @access public
 */
MangoMensaje = function() {

    var divMensajeMango;

    /**
     * 
     *      Inicial la clase de mensaje y escode el div de mensaje
     
     *
     * 
     * @return 
     *
     */
    function Iniciar(sNombre) {
        divMensajeMango = $("#" + sNombre);
        divMensajeMango.hide();
    }

    /**
     
     *
     * muestra el mensaje borrando todo los tipos de mensaje anteriores y colocando el nuevo
     */
    function MostrarMensaje(sTipo, sMensaje) {
        divMensajeMango.hide();
        divMensajeMango.removeClass("alert success info error warning note");
        divMensajeMango.html('<span class="icon"></span><span class="close">x</span>' + sMensaje);
        divMensajeMango.addClass("alert " + sTipo);
        divMensajeMango.show();

    }/* fin de funcion Guardar*/

    /**
     * muestra mensaje de exito
     *  
     */
    function MensajeExito(sMensaje) {
        MostrarMensaje("success", sMensaje);
    }/* fin de funcion MensajeExito*/
    /**
     * muestra mensaje de error
     *  
     */
    function MensajeError(sMensaje) {
        MostrarMensaje("error", sMensaje);
    }/* fin de funcion MensajeError*/
    return {
        Iniciar: Iniciar,
        MensajeExito: MensajeExito,
        MensajeError: MensajeError
    }
}();


