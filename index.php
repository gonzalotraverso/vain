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
        <div id="fixed-location" >
            <div id="fixed-location-left">
                <div id="fixed-location-left-content">
                    <?php $datetime = new DateTime; // current time = server time
$otherTZ  = new DateTimeZone('America/Argentina/Buenos_Aires');
$datetime->setTimezone($otherTZ); 
$time = $datetime->format('H:i');?>
                    <h3><span id="fixed-location-diamond"></span>Vain Boutique Hotel</h3>
                    <p>PALERMO * Buenos Aires * Argentina</p><br>
                    <p>THAMES 2226 | Te. (5411) 4776-8246 (VAIN)<br>
                        info@vainuniverse.com<br>
                        ----<br>
                        Local Time: <?php echo $time; ?></p>
                    <ul>
                        <li>
                            <a href="" class="location-solcial" id="loc-fb"></a>
                        </li>
                        <li>
                            <a href="" class="location-solcial" id="loc-skype"></a>
                        </li>
                        <li>
                            <a href="" class="location-solcial" id="loc-trip"></a>
                        </li>
                        <li>
                            <a href="" class="location-solcial" id="loc-eco"></a>
                        </li>
                        <li>
                            <a href="" class="location-solcial" id="loc-gay"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="fixed-location-right">
                <div id="fixed-location-arrow"></div>
            </div>
        </div>
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
<?php if (!$detect->isMobile()): ?>
                    <nav>
                        <ul>
                            <li><p data-to="section-2" id="to-section-2"><span class="menu-diamond"></span>HOTEL / PHOTOS</p></li>
                            <li><p data-to="section-3" id="to-section-3"><span class="menu-diamond"></span>SERVICES</p></li>
                            <li><p data-to="section-4" id="to-section-4"><span class="menu-diamond"></span>EVENTS</p></li>
                            <li><p data-to="section-5" id="to-section-5"><span class="menu-diamond"></span>ROOMS</p></li>
                            <li><p data-to="section-6" id="to-section-6"><span class="menu-diamond"></span>RATES</p></li>
                            <li><p data-to="section-7" id="to-section-7"><span class="menu-diamond"></span>PRESS / CONTACT</p></li>
                        </ul>
                    </nav>
                    <div class="language-options">
                        <a href="" class="lang" id="green"></a>
                        <a href="" class="lang" id="first-lang"></a>
                        <a href="" class="lang" id="sec-lang"></a>
                    </div>
<?php else: ?>
                    <div class="language-options">
                        <a href=""  id="green">
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
<?php endif ?>

                </div>
            </div>
        </header>
        <div class="beinggreen">
            <div class="beinggreen-wrapper">
                <h3><span class="green-icon"></span>BEING<span class="bold-text">GREEN</span><span class="italic"> &amp; VAIN</span></h3>
                <a href="" id="close-green"><span class="bold-text">X</span> CLOSE</a>
                <p><span class="light">
                Vain and the environment.<br><br>

                Vain has been an environmentally friendly project since its inception, wooden floors and old existing openings were restored, reducing the use of new wood, in addition to retaining the typical construction style of Palermo from beginning of last century and not contributing to deforestation.<br><br>

                Then over time we have been working on the following aspects as to reduce environmental impact:<br>
                - Equipment was installed as to improve the energy efficiency of the A / C.<br>
                - We give the guests the option of reusing towels to reduce water consumption and the use of soap.<br>
                - Used batteries for disposal are collected in designated locations for recycling.<br>
                - The rooms have economizers that turn off lights when the guest leaves the place.<br>
                - Different devices were installed as to power the lights with photoelectric sensors when someone goes in, reducing the energy consumption.<br>
                - We replaced old lighting fixtures for new systems that use low-power LED technology.
            </span>
                </p>

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
                    <li><div class="outer"><div class="inner"><img src="img/Home_6.jpg"></div></div></li>
                    <li><div class="outer"><div class="inner"><img src="img/Home_7.jpg"></div></div></li>
                    <li><div class="outer"><div class="inner"><img src="img/Home_8.jpg"></div></div></li>
                    <li><div class="outer"><div class="inner"><img src="img/Home_9.jpg"></div></div></li>
                </ul>
                <?php endif ?>
                <div class="article-padding">
                    <div class="home-relative">
                        <div class="home-center">
                            <div class="article-relative">
                                <div class="top-left-diamond diamond">
                                    <div id="top-left-diamond-content"></div>
                                </div>
                                <div class="top-right-diamond diamond">
                                    <p><span>Thames 2226 &nbsp;&nbsp;&bull;&nbsp;&nbsp; Palermo</span><br>
                                        Bs. As. &nbsp;&nbsp;&bull;&nbsp;&nbsp; Argentina</p>
                                </div>
                                <div class="bottom-left-diamond diamond">
                                    <p><span>+54 11 4776 8246 (VAIN)</span><br>info@vainuniverse.com</p>
                                </div>
                                <div class="bottom-right-diamond diamond">
                                    <div id="bottom-right-diamond-content"></div>
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
                        <div id="location-popup-wrapper">
                            <div class="loc-pop-cross">
                                <div class="loc-cross"></div>
                            </div>
                            <div id="location-popup-content">
                                <div id="location-map"></div>
                                <div id="location-info">
                                    <div id="location-direction">
                                        <h2><span class="location-diamond"></span>LOCATION:</h2><br>
                                        <p>FROM EZEIZA INTERNATIONAL AIRPORT: Take the freeway until the General Paz exit- take the General Paz in direction to Rio de la Plata - take Lugones until Sarmiento exit - Follow Sarmiento Ave. until it becomes Thames and look for 2226.</p><br>
                                        <p>FROM J.NEWERY AIRPORT: Take Av. Costanera Norte R. Obligado towards downtown - take the Sarmiento exit  - Follow Sarmiento Ave. until it becomes Thames and look for 2226.</p>
                                    </div>
                                    <div id="location-gps">
                                        <h2><span class="location-diamond"></span>GPS</h2><br>
                                        <p>S34º 35.020´<br>
                                        W058º 25.493´</p>
                                    </div>
                                </div>
                            </div>
                            <div id="location-bottom"></div>
                        </div>
                        <div class="hotel-wrapper">
                            <div class="article-relative">
                                <div class="hotel-info-wrap">
                                    <h2><span>VAIN</span> BOUTIQUE HOTEL</h2>
                                    <div class="hotel-bullet-wrap">
                                        <div class="hotel-bullet"></div>
                                    </div>
                                    <h3>What is worse than waking up in a hotel and not knowing in which city you are?</h3><br>
                                    <p>In Vain you will feel the Buenos Aires of the early 20th century, in contrast with avant-garde design touches, where every detail was carefully planned to provide the guest with a unique experience.
                                        <br><br>
Every room in Vain is different but they all share the original architecture of the building, classic and modern furniture, and above all, design in every single detail.</p>
                                   <!--  <p> Lorem Ipsum ha sido el texto de relleno est&aacute;ndar de las industrias desde el a&ntilde;o 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido us&oacute; una galer&iacute;a de textos y los mezcl&oacute; de tal manera que logr&oacute; hacer un libro de textos especimen. No s&oacute;lo sobrevivi&oacute; 500 a&ntilde;os, sino que tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original.<br>
                                        <br><span>&quot;Tambien ingres&oacute; como texto de relleno en documentos electr&oacute;nicos, quedando esencialmente igual al original.&quot;</span></p> -->
                                    <!-- <ul>
                                        <li><img src="img/ten-rivers.png"></li>
                                        <li><img src="img/bs-ciudad.png"></li>
                                        <li><img src="img/fodors.png"></li>
                                        <li><img src="img/time-out.png"></li>
                                        <li><img src="img/lonely-planet.png"></li>
                                        <li><img src="img/smalls-hotels.png"></li>
                                    </ul> -->
                                    <div id="location">
                                        <img src="img/location.png"><p>LOCATION &amp; DISTANCES &gt;&gt;</p>
                                    </div>
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
                                                        <?php foreach(glob('./img/hotel/fachade/*.*') as $filename){ ?>
                                                            <?php list($width, $height) = getimagesize($filename); ?>
                                                        <li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
                                                        <?php } ?>
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
                                                <div id="slider-terrace" class="option-gallery">
                                                    
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
                        <div class="services-sections no-scroll" id="in-house-wrap">
                            <div class="services-left">
                                <h4><span class="services-bullet"></span><span class="bold-text">INTERNAL</span></h4><br><br>
                                <p><span>Check-In: <span class="bold-text">1:30 PM</span> </p><br> 
                                <p>Check-Out: <span class="bold-text">11 AM</span> </span></p><br> 
                                <p>- Safety</p><br>
                                <p>- Breakfast</p><br>
                                <p>- 24-hour reception</p><br>
                                <p>- Bilingual staff</p><br>
                                <p>- Safe boxes in the rooms</p><br>
                                <p>- Central heating &amp; air-conditioning</p><br>
                                <p>- Rooms with Jacuzzi</p><br>
                                <p>- Complementary Wi-Fi Internet access throughout the entire hotel. Printer and fax.</p><br>
                                <p>- TV LC/LED</p><br>
                                <p>- PC with free internet access</p><br>
                                <p>- Every room equipped with: Fast internet connection, Cable TV, telephone service, mini-bar, hairdryer and amenities. </p><br>
                                <p>- Terrace</p><br>
                                <p>- Vain area: reading, music, cocktails&hellip;</p><br>
                                <p>- Wine-bar</p><br>
                            </div>
                            <div class="services-right">
                                <p>- Welcome Drink</p><br>
                                <p>- Wake up service</p><br>
                                <p>- Gay maps &amp; guides available</p><br>
                                <p>*** Smoking is not permitted inside the rooms.</p><br><br>
                                <p>On Request:</p><br>
                                <p>- Newspapers in several languages</p><br>
                                <p>- Parking nearby (with extra charge)</p><br>
                                <p>- Laundry</p><br>
                                <p>- Shoe-shine</p><br>
                                <p>- Cradles</p><br>
                                <p>- On-site massage</p><br>
                            </div>
                        </div>
                        <div class="services-sections no-scroll" id="external-wrap">
                            <div class="services-left">
                                <h4><span class="services-bullet"></span><span class="bold-text">EXTERNAL</span></h4><br><br>
                                <p>- Located in a very safe area full of parks, restaurants & bars.</p><br>
                                <p>- Room service from adjacent selected restaurants.</p><br>
                                <p>- Airport transfer.</p><br>
                                <p>- Tango and spanish lessons.</p><br>
                                <p>- City-tours & personal tour guide.</p><br>
                                <p>- Football, Polo & Tango tours.</p><br>
                                <p>- Bike tours.</p><br>
                            </div>
                            <div class="services-right">
                                <p>- Personal trainer.</p><br>
                                <p>- Gym at preferential rates.</p><br>
                                <p>- Cell-phone and notebook rental.</p><br>
                               <p> - Personal shopper.</p><br>
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
                                    <div class="events-info-cont no-scroll">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;CORPORATE</h4>
                                        <p>- Meeting room + Adjacent Terrace + Video Conference + Technological equipment rental<p>
                                        <p>- Breakfast, Lunches, Coffee Breaks, Brunches, etc.<p>

                                        <p>Companies who trusted Vain: Lóreal Argentina, Unilever, Ingram, Carlson Wagonlit travel Argentina, Cía. Industrial Cervecera, E-Volution, Estee Lauder cosméticos, Conarco Argentina, Indufem, Microsoft, Daeva S.A., Lomo Cine, Mia Films, Flight Centre Group Travel, Bioderma, Furlong, Proaxion, Synergia, <p>
                                        
                                    </div>
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
                                    <div class="events-info-cont no-scroll">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;SOCIAL <span>EVENTS</span></h4>
                                        <p>- Wedding receptions</p>
                                        <p>- Birthdays</p>
                                        <p>- Anniversaries</p>
                                    </div>
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
                                    <div class="events-info-cont no-scroll">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;WEDDING <span>NIGHT</span></h4>
                                        <p>- Champagne + chocolates + flower bouquet. </p>
                                        <p>- Hotel´s gift.</p>
                                        <p>- Room service with complete breakfast.</p>
                                        <p>- Late check-out (4PM).</p>

                                    </div>
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
                                        <?php foreach(glob('./img/rooms/habitaciones/V/*.*') as $filename){ ?>
                                            <?php list($width, $height) = getimagesize($filename); ?>
                                        <li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="room-info">
                                    <div class="room-gallery-controls"></div>
                                    <div class="room-info-info">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;V<span> ROOM</span> Senior</h4><br>
                                        <p>These rooms are aproximately 25 m2 / 270 ft2. Located in the first and second level of the hotel, facing to a central or back garden/patio, or to the front of the hotel.<br>
                                            This room has a king-size or twin beds, with the option of adding an extra bed and a crib (please check before you reserve).<br>
                                            It could be possible to have a balcony or big windows.<br>
                                            Bathroom with large jetted bath tub.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-wrapper top-room" id="aroom">
                            <div class="room-badge" id="abadge"></div>
                            <div class="room">
                                <div class="room-gallery">
                                    <ul>
                                        <?php foreach(glob('./img/rooms/habitaciones/A/*.*') as $filename){ ?>
                                            <?php list($width, $height) = getimagesize($filename); ?>
                                        <li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="room-info">
                                    <div class="room-gallery-controls"></div>
                                    <div class="room-info-info">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;A<span> ROOM</span> Junior</h4><br>
                                        <p>These rooms are approximately 22 m2 / 237 ft2. Located in the first level of the hotel, facing to a central or back garden/patio.<br>
                                        This room has a King-size or twin beds, with the option of adding an extra bed and a crib (please check before you reserve). It could be possible to have a big window or a backyard private area. <br>
                                        Bathroom with shower.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-wrapper bottom-room" id="iroom">
                            <div class="room-badge" id="ibadge"></div>
                            <div class="room">
                                <div class="room-gallery">
                                    <ul>
                                        <?php foreach(glob('./img/rooms/habitaciones/I/*.*') as $filename){ ?>
                                            <?php list($width, $height) = getimagesize($filename); ?>
                                        <li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="room-info">
                                    <div class="room-gallery-controls"></div>
                                    <div class="room-info-info">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;I<span> ROOM</span> Superior</h4><br>
                                        <p>These rooms are approximately 18m2 / 216 ft2.<br>
                                        Located in the first level of the hotel, facing to a central garden/patio. A room with one Double/Full bed-size bed only, with the possible option of adding an extra bed or crib (please check before you reserve).<br>
                                        Bathroom with shower.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-wrapper bottom-room" id="nroom">
                            <div class="room-badge" id="nbadge"></div>
                            <div class="room">
                                <div class="room-gallery">
                                    <ul>
                                        <?php foreach(glob('./img/rooms/habitaciones/N/*.*') as $filename){ ?>
                                            <?php list($width, $height) = getimagesize($filename); ?>
                                        <li><a class="fancybox" rel="hotel-fachade" href="<?php echo $filename; ?>"><img src="<?php echo $filename; ?>" style="height: <?php echo $height; ?>px; width: <?php echo $width; ?>px"></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="room-info">
                                    <div class="room-gallery-controls"></div>
                                    <div class="room-info-info">
                                        <h4><span class="services-bullet"></span>&nbsp;&nbsp;N<span> ROOM</span> Standard</h4><br>
                                        <p>These rooms are approximately 18m2 / 194 ft2.<br>
                                        Located in the inferior level of the hotel, facing to a central garden/patio. A room with Double/ Full bed-size bed only, with the possible option of adding an extra bed or crib (please check before you reserve).<br>
                                        Bathroom with shower.</p>
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
                                        <p class="rate-type">Senior</p>
                                        <a href=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner-rate left-rate">
                                        <h3><span class="rates-diamond-title"></span>&nbsp;&nbsp;&nbsp;A<span>ROOM</span>&nbsp;&nbsp;&nbsp;<span class="rates-diamond-title"></span></h3>
                                        <p>USD<span class="bold-text">224</span><span class="pink">*</span></p>
                                        <p class="rate-type">Junior</p>
                                        <a href=""></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner-rate right-rate">
                                        <h3><span class="rates-diamond-title"></span>&nbsp;&nbsp;&nbsp;I<span>ROOM</span>&nbsp;&nbsp;&nbsp;<span class="rates-diamond-title"></span></h3>
                                        <p>USD<span class="bold-text">190</span><span class="pink">*</span></p>
                                        <p class="rate-type">Superior</p>
                                        <a href=""></a>
                                    </div>
                                </li>
                                <li class="last">
                                    <div class="outer-rate right-rate">
                                        <h3><span class="rates-diamond-title"></span>&nbsp;&nbsp;&nbsp;N<span>ROOM</span>&nbsp;&nbsp;&nbsp;<span class="rates-diamond-title"></span></h3>
                                        <p>USD<span class="bold-text">156</span><span class="pink">*</span></p>
                                        <p class="rate-type">Standard</p>
                                        <a href=""></a>
                                    </div>
                                </li>
                            </ul>
                            <div class="small-print">
                                <p>(<span class="pink">*</span>) These rates are per room and per night, expressed in US dollars and do not include taxes - 21%. <br>
                                    <span class="light">Extra beds - only available in A and V categories - will have a charge of USD 60 + takes per night.</span></p>
                                    <img src="img/logos-tarjetas.png">
                                    <p id="cancelation">Cancelation and No-Show Policies</p>
                            </div>
                            <div class="nonrefundable-rates">
                                <a href=""></a>
                            </div>
                        </div>
                        <div id="cancelation-policy">
                            <div class="loc-pop-cross">
                                <div class="loc-cross"></div>
                            </div>
                            <div id="cancelation-content">
                                <h3>Cancelation and No-Show Policies</h3><br>
                                <p>* Non refundable reservations cannot be cancelled or altered.<br>
                                    * Refundable reservations must be cancelled or altered at least 48 working
                                    hours before the guest s arrival . Those reservations that were not
                                    cancelled within that period of time or that happen to be No-Show will be
                                    charged the first night of the  stay booked plus taxes on the agreed tariff.<br>
                                    In case of one-night-bookings, that night will be charged fully. This same
                                    policy will apply for guest already checked in who shortened their stay
                                    outside this period of time. <br><br>

                                    All cancellations must be done addressing the Reservations Department
                                    directly before 5:00pm and must have a reply from the hotel confirming it.<br>
                                    Otherwise it will not be considered cancelled. <br>
                                    Please note that non refundable reservations cannot be cancelled or altered.<br><br>

                                    Important Notice: <br>
                                    In case the check out time needs to be extended up to 6 PM, 50% of the rack
                                    rate will be applied. For those check outs after 6 PM, an extra night on the
                                    rack rate will be charged. Both time extensions are subject to availability
                                    on the day of departure. In order to guarantee an extended check out time
                                    from the moment of booking, an extra night has to be reserved.</p>
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
            var noPoi = [
            {
                featureType: "poi.business",
                stylers: [
                  { visibility: "off" }
                ]   
              }
            ];

            function initialize() {
            
            var map_canvas = document.getElementById('map_canvas');
            var map_options = {
              center: new google.maps.LatLng(-34.5848,-58.426303),
              zoom: 15,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              styles: noPoi
            }
            var map = new google.maps.Map(map_canvas, map_options)
            var iconBase = 'http://www.wearegrossa.com/vain/img/';
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
