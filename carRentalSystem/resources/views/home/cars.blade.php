@extends('layouts.home')

@section('content')
    <!-- Page Title-->
    <div class="rn-page-title">
        <div class="rn-pt-overlayer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title-inner">
                        <h1>All Cars</h1>
                        <p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title-->

    <!-- Cars-->
    <section class="rn-section rn-car-list">
        <div class="container">
            <div class="row">

                @foreach($cars as $car)
                    <div class="col-lg-4 col-md-6">

                        <!-- Car Item-->
                        <div class="rn-car-item">
                            <div class="rn-car-item-review">
                                <div class="fas fa-star"></div>
                                5.0
                            </div>
                            <div class="rn-car-item-thumb">
                                <a href="{{ url("cars/$car->id") }}">
                                    <img class="img-fluid" src="modules/home/images/car-1.jpg" alt="Black Sedan"
                                         srcset="modules/home/images/car-1.jpg 1x, modules/home/images/car-1@2x.jpg 2x"/>
                                </a>
                            </div>
                            <div class="rn-car-item-info">
                                <h3>
                                    <a href="car-single.html">Black Sedan</a>
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
                @endforeach

                <div class="col-lg-12 d-none d-lg-block">
                    <a href="#">
                        <img class="img-fluid mb-50" src="modules/home/images/big-banner.png" alt="banner"
                             srcset="modules/home/images/big-banner.png 1x, modules/home/images/big-banner@2x.png 2x">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cars Pagination-->
                    <nav class="rn-pagination rn-pagination-center">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                            <li>
                                <a class="rn-active" href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Cars Pagination-->

                </div>
            </div>
        </div>
    </section>
    <!-- End Cars-->
@endsection
