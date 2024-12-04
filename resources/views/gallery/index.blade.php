@extends('layouts.app')

@section('content')
<section class="page-header">
    <div class="bg-item">
        {{-- <div class="bg-img" data-background="ui/assets/img/bg-img/page-header-bg.png"></div> --}}
        <div class="overlay"></div>
        <div class="shapes">
            {{-- <div class="shape shape-1"><img src="ui/assets/img/shapes/page-header-shape-1.png" alt="shape"></div> --}}
            <div class="shape shape-2"><img src="ui/assets/img/shapes/page-header-shape-2.png" alt="shape"></div>
            <div class="shape shape-3"><img src="ui/assets/img/shapes/page-header-shape-3.png" alt="shape"></div>
        </div>
    </div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Our Instructor</h1>
            <h4 class="sub-title"><a class="home" href="{{ route('home') }}">Home </a><span class="icon">/</span><a class="inner-page" href="{{ route('gallery') }}"> Our Gallery</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->

<section class="team-section pt-120 pb-120">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            @foreach ($gallery as $item)    
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-item-2 wow fade-in-bottom" data-wow-delay="200ms">
                    <div class="team-thumb">
                        <img src="{{ Storage::url($item->image) }}" alt="team">
                        <center>   
                            <div class="team-content">
                                <div class="instructor-info text-center">
                                    <h2 class="title">{{ $item->name }}</h2>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ./ team-section -->
@endsection