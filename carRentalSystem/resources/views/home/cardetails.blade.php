@extends('layouts.home')

@section('content')
    <!-- Single Car Header-->
    <div class="rn-single-car-header">
        <div class="rn-overlayer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-car-single-info">
                        <h1>Toyta Corrola</h1>
                        <p>Mauris semper nisl a massa convallis</p>
                    </div>
                    <div class="rn-car-single-meta">
							<span>
								<i class="rni-car-seat"></i> 3 Passengers
							</span>
                        <span>
								<i class="rni-suitcase"></i> 2 Luggages
							</span>
                        <span>
								<i class="rni-petrol-station"></i> Gas
							</span>
                        <span>
								<i class="rni-car-gear"></i> Auto
							</span>
                        <span>
								<i class="rni-car-door"></i> 4 Doors
							</span>
                    </div>
                    <div class="rn-car-single-price">
                        <span class="rn-car-price-from">From</span>
                        <span class="rn-car-price-format">
								<span class="rn-car-price-amount">$900</span>
								<span class="rn-car-price-per">/day</span>
							</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Car Header-->

    <!-- Single Car Content-->
    <section class="rn-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p>Praesent quis risus maximus arcu luctus egestas. Aliquam rhoncus metus eu dui aliquet, ut imperdiet metus fringilla. Nulla non purus et odio varius condimentum. Maecenas et elit eu lectus feugiat congue. Aenean dictum ligula vitae orci congue, eu rutrum ex tempus. Donec vel ex a neque congue volutpat. Mauris nec purus eget velit elementum posuere. Donec libero nisi, blandit non turpis sed, hendrerit suscipit metus. Aliquam ornare tincidunt dictum. Sed laoreet, arcu fringilla fermentum rutrum, quam urna dictum tellus, et rutrum dui lectus ac turpis. Donec eu sem in libero euismod tristique vel sit amet nibh.</p>
                    <p>Integer pellentesque fermentum mi in accumsan. Phasellus congue risus urna, eget maximus ante ullamcorper et. Aenean malesuada, magna a ultrices hendrerit, ante lectus semper odio, quis imperdiet odio tellus at ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eu tellus quam. Cras sit amet sapien at est lacinia consectetur in efficitur ante. Nulla pellentesque metus et rutrum placerat. Aliquam erat volutpat.</p>
                    <p>Donec pellentesque neque mi, ac tristique purus vestibulum et. Donec sagittis laoreet mauris, eget interdum tortor gravida nec. Maecenas suscipit nisi ex, eu dictum enim accumsan ut. Pellentesque vel sagittis ex. Duis vitae est ut diam blandit consectetur in eget risus. Donec faucibus ex consectetur, sodales quam ac, feugiat mi. Sed ultrices mi ac ultricies egestas. In varius ligula a ipsum facilisis, quis ornare neque euismod.</p>
                </div>
                <div class="col-lg-4">

                    <!-- Check Availability-->
                    <div class="rn-small-search-form">
                        <div class="rn-small-search-form-title">
                            <h2>Check Availability</h2>
                        </div>
                        <form action="car-single.html">
                            <div class="rn-icon-input">
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" placeholder="Pickup Location">
                            </div>
                            <div class="rn-icon-input">
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" placeholder="Drop Location">
                            </div>
                            <div class="rn-date-time-input">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="rn-icon-input">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="text" placeholder="Pickup Date" id="pickup-date">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="rn-icon-input">
                                            <i class="far fa-clock"></i>
                                            <input type="text" placeholder="Time" id="pickup-time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rn-date-time-input">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="rn-icon-input">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="text" placeholder="Drop Date" id="drop-date">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="rn-icon-input">
                                            <i class="far fa-clock"></i>
                                            <input type="text" placeholder="Time" id="drop-time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-main btn-lg btn-shadow btn-block" type="submit">
                                <i class="fas fa-search"></i> Check Now
                            </button>
                        </form>
                    </div>
                    <!-- End Check Availability-->

                    <!-- Car Sharing Buttons-->
                    <div class="rn-car-share">
                        <span>Share this car:</span>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Car Sharing Buttons-->

                </div>
            </div>

            <!-- Car Facilities-->
            <div class="row rn-facilities">
                <div class="col-lg-12">
                    <h2 class="rn-simple-title">Facilities</h2>
                </div>
                <div class="col-md-3 col-6">
                    <ul>
                        <li>
                            <i class="fas fa-check"></i> Audio input
                        </li>
                        <li>
                            <i class="fas fa-check"></i> Bluetooth
                        </li>
                        <li>
                            <i class="fas fa-check"></i> Heated seats
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <ul>
                        <li>
                            <i class="fas fa-check"></i> All Wheel drive
                        </li>
                        <li>
                            <i class="fas fa-check"></i> USB input
                        </li>
                        <li>
                            <i class="fas fa-check"></i> FM Radio
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <ul>
                        <li>
                            <i class="fas fa-check"></i> GPS Navigation
                        </li>
                        <li>
                            <i class="fas fa-check"></i> Safe
                        </li>
                        <li>
                            <i class="fas fa-check"></i> Air Conditioner
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-6">
                    <ul>
                        <li>
                            <i class="fas fa-times"></i> Parking Sensors
                        </li>
                        <li>
                            <i class="fas fa-times"></i> WI-FI
                        </li>
                        <li>
                            <i class="fas fa-times"></i> Sunroof
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Car Facilities-->

        </div>
    </section>
    <!-- End Single Car Content-->

    <!-- Car Reviews-->
    <div class="rn-section rn-section-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Car Reviews-->
                    <div class="rn-reviews mb-50">
                        <h2 class="rn-simple-title">Customer Reviews</h2>

                        <!-- Review Item-->
                        <div class="rn-review-item">
                            <div class="rn-review-meta">
                                <img src="modules/home/images/author-1.jpg" alt="Barbara Miller" srcset="modules/home/images/author-1.jpg 1x, modules/home/images/author-1@2x.jpg 2x"/>
                                <div class="rn-reviewer-info">
                                    <div class="rn-reviewer-name">Barbara Miller</div>
                                    <div class="rn-review-time">May 13, 2018 at 8:21 PM</div>
                                </div>
                            </div>
                            <div class="rn-review-content">
                                <div class="rn-review-ratings">
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Quality:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Price:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Comfort:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Driving:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="rn-review-body">
                                    <p>Mauris quis sollicitudin ipsum. Morbi venenatis sem eros, quis pulvinar lacus pharetra nec. Vestibulum odio ante, venenatis ut volutpat nec, scelerisque vel purus. Nunc tempor eros a interdum blandit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Review Item-->


                        <!-- Review Item-->
                        <div class="rn-review-item">
                            <div class="rn-review-meta">
                                <img src="modules/home/images/author-2.jpg" alt="Joe Shaw" srcset="modules/home/images/author-2.jpg 1x, modules/home/images/author-2@2x.jpg 2x"/>
                                <div class="rn-reviewer-info">
                                    <div class="rn-reviewer-name">Joe Shaw</div>
                                    <div class="rn-review-time">May 13, 2018 at 8:21 PM</div>
                                </div>
                            </div>
                            <div class="rn-review-content">
                                <div class="rn-review-ratings">
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Quality:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Price:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Comfort:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Driving:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="rn-review-body">
                                    <p>Mauris quis sollicitudin ipsum. Morbi venenatis sem eros, quis pulvinar lacus pharetra nec. Vestibulum odio ante, venenatis ut volutpat nec, scelerisque vel purus. Nunc tempor eros a interdum blandit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Review Item-->


                        <!-- Review Item-->
                        <div class="rn-review-item">
                            <div class="rn-review-meta">
                                <img src="modules/home/images/author-3.jpg" alt="Kimberly Jenkins" srcset="modules/home/images/author-3.jpg 1x, modules/home/images/author-3@2x.jpg 2x"/>
                                <div class="rn-reviewer-info">
                                    <div class="rn-reviewer-name">Kimberly Jenkins</div>
                                    <div class="rn-review-time">May 13, 2018 at 8:21 PM</div>
                                </div>
                            </div>
                            <div class="rn-review-content">
                                <div class="rn-review-ratings">
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Quality:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Price:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Comfort:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="rn-review-rating">
                                        <div class="rn-review-rating-title">Driving:</div>
                                        <div class="rn-review-rating-stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="rn-review-body">
                                    <p>Mauris quis sollicitudin ipsum. Morbi venenatis sem eros, quis pulvinar lacus pharetra nec. Vestibulum odio ante, venenatis ut volutpat nec, scelerisque vel purus. Nunc tempor eros a interdum blandit.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Review Item-->

                        <div class="text-center">
                            <a class="btn btn-lg btn-outline-light" href="#">Load More</a>
                        </div>
                    </div>
                    <!-- End Car Reviews-->

                    <!-- Car Review Form-->
                    <div class="rn-review-form">
                        <h2 class="rn-simple-title">Write A Review</h2>
                        <form action="https://demo.kitthemes.com/html/rentnow/post">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="rn-rating-input rn-rating-input-quality">
                                        <label>Quality:</label>
                                        <div class="rn-rating-input-inner">
                                            <input class="rn-rating-value-input" type="hidden"/>
                                            <div class="rn-rating-main-input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="rn-rating-input rn-rating-input-price">
                                        <label>Price:</label>
                                        <div class="rn-rating-input-inner">
                                            <input class="rn-rating-value-input" type="hidden"/>
                                            <div class="rn-rating-main-input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="rn-rating-input rn-rating-input-comfort">
                                        <label>Comfort:</label>
                                        <div class="rn-rating-input-inner">
                                            <input class="rn-rating-value-input" type="hidden"/>
                                            <div class="rn-rating-main-input"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="rn-rating-input rn-rating-input-driving">
                                        <label>Driving:</label>
                                        <div class="rn-rating-input-inner">
                                            <input class="rn-rating-value-input" type="hidden"/>
                                            <div class="rn-rating-main-input"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-4">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-lg-4">
                                    <input type="url" placeholder="Website">
                                </div>
                            </div>
                            <textarea cols="30" rows="10" placeholder="Write your review"></textarea>
                            <div class="text-right">
                                <input class="btn btn-main btn-lg btn-shadow" type="submit" value="Submit Review">
                            </div>
                        </form>
                    </div>
                    <!-- End Car Review Form-->

                </div>
            </div>
        </div>
    </div>
    <!-- End Car Reviews-->

    <!-- Similar Cars-->
    <section class="rn-car-list rn-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Section Title-->
                    <div class="rn-section-title   ">
                        <h2 class="rn-title">Similar cars</h2>
                        <p>Inbecilloque elegans errorem concedo etsi electram.</p>
                        <span class="rn-title-bg">Similar cars</span>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Car Item-->
                    <div class="rn-car-item">
                        <div class="rn-car-item-review">
                            <div class="fas fa-star"></div> 5.0
                        </div>
                        <div class="rn-car-item-thumb">
                            <a href="car-single.html">
                                <img class="img-fluid" src="modules/home/images/car-1.jpg" alt="Toyta Corrola" srcset="modules/home/images/car-1.jpg 1x, modules/home/images/car-1@2x.jpg 2x"/>
                            </a>
                        </div>
                        <div class="rn-car-item-info">
                            <h3>
                                <a href="car-single.html">Toyta Corrola</a>
                            </h3>
                            <p>Mauris semper nisl a massa convallis</p>
                            <div class="rn-car-list-n-price">
                                <ul>
                                    <li>Aliqua venandi mutat</li>
                                    <li>Plerisque nostrum</li>
                                    <li>Intellegimus percurri</li>
                                </ul>
                                <div class="rn-car-price-wrap">
                                    <a class="rn-car-price" href="car-single.html">
                                        <span class="rn-car-price-from">From</span>
                                        <span class="rn-car-price-format">
												<span class="rn-car-price-amount">$900</span>
												<span class="rn-car-price-per">/day</span>
											</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Car Item-->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Car Item-->
                    <div class="rn-car-item">
                        <div class="rn-car-item-review">
                            <div class="fas fa-star"></div> 5.0
                        </div>
                        <div class="rn-car-item-thumb">
                            <a href="car-single.html">
                                <img class="img-fluid" src="modules/home/images/car-2.jpg" alt="Toyta Corrola" srcset="modules/home/images/car-2.jpg 1x, modules/home/images/car-2@2x.jpg 2x"/>
                            </a>
                        </div>
                        <div class="rn-car-item-info">
                            <h3>
                                <a href="car-single.html">Toyta Corrola</a>
                            </h3>
                            <p>Mauris semper nisl a massa convallis</p>
                            <div class="rn-car-list-n-price">
                                <ul>
                                    <li>Aliqua venandi mutat</li>
                                    <li>Plerisque nostrum</li>
                                    <li>Intellegimus percurri</li>
                                </ul>
                                <div class="rn-car-price-wrap">
                                    <a class="rn-car-price" href="car-single.html">
                                        <span class="rn-car-price-from">From</span>
                                        <span class="rn-car-price-format">
												<span class="rn-car-price-amount">$900</span>
												<span class="rn-car-price-per">/day</span>
											</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Car Item-->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Car Item-->
                    <div class="rn-car-item">
                        <div class="rn-car-item-review">
                            <div class="fas fa-star"></div> 5.0
                        </div>
                        <div class="rn-car-item-thumb">
                            <a href="car-single.html">
                                <img class="img-fluid" src="modules/home/images/car-3.jpg" alt="Toyta Corrola" srcset="modules/home/images/car-3.jpg 1x, modules/home/images/car-3@2x.jpg 2x"/>
                            </a>
                        </div>
                        <div class="rn-car-item-info">
                            <h3>
                                <a href="car-single.html">Toyta Corrola</a>
                            </h3>
                            <p>Mauris semper nisl a massa convallis</p>
                            <div class="rn-car-list-n-price">
                                <ul>
                                    <li>Aliqua venandi mutat</li>
                                    <li>Plerisque nostrum</li>
                                    <li>Intellegimus percurri</li>
                                </ul>
                                <div class="rn-car-price-wrap">
                                    <a class="rn-car-price" href="car-single.html">
                                        <span class="rn-car-price-from">From</span>
                                        <span class="rn-car-price-format">
												<span class="rn-car-price-amount">$900</span>
												<span class="rn-car-price-per">/day</span>
											</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Car Item-->

                </div>
            </div>
        </div>
    </section>
    <!-- End Similar Cars-->
@endsection
