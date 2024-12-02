@extends('layouts.app')

@section('content')
<section class="page-header">
    <div class="bg-item">
        {{-- <div class="bg-img" data-background="ui/assets/img/bg-img/page-header-bg.png"></div> --}}
        <div class="overlay"></div>
        <div class="shapes">
            {{-- <div class="shape shape-1"><img src="{{ asset('ui/assets/img/shapes/page-header-shape-1.png') }}" alt="shape"></div> --}}
            <div class="shape shape-2"><img src="{{ asset('ui/assets/img/shapes/page-header-shape-2.png') }}" alt="shape"></div>
            <div class="shape shape-3"><img src="{{ asset('ui/assets/img/shapes/page-header-shape-3.png') }}" alt="shape"></div>
        </div>
    </div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Event Page</h1>
            <h4 class="sub-title"><a class="home" href="{{ route('home') }}">Home </a><span class="icon">/</span>
                <a class="inner-page" href="{{ route('events') }}"> Events </a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->

<section class="features-event pt-120 pb-120">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-1.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">Engaging Students in Real-World <br>Problems Finding</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-2.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">Innovative Teaching Strategies for <br>the 21st Century Classroom</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="600ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-3.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">Impact of Artificial Intelligence on <br>the Future of Education</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-4.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">Teaching Students to Think Beyond <br>the Textbook</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-1.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">Creating Learning Environments for Students of All Abilities</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="600ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-1.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">Role of Social-Emotional Learning <br>in Student Success</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-1.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">Project-Based Learning: Engaging <br>Students Through Real-World </a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-1.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">How Meaningful Assignments Can <br>Drive Deeper Learning</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="event-item wow fade-in-bottom" data-wow-delay="600ms">
                    <div class="event-thumb">
                        <img src="{{ asset('ui/assets/img/images/event-img-1.png') }}" alt="event">
                        <div class="date-wrap"><h5 class="date">15 <span>Dec</span></h5></div>
                    </div>
                    <div class="event-content">
                        <span class="time"><i class="fa-regular fa-clock"></i> 7:00 pm - 9:00 pm</span>
                        <h3 class="title"><a href="{{ route('events.show') }}">Innovative Teaching Strategies for <br>the 21st Century Classroom</a></h3>
                        <div class="location"><span><i class="fa-regular fa-location-dot"></i>Springfield, IL 62704 United States</span></div>
                        <a href="{{ route('events.show') }}" class="ed-primary-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ features-event -->
@endsection