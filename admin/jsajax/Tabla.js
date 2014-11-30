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
MangoTabla = function() {

    var tableGeneral;
    var asTuplas;
    var aNombre;
    var sTHead;
    var iCTuplas;
    var sColGroup;
    var sTBody;
    var sDirAjax;

    /**
     * 
     *      Inicial la clase de mensaje y escode el div de mensaje
     
     *  <colgroup><col ">
     <col span="1">
     </colgroup>
     <thead>
     <tr>
     <th>Nombres</th>
     <th>Acciones</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <td>grupo</td>
     <td class="center">
     <a href="#" class="button small grey tooltip" data-gravity=s title="Edit"><i class="icon-pencil"></i></a>
     <a href="#" class="button small grey tooltip" data-gravity=s title="Remove"><i class="icon-remove"></i></a>
     </td>
     </tr>
     <tr>
     
     <td>grupo 1 </td>
     <td class="center">
     <a href="#" class="button small grey tooltip" data-gravity=s title="Edit"><i class="icon-pencil"></i></a>
     <a href="#" class="button small grey tooltip" data-gravity=s title="Remove"><i class="icon-remove"></i></a>
     </td>
     </tr>
     
     <tr >
     
     <td>grupo 2 </td>
     <td class="center">
     <a href="#" class="button small grey tooltip" data-gravity=s title="Edit"><i class="icon-pencil"></i></a>
     <a href="#" class="button small grey tooltip" data-gravity=s title="Remove"><i class="icon-remove"></i></a>
     </td>
     </tr>
     </tbody>                   
     * 
     * @return 
     *aNombre[0].ths='titulo'
     *aNombre[0].colgroups='span="1" style="width: 500px;'
     */
    function Iniciar(sNombre, DirAjax) {
        this.tableGeneral = $("#" + sNombre);
        this.aNombre = [];
        this.asTuplas = [];
        this.iCTuplas = 0;
        this.sDirAjax = DirAjax;

    }
    function CrearHead() {
        var ths = "";
        var colgroups = "";
        for (var i = 0; i < this.aNombre.length; i++) {
            ths += '<th>' + this.aNombre[i].ths + '</th>';
            colgroups += '< col ' + this.aNombre[i].colgroups + '>';
        }
        sColGroup = '<colgroup>' + colgroups + '</colgroup>';
        sTHead = '<thead><tr>' + ths + '</tr></thead>';

        this.tableGeneral.html(sTHead);
    }
    function CrearColumna(Titulo, ColSpanStyle, tdClass) {
        var b = {};
        b.ths = Titulo;
        b.colgroups = ColSpanStyle;
        b.tdclass = tdClass;
        this.aNombre.push(b);

    }
    function CrearCuerpo() {
        var tds = "";
        var trs = "";
        for (var i = 0; i < this.asTuplas.length; i++) {
            tds = "";
            for (var j = 0; j < this.aNombre.length; j++) {
                tds += '<td class="' + this.aNombre[j].tdclass + '">' + this.asTuplas[i][j] + '</td>';
            }
            trs += '<tr>' + tds + '</tr>';
        }
        sTBody = '<tbody>' + trs + '</tbody>';
        this.tableGeneral.append(sTBody);
    }
    function LLenarfila(aInfo) {
        this.asTuplas[this.iCTuplas] = aInfo;
        this.iCTuplas++;

    }
    function CrearTabla() {
        this.CrearHead();
        this.CrearCuerpo();
    }

    function CargaTabla() {
        this.tableGeneral.html("");
         this.asTuplas = [];
        this.iCTuplas=0;
      
        $.post(this.sDirAjax, function(o) {
            if (o.Tupla > 0) {
                for (var i = 0; i < o.Tupla; i++) {
                    MangoTabla.LlenarFila([o.Resultado[i].Nombre, MangoTabla.CrearBoton("FormGrupo.Eliminar(" + o.Resultado[i].ID + ")", "icon-remove") + MangoTabla.CrearBoton("FormGrupo.Edit(" + o.Resultado[i].ID + ")", "icon-pencil")]);
                }
                MangoTabla.CrearTabla();
            }
        }, "json");
    }

    /*sclass icon-pencil icon-remove*/
    function CrearBoton(sNombreFun, sClases) {
        return '<button class="button small grey tooltip" onclick="' + sNombreFun + '"><i class="' + sClases + '"></i></button>';

    }
    return {
        Iniciar: Iniciar,
        CrearTabla: CrearTabla,
        CrearCuerpo: CrearCuerpo,
        CrearHead: CrearHead,
        LlenarFila: LLenarfila,
        CrearBoton: CrearBoton,
        CrearColumna: CrearColumna,
        CargaTabla: CargaTabla
    }
}();


