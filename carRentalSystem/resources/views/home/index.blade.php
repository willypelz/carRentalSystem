@extends('layouts.home')

@section('content')
    <!-- Slider-->
    <div class="rn-carousel carousel slide" id="carouselExampleControls" data-ride="carousel">
        <div class="carousel-inner">

            <!-- Slider Item 1-->
            <div class="carousel-item beactive">
                <div class="carousel-caption">
                    <h2 class="rn-fade-bottom mb-25">#1 Car Rent Service In Your City</h2>
                    <p class="rn-fade-bottom rn-caption-item-2 mb-35">Maecenas viverra porta eros, id tincidunt lorem
                        rhoncus eget. Aliquam erat volutpat. Sed ultricies elementum egestas.</p>
                    <a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="#">Book Now</a>
                </div>
                <div class="rn-slider-overlayer"></div>
                <img class="d-block w-100" src="modules/home/images/slide1.jpg" alt="slide">
            </div>

            <!-- Slider Item 2-->
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2 class="rn-fade-bottom mb-25">Quality Cars with Unlimited Miles</h2>
                    <p class="rn-fade-bottom rn-caption-item-2 mb-35">Maecenas viverra porta eros, id tincidunt lorem
                        rhoncus eget. Aliquam erat volutpat. Sed ultricies elementum egestas.</p>
                    <a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="#">Book Now</a>
                </div>
                <div class="rn-slider-overlayer"></div>
                <img class="d-block w-100" src="modules/home/images/slide2.jpg" alt="slide">
            </div>

            <!-- Slider Item 3-->
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h2 class="rn-fade-bottom mb-25">24/7 Customer Support Guarantee</h2>
                    <p class="rn-fade-bottom rn-caption-item-2 mb-35">Maecenas viverra porta eros, id tincidunt lorem
                        rhoncus eget. Aliquam erat volutpat. Sed ultricies elementum egestas.</p>
                    <a class="btn btn-main btn-lg rn-fade-bottom rn-caption-item-3" href="#">Book Now</a>
                </div>
                <div class="rn-slider-overlayer"></div>
                <img class="d-block w-100" src="modules/home/images/slide3.jpg" alt="slide">
            </div>

        </div>
        <!-- Slider Controls -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="lnr lnr-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="lnr lnr-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
    <!-- End slider-->

    <!-- Car Search Form-->
    <section class="rn-search-form-big rn-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Section Title-->
                    <div class="rn-section-title  rn-title-bg-color-white-10 rn-title-color-white">
                        <h2 class="rn-title">Search &amp; Hire Cars</h2>
                        <span class="rn-title-bg">Search &amp; Hire Cars</span>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- Main Big Search Form-->
                    <div class="rn-big-search-form rn-big-search-form-dark">
                        <form action="car-search.html">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="rn-icon-input">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input type="text" placeholder="Pickup Location">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="rn-icon-input">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input type="text" placeholder="Drop Location">
                                    </div>
                                </div>
                                <div class="col-lg-3 rn-date-time-input">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-8 col-8">
                                            <div class="rn-icon-input">
                                                <i class="far fa-calendar-alt"></i>
                                                <input type="text" placeholder="Pickup Date" id="pickup-date">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-4 col-4">
                                            <div class="rn-icon-input">
                                                <i class="far fa-clock"></i>
                                                <input type="text" placeholder="Time" id="pickup-time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 rn-date-time-input">
                                    <div class="row">
                                        <div class="col-lg-7 col-md-8 col-8">
                                            <div class="rn-icon-input">
                                                <i class="far fa-calendar-alt"></i>
                                                <input type="text" placeholder="Drop Date" id="drop-date">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-4 col-4">
                                            <div class="rn-icon-input">
                                                <i class="far fa-clock"></i>
                                                <input type="text" placeholder="Time" id="drop-time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-orange btn-lg mt-30 btn-shadow" type="submit">
                                    <i class="fas fa-search"></i> Find Now
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Section Shape-->
        <div class="rn-shape rn-shape-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="rn-shape-fill" d="M500.2,94.7L0,0v100h1000V0L500.2,94.7z"/>
            </svg>
        </div>
    </section>


    <!-- Why People Like Us Section-->
    <section class="rn-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Section Title-->
                    <div class="rn-section-title   ">
                        <h2 class="rn-title">Why People Like Us?</h2>
                        <p>Inbecilloque elegans errorem concedo etsi electram.</p>
                        <span class="rn-title-bg">Why RentNow</span>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">

                    <!-- Feature with dot-->
                    <div class="rn-dot-feature">
                        <div class="rn-the-dot"></div>
                        <div class="rn-dot-feature-info">
                            <h3>Best Price Guarantee</h3>
                            <p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
                        </div>
                    </div>
                    <!-- End Feature with dot-->

                </div>
                <div class="col-lg-3 col-md-6">

                    <!-- Feature with dot-->
                    <div class="rn-dot-feature">
                        <div class="rn-the-dot"></div>
                        <div class="rn-dot-feature-info">
                            <h3>No Cancellation Fees</h3>
                            <p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
                        </div>
                    </div>
                    <!-- End Feature with dot-->

                </div>
                <div class="col-lg-3 col-md-6">

                    <!-- Feature with dot-->
                    <div class="rn-dot-feature">
                        <div class="rn-the-dot"></div>
                        <div class="rn-dot-feature-info">
                            <h3>Best Quality Cars</h3>
                            <p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
                        </div>
                    </div>
                    <!-- End Feature with dot-->

                </div>
                <div class="col-lg-3 col-md-6">

                    <!-- Feature with dot-->
                    <div class="rn-dot-feature">
                        <div class="rn-the-dot"></div>
                        <div class="rn-dot-feature-info">
                            <h3>Reservation Anytime</h3>
                            <p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
                        </div>
                    </div>
                    <!-- End Feature with dot-->

                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">

                    <!-- Feature with dot-->
                    <div class="rn-dot-feature">
                        <div class="rn-the-dot"></div>
                        <div class="rn-dot-feature-info">
                            <h3>Personal Driver</h3>
                            <p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
                        </div>
                    </div>
                    <!-- End Feature with dot-->

                </div>
                <div class="col-lg-3 col-md-6">

                    <!-- Feature with dot-->
                    <div class="rn-dot-feature">
                        <div class="rn-the-dot"></div>
                        <div class="rn-dot-feature-info">
                            <h3>Unlimited Miles</h3>
                            <p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
                        </div>
                    </div>
                    <!-- End Feature with dot-->

                </div>
                <div class="col-lg-3 col-md-6">

                    <!-- Feature with dot-->
                    <div class="rn-dot-feature">
                        <div class="rn-the-dot"></div>
                        <div class="rn-dot-feature-info">
                            <h3>City to City</h3>
                            <p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
                        </div>
                    </div>
                    <!-- End Feature with dot-->

                </div>
                <div class="col-lg-3 col-md-6">

                    <!-- Feature with dot-->
                    <div class="rn-dot-feature">
                        <div class="rn-the-dot"></div>
                        <div class="rn-dot-feature-info">
                            <h3>24/7 Customer Support</h3>
                            <p>Duis placerat tempus odio vel pretium. Vestibulum mattis viverra justo vel consequat.</p>
                        </div>
                    </div>
                    <!-- End Feature with dot-->

                </div>
            </div>
        </div>
    </section>
    <!-- End Why People Like Us Section-->


    <!-- Testimonials & Fun Fact-->
    <section class="rn-section rn-fun-fact">
        <div class="rn-section-overlayer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <!-- Section Title-->
                    <div class="rn-section-title rn-title-pos-left rn-title-bg-color-white-10 rn-title-color-white">
                        <h2 class="rn-title">Testimonials</h2>
                        <span class="rn-title-bg">Testimonials</span>
                    </div>

                    <!-- Testimonials-->
                    <div class="rn-testimonials rn-testimonials2">
                        <div class="rn-testimonials-carousel carousel slide" id="rn-testimonials" data-ride="carousel">
                            <div class="carousel-inner">

                                <!-- Testimonial Item 1-->
                                <div class="carousel-item active">
                                    <blockquote class="rn-testimonial2-item">
                                        <p>Curabitur neque turpis, pellentesque vel semper ut, tempor vel arcu. Nulla facilisi. Phasellus feugiat nunc eget eros varius, et mollis magna elementum.</p>
                                        <footer>
                                            <div class="rn-testimonial-author"><strong>Catherine Beck</strong>
                                                <p>CEO, Example Inc.</p>
                                            </div>
                                        </footer>
                                    </blockquote>
                                </div>

                                <!-- Testimonial Item 2-->
                                <div class="carousel-item">
                                    <blockquote class="rn-testimonial2-item">
                                        <p>Integer aliquam velit ut nibh mattis, et suscipit erat ultrices. Cras aliquam ante vel arcu suscipit, sit amet lobortis elit dignissim tempor vel.</p>
                                        <footer>
                                            <div class="rn-testimonial-author"><strong>Kevin Little</strong>
                                                <p>CEO, Example Inc.</p>
                                            </div>
                                        </footer>
                                    </blockquote>
                                </div>

                                <!-- Testimonial Item 3-->
                                <div class="carousel-item">
                                    <blockquote class="rn-testimonial2-item">
                                        <p>Suspendisse semper urna nec massa imperdiet consequat. Phasellus a hendrerit elit, vel maximus lacus. Sed eu quam laoreet, faucibus lorem non, aliquet diam.</p>
                                        <footer>
                                            <div class="rn-testimonial-author"><strong>John Roberts</strong>
                                                <p>CEO, Example Inc.</p>
                                            </div>
                                        </footer>
                                    </blockquote>
                                </div>

                                <!-- Testimonial Item 4-->
                                <div class="carousel-item">
                                    <blockquote class="rn-testimonial2-item">
                                        <p>Quisque ut arcu vitae elit egestas lobortis. Vivamus vehicula tortor molestie urna laoreet congue. Fusce iaculis eros id neque maximus tristique.</p>
                                        <footer>
                                            <div class="rn-testimonial-author"><strong>Patricia Torres</strong>
                                                <p>CEO, Example Inc.</p>
                                            </div>
                                        </footer>
                                    </blockquote>
                                </div>

                            </div>
                            <!-- Testimonials Slider Controls-->
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#rn-testimonials" data-slide-to="0"></li>
                                <li data-target="#rn-testimonials" data-slide-to="1"></li>
                                <li data-target="#rn-testimonials" data-slide-to="2"></li>
                                <li data-target="#rn-testimonials" data-slide-to="3"></li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Testimonials-->

                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-6">

                            <!-- CountUp Item-->
                            <div class="rn-counter-item">
                                <div class="rn-counter-number-container">
                                    <span class="rn-counter-number">350</span>
                                    <span class="rn-counter-postfix">+</span>
                                </div>
                                <div class="rn-counter-text">Cars For Rent</div>
                            </div>

                        </div>
                        <div class="col-6">

                            <!-- CountUp Item-->
                            <div class="rn-counter-item">
                                <div class="rn-counter-number-container">
                                    <span class="rn-counter-number">6500</span>
                                    <span class="rn-counter-postfix">+</span>
                                </div>
                                <div class="rn-counter-text">Happy Clients</div>
                            </div>

                        </div>
                        <div class="col-6">

                            <!-- CountUp Item-->
                            <div class="rn-counter-item">
                                <div class="rn-counter-number-container">
                                    <span class="rn-counter-number">5000</span>
                                    <span class="rn-counter-postfix">+</span>
                                </div>
                                <div class="rn-counter-text">Positive Reviws</div>
                            </div>

                        </div>
                        <div class="col-6">

                            <!-- CountUp Item-->
                            <div class="rn-counter-item">
                                <div class="rn-counter-number-container">
                                    <span class="rn-counter-number">600+</span>
                                    <span class="rn-counter-postfix">+</span>
                                </div>
                                <div class="rn-counter-text">Drivers</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials & Fun Fact-->



@endsection
