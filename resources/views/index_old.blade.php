@extends('base')

@section('content')
    <section class="wt-section hero-large position-relative overflow-hidden mt-md-2">
        <div class="hero-img bg-overlay" data-overlay="0" style="background-image: url(img/intro/home2.jpg);"
            data-aos="fade-right" data-aos-easing="linear" data-aos-delay="50"></div>

        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-md-8 py-5" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="100">
                    <!-- heading -->
                    <h1 class="text-uppercase mb-3 display-4 font-weight-bolder">
                        Best Home appliance supplier
                    </h1>
                    <p class="mb-4 h5">Lets Grow Your Business Together</p>
                    <div class=" mb-0">
                        <a href="tel:+254792938363" class="btn btn-pill btn-primary mr-3 mb-md-0 mb-3">
                            Quick Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main role="main">
        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                        <h2 class="mb-md-2">Our Services</h2>
                        <p class="lead text-muted">
                            E4M majors in Home appliance supplies and offering agribusiness consultancy
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up"
                            data-aos-easing="linear" data-aos-delay="50">
                            <div class="mb-4"><img src="{{ asset('img/services/1.svg') }}" width="80px" alt="" /></div>
                            <h5 class="mb-2">Consulting</h5>
                            <p class="text-muted">
                                We provide consultancy services in Agribusiness & animal science
                            </p>
                            <a href="#" class="btn btn-pill btn-primary mt-4">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up"
                            data-aos-easing="linear" data-aos-delay="150">
                            <div class="mb-4"><img src="{{ asset('img/services/2.svg') }}" width="80px" alt="" /></div>
                            <h5 class="mb-2">Home Appliances</h5>
                            <p class="text-muted">
                                E4M ltd is a leading supplier of home appliances in Nairobi and other towns in Kenya
                            </p>
                            <a href="#" class="btn btn-pill btn-primary mt-4">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up"
                            data-aos-easing="linear" data-aos-delay="200">
                            <div class="mb-4"><img src="{{ asset('img/services/3.svg') }}" width="80px" alt="" /></div>
                            <h5 class="mb-2">Technology</h5>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod
                                Lorem ipsum dolor sit ametelit.</p>
                            <a href="#" class="btn btn-pill btn-primary mt-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wt-section bg-light">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <div class="col-md-8" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="50">
                        <h1 class="mb-md-4">Get all type of Solutions</h1>
                        <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>

                        <div class="mt-md-5">
                            <a href="#" class="btn btn-primary btn-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-md-center align-items-center text-center mb-lg-5 mb-4 pb-lg-5"
                    data-aos="fade-left" data-aos-easing="linear" data-aos-delay="50">
                    <div class="col-md-6 px-md-5">
                        <i class="fab fa-connectdevelop display-4 text-primary mb-4"></i>
                        <h2 class="mb-md-4 mt-3">We are Top Consulting Firm in the World</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            Lorem ipsum dolor sit amet</p>
                        <div class="mb-md-5 mb-4">
                            <a href="#" class="btn btn-primary btn-pill">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="rounded mw-100" src="{{ asset('img/intro/team.jpg') }}" alt="">
                    </div>
                </div>

            </div>
        </section>
        <div class="card bg-primary border-0 rounded-0 p-5">
            <div class="container">
                <div class="row justify-content-between align-items-center text-center text-md-left" data-aos="fade-in"
                    data-aos-easing="linear" data-aos-delay="50">
                    <div class="col-md-8">
                        <h5 class="mb-1">The best business consultancy services in world</h5>
                        <p class="mb-0">There are many variations of passages of Lorem Ipsum available the majority
                            alteration.</p>
                    </div>
                    <div class="col-md-4 text-lg-right mt-md-0 mt-3">
                        <a href="contact.html" class="btn btn btn-outline-light btn-pill">Request Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wt-section pb-0">
            <div class="container">
                <div class="row justify-content-between align-items-center" data-aos="fade-right"
                    data-aos-easing="linear" data-aos-delay="50">
                    <div class="col-md-5">
                        <h2 class="mb-4">Industry leader in consulting services</h2>
                        <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or randomised words.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat!</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/intro/img-woman-1.jpg') }}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>

        <section class="wt-section bg-light">
            <div class="container">
                <header class="text-center w-md-50 mx-auto mb-5">
                    <h2 class="h1 mb-0">Our Clients</h2>
                </header>

                <div class="js-clients wt-clients mb-4" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="50">
                    <div>
                        <img class="wt-clients__image" src="{{ asset('img/clients/img1.png') }}"
                            alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('img/clients/img4.png') }}"
                            alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('img/clients/img2.png') }}"
                            alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('img/clients/img3.png') }}"
                            alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('img/clients/img7.png') }}"
                            alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('img/clients/img5.png') }}"
                            alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('img/clients/img6.png') }}"
                            alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('img/clients/img8.png') }}"
                            alt="Image Description">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
