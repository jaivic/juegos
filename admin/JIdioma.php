<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<?php
$Pagina = 8;
include_once 'frame/init.php';
?>
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="http://themes.googleusercontent.com" />

        <link rel="dns-prefetch" href="http://ajax.googleapis.com" />
        <link rel="dns-prefetch" href="http://cdnjs.cloudflare.com" />
        <link rel="dns-prefetch" href="http://agorbatchev.typepad.com" />

        <!-- Use the .htaccess and remove these lines to avoid edge case issues.
           More info: h5bp.com/b/378 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>[TITLE] - Mango: Slick and Responsive Admin Template</title>
        <meta name="description" content="Mango is a slick and responsive Admin Template build with modern techniques like HTML5 and CSS3 to be used for backend solutions of any size.">
        <meta name="author" content="Simon Stamm &amp; Markus Siemens">

        <!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <!-- iPhone: Don't render numbers as call links -->
        <meta name="format-detection" content="telephone=no">

        <link rel="shortcut icon" href="favicon.ico" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
        <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->






        <!-- The Styles -->
        <!-- ---------- -->

        <!-- Layout Styles -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/layout.css">

        <!-- Icon Styles -->
        <link rel="stylesheet" href="css/icons.css">
        <link rel="stylesheet" href="css/fonts/font-awesome.css">
        <!--[if IE 8]><link rel="stylesheet" href="css/fonts/font-awesome-ie7.css"><![endif]-->

        <!-- External Styles -->
        <link rel="stylesheet" href="css/external/jquery-ui-1.9.1.custom.css">
        <link rel="stylesheet" href="css/external/jquery.chosen.css">
        <link rel="stylesheet" href="css/external/jquery.cleditor.css">
        <link rel="stylesheet" href="css/external/jquery.colorpicker.css">
        <link rel="stylesheet" href="css/external/jquery.elfinder.css">
        <link rel="stylesheet" href="css/external/jquery.fancybox.css">
        <link rel="stylesheet" href="css/external/jquery.jgrowl.css">
        <link rel="stylesheet" href="css/external/jquery.plupload.queue.css">
        <link rel="stylesheet" href="css/external/syntaxhighlighter/shCore.css" />
        <link rel="stylesheet" href="css/external/syntaxhighlighter/shThemeDefault.css" />

        <!-- Elements -->
        <link rel="stylesheet" href="css/elements.css">
        <link rel="stylesheet" href="css/forms.css">

        <!-- OPTIONAL: Print Stylesheet for Invoice -->
        <link rel="stylesheet" href="css/print-invoice.css">

        <!-- Typographics -->
        <link rel="stylesheet" href="css/typographics.css">

        <!-- Responsive Design -->
        <link rel="stylesheet" href="css/media-queries.css">

        <!-- Bad IE Styles -->
        <link rel="stylesheet" href="css/ie-fixes.css">





        <!-- The Scripts -->
        <!-- ----------- -->

        <!-- JavaScript at the top (will be cached by browser) -->


        <!-- Grab frameworks from CDNs -->
        <!-- Grab jQuery from a CDN; fall back to local if offline -->
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.10.2.min.js"><\/script>')</script>

        <!-- Do the same with jquery-migrate -->
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-migrate-1.2.1.min.js"><\/script>')</script>

        <!-- Do the same with jQuery UI -->
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="js/libs/jquery-ui-1.9.1.min.js"><\/script>')</script>

        <!-- Do the same with Lo-Dash.js -->
        <!--[if gt IE 8]><!-->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.8.2/lodash.min.js"></script>
        <script>window._ || document.write('<script src="js/libs/lo-dash.min.js"><\/script>')</script>
        <!--<![endif]-->
        <!-- IE8 doesn't like lodash -->
        <!--[if lt IE 9]><script src="http://documentcloud.github.com/underscore/underscore.js"></script><![endif]-->

        <!-- Do the same with require.js -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/require.js/2.0.6/require.min.js"></script>
        <script>window.require || document.write('<script src="js/libs/require-2.0.6.min.js"><\/script>')</script>


        <!-- Load Webfont loader -->
        <script type="text/javascript">
            window.WebFontConfig = {
                google: {families: ['PT Sans:400,700']},
                active: function() {
                    $(window).trigger('fontsloaded')
                }
            };
        </script>
        <script defer async src="https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js"></script>

        <!-- Essential polyfills -->
        <script src="js/mylibs/polyfills/modernizr-2.6.1.min.js"></script>
        <script src="js/mylibs/polyfills/respond.js"></script>
        <script src="js/mylibs/polyfills/matchmedia.js"></script>
        <!--[if lt IE 9]><script src="js/mylibs/polyfills/selectivizr.js"></script><![endif]-->
        <!--[if lt IE 10]><script src="js/mylibs/polyfills/excanvas.js"></script><![endif]-->
        <!--[if lt IE 10]><script src="js/mylibs/polyfills/classlist.js"></script><![endif]-->



        <!-- scripts concatenated and minified via build script -->

        <!-- Scripts required everywhere -->
        <script src="js/mylibs/jquery.hashchange.js"></script>
        <script src="js/mylibs/jquery.idle-timer.js"></script>
        <script src="js/mylibs/jquery.plusplus.js"></script>
        <script src="js/mylibs/jquery.scrollTo.js"></script>
        <script src="js/mylibs/jquery.ui.touch-punch.js"></script>
        <script src="js/mylibs/jquery.ui.multiaccordion.js"></script>
        <script src="js/mylibs/number-functions.js"></script>
        <script src="js/mylibs/fullstats/jquery.css-transform.js"></script>
        <script src="js/mylibs/fullstats/jquery.animate-css-rotate-scale.js"></script>
        <script src="js/mylibs/forms/jquery.validate.js"></script>

        <!-- Do not touch! -->
        <script src="js/mango.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/script.js"></script>

        <!-- Your custom JS goes here -->
        <script src="js/app.js"></script>
        <!-- end scripts -->

    </head>

    <body>

        <!-- ----------------- -->
        <!-- Some dialogs etc. -->

        <!-- The loading box -->
        <div id="loading-overlay"></div>
        <div id="loading">
            <span>Loading...</span>
        </div>
        <!-- End of loading box -->

        <!--------------------------------->
        <!-- Now, the page itself begins -->
        <!--------------------------------->

        <!-- The toolbar at the top -->
        <section id="toolbar">
            <div class="container_12">

                <!-- Left side -->
                <div class="left">
                    <ul class="breadcrumb">

                        <li><a href="#">1. Entry</a></li>
                        <li><a href="#">2. Entry</a></li>

                    </ul>
                </div>
                <!-- End of .left -->

                <!-- Right side -->
                <div class="right">
                    <ul>

                        <li><a href="#"><span class="icon i14_admin-user"></span>Blue Button</a></li>
                        <li class="red"><a href="#">Red Button</a></li>

                    </ul>
                </div><!-- End of .right -->

                <div class="phone">

                    <!-- User Link -->
                    <li><a href="#"><span class="icon icon-user"></span></a></li>
                    <!-- Navigation -->
                    <li><a class="navigation" href="#"><span class="icon icon-list"></span></a></li>

                </div>

            </div>
        </section><!-- End of #toolbar -->

        <!-- The header containing the logo -->
        <header class="container_12">
            <a href="#"><img src="img/logo.png" alt="Mango" width="191" height="60"></a>
            <a class="phone-title" href="#"><img src="img/logo-mobile.png" alt="Mango" height="22" width="70" /></a>

            <div class="buttons">
                <a href="#">
                    <span class="icon icon-sitemap"></span>
                    Button
                </a>
            </div>
        </header><!-- End of header -->

        <!-- The container of the sidebar and content box -->
        <div role="main" id="main" class="container_12 clearfix">

            <!-- The blue toolbar stripe -->
            <section class="toolbar">
                <div class="user">
                    <div class="avatar">
                        <img src="img/layout/content/toolbar/user/avatar.png">
                        <span>3</span>
                    </div>
                    <span>Administrator</span>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li class="line"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <ul class="shortcuts">
                    <li>
                        <a href="#"><span class="icon i24_user-business"></span></a>
                    </li>
                </ul>
                <input type="search" data-source="extras/search.php" placeholder="Search..." autocomplete="off">
            </section><!-- End of .toolbar-->

            <!-- The sidebar -->
            <aside>
                <div class="top">

                    <!-- Navigation -->
                    <?php include_once 'frame/menu.php'; ?> 

                </div><!-- End of .top -->
            </aside><!-- End of sidebar -->

            <!-- Here goes the content. -->
            <section id="content" class="container_12 clearfix" data-sort=true>

                <h1 class="grid_12"> Gestionar Grupo</h1>

                <form action="" class="grid_12">
                    <fieldset>
                        <legend>¿Desea crear un idioma nuevo?</legend>
                        <div class="row">
                            <label for="sNombre">
                                <strong>Nombre</strong>
                            </label>
                            <div>
                                <input type="text" placeholder="Agregue un idioma" id="sNombre" />
                            </div>
                        </div>
                        <button href="javascript:void(0);" class="button red block"><span class="icon icon-plus"></span>Agregar nuevo grupo</button>
                    </fieldset><!-- End of fieldset -->
                    <div class="alert success">
                        <span class="icon"></span><span class="close">x</span>
                        <strong>Success!</strong> Now it's working :)
                    </div>
                </form><!-- End of form -->

                <div class="grid_12">
                    <div class="box">

                        <div class="header">
                            <h2>Listas de los idiomas existentes</h2>
                        </div>

                        <div class="content">

                            <table class="styled">
                                <colgroup>
                                    <col span="1" style="width: 500px;">
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
                                    <tr>

                                        <td>grupo 2 </td>
                                        <td class="center">
                                            <a href="#" class="button small grey tooltip" data-gravity=s title="Edit"><i class="icon-pencil"></i></a>
                                            <a href="#" class="button small grey tooltip" data-gravity=s title="Remove"><i class="icon-remove"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div><!-- End of .content -->

                    </div><!-- End of .box -->
                </div><!-- End of .grid_12 -->
            </section><!-- End of #content -->

        </div><!-- End of #main -->

        <!-- The footer -->
        <footer class="container_12">
            <ul class="grid_6">
                <li><a href="#">About</a></li>
                <li><a href="#">Jobs</a></li>
            </ul>

            <span class="grid_6">
                Copyright &copy; 2012 YourCompany
            </span>
        </footer><!-- End of footer -->

        <!-- Spawn $$.loaded -->
        <script>
            $$.loaded();
        </script>

        <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
           chromium.org/developers/how-tos/chrome-frame-getting-started -->
        <!--[if lt IE 7 ]>
        <script defer src=http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->

    </body>
</html>