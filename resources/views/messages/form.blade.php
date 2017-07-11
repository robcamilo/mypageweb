<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}"s>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="../js/jquery.min.js"></script>

    <title>My page Web</title>
</head>
<body>

<div class="content" id="home">
    <div class="wrap">
        <div class="header_style1">
            <!-- start h_logo -->
            <div class="logo">
                <h1><a href="#home">WebLand</a></h1>
            </div>
            <!-- start h_menu -->
            <div class="h_menu">
                <ul class="flexy-menu thick orange">
                    <li> <a href="#home" class="scroll">Inicio</a></li>
                    <li><a href="#Portfolio" class="scroll">Portfolio</a></li>
                    <li><a href="#skills" class="scroll">Habilidades</a> </li>
                    <li><a class="scroll" href="#Experience">Experiencia</a></li>
                    <li><a href="#contact" class="scroll">Contacto</a></li>
                </ul>
            </div>	<!-- end h_menu -->
            <div class="clear"> </div>
        </div>
        <!---------menu-script------------->
        <!-- start menu -->
        <script type="text/javascript" src="../js/flexy-menu.js"></script>
        <link href="../css/header_style1.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
        <!---------end-script-menu------------->
        <div class="slider">
            <!---start-da-slider----->
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2>Gracias por registrate</h2>
                    <p>Nos pondremos en contacto muy pronto!</p>
                    <a style="margin-left: 28%" href="../" class="da-link"><span> Regresa a nuestra pagina</span></a>
                </div>
                <nav class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </nav>
            </div>
            <div class="down-arrow">
                <a href="#group_1" class="scroll" ><span> </span></a>
            </div>
            <link rel="stylesheet" type="text/css" href="../css/slider.css" />
            <script type="text/javascript" src="../js/modernizr.custom.28468.js"></script>
            <script type="text/javascript" src="../js/jquery.cslider.js"></script>
            <script type="text/javascript">
                $(function() {

                    $('#da-slider').cslider({
                        autoplay	: true,
                        bgincrement	: 450
                    });

                });
            </script>
            <!---//End-da-slider----->
        </div>
    </div>
</div>
<!----start-team--------->

<!-- Owl Carousel Assets -->

<div class="footer">
    <div class="wrap">
        <div class="row-content buffer clear-after">
            <section id="top-footer">
                <div class="widget column three"><!-- la class="widget" è forse generata utomaticamente da wp -->
                    <h4>Menu</h4>
                    <ul class="plain">
                        <li> <a href="#home" class="scroll">Inicio</a> </li>
                        <li><a href="#Portfolio" class="scroll">Portfolio</a></li>
                        <li><a href="#skills" class="scroll">Habilidades</a> </li>
                        <li><a class="scroll" href="#Experience">Experiencia</a></li>
                        <li><a href="#contact" class="scroll">Contacto</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="widget column three">
                    <h4>Frameworks y herramientas</h4>
                    <ul class="plain">
                        <li><a href="#"></a></li>
                        <li><a href="#">Laravel, Php</a></li>
                        <li><a href="#">Jquery, Java Script</a></li>
                        <li><a href="#">Docker</a></li>
                        <li><a href="#">Boostrap</a></li>
                        <li><a href="#">Mysql y Postgres</a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="widget column three">
                    <h4>Nuestro Objetivo</h4>
                    <p>Nos dedicamos a satisfacer las necesidades de nuestros clientes, permitiendoles realizar sus sueños y llevar sus negocias a la cima!.</p>
                </div>
                <div class="widget meta-social column three last">
                    <div class="soc_icons soc_icons1">
                        <h4>Siguenos!</h4>
                        <ul>
                            <li><a class="icon1" href="#"> </a> </li>
                            <li><a class="icon2" href="#"> </a></li>
                            <li><a class="icon3" href="#"> </a></li>
                            <div class="clear"> </div>
                    </div>
                </div>
                <div class="clear"> </div>
            </section><!-- top-footer -->

        </div><!-- row-content -->
    </div><!-- row -->
    <div class="copy">
        <p>Realizada por <a href="#home" target="_blank">WebLand: Robert Rodriguez</a></p>
    </div>
    <!-- scroll_top_btn -->
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };


            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>

    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</div>
</body>
</html>
