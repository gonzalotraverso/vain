<?php 
require_once 'classes/Mobile_Detect.php';
$detect = new Mobile_Detect;
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Vain Boutique Hotel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
        <link rel="icon" href="img/icon.ico" type="image/x-icon">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
<?php if ($detect->isMobile()): ?>
        <link rel="stylesheet" href="css/main.mob.css">
<?php else: ?>
        <link rel="stylesheet" href="css/main.css">
<?php endif ?>
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
         <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="preloader-wrapper"><img src="img/preloader.png"></div>
        
<?php if (!$detect->isMobile()): ?>

        <a href="https://www.thebookingbutton.co.uk/properties/vainboutiquedirect" class="book"><span class="book-hover"></span><span class="book-clicked"></span></a>
<?php endif ?>
        
        <header>
            <div class="header-back">
                <div class="header-wrap">
                    <div class="header-logo">
                        <div class="header-logo-wrapper">
                            <div class="crown"></div>
                            <div id="mobile-menu-highlight">
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <nav>
                        <ul>
                            <li><p data-to="section-2" id="to-section-2"><span class="menu-diamond"></span>HOTEL</p></li>
                            <li><p data-to="section-3" id="to-section-3"><span class="menu-diamond"></span>SERVICES</p></li>
                            <li><p data-to="section-4" id="to-section-4"><span class="menu-diamond"></span>EVENTS</p></li>
                            <li><p data-to="section-5" id="to-section-5"><span class="menu-diamond"></span>ROOMS</p></li>
                            <li><p data-to="section-6" id="to-section-6"><span class="menu-diamond"></span>RATES</p></li>
                            <li><p data-to="section-7" id="to-section-7"><span class="menu-diamond"></span>PRESS/CONTACT</p></li>
                        </ul>
                    </nav>
                    <div class="language-options">
                        <a href="" class="lang" id="green">
                            <span class="lang-hover"></span>
                            <span class="lang-visited"></span>
                        </a>
                        <a href="" class="lang" id="first-lang">
                            <span class="lang-hover"></span>
                            <span class="lang-visited"></span>
                        </a>
                        <a href="" class="lang" id="sec-lang">
                            <span class="lang-hover"></span>
                            <span class="lang-visited"></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="beinggreen">
            <div class="beinggreen-wrapper">
                <h3><span class="green-icon"></span>BEING<span class="bold-text">GREEN</span><span class="italic"> &amp; VAIN</span></h3>
                <a href="" id="close-green"><span class="bold-text">X</span> CLOSE</a>
                <p><span class="light">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creaci&oacute;n de las hojas &quot;Letraset&quot;, las cuales contenian pasajes de Lorem Ipsum, y m&aacute;s recientemente.</span></p>
            </div>
        </div>
        <div id="section-wrapper">
            <section class="home article section" id="section-1">
                <?php if (!$detect->isMobile()): ?>
                    
                <ul class="home-slider">
                    <li><div class="outer"><div class="inner"><img src="img/Home_1.jpg"></div></div></li>
                    <li><div class="outer"><div class="inner"><img src="img/Home_2.jpg"></div></div></li>
                    <li><div class="outer"><div class="inner"><img src="img/Home_3.jpg"></div></div></li>
                    <li><div class="outer"><div class="inner"><img src="img/Home_4.jpg"></div></div></li>
                    <li><div class="outer"><div class="inner"><img src="img/Home_5.jpg"></div></div></li>
                </ul>
                <?php endif ?>
                <div class="article-padding">
                    <div class="home-relative">
                        <div class="home-center">
                            <div class="article-relative">
                                <div class="top-left-diamond diamond">
                                    <div class="top-left-social">
                                        <a href="https://www.facebook.com/vainboutiquehotel" class="home-facebook social-icon">
                                            <span class="icon-hover"></span>
                                            <span class="icon-visited"></span>
                                        </a>
                                        <a href="" class="home-skype social-icon">
                                            <span class="icon-hover"></span>
                                            <span class="icon-visited"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="top-right-diamond diamond">
                                    <p><span>Thames 2226 &nbsp;&nbsp;&bull;&nbsp;&nbsp; Palermo</span><br>
                                        Bs. As. &nbsp;&nbsp;&bull;&nbsp;&nbsp; Argentina</p>
                                </div>
                                <div class="bottom-left-diamond diamond">
                                    <p><span>+54 11 4776 8246 (VAIN)</span><br>info@vainuniverse.com</p>
                                </div>
                                <div class="bottom-right-diamond diamond">
                                    <div class="bottom-right-social">
                                        <a href="http://www.tripadvisor.com.ar/Hotel_Review-g312741-d656301-Reviews-Vain_Boutique_Hotel-Buenos_Aires_Capital_Federal_District.html" class="home-trip social-icon">
                                            <span class="icon-hover"></span>
                                            <span class="icon-visited"></span>
                                        </a>
                                        <a href="" class="home-eco social-icon">
                                            <span class="icon-hover"></span>
                                            <span class="icon-visited"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="coronita-wrap">
                                    <div class="coronita"></div>
                                </div>
                                <img src="img/welcome-to-vain.png" alt="Welcome to Vain boutique hotel." class="welcome">
                                <div class="scroll-arrow-wrap">
                                    <div class="scroll-small"></div>
                                    <div class="scroll-big"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-end" id="section-1-end"></div>
                </div>
            </section>
            <section class="hotel article section" id="section-2">
                <div class="article-padding">
                    <div class="hotel-padding">
                        <div class="hotel-wrapper">
                            <div class="article-relative">
                                <div class="hotel-info-wrap">
                                    <h2><span>VAIN</span> BOUTIQUE HOTEL</h2>
                                    <div class="hotel-bullet-wrap">
                                        <div class="hotel-bullet"></div>
                                    </div>
                                    <h3>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </h3><br>
                                    <p> Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original.<br>
                                        <br><span>&quot;Tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original.&quot;</span></p>
                                    <ul>
                                        <li><img src="img/ten-rivers.png"></li>
                                        <li><img src="img/bs-ciudad.png"></li>
                                        <li><img src="img/fodors.png"></li>
                                        <li><img src="img/time-out.png"></li>
                                        <li><img src="img/lonely-planet.png"></li>
                                       <!--  <li><img src="img/hoteles-bsas.png"></li> -->
                                        <li><img src="img/smalls-hotels.png"></li>
                                    </ul>
                                </div>
                                <div class="hotel-gallery">
                                    <div class="opt-links">
                                        <div id="opt-fachade" class="opt-top slider-option  active-opt loaded" data-rec="options-fachade" data-duration="600"></div>
                                        <div id="opt-leisure" class="opt-top slider-option " data-rec="options-leisure" data-duration="500"></div>
                                        <div id="opt-rooms" class="opt-top slider-option " data-rec="options-rooms" data-duration="400"></div>
                                        <div id="opt-bar" class="opt-bottom slider-option " data-rec="options-bar" data-duration="400"></div>
                                        <div id="opt-patio" class="opt-bottom slider-option " data-rec="options-patio" data-duration="500"></div>
                                        <div id="opt-terrace" class="opt-bottom slider-option " data-rec="options-terrace" data-duration="600"></div>
                                    </div>
                                    <div class="slider-options" id="options-fachade" data-left="148" data-top="0" data-duration="600">
                                        <div class="options-relative">
                                            <div class="options-dark"></div>
                                            <div class="options-diamond"></div> 
                                        </div>
                                    </div>
                                     <div class="slider-options" id="options-leisure" data-left="74" data-top="74" data-duration="500">
                                        <div class="options-relative">
                                            <div class="options-dark"></div>
                                            <div class="options-diamond"></div>
                                        </div>
                                    </div>
                                   <div class="slider-options" id="options-rooms" data-left="0" data-top="148" data-duration="400">
                                        <div class="options-relative">
                                            <div class="options-dark"></div>
                                            <div class="options-diamond"></div>
                                        </div>
                                    </div>
                                    <div class="slider-options options-bottom" id="options-bar" data-left="0" data-top="299" data-duration="400">
                                        <div class="options-relative">
                                            <div class="options-dark"></div>
                                            <div class="options-diamond"></div>
                                        </div>
                                    </div>
                                    <div class="slider-options options-bottom" id="options-patio" data-left="74" data-top="373" data-duration="500">
                                        <div class="options-relative">
                                            <div class="options-dark"></div>
                                            <div class="options-diamond"></div>
                                        </div>
                                    </div>
                                    <div class="slider-options options-bottom" id="options-terrace" data-left="148" data-top="447" data-duration="600">
                                        <div class="options-relative">
                                            <div class="options-dark"></div>
                                            <div class="options-diamond"></div>
                                        </div>
                                    </div> 
                                    <div class="slider-padding">
                                        <div id="slider-arrow-left" class="slider-arrows"></div>
                                        <div id="slider-arrow-right" class="slider-arrows"></div>
                                        <div class="hotel-slider">
                                            <div class="hotel-slider-reangle">
                                                <div id="slider-fachade" class="active-slide option-gallery">
                                                    <ul>
                                                        <li><a class="fancybox" rel="hotel-fachade" href="img/fullsize/vain-fachada01.JPG"><img src="img/hotel/vain-fachada01.jpg" style="height: 430px; width: 443px"></a></li>
                                                        <li><a class="fancybox" rel="hotel-fachade" href="img/fullsize/vain-fachada02.JPG"><img src="img/hotel/vain-fachada02.jpg" style="height: 443px; width: 440px;"></a></li>
                                                    </ul>
                                                </div>
                                                <div id="slider-leisure" class="option-gallery">
                                                    
                                                </div>
                                                <div id="slider-rooms" class="option-gallery">
                                                    
                                                </div>
                                                <div id="slider-bar" class="option-gallery">
                                                    
                                                </div>
                                                <div id="slider-patio" class="option-gallery">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-arrow-wrap">
                        <div class="scroll-small"></div>
                        <div class="scroll-big"></div>
                    </div>
                    <div class="article-end" id="section-2-end"></div>
                </div>
            </section>
            <section class="services article section" id="section-3">
                <div class="article-padding">
                    <div class="services-wrapper">
                        <div class="services-sections" id="in-house-wrap">
                            <div class="services-left">
                                <h4><span class="services-bullet"></span><span class="bold-text">IN</span> HOUSE</h4><br><br>
                                <p><span>Check-In: <span class="bold-text">1:30 PM</span> </p><br> 
                                <p>Check-Out: <span class="bold-text">11 AM</span> </span></p><br> 
                                <p>&gt; Lorem Ipsum es simplemente. </p><br> 
                                <p>&gt; El texto de relleno de las imprentas. </p><br> 
                                <p>&gt; Archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar. </p><br> 
                                <p>&gt; De las industrias desde el a&ntilde;o 1500. </p><br> 
                                <p>&gt; Cuando un impresor. </p><br> 
                            </div>
                            <div class="services-right">
                                <p>&gt; Tal manera que logr&oacute; hacer un libro de textos especimen. </p><br> 
                                <p>&gt; No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien. </p><br> 
                            </div>
                        </div>
                        <div class="services-sections" id="external-wrap">
                            <div class="services-left">
                                <h4><span class="services-bullet"></span><span class="bold-text">IN</span> HOUSE</h4><br><br>
                                <p><span>Check-In: <span class="bold-text">1:30 PM</span> </p><br> 
                                <p>Check-Out: <span class="bold-text">11 AM</span> </span></p><br> 
                                <p>&gt; Lorem Ipsum es simplemente. </p><br> 
                                <p>&gt; El texto de relleno de las imprentas. </p><br> 
                                <p>&gt; Archivos de texto. Lorem Ipsum ha sido el texto de relleno est&aacute;ndar. </p><br> 
                                <p>&gt; De las industrias desde el a&ntilde;o 1500. </p><br> 
                                <p>&gt; Cuando un impresor. </p><br> 
                            </div>
                            <div class="services-right">
                                <p>&gt; Tal manera que logr&oacute; hacer un libro de textos especimen. </p><br> 
                                <p>&gt; No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien. </p><br> 
                            </div>
                        </div>
                    </div>
                    <div class="scroll-arrow-wrap">
                        <div class="scroll-small"></div>
                        <div class="scroll-big"></div>
                    </div>
                    <div class="article-end" id="section-3-end"></div>
                </div>
            </section>
            <section class="events article section" id="section-4">
                <div class="article-padding">
                    <div class="events-wrap">
                        <div class="events-items" id="corporate-wrap">
                            <div class="events-gallery">
                                <ul>
                                    <li><a class="fancybox" rel="events-corporate" href="img/fullsize/vain-bar01.JPG"><img src="img/events/corporate01.jpg" style="height: 610px; width: 318px"></a></li>
                                </ul>
                            </div>
                            <div class="events-item-info">
                                <div class="events-gallery-controls" id="pitito">
                                    
                                </div>
                                <!-- <div class="events-gallery-controls gen-slides-controls">
                                    <ul data-gallery="gallery-corporate">
                                        <li class="gc-left-wrap"><div class="gen-controls gc-left"><span></span></div></li>
                                        <li class="gc-right-wrap"><div class="gen-controls gc-right"><span></span></div></li>
                                    </ul>
                                </div> -->
                                <div class="events-info">
                                    <h4><span class="services-bullet"></span>&nbsp;&nbsp;CORPORATE</h4>
                                    <p>&gt; Meeting Room</p>
                                        <p>&gt; Video Conference</p>
                                        <p>&gt; Technological equipment rental</p>
                                        <p>&gt; Breakfasts, Lunches, Cofee Breaks, Brunchs, etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="events-items" id="social-wrap">
                            <div class="events-gallery">
                                <ul>
                                    <li><a class="fancybox" rel="events-social" href="img/fullsize/vain-bar02.JPG"><img src="img/events/social01.jpg" style="height: 610px; width: 324px"></a></li>
                                </ul>
                            </div>
                            <div class="events-item-info">
                                <div class="events-gallery-controls"></div>
                                <div class="events-info">
                                    <h4><span class="services-bullet"></span>&nbsp;&nbsp;SOCIAL <span>EVENTS</span></h4>
                                    <p>&gt; Meeting Room</p>
                                        <p>&gt; Video Conference</p>
                                        <p>&gt; Technological equipment rental</p>
                                        <p>&gt; Breakfasts, Lunches, Cofee Breaks, Brunchs, etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="events-items" id="wedding-wrap">
                            <div class="events-gallery">
                                <ul>
                                    <li><a class="fancybox" rel="events-weddings" href="img/fullsize/vain-habitacion05.jpg"><img src="img/events/wedding01.jpg" style="height: 610px; width: 333px"></a></li>
                                </ul>
                            </div>
                            <div class="events-item-info">
                                <div class="events-gallery-controls"></div>
                                <div class="events-info">
                                    <h4><span class="services-bullet"></span>&nbsp;&nbsp;WEDDING <span>NIGHT</span></h4>
                                    <p>&gt; Meeting Room</p>
                                        <p>&gt; Video Conference</p>
                                        <p>&gt; Technological equipment rental</p>
                                        <p>&gt; Breakfasts, Lunches, Cofee Breaks, Brunchs, etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-end" id="section-4-end"></div>
                </div>
            </section>
            <section class="rooms article section" id="section-5">
                <div class="article-padding">
                    <div class="rooms-wrap">
                        <div class="room-wrapper top-room" id="vroom">
                            <div class="room-badge" id="vbadge"></div>
                            <div class="room">
                                <div class="room-gallery">
                                    <ul>
                                        <li><a class="fancybox" rel="rooms-v" href="img/fullsize/vain-habitacion01.jpg"><img src="img/rooms/vroom01.jpg" style="height: 374px; width: 672px"></a></li>
                                        <li><a class="fancybox" rel="rooms-v" href="img/fullsize/vain-habitacion02.jpg"><img src="img/rooms/vroom02.jpg" style="height: 356px; width: 672px"></a></li>
                                        <?php if (!$detect->isMobile()): ?>
                                        <li><a class="fancybox" rel="rooms-v" href="img/fullsize/vain-habitacion03.jpg"><img src="img/rooms/vroom03.jpg" style="height: 360px; width: 672px"></a></li>
                                        <li><a class="fancybox" rel="rooms-v" href="img/fullsize/vain-habitacion04.jpg"><img src="img/rooms/vroom04.jpg" style="height: 368px; width: 672px"></a></li>
                                        <li><a class="fancybox" rel="rooms-v" href="img/fullsize/vain-habitacion05.jpg"><img src="img/rooms/vroom05.jpg" style="height: 360px; width: 672px"></a></li>
                                        <li><a class="fancybox" rel="rooms-v" href="img/fullsize/vain-habitacion09.jpg"><img src="img/rooms/vroom06.jpg" style="height: 362px; width: 672px"></a></li>
                                        <li><a class="fancybox" rel="rooms-v" href="img/fullsize/vain-habitacion10.jpg"><img src="img/rooms/vroom07.jpg" style="height: 368px; width: 672px"></a></li>
                                        <li><a class="fancybox" rel="rooms-v" href="img/fullsize/vain-habitacion13.jpg"><img src="img/rooms/vroom08.jpg" style="height: 368px; width: 672px"></a></li>
                                        <?php endif ?>
                                    </ul>
                                </div>
                                <div class="room-info">
                                    <div class="room-gallery-controls"></div>
                                    <div class="room-info-info">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;V<span> ROOM</span></h4><br>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-wrapper top-room" id="aroom">
                            <div class="room-badge" id="abadge"></div>
                            <div class="room">
                                <div class="room-gallery">
                                    <ul>
                                        <li><a class="fancybox" rel="rooms-a" href="img/fullsize/vain-habitacion06.jpg"><img src="img/rooms/aroom01.jpg" style="height: 378px; width: 672px"></a></li>
                                    </ul>
                                </div>
                                <div class="room-info">
                                    <div class="room-gallery-controls"></div>
                                    <div class="room-info-info">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;A<span> ROOM</span></h4><br>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-wrapper bottom-room" id="iroom">
                            <div class="room-badge" id="ibadge"></div>
                            <div class="room">
                                <div class="room-gallery">
                                    <ul>
                                        <li><a class="fancybox" rel="rooms-i" href="img/fullsize/vain-habitacion07.jpg"><img src="img/rooms/iroom01.jpg" style="height: 425px; width: 672px"></a></li>
                                        <li><a class="fancybox" rel="rooms-i" href="img/fullsize/vain-habitacion08.jpg"><img src="img/rooms/iroom02.jpg" style="height: 362px; width: 672px"></a></li>
                                    </ul>
                                </div>
                                <div class="room-info">
                                    <div class="room-gallery-controls"></div>
                                    <div class="room-info-info">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;I<span> ROOM</span></h4><br>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-wrapper bottom-room" id="nroom">
                            <div class="room-badge" id="nbadge"></div>
                            <div class="room">
                                <div class="room-gallery">
                                    <ul>
                                        <li><a class="fancybox" rel="rooms-n" href="img/fullsize/vain-habitacion11.jpg"><img src="img/rooms/nroom01.jpg" style="height: 360px; width: 672px"></a></li>
                                    </ul>
                                </div>
                                <div class="room-info">
                                    <div class="room-gallery-controls"></div>
                                    <div class="room-info-info">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;N<span> ROOM</span></h4><br>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-arrow-wrap">
                        <div class="scroll-small"></div>
                        <div class="scroll-big"></div>
                    </div>
                    <div class="article-end" id="section-5-end"></div>
                </div>
            </section>
            <section class="rates article section" id="section-6">
                <div class="article-padding">
                    <div class="rates-cont">
                        <div class="rates-wrapper">
                            <ul>
                                <li>
                                    <div class="outer-rate left-rate">
                                        <h3><span class="rates-diamond-title"></span>&nbsp;&nbsp;&nbsp;V<span>ROOM</span>&nbsp;&nbsp;&nbsp;<span class="rates-diamond-title"></span></h3>
                                        <p>USD<span class="bold-text">248</span><span class="pink">*</span></p>
                                        <a href=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner-rate left-rate">
                                        <h3><span class="rates-diamond-title"></span>&nbsp;&nbsp;&nbsp;A<span>ROOM</span>&nbsp;&nbsp;&nbsp;<span class="rates-diamond-title"></span></h3>
                                        <p>USD<span class="bold-text">224</span><span class="pink">*</span></p>
                                        <a href=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner-rate right-rate">
                                        <h3><span class="rates-diamond-title"></span>&nbsp;&nbsp;&nbsp;I<span>ROOM</span>&nbsp;&nbsp;&nbsp;<span class="rates-diamond-title"></span></h3>
                                        <p>USD<span class="bold-text">190</span><span class="pink">*</span></p>
                                        <a href=""></a>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="outer-rate right-rate">
                                        <h3><span class="rates-diamond-title"></span>&nbsp;&nbsp;&nbsp;N<span>ROOM</span>&nbsp;&nbsp;&nbsp;<span class="rates-diamond-title"></span></h3>
                                        <p>USD<span class="bold-text">156</span><span class="pink">*</span></p>
                                        <a href=""></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="small-print">
                                <p>(<span class="pink">*</span>) These rates are per room and per night, expressed in US dollars and do not include taxes - 21%. <br>
                                    <span class="light">Extra beds - only available in A and V categories - will have a charge of USD 60 + takes per night.</span></p>
                            </div>
                            <div class="nonrefundable-rates">
                                <a href=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-arrow-wrap">
                        <div class="scroll-small"></div>
                        <div class="scroll-big"></div>
                    </div>
                    <div class="article-end" id="section-6-end"></div>
                </div>
            </section>
            <section class="contact article section" id="section-7">
                <div class="article-padding">
                    <div class="contact-cont">
                        <div class="contact-wrapper">
                            <h1><span class="light">PRESS/</span>CONTACT</h1>
                            <div class="cont-bull">
                                <div class="hotel-bullet"></div>
                            </div>
                            <div class="form-info-wrap">
                                <div class="contact-info">
                                    <a href="" class="titles" id="blog"><span id="img-blog"></span>&nbsp;&nbsp; VISIT OUR BLOG <span id="cont-arr-top"></span></a>
                                    <div class="downloads">
                                        <p class="titles"><span id="img-dld"></span>&nbsp;&nbsp; DOWNLOADS <span id="cont-arr-bot"></span></p>
                                        <ul>
                                            <li><a href="">&gt; FACT SHEET</a></li>
                                            <li><a href="">&gt; PHOTOS</a></li>
                                            <li><a href="">&gt; LOGO</a></li>
                                            <li><a href="">&gt; VIDEO</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-left">
                                        <div class="input-wrapper"><input type="text" placeholder="Name"></div>
                                        <div class="input-wrapper"><input type="email" placeholder="E-mail"></div>
                                        <div class="input-wrapper"><input type="text" placeholder="Subject"></div>
                                    </div>
                                    <div class="form-right">
                                        <textarea placeholder="Message"></textarea>
                                        <div class="submit-wrapper">
                                            <input type="submit" value="SEND >">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="map_canvas"></div>
                    <footer>
                        <div class="footer-top"></div>
                        <div class="footer-info-wrapper">
                            <div class="footer-info">
                                <div class="footer-left">
                                    <img src="img/footer-logo.png">
                                    <p>VAIN BOUTIQUE HOTEL</p>
                                    <p><span class="light">Palermo / Buenos Aires / Argentina</span></p>
                                </div>
                                <div class="footer-right">
                                    <ul>
                                        <li>
                                            <a href="http://www.tripadvisor.com.ar/Hotel_Review-g312741-d656301-Reviews-Vain_Boutique_Hotel-Buenos_Aires_Capital_Federal_District.html" class="social-icon footer-trip">
                                                <span class="icon-hover"></span>
                                                <span class="icon-visited"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="social-icon footer-eco">
                                                <span class="icon-hover"></span>
                                                <span class="icon-visited"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/vainboutiquehotel" class="social-icon footer-fb">
                                                <span class="icon-hover"></span>
                                                <span class="icon-visited"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="social-icon footer-sky">
                                                <span class="icon-hover"></span>
                                                <span class="icon-visited"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <p><span class="footer-icons" id="house"></span><span class="light">&nbsp;&nbsp; Thames</span> 2226</p>
                                    <p><span class="footer-icons" id="phone"></span><span class="light">&nbsp;&nbsp; +54 11 </span>4776-8246 <span class="light">(VAIN)</span></p>
                                    <p><span class="footer-icons" id="mail"></span>&nbsp;&nbsp; info@vainuniverse.com</p>
                                </div>
                            </div>
                        </div>
                        <div id="footing-footer">
                            <p><span class="light">www.</span><span class="bold-text">vainuniverse</span><span class="light">.com</span></p>
                        </div>
                    </footer>
                    <div class="article-end" id="section-7-end"></div>
                </div>
            </section>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>

<?php if (!$detect->isMobile()): ?>
        <script src="js/jquery.mousewheel.min.js"></script>
        <script src="js/main.js"></script>
<?php else: ?>
        <script src="js/mobile.js"></script>
<?php endif ?>

        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>/*
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');*/
        </script>

        <script type="text/javascript">
            //<![CDATA[
            function initialize() {
            
            var map_canvas = document.getElementById('map_canvas');
            var map_options = {
              center: new google.maps.LatLng(-34.5848,-58.426303),
              zoom: 15,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(map_canvas, map_options)
            var iconBase = 'http://localhost/vain/img/';
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(-34.5848,-58.426303),
              map: map,
              icon: {url: iconBase + 'marker.png', anchor: new google.maps.Point(16, 34)},
              //shadow: iconBase + 'schools_maps.shadow.png'
            });
          }
          google.maps.event.addDomListener(window, 'load', initialize);
            $(window).load(function() { // makes sure the whole site is loaded
                $(".preloader-wrapper").fadeOut("slow"); // will fade out the white DIV that covers the website.
<?php if (!$detect->isMobile()): ?>
                $('.top-left-diamond').delay(400).animate({left:'-90px', top:'25px', opacity: 1}, 400); // home effects
                $('.bottom-right-diamond').delay(400).animate({left:'400px', top:'288px', opacity: 1}, 400);
<?php endif ?>
               
            });
        //]]>
        </script>
    </body>
</html>
