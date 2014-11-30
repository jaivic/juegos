<nav><!--nav -->
    <ul class="collapsible accordion">
        <li>
            <a class="open" href="javascript:void(0);">
                <img src="img/icons/packs/fugue/16x16/ui-layered-pane.png" alt="" height=16 width=16>General<span class="badge">4</span></a>
            <ul>
                <?php
                echo $permisos->CrearLiMenu($Pagina, 1, "JCaracteristicas.php", "Caracteristicas");
                echo $permisos->CrearLiMenu($Pagina, 2, "JClasificacion.php", "Clasificacion");
                echo $permisos->CrearLiMenu($Pagina, 3, "JConsolas.php", "Consolas");
                echo $permisos->CrearLiMenu($Pagina, 4, "JGeneros.php", "Generos");
                echo $permisos->CrearLiMenu($Pagina, 5, "Galeria.php", "Galeria");
                ?>
          </ul>
        </li>
        <li>
            <a class="open" href="javascript:void(0);">
                <img src="img/icons/packs/fugue/16x16/ui-layered-pane.png" alt="" height=16 width=16>Sistema<span class="badge">4</span></a>
            <ul>
                <?php
                echo $permisos->CrearLiMenu($Pagina, 6, "Agrupo.php", "Grupo");
                echo $permisos->CrearLiMenu($Pagina, 7, "Apermisos.php", "Permisos");
                echo $permisos->CrearLiMenu($Pagina, 8, "JIdioma.php", "Idioma");
                ?>
            </ul>
        </li>
    </ul></nav><!-- End of nav -->