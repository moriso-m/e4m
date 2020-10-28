@extends('base')

@section('content')
<section class="wt-section bg-gray text-center inner-page-header">
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-4 py-lg-5">
            <div class="col-md-7">
                <div class="text-center">
                    <h1 class="display-sm-4 display-lg-3">About Us</h1>
                    <p class="sub-text">Aspernatur at enim excepturi facere in reiciendis</p>
                </div>
            </div>
        </div>
    </div>
</section>
<main role="main">
    <div class="wt-section pb-0">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5">
                    <h5 class="text-primary">About us</h5>
                    <h2 class="mb-4">We are a Industry leader in technical and consulting services</h2>
                    <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the
                        majority have suffered alteration in some form, by injected humour, or randomised words. Lorem
                        ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias
                        provident quae quaerat quis! Aspernatur at enim excepturi facere in non reiciendis soluta
                        totam, voluptas voluptate!</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/intro/img-woman-1.jpg') }}" class="w-75" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="wt-section">
        <div class="container">
            <div class="row justify-content-md-between align-items-center">

                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/services/7.svg') }}" class="w-100 text-dark pr-5" width="80px" alt="" />
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex mb-md-5 rounded-md justify-content-md-between align-items-center">
                                <img src="{{ asset('img/services/4.svg') }}" class="display-4 text-dark pr-5" width="120px"
                                    alt="" />
                                <div>
                                    <h5 class="mb-2">Mission</h5>
                                    <p class="text-muted">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex mb-md-5 rounded-md justify-content-md-between align-items-center">
                                <img src="{{ asset('img/services/6.svg') }}" class="display-4 text-dark pr-5" width="120px"
                                    alt="" />
                                <div>
                                    <h5 class="mb-2">Vision</h5>
                                    <p class="text-muted">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="d-flex mb-md-5 rounded-md justify-content-md-between align-items-center">
                                <img src="{{ asset('img/services/3.svg') }}" class="display-4 text-dark pr-5" width="120px"
                                    alt="" />
                                <div>
                                    <h5 class="mb-2">Values</h5>
                                    <p class="text-muted">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light wt-section">
        <div class="container">
            <header class="text-center w-md-50 mx-auto mb-5">
                <h2 class="h1">Our Team</h2>
                <p class="h5">We are ready to grow with your business.</p>
            </header>

            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-5">
                    <figure>
                        <img class="w-100 rounded-top" src="{{ asset('img/team/img1.jpg') }}" alt="Image Description">
                        <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                            <div class="mb-3">
                                <h5 class="mb-1">Martin Karani</h5>
                                <small
                                    class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">Director</small>
                            </div>
                        </div>
                    </figure>
                </div>
{{-- 
                <div class="col-lg-3 col-sm-6 mb-5">
                    <figure>
                        <img class="w-100 rounded-top" src="{{ asset('img/team/img2.jpg') }}" alt="Image Description">
                        <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                            <div class="mb-3">
                                <h5 class="mb-1">John doe</h5>
                                <small
                                    class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">Tech
                                    Director</small>
                            </div>
                        </div>
                    </figure>
                </div> --}}

                <div class="col-lg-3 col-sm-6 mb-5">
                    <figure>
                        <img class="w-100 rounded-top" src="{{ asset('img/team/img3.jpg') }}" alt="Image Description">

                        <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                            <div class="mb-3">
                                <h5 class="mb-1">Ishmael Gikundi</h5>
                                <small
                                    class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">HR
                                    Director</small>
                            </div>
                        </div>
                    </figure>
                </div>

                <div class="col-lg-3 col-sm-6 mb-5">
                    <figure>
                        <img class="w-100 rounded-top" src="{{ asset('img/team/img4.jpg') }}" alt="Image Description">
                        <div class="wt-box-shadow-sm bg-white text-center rounded p-4">
                            <div class="mb-3">
                                <h5 class="mb-1">Bruce Willamson</h5>
                                <small
                                    class="d-block font-style-normal text-uppercase text-primary wt-letter-spacing-xs">Finance
                                    Director</small>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="wt-section">
        <div class="container">
            <div class="row justify-content-md-center text-center">
                <div class="col-md-8">
                    <h1 class="mb-md-4">Get Our Best Solution</h1>
                    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>

                    <div class="mt-md-5">
                        <a href="#" class="btn btn-primary btn-pill btn-theme">Read the story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wt-section bg-light">
        <div class="container">
            <header class="text-center w-md-50 mx-auto mb-5">
                <h2 class="h1 mb-0">Our Clients</h2>
            </header>

            <div class="js-clients wt-clients mb-4">
                <div>
                    <img class="wt-clients__image" src="{{ asset('img/clients/img1.png') }}" alt="Image Description">
                </div>
                <div>
                    <img class="wt-clients__image" src="{{ asset('img/clients/img2.png') }}" alt="Image Description">
                </div>
                <div>
                    <img class="wt-clients__image" src="{{ asset('img/clients/img3.png') }}" alt="Image Description">
                </div>
                <div>
                    <img class="wt-clients__image" src="{{ asset('img/clients/img4.png') }}" alt="Image Description">
                </div>
                <div>
                    <img class="wt-clients__image" src="{{ asset('img/clients/img5.png') }}" alt="Image Description">
                </div>
                <div>
                    <img class="wt-clients__image" src="{{ asset('img/clients/img6.png') }}" alt="Image Description">
                </div>
                <div>
                    <img class="wt-clients__image" src="{{ asset('img/clients/img7.png') }}" alt="Image Description">
                </div>
                <div>
                    <img class="wt-clients__image" src="{{ asset('img/clients/img8.png') }}" alt="Image Description">
                </div>
            </div>
        </div>
    </section>
</main>

@endsection