@extends('layouts.app')

@section('content')
    @component('layouts.card')
        @slot('cardHeader')
            <h2 class="card-title text-center">What our customers are saying about us!</h2>
        @endslot
        @slot('cardBody')
        <div class="card-body mx-auto" style="min-height:250px;">
            <div id="customerBlurbCarouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#customerBlurbCarouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#customerBlurbCarouselIndicators" data-slide-to="1"></li>
                    <li data-target="#customerBlurbCarouselIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner mx-auto">
                    <div class="carousel-item active">
                        <p class="card-text mx-auto" style="width: 70%;">
                            Hi Jennifer:<br>
                            
                            I am thankful Randy put me in touch with you.  You and Alex
                            
                            have been such a joy to work with, so very nice at all times
                            
                            and the craftsmanship with the countertop is exactly as you
                            
                            told me it would be.  Thank you for staying so close with the
                            
                            process to see it all to completion.  Jennifer, you have been
                            
                            a blessing and I thank you!<br>  
                            
                            Bonnie Cessna</p>
                    </div>
                    <div class="carousel-item">
                        <p class="card-text mx-auto" style="width: 70%;">I am very happy with the job that Quality Stone did in replacing my 
                            kitchen  countertops with their Oyster Pearl granite.  The gentlemen 
                            were prompt and courteous.  They went the extra mile by coming over 
                            twice to measure, making sure their templates were correct before 
                            cutting the granite.  They were very willing to move large slabs of 
                            granite as I tried to make up my mind.
                            Jennifer Clifton was so very patient and accommodating as I shopped 
                            for my choice of granite. She was invaluable in helping me select the 
                            design and little added touches used in the travertine tile backsplash 
                            behind my granite tops.  It was very helpful to have a knowledgeable 
                            person to guide me through these selections.  
                            I would surely recommend Quality Stone and Jennifer Clifton.
                            
                            Ginny Sisk</p>
                    </div>
                    <div class="carousel-item">
                        <p class="card-text mx-auto" style="width: 70%;">Jennifer-
                            I can't thank you enough! The sink and countertop look great. I 
                            can't say enough good things. I really didn't expect Victor to get 
                            here and get it all installed so fast. It really worked out great. 
                            Thank you, thank you, thank you....
                            Linzy</p>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#customerBlurbCarouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark img-thumbnail border border-dark" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customerBlurbCarouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark img-thumbnail border border-dark" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
            
        @endslot

    @endcomponent

    @component('layouts.card')
        @slot('cardHeader')
            <h2 class="card-title text-center">Help us to turn your design dreams into reality!</h2>
        @endslot
        @slot('cardBody')
        <div class="card-body mx-auto" style="min-height:250px;">
            <div id="beforeAfterCarouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#beforeAfterCarouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#beforeAfterCarouselIndicators" data-slide-to="1"></li>
                    <li data-target="#beforeAfterCarouselIndicators" data-slide-to="2"></li>
                    <li data-target="#beforeAfterCarouselIndicators" data-slide-to="3"></li>
                    <li data-target="#beforeAfterCarouselIndicators" data-slide-to="4"></li>
                </ol>

                <div class="carousel-inner mx-auto">
                    <div class="carousel-item active">
                        <img class="rounded mx-auto d-block" style="max-height: 530px; transform:rotate(90deg);" src="{{  asset('pictures/portfolio/before1.JPG')  }}" alt="Carousel slide 1">
                    </div>
                    <div class="carousel-item">
                        <img class="rounded mx-auto d-block" style="max-height: 530px; transform:rotate(90deg);" src="{{  asset('pictures/portfolio/before2.JPG')  }}" alt="Carousel slide 2">
                    </div>
                    <div class="carousel-item">
                        <img class="rounded mx-auto d-block" style="max-height: 530px;" src="{{  asset('pictures/portfolio/after1.JPG')  }}" alt="Carousel slide 3">
                    </div>
                    <div class="carousel-item">
                        <img class="rounded mx-auto d-block" style="max-height: 530px; transform:rotate(90deg);" src="{{  asset('pictures/portfolio/after2.JPG')  }}" alt="Carousel slide 4">
                    </div>
                    <div class="carousel-item">
                        <img class="rounded mx-auto d-block" style="max-height: 530px; transform:rotate(90deg);" src="{{  asset('pictures/portfolio/after3.JPG')  }}" alt="Carousel slide 5">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#beforeAfterCarouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark img-thumbnail border border-dark" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#beforeAfterCarouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark img-thumbnail border border-dark" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
            
        @endslot

    @endcomponent

@endsection