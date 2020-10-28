@extends('base')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hovereffects.css') }}">  
@endsection
@section('content')
<section class="wt-section bg-gray text-center inner-page-header"> 
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-white py-4 py-lg-5">
            <div class="col-md-7">
                <div class="text-center">
                    <h1 class="display-sm-4 display-lg-3">Portfolio</h1>
                    <p class="sub-text">Aspernatur at enim excepturi facere in reiciendis</p>
              </div>
            </div>
        </div>
    </div>
</section>
<main role="main"> 
<section class="wt-section"> 
<div class="container">
<div class="row justify-content-md-center text-center pb-lg-5">
    <div class="col-md-12">
        <h2 class="h1">Our Works Tells More..</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
    </div>
</div>
 <div class="portfolio-menu mt-2 mb-4 pb-3">
    <ul>
       <li class="btn btn-pill mr-2 active" data-filter="*">All</li>
       <li class="btn btn-pill mr-2" data-filter=".gts">Kitchen</li>
       <li class="btn btn-pill mr-2" data-filter=".lap">Electronics</li>
       <li class="btn btn-pill" data-filter=".selfie">Bathroom</li>
       <li class="btn btn-pill" data-filter=".selfie">Solar products</li>
    </ul>
 </div>
 <div class="portfolio-item row">
    <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
        <div class="hovereffect">
            <img class="img-fluid img-responsive" src="{{ asset('img/products/appliance1.jpg') }}" alt="">
                <div class="overlay"> 
                    <p>
                        <a href="{{ asset('img/products/appliance1.jpg') }}" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                        <i>View</i></a>
                    </p>
                </div>
            </div> 
        
    </div> 
        <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
        <div class="hovereffect">
            <img class="img-fluid img-responsive" src="{{ asset('img/products/appliance2.jpg') }}" alt="">
                <div class="overlay"> 
                    <p>
                        <a href="{{ asset('img/products/appliance2.jpg') }}" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                        <i>View</i></a>
                    </p>
                </div>
            </div> 
        
    </div> 
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm"> 
        <div class="hovereffect">
            <img class="img-fluid img-responsive" src="{{ asset('img/portfolio/img3.jpg') }}" alt="">
                <div class="overlay"> 
                    <p>
                        <a href="{{ asset('img/portfolio/img3.jpg') }}" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                        <i>View</i></a>
                    </p>
                </div>
            </div> 
        
    </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
        <div class="hovereffect">
            <img class="img-fluid img-responsive" src="{{ asset('img/portfolio/img4.jpg') }}" alt="">
                <div class="overlay"> 
                    <p>
                        <a href="{{ asset('img/portfolio/img4.jpg') }}" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                        <i>View</i></a>
                    </p>
                </div>
            </div> 
        
    </div> 
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm"> 
        <div class="hovereffect">
            <img class="img-fluid img-responsive" src="{{ asset('img/portfolio/img5.jpg') }}" alt="">
                <div class="overlay"> 
                    <p>
                        <a href="{{ asset('img/portfolio/img5.jpg') }}" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                        <i>View</i></a>
                    </p>
                </div>
            </div> 
        
    </div> 
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
        <div class="hovereffect">
            <img class="img-fluid img-responsive" src="{{ asset('img/portfolio/img6.jpg') }}" alt="">
                <div class="overlay"> 
                    <p>
                        <a href="{{ asset('img/portfolio/img6.jpg') }}" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                        <i>View</i></a>
                    </p>
                </div>
            </div> 
        
    </div> 
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm"> 
        <div class="hovereffect">
            <img class="img-fluid img-responsive" src="{{ asset('img/portfolio/img7.jpg') }}" alt="">
                <div class="overlay"> 
                    <p>
                        <a href="{{ asset('img/portfolio/img7.jpg') }}" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                        <i>View</i></a>
                    </p>
                </div>
            </div> 
        
    </div> 
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm"> 
        <div class="hovereffect">
            <img class="img-fluid img-responsive" src="{{ asset('img/portfolio/img8.jpg') }}" alt="">
                <div class="overlay"> 
                    <p>
                        <a href="{{ asset('img/portfolio/img8.jpg') }}" class="fancylight popup-btn info" data-fancybox-group="light">My Profile
                        <i>View</i></a>
                    </p>
                </div>
            </div> 
        
    </div>   
 </div>
</div>
</section>	
</main> 
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="{{ asset('vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!--Plugin Initialize-->
    <script src="{{ asset('js/portfolio.js') }}"></script>
@endpush
@endsection