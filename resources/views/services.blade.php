@extends('base')

@section('content')
    <section class="wt-section bg-gray text-center inner-page-header">
        <div class="container">
            <div class="row justify-content-md-center align-items-center text-white py-4 py-lg-5">
                <div class="col-md-7">
                    <div class="text-center">
                        <h1 class="display-sm-4 display-lg-3">Services</h1>
                        <p class="sub-text">Your satisfaction is our priority</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main role="main">
        <div class="wt-section">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-5">
                        <h5 class="text-primary">Our Services</h5>
                        <h2 class="mb-4">Find the best services and consulting for affordable deals</h2>
                        <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or randomised words. Lorem
                            ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias
                            provident quae quaerat quis! </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/services/business-1.jpg') }}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-light wt-section">
            <div class="container">
                <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 text-center w-md-50 mx-auto mb-0">
                        <h2 class="mb-md-2">Our Products</h2>
                        <p class="lead text-muted">Eius eligendi fugiat labore libero molestias provident quae quaerat quis!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="display-4 text-primary mb-2">
                            <div class="mb-4"><img src="{{ asset('img/services/1.svg') }}" width="80px" alt="" /></div>
                        </div>
                        <h4 class="h5">Excellent Features</h4>
                        <p>Achieve virtually any look and layout design within one UI Kit solution.</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="display-4 text-primary mb-2">
                            <div class="mb-4"><img src="{{ asset('img/services/2.svg') }}" width="80px" alt="" /></div>
                        </div>
                        <h4 class="h5">Powerful API</h4>
                        <p>We strive to figure out ways to help your audience grow through all platforms.</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="display-4 text-primary mb-2">
                            <div class="mb-4"><img src="{{ asset('img/services/3.svg') }}" width="80px" alt="" /></div>
                        </div>
                        <h4 class="h5">Blockchain Based</h4>
                        <p>Find what you need in one template and combine features at will.</p>
                    </div>
                </div>

                <hr class="my-5">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="display-4 text-primary mb-2">
                            <div class="mb-4"><img src="{{ asset('img/services/4.svg') }}" width="80px" alt="" /></div>
                        </div>
                        <h4 class="h5">VueJS Included</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="display-4 text-primary mb-2">
                            <div class="mb-4"><img src="{{ asset('img/services/5.svg') }}" width="80px" alt="" /></div>
                        </div>
                        <h4 class="h5">React Powered</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="display-4 text-primary mb-2">
                            <div class="mb-4"><img src="{{ asset('img/services/6.svg') }}" width="80px" alt="" /></div>
                        </div>
                        <h4 class="h5">Angular Compatible</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="card gradient-primary bg-primary border-0 rounded-0 p-5">
            <div class="container">
                <div class="row justify-content-between align-items-center text-center text-md-left">
                    <div class="col-md-8">
                        <h5 class="mb-1 text-white d-inline-block border-right border-sm-right-0 pr-md-4 mr-md-4">Best Deals
                        </h5>
                        <p class="mb-0 text-white d-inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod</p>
                    </div>
                    <div class="col-md-4 text-lg-right mt-md-0 mt-3">
                        <a href="#" class="btn btn-pill btn-outline-light">Grab the Deal</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                        <h2 class="mb-md-2">Best Awarded</h2>
                        <p class="lead text-muted">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form</p>
                    </div>
                </div>
                <div class="row justify-content-md-center align-items-center text-center">
                    <div class="col-md-6 px-md-5">
                        <i class="fab fa-connectdevelop display-4 text-primary mb-4"></i>
                        <h2 class="mb-md-4 mt-3">There are many variations of passages of Lorem Ipsum available.</h2>
                        <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/services/business-4.jpg') }}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
