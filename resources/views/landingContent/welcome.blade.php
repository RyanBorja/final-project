@extends('layouts.app')

@section('content')

@component('layouts.card')
    @slot('cardHeader')
        <h3 class="text-center" style="font-style: italic;">The aftermath of <strong>Quality</strong> lasts longer than the impulsive urge of <strong>Price</strong></h3>
    @endslot
    @slot('cardBody')
        <h1 class="card-title text-center"><a href="{{ url('/about') }}">Who we are</a></h1>
        <h3 class="card-text text-muted text-center pb-2">“Our mission is to turn your design needs into a reality”</h3>
        <p class="card-text text-center mx-auto" style="width:70%;">Allow us to expertly aid you in your kitchen, bathroom, and bar renovation needs.  Our excellent customer service, fabrication expertise, and gorgeous selection of stone materials combine to guarantee your satisfaction.</p>
    @endslot
    @slot('cardImg')
        <img class="card-img-bottom heightfix" src="{{ asset('pictures/jumbotronimg.jpeg') }}" alt="Card image kitchen">
    @endslot
@endcomponent

@component('layouts.card')
    @slot('cardHeader')
        <h5 class="card-title"><a href="{{ url('/contact') }}">Hours:</a></h5>
        <p class="card-text">Monday - Friday: 8:00AM - 5:00PM</p>
        <p class="card-text">Saturday: <a href="tel:859-338-8890">By Appointment</a></p>
        <p class="card-text">Sunday: closed</p>
    @endslot
    @slot('cardBody')
        <h5 class="card-title"><a href="{{ url('/contact') }}">Location:</a></h5>
        <p class="card-text">1008 S Main Street</p>
        <p class="card-text">Nicholasville, KY  40356</p>
    @endslot
    @slot('cardImg')
        <iframe class="heightfix" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.866253045096!2d-84.58142988502586!3d37.863419779743374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88425f91fd65fd4b%3A0x9af799eb8aad9ac!2sQuality+Stone+Countertops!5e0!3m2!1sen!2sus!4v1532203232286" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    @endslot
@endcomponent        

@component('layouts.card')
    @slot('cardHeader')
        <h5 class="card-title"><a href="{{ url('/portfolio') }}">Our Process</a></h5>
        <p class="card-text">Schedule a consultation: <a href="tel:859-338-8890">(859) 338-8890</a></p>
    @endslot
    @slot('cardBody')
        <p class="card-text p-2">Call us today to begin your design journey. Our expert style consultant will ensure that your exact fabrication dreams are executed to your satisfaction. Come to our shop to see our comprehensive and beautiful selection of high quality stone, or allow us to perform an in home consultation to ensure your specific needs are met with an expert eye.</p> 
    @endslot
    @slot('cardImg')
        <img class="card-img-bottom heightfix" src="{{ asset('pictures/kitchen2.jpeg') }}" alt="Card image kitchen">
    @endslot
@endcomponent             

@component('layouts.card')
    
    <div class="row justify-content-center align-items-center">
        <div class="col-6 align-items-center">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Alga Green</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Black Galaxy</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Green Power Ranger</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Typhoon Gold</a>
            </div>
        </div>
        <div class="row justify-content-center align-items-center col-6">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <img class="card-img-bottom heightfix" src="{{ asset('pictures/Alga_Green.jpg') }}" alt="Card image Alga Green">
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <img class="card-img-bottom heightfix" src="{{ asset('pictures/blackgalaxy.jpg') }}" alt="Card image Black Galaxy">
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <img class="card-img-bottom heightfix" src="{{ asset('pictures/stone1.jpg') }}" alt="Card image Green Power Ranger">
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <img class="card-img-bottom heightfix" src="{{ asset('pictures/typhoongold.jpg') }}" alt="Card image Typhoon Gold">
            </div>
            </div>
        </div>
    </div>
    
@endcomponent

@component('layouts.card')
    @slot('cardHeader')
        <h2 class="card-title text-center">View Our Portfolio</h2>
        <div class="card-body mx-auto">
            <div id="carouselLeandingPageIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselLeandingPageIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselLeandingPageIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselLeandingPageIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner mx-auto">
                    <div class="carousel-item active">
                        <img class="rounded mx-auto d-block heightfix" src="{{  asset('pictures/carousel1.jpeg')  }}" alt="Carousel slide 1">
                    </div>
                    <div class="carousel-item">
                        <img class="rounded mx-auto d-block heightfix" src="{{  asset('pictures/carousel2.jpeg')  }}" alt="Carousel slide 2">
                    </div>
                    <div class="carousel-item">
                        <img class="rounded mx-auto d-block heightfix" src="{{  asset('pictures/carousel3.jpeg')  }}" alt="Carousel slide 3">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselLeandingPageIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselLeandingPageIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>  
    @endslot
@endcomponent       

@endsection