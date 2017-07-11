<!DOCTYPE HTML>
<html lang="{{ config('app.locale') }}">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.min.js"></script>

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
        <script type="text/javascript" src="js/flexy-menu.js"></script>
        <link href="css/header_style1.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
        <!---------end-script-menu------------->
        <div class="slider">
            <!---start-da-slider----->
            <div id="da-slider" class="da-slider">
                <div class="da-slide">
                    <h2>Desarrollo Web a tu medida</h2>
                    <p>Realizamos lo que buscas & a tu gusto!</p>
                    <a href="#contact" class="da-link"><span> Contactanos</span></a>
                </div>
                <div class="da-slide">
                    <h2>Haz crecer tu Negocio</h2>
                    <p>LLeva tus sueños a otro Nivel!</p>
                    <a href="#contact" class="da-link"><span> Contactanos</span></a>
                </div>
                <nav class="da-arrows">
                    <span class="da-arrows-prev"></span>
                    <span class="da-arrows-next"></span>
                </nav>
            </div>
            <div class="down-arrow">
                <a href="#group_1" class="scroll" ><span> </span></a>
            </div>
            <link rel="stylesheet" type="text/css" href="css/slider.css" />
            <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
            <script type="text/javascript" src="js/jquery.cslider.js"></script>
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
<div class="group_1" id="group_1">
    <div class="group_1-items">
        <div class="wrap">
            <div id="owl-demo" class="owl-carousel">
                <div class="item">
                    <div class="carousel">
                        <div class="group_1_img">
                            <h3 class="ui fontend">BOOSTRAP</h3>
                            <h4 class="ux ui1" style="font-size: 31px">HTML5</h4>
                            <div class="clear"> </div>
                        </div>
                        <div class="group_1_text">
                            <h3>Sitios web adaptables a todos los dispositivos del mercado</h3>
                            <p>Es imprescindible que los usuarios puedan navegar tu sitio sin ningún problema en cualquier dispositivo. Es por eso que nos preocupamos por prestar atención a este detalle para brindar la mejor experiencia online.</p>
                        </div>
                        <div class="clear"> </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel">
                        <div class="group_1_img ">
                            <h3 class="ui core" style="font-size: 27px">LARAVEL</h3>
                            <h4 class="ux ui1" style="font-size: 25px">AUNGULAR</h4>
                            <div class="clear"> </div>
                        </div>
                        <div class="group_1_text">
                            <h3>Sitios web administrables.</h3>
                            <p>Permite actualizar el contenido de tu página web sin necesidad de tener conocimientos informáticos avanzados, y sin pagarle a un webmaster.</p>
                        </div>
                        <div class="clear"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="group_2" id="Portfolio">
    <h3 class="heading">Portfolio</h3>
    <div class="group_2_items">
        <div class="wrap">
            <div id="owl-demo1" class="owl-carousel">
                <div class="item" >
                    <div class="carousel">
                        <div class="group_2_img1">
                            <img src="images/img1.png" alt="">
                        </div>
                        <div class="group_2_text2">
                            <div class="desc">
                                <h3>cliente</h3>
                                <h4>Apple</h4>
                            </div>
                            <div class="desc">
                                <h3>Role del proyecto</h3>
                                <h4>Diseñador lider</h4>
                            </div>
                            <div class="desc">
                                <h3>Contenido del proyecto</h3>
                                <h4>Mobile & interfaz web</h4>
                            </div>
                            <div class="button_2">
                                <a href="#">Ver más</a>
                            </div>
                        </div>
                        <div class="clear"> </div>
                        <div class="brows_button_3">
                            <a href="#">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel">
                        <div class="group_2_img1">
                            <img src="images/img2.jpg" alt="">
                        </div>
                        <div class="group_2_text2">
                            <div class="desc">
                                <h3>cliente</h3>
                                <h4>Nestle</h4>
                            </div>
                            <div class="desc">
                                <h3>Role del proyecto</h3>
                                <h4>Director en diseño web</h4>
                            </div>
                            <div class="desc">
                                <h3>Contenido del proyecto</h3>
                                <h4>Desarrollo fornt-end y back-end </h4>
                            </div>
                            <div class="button_2">
                                <a href="#">Ver más</a>
                            </div>
                        </div>
                        <div class="clear"> </div>
                        <div class="brows_button_3">
                            <a href="#">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel">
                        <div class="group_2_img1">
                            <img src="images/img3.jpg" alt="">
                        </div>
                        <div class="group_2_text2">
                            <div class="desc">
                                <h3>cliente</h3>
                                <h4>Banco BBVA</h4>
                            </div>
                            <div class="desc">
                                <h3>Role del Proyecto</h3>
                                <h4>Lider Tecnico</h4>
                            </div>
                            <div class="desc">
                                <h3>Contenido del proyecto</h3>
                                <h4>Desarrollo plataforma administrativa</h4>
                            </div>
                            <div class="button_2">
                                <a href="#">Ver más</a>
                            </div>
                        </div>
                        <div class="clear"> </div>
                        <div class="brows_button_3">
                            <a href="#">Ver Proyecto</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<!-- Prettify -->
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoPlay : true,
            navigation : true,
            navigationText : ["",""],
            rewindNav :true,
            scrollPerPage :true,
            pagination : true,
            paginationNumbers: false,
        });

    });
    $(document).ready(function() {

        $("#owl-demo1").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoPlay : true,
            navigation : true,
            navigationText : ["",""],
            rewindNav : true,
            scrollPerPage :true,
            pagination : false,
            paginationNumbers: false,
        });

    });
    $(document).ready(function() {

        $("#owl-demo2").owlCarousel({
            items : 1,
            lazyLoad : true,
            autoPlay : true,
            navigation : false,
            navigationText : ["",""],
            rewindNav : false,
            scrollPerPage :true,
            pagination : false,
            paginationNumbers: false,
        });

    });
</script>
<!-- //Owl Carousel Assets -->
<div class="skills" id="skills">
    <section class="text-light">
        <div  class="wrap">
            <div class="row-content1">
                <h3 class="heading">Habilidades</h3>
                <p class="para">Soy un desarrollador web con diferentes habilidades y herramientas que permiten obtener resultados excelentes y adecuados a sus peticiones. Mi objetivo es poder satisfacer la necesidades de mis clientes permitiendo que sus sueños y Negocios lleguen a otro nivel de exito!</p>
                <div class="chart" data-percent="73" data-bar-color="#35AFBA" data-animate="4000">
                    <div class="chart-content">
                        <div class="percent"></div>
                        <div class="chart-title">Back-end</div>
                    </div><!-- chart-content -->
                </div><!-- chart -->
                <div style="margin-left: 3px" class="chart" data-percent="85" data-bar-color="#FF6060" data-animate="2500">
                    <div class="chart-content">
                        <div class="percent"></div>
                        <div class="chart-title">Front-end</div>
                    </div><!-- chart-content -->
                </div><!-- chart -->
                <div style="margin-left: 3px" class="chart" data-percent="70" data-bar-color="#3AD079" data-animate="3000">
                    <div class="chart-content">
                        <div class="percent"></div>
                        <div class="chart-title">Bases de datos</div>
                    </div><!-- chart-content -->
                </div><!-- chart -->
                <div style="margin-left: 3px" class="chart" data-percent="40" data-bar-color="#58C0E3" data-animate="3500">
                    <div class="chart-content">
                        <div class="percent"></div>
                        <div class="chart-title">Servidores</div>
                    </div><!-- chart-content -->
                </div><!-- chart -->
                <div class="clear"> </div>
            </div>
        </div>
    </section>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
</div>
<div class="exper" id="Experience">
    <div class="wrap">
        <h3 class="heading">Experiencia</h3>
        <section class="row section">
            <div class="row-content2">
                <div class="timeline-label column six">
                    <h4>Experiencia de trabajo</h4>
                    <p>Especialidades : Experiencia de usuario, diseño de interfaz de usuario, identidad de marca, sitios administrables, estándares web, diseño responsive</p>
                    <div class="brows_button_4">
                        <a href="#">Encuentranos en Linkedin</a>
                    </div>
                </div><!-- timeline-label -->
                <div class="timeline column six last">
                    <div class="year">
                        <time datetime="2013">2013</time>
                        <div class="experience">
                            <span class="circle"></span>
                            <div class="experience-img"><img src="images/asset01.jpg" alt=""></div>
                            <div class="experience-info clear-after">
                                <h5>Facebook</h5>
                                <div class="role">UI/UX Designer</div>
                                <p>October 2013 – November 2013 (2 months)Menlo Park, CA, United States of America</p>
                            </div><!-- experience-info -->
                        </div><!-- experience -->
                        <div class="experience">
                            <span class="circle"></span>
                            <div class="experience-img"><img src=" images/asset02.jpg" alt=""></div>
                            <div class="experience-info clear-after">
                                <h5>Amazon</h5>
                                <div class="role">UI/UX Designer</div>
                                <p>October 2013 – November 2013 (2 months)Menlo Park, CA, United States of America</p>
                            </div><!-- experience-info -->
                        </div><!-- experience -->
                    </div><!-- year -->
                    <div class="year year1">
                        <time datetime="2012">2012</time>
                        <div class="experience">
                            <span class="circle"></span>
                            <div class="experience-img"><img src="images/asset03.jpg" alt=""></div>
                            <div class="experience-info clear-after">
                                <h5>Apple</h5>
                                <div class="role">UI/UX Designer</div>
                                <p>October 2013 – November 2013 (2 months)Menlo Park, CA, United States of America</p>
                            </div><!-- experience-info -->
                        </div><!-- experience -->
                        <div class="experience">
                            <span class="circle"></span>
                            <div class="experience-img"><img src="images/asset04.jpg" alt=""></div>
                            <div class="experience-info clear-after">
                                <h5>IBM</h5>
                                <div class="role">UI/UX Designer</div>
                                <p>October 2013 – November 2013 (2 months)Menlo Park, CA, United States of America</p>
                            </div><!-- experience-info -->
                        </div><!-- experience -->
                    </div><!-- year -->
                </div><!-- timeline -->
                <div class="clear"> </div>
            </div>
        </section>
    </div>
</div>
<div class="group_3">
    <div class="group_3-items">
        <div class="wrap">
            <div id="owl-demo2" class="owl-carousel">
                <div class="item" >
                    <div class="carousel">
                        <div class="group_3_img">
                            <img src="images/img.png" alt="">
                        </div>
                        <div class="group_1_text group_3_text">
                            <h3> Robert Rodriguez</h3>
                            <p>Ingeniero electrónico y desarrollador de Software, con excelentes relaciones interpersonales, y aptitudes de liderazgo con actitud de servicio a los grupos y proyectos que pertenece.</p>
                        </div>
                        <div class="clear"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact" id="contact">
    <div class="wrap">
        <h3 class="heading">Contacto</h3>
        <form action="messages/form" method="post">
            <div class="left-form">
                {{ csrf_field() }}
                <ul>
                    <li class="name">
                        <a href="#" class="icon user"> </a>
                        <input name="name" type="text" placeholder="Nombre usuario" required>
                        <div class="clear"> </div>
                    </li>
                    <li class="email">
                        <a href="#" class="icon mail"> </a>
                        <input name="email" type="email" placeholder="Correo" required>
                        <div class="clear"> </div>
                    </li>
                    <div class="clear"> </div>
                    <li>
                        <input name="phone" type="text" placeholder="Telefono" required>
                        <div class="clear"> </div>
                    </li>
                    <li>
                        <textarea name="message" class="plain buffer" placeholder="Cuentanos un poco mas y te contactaremos!"></textarea>
                        <div class="clear"> </div>
                    </li>
                    {{--@if($errors->has('message'))
                        @foreach($errors->get('message') as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif--}}

                    <div class="send">
                        <input type="submit"> </input>
                    </div>
                </ul>
            </div>
            <div class="right-form">
                <h4>Contactanos!</h4>
                <p>Escribenos y te contactaremos lo antes posible!</p>
                <div class="soc_icons">
                    <h4>SIGUENOS!</h4>
                    <ul>
                        <li><a class="icon1" href="#"> <span>Facebook</span> </a>  </li>
                        <li><a class="icon2" href="#"><span>Twitter</span></a></li>
                        <li><a class="icon3" href="#"><span>Google+</span></a></li>
                        <li><a class="icon4" href="#"><span>Linkedin</span></a></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
            </div>
            <div class="clear"> </div>
        </form>
    </div>
</div>
<div class="contact-map">
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/?ie=UTF8&amp;ll=4.60971,-74.08175&amp;spn=3.803105,6.696167&amp;t=m&amp;z=8&amp;output=embed"></iframe>
</div>
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
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
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
