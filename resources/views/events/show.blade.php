@extends('layouts.app')

@section('content')
<section class="page-header">
    <div class="bg-item">
        <div class="bg-img" data-background="{{ asset('ui/assets/img/bg-img/page-header-bg.png') }}"></div>
        <div class="overlay"></div>
        <div class="shapes">
            <div class="shape shape-1"><img src="{{ asset('ui/assets/img/shapes/page-header-shape-1.png') }}" alt="shape"></div>
            <div class="shape shape-2"><img src="{{ asset('ui/assets/img/shapes/page-header-shape-2.png') }}" alt="shape"></div>
            <div class="shape shape-3"><img src="{{ asset('ui/assets/img/shapes/page-header-shape-3.png') }}" alt="shape"></div>
        </div>
    </div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Event Details</h1>
            <h4 class="sub-title"><a class="home" href="{{ route('home') }}">Home </a><span class="icon">/</span>
                <a class="inner-page" href="{{ route('events.show') }}"> Event Details</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->

<section class="event-details pt-120 pb-120">
    <div class="container">
        <div class="row gy-xl-0 gy-5">
            <div class="col-lg-8 col-md-12">
                <div class="event-details-content">
                    <div class="event-details-img">
                        <img src="ui/assets/img/images/event-details.png" alt="event">
                    </div>
                    <h2 class="title">Event Overview</h2>
                    <p class="mb-30">In today's rapidly evolving educational landscape, traditional teaching methods are being reimagined to meet the needs of a new generation of learners. The "Innovative Teaching Strategies for the 21st Century Classroom" event is designed to empower educators with cutting-edge tools, techniques, and insights that are transforming how we approach teaching and learning. This event will explore a wide range of innovative strategies, from integrating technology and fostering collaboration to promoting critical thinking and creativity in the classroom. Participants will engage with thought leaders and experienced educators who are at the forefront of educational innovation.</p>
                    <p class="mb-30">Through interactive workshops, panel discussions, and hands-on sessions, attendees will gain practical knowledge and actionable ideas to enhance student engagement, personalize learning experiences, and prepare students for the challenges of the modern world. Whether you're a seasoned educator or new to the profession, this event offers valuable opportunities to rethink your approach and inspire your students in ways that are both impactful and relevant in the 21st century.</p>
                    <ul class="event-details-list">
                        <li>
                            <i class="fa-sharp fa-regular fa-circle-check"></i><p><span>Define Clear Objectives:</span> Establish specific goals for the event, such as enhancing participants' knowledge of innovative teaching techniques or providing actionable strategies for classroom implementation.</p>
                        </li>
                        <li>
                            <i class="fa-sharp fa-regular fa-circle-check"></i><p><span>Curate Expert Speakers:</span> Establish specific goals for the event, such as enhancing participants' knowledge of innovative teaching techniques or providing actionable strategies for classroom implementation.</p>
                        </li>
                        <li>
                            <i class="fa-sharp fa-regular fa-circle-check"></i><p><span>Design Interactive Sessions:</span> Establish specific goals for the event, such as enhancing participants' knowledge of innovative teaching techniques or providing actionable strategies for classroom implementation.</p>
                        </li>
                    </ul>
                    <h2 class="title">Check Live Map</h2>
                    <div class="event-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8826.923787362664!2d-118.27754354757262!3d34.03471770929568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1566525118697!5m2!1svi!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <h2 class="title">Event Speakers</h2>
                    <div class="row gy-xl-0 gy-4 inner-team-wrap justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="team-item-3 bg-white wow fade-in-bottom" data-wow-delay="200ms">
                                <div class="team-thumb-wrap">
                                    <div class="team-thumb">
                                        <img src="ui/assets/img/team/team-9.png" alt="team">
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Mason D. Logan</a></h3>
                                    <span>IT Trainier</span>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="team-item-3 wow fade-in-bottom" data-wow-delay="400ms">
                                <div class="team-thumb-wrap">
                                    <div class="team-thumb">
                                        <img src="ui/assets/img/team/team-10.png" alt="team">
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">Isabella E. Olivia</a></h3>
                                    <span>IT Trainier</span>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="team-item-3 wow fade-in-bottom" data-wow-delay="500ms">
                                <div class="team-thumb-wrap">
                                    <div class="team-thumb">
                                        <img src="ui/assets/img/team/team-11.png" alt="team">
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="title"><a href="team-details.html">David R. Connor</a></h3>
                                    <span>IT Trainier</span>
                                    <ul class="social-list">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="course-sidebar price-box event-sidebar">
                    <a href="contact.html" class="ed-primary-btn">Add to Calender</a>
                    <a href="contact.html" class="ed-primary-btn buy-btn">Ical Export</a>
                </div>
                <div class="course-sidebar event-sidebar sticky-widget">
                    <h4 class="sidebar-title">Event Information</h4>
                    <ul class="course-sidebar-list">
                        <li><i class="fa-light fa-calendar-days"></i>Date: <span>August 25, 2022</span></li>
                        <li><i class="fa-regular fa-clock"></i>Time: <span>8:00 am - 5:00 pm</span></li>
                        <li><i class="fa-regular fa-location-dot"></i>Venue: <span>School Of Arts</span></li>
                        <li><i class="fa-sharp fa-regular fa-map"></i>Address: <span>256 SDY Oliva St.</span></li>
                        <li><i class="fa-regular fa-user"></i>Name: <span>English</span></li>
                        <li><i class="fa-regular fa-phone"></i>Phone: <span><a href="tel:+25621522156">(+256) 2152 2156</a></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection