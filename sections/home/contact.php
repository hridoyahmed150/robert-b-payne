<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-left mt-3 pr-4">
                    <h2 class="pb-3">Why Choose Robert B. Payne, Inc.?</h2>
                    <h3 class="pb-3">RESPONSIVE, PROFESSIONAL, AND FRIENDLY. THAT'S HOW WE DO BUSINESS!</h3>
                    <p>Since day one, the mission here at Robert B. Payne, Inc. has always been to offer affordable and
                        excellent heating and air conditioning installation, repair, and maintenance. You’ve invested
                        time and money into your home or business, and with our industry expertise you can avoid
                        breaking the bank while still maintaining quality home comfort.</p>
                </div>
                <div class="contact-left-bottom">
                    <h2 class="pb-3">HVAC For You</h2>
                    <p>You can count on Robert B. Payne, Inc. for all your HVAC needs and for being a leader in the
                        cutting edge technology of our industry. Let our years of experience show you the way to
                        greener, more energy efficient future.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="form mx-3 p-5">
                    <div class="form-title text-center pb-5">
                        <h3>Scheduling is Easy!</h3>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Phone">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <select id="disabledSelect" class="form-control">
                            <option>Disabled select</option>
                            <option>Disabled select</option>
                            <option>Disabled select</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn homepage-button text-center px-4">SEND INFORMATION</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

<div id="services-home">
    <div class="container">
        <div class="wrap-owl-services">
            <div class="carousel-services owl-carousel">
                <div class="item">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <a href="<?php echo get_post_meta( get_the_ID(), 'cmb_home_lin_service_one', true ); ?>">
                            <?php echo cmb_wysiwyg_output( 'cmb_home_service_one', get_the_ID() ); ?>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <a href="<?php echo get_post_meta( get_the_ID(), 'cmb_home_lin_service_two', true ); ?>">
                            <?php echo cmb_wysiwyg_output( 'cmb_home_service_two', get_the_ID() ); ?>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <a href="<?php echo get_post_meta( get_the_ID(), 'cmb_home_lin_service_three', true ); ?>">
                            <?php echo cmb_wysiwyg_output( 'cmb_home_service_three', get_the_ID() ); ?>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                        <a href="<?php echo get_post_meta( get_the_ID(), 'cmb_home_lin_service_four', true ); ?>">
                            <?php echo cmb_wysiwyg_output( 'cmb_home_service_four', get_the_ID() ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
