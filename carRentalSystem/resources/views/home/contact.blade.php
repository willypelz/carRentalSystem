@extends('layouts.home')

@section('content')

    <!-- Page Title-->
    <div class="rn-page-title">
        <div class="rn-pt-overlayer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title-inner">
                        <h1>Contact</h1>
                        <p>Cras eros lorem, rhoncus ac risus sit amet, fringilla ultrices purus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title-->

    <!-- Page Content-->
    <section class="rn-section">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-12">
                    <!-- Google Map-->
                    <div class="rn-google-map" id="rn-google-map"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <!-- Contact Form-->
                    <h2 class="rn-simple-title">Send Message</h2>
                    <div class="rn-contact-form">
                        <form action="contact.html">
                            <div class="row mb-30">
                                <div class="col-6">
                                    <div class="rn-icon-input">
                                        <i class="far fa-user"></i>
                                        <input type="text" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="rn-icon-input">
                                        <i class="far fa-envelope"></i>
                                        <input type="text" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="rn-icon-input rn-icon-top mb-30">
                                <i class="far fa-comment"></i>
                                <textarea placeholder="Your Message" rows="5"></textarea>
                            </div>
                            <div class="text-right">
                                <input class="btn btn-main btn-lg btn-shadow" type="submit" value="Send Message">
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form-->

                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="rn-simple-title">Contact Info</h2>
                        </div>
                        <div class="col-sm-6">

                            <!-- Contact Info Item-->
                            <div class="rn-contact-info">
                                <div class="rn-info-icon">
                                    <i class="lnr lnr-map-marker"></i>
                                </div>
                                <div class="rn-info-content">
                                    <h2 class="rn-contact-title">Head Office</h2>
                                    <address>1425 Pointe Lane, Miami
                                        <br>Florida – 33169, USA
                                    </address>
                                </div>
                            </div>
                            <!-- End Contact Info Item-->

                        </div>
                        <div class="col-sm-6">

                            <!-- Contact Info Item-->
                            <div class="rn-contact-info">
                                <div class="rn-info-icon">
                                    <i class="lnr lnr-map-marker"></i>
                                </div>
                                <div class="rn-info-content">
                                    <h2 class="rn-contact-title">Branch 1</h2>
                                    <address>1425 Pointe Lane, Miami
                                        <br>Florida – 33169, USA
                                    </address>
                                </div>
                            </div>
                            <!-- End Contact Info Item-->

                        </div>
                        <div class="col-sm-6">

                            <!-- Contact Info Item-->
                            <div class="rn-contact-info">
                                <div class="rn-info-icon">
                                    <i class="lnr lnr-map-marker"></i>
                                </div>
                                <div class="rn-info-content">
                                    <h2 class="rn-contact-title">Branch 2</h2>
                                    <address>1425 Pointe Lane, Miami
                                        <br>Florida – 33169, USA
                                    </address>
                                </div>
                            </div>
                            <!-- End Contact Info Item-->

                        </div>
                        <div class="col-sm-6">

                            <!-- Contact Info Item-->
                            <div class="rn-contact-info">
                                <div class="rn-info-icon">
                                    <i class="lnr lnr-map-marker"></i>
                                </div>
                                <div class="rn-info-content">
                                    <h2 class="rn-contact-title">Branch 3</h2>
                                    <address>1425 Pointe Lane, Miami
                                        <br>Florida – 33169, USA
                                    </address>
                                </div>
                            </div>
                            <!-- End Contact Info Item-->

                        </div>
                        <div class="col-sm-6">

                            <!-- Contact Info Item-->
                            <div class="rn-contact-info">
                                <div class="rn-info-icon">
                                    <i class="lnr lnr-phone"></i>
                                </div>
                                <div class="rn-info-content">
                                    <h2 class="rn-contact-title">Phone</h2>
                                    <address>(954)-944-1250
                                        <br>(954)-944-1251
                                    </address>
                                </div>
                            </div>
                            <!-- End Contact Info Item-->

                        </div>
                        <div class="col-sm-6">

                            <!-- Contact Info Item-->
                            <div class="rn-contact-info">
                                <div class="rn-info-icon">
                                    <i class="lnr lnr-envelope"></i>
                                </div>
                                <div class="rn-info-content">
                                    <h2 class="rn-contact-title">E-mail</h2>
                                    <address>sale@example.com
                                        <br>support@example.com
                                    </address>
                                </div>
                            </div>
                            <!-- End Contact Info Item-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Content-->
@endsection
