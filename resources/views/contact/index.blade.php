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
            <h1 class="title">Contact Us</h1>
            <h4 class="sub-title"><a class="home" href="index.html">Home </a><span class="icon">/</span><a class="inner-page" href="contact.html"> Contact Us</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->

<section class="contact-section pt-120 pb-120">
    <div class="container">
        <div class="row gy-lg-0 gy-5">
            <div class="col-lg-7">
                <div class="blog-contact-form contact-form">
                    <h2 class="title mb-0">Leave A Reply</h2>
                    <p class="mb-30 mt-10">Fill-up The Form and Message us of your amazing question</p>
                    <div class="request-form">
                        <form action="/" method="POST" id="ajax_contact" class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Your Name">
                                        <div class="icon"><i class="fa-regular fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                                        <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <div class="nice-select select-control form-control country" tabindex="0"><span class="current">Select Subject</span><ul class="list"><li data-value="" class="option selected focus">Select Subject</li><li data-value="vdt" class="option">Plan One</li><li data-value="can" class="option">Plan Two</li><li data-value="uk" class="option">Plan Three</li></ul></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item message-item">
                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control address" placeholder="Message"></textarea>
                                        <div class="icon"><i class="fa-light fa-messages"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button id="submit" class="ed-primary-btn" type="submit">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="contact-content">
                    <div class="contact-top">
                        <h3 class="title">Office Information</h3>
                        <p>Completely recapitalize 24/7 communities via standards compliant metrics whereas.</p>
                    </div>
                    <div class="contact-list">
                        <div class="list-item">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Phone Number & Email</h4>
                                <span><a href="tel:+65485965789">(+91) 901 - 9003 - 490</a></span>
                                <span><a href="mailto:hello@edcare.com">drshnbhandary@gmail.com</a></span>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Our Office Address</h4>
                                <p>3rd floor, <br>A J IET, MAngalore</p>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-clock"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Official Work Time</h4>
                                <span>Monday - Friday: 09:00 am - 08:00 pm</span>
                                <span>Sunday & Saturday: 10:30 am - 09:00 pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ contact-section -->
@endsection