<?php
$img_dir = get_template_directory_uri() . '/src/images';
?>

<section class="information">
    <div id="info-slide" class="owl-carousel owl-theme">
        <div class="item">
            <img src="<?php echo $img_dir; ?>/slide1.png" alt="The Last of us"></div>
        <div class="item">
            <img src="<?php echo $img_dir; ?>/slide1.png" alt="The Last of us"></div>
        <div class="item">
            <img src="<?php echo $img_dir; ?>/slide1.png" alt="The Last of us"></div>
    </div>
    <div class="customNavigation">
        <a class="btn prev"><img src="<?php echo $img_dir;?>/next-arrow.png" alt="prev-arrow"></a>
        <a class="btn next"><img src="<?php echo $img_dir;?>/next-arrow.png" alt="prev-arrow"></a>
    </div>
    <div class="slide-content text-center">
        <img class="pb-xl-3 pb-lg-2" src="<?php echo $img_dir;?>/slide-content-logo.png" alt="slide-content-logo">
        <h2 class="pb-xl-3 pb-lg-2 text-uppercase text-white">UNSTOPPABLE DEALS</h2>
        <h4 class="text-uppercase pb-2 mb-2 border-bottom text-white">FROM YOUR UNSTOPPABLE TRANE
            COMFORT SPECIALIST DEALER </h4>
        <h3 class="text-uppercase pb-xl-3 pb-lg-2 text-white">O% FINANCING FOR 60 MONTH*</h3>
        <h3 class="text-uppercase pb-xl-3 pb-lg-2 text-white">PLUS UP TO</h3>
        <h3 class="text-uppercase mb-3 text-white">$500 IN TRADE-IN ALLOWANCES**</h3>
        <a href="#" class="homepage-button px-2 py-1 text-white">More Info</a>
    </div>
    <!--    <div class="container-fluid p-0">-->
    <!--        <div class="row">-->
    <!--            <div class="col-12">-->
    <!--                -->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</section>


<section class="service" style="background-image: url('<?php echo $img_dir; ?>/service-bg.png');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-5 tab-wrap d-flex justify-content-center">
                    <ul class="tabs d-flex m-0 p-1 justify-content-around">
                        <li data-tab-target="#facebook" class="px-2 py-1 d-flex justify-content-center tab">Facebook
                        </li>
                        <li data-tab-target="#youtube" class=" active tab px-2 py-1 mx-1 d-flex justify-content-center">
                            Youtube
                        </li>
                        <li data-tab-target="#blog" class="tab px-2 py-1 d-flex justify-content-center">Blog</li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="tab-content d-flex justify-content-center align-items-center">
                        <div id="facebook" data-tab-content>
                            <h1>Facebook</h1>
                            <p>This is the Facebook</p>
                        </div>
                        <div id="youtube" data-tab-content class="active">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/ao_pCGN1r8E"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div id="blog" data-tab-content>
                            <h1>Blog</h1>
                            <p>Some information on Blogs</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="service-area">

    <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item lozad" data-src="https://www.google.com/maps/d/u/0/embed?mid=1RXqAxMlXXkjes9Oec5nkthV_Hb3HK8HD"><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span><span data-mce-type="bookmark" style="display: inline-block; width: 0px; overflow: hidden; line-height: 0;" class="mce_SELRES_start">﻿</span></iframe>
    </div>

    <div class="floating-lists">
        <div class="floating-list">
            <h3 class="list-title">ZIP CODES WE SERVE</h3>
            <ul>
                <li>22712</li>
                <li>22427</li>
                <li>22433</li>
                <li>22446</li>
                <li>22448</li>
                <li>22026</li>
                <li>22714</li>
                <li>22401</li>
            </ul>
        </div>
        <div class="floating-list">
            <h3 class="list-title">Areas we serve</h3>
            <ul>
                <li><a title="Bealeton VA HVAC Company" href="/service-areas/bealeton-va/">Bealeton, VA</a></li>
                <li><a title="Port Royal VA HVAC Company" href="/service-areas/port-royal-va/">Port Royal, VA</a></li>
                <li><a title="Bowling Green VA HVAC Company" href="/service-areas/bowling-green-va/">Bowling Green, VA</a></li>
                <li><a title="Quantico VA HVAC Company" href="/service-areas/quantico-va/">Quantico, VA</a></li>
                <li><a title="Burr Hill VA HVAC Company" href="/service-areas/burr-hill-va/">Burr Hill, VA</a></li>
                <li><a title="Rappahannock Academy VA HVAC Company" href="/service-areas/rappahannock-academy-va/">Rappahannock Academy, VA</a></li>
                <li><a title="Corbin VA HVAC Company" href="/service-areas/corbin-va/">Corbin, VA</a></li>
                <li><a title="Remington VA HVAC Company" href="/service-areas/remington-va/">Remington, VA</a></li>
                <li><a title="Dahlgren VA HVAC Company" href="/service-areas/dahlgren-va/">Dahlgren, VA</a></li>
                <li><a title="Rhoadesville VA HVAC Company" href="/service-areas/rhoadesville-va/">Rhoadesville, VA</a></li>
                <li><a title="Dumfries VA HVAC Company" href="/service-areas/dumfries-va/">Dumfries, VA</a></li>
                <li><a title="Richardsville VA HVAC Company" href="/service-areas/richardsville-va/">Richardsville, VA</a></li>
                <li><a title="Elkwood VA HVAC Company" href="/service-areas/elkwood-va/">Elkwood, VA</a></li>
                <li><a title="Ruther Glen VA" href="/service-areas/ruther-glen-va/">Ruther Glen, VA</a></li>
                <li><a title="Fredericksburg HVAC Company" href="/service-areas/fredericksburg-va/">Fredricksburg, VA</a></li>
                <li><a title="Sealston VA HVAC Company" href="/service-areas/sealston-va/">Sealston, VA</a></li>
                <li><a title="Garrisonville VA HVAC Company" href="/service-areas/garrisonville-va/">Garrisonville, VA</a></li>
                <li><a title="Spotsylvania HVAC Company" href="/service-areas/hvac-company-spotsylvania/">Spotsylvania, VA</a></li>
                <li><a title="Goldvein VA HVAC Company" href="/service-areas/goldvein-va/">Goldvein, VA</a></li>
                <li><a title="Stafford VA HVAC Company" href="/service-areas/stafford-va/">Stafford, VA</a></li>
                <li><a title="Hartwood VA HVAC Company" href="/service-areas/hartwood-va/">Hartwood, VA</a></li>
                <li><a title="Stevensburg VA HVAC Company" href="/service-areas/stevensburg-va/">Stevensburg, VA</a></li>
                <li><a title="King George HVAC Company" href="/service-areas/king-george-va/">King George, VA</a></li>
                <li><a title="Sumerduck VA HVAC Company" href="/service-areas/sumerduck-va/">Sumerduck, VA</a></li>
                <li><a title="Locust Grove VA HVAC Company" href="/service-areas/locust-grove-va/">Locust Grove, VA</a></li>
                <li><a title="Triangle VA HVAC Company" href="/service-areas/triangle-va/">Triangle, VA</a></li>
                <li><a title="Midland VA HVAC Company" href="/service-areas/midland-va/">Midland, VA</a></li>
                <li><a title="Unionville VA HVAC Company" href="/service-areas/unionville-va/">Unionville, VA</a></li>
                <li><a title="Partlow VA HVAC Company" href="/service-areas/partlow-va/">Partlow, VA</a></li>
                <li><a title="Woodford VA HVAC Company" href="/service-areas/woodford-va/">Woodford, VA</a></li>
                <li><a href="/service-areas/aquia-harbour-va/">Aquia Harbour, VA</a></li>
            </ul>
        </div>

    </div>
</div>
