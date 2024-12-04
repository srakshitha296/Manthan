@extends('layouts.app')

@section('content')
<section class="page-header">
    <div class="bg-item">
        <div class="bg-img" data-background="ui/assets/img/bg-img/page-header-bg.png"></div>
        <div class="overlay"></div>
        <div class="shapes">
            <div class="shape shape-1"><img src="ui/assets/img/shapes/page-header-shape-1.png" alt="shape"></div>
            <div class="shape shape-2"><img src="ui/assets/img/shapes/page-header-shape-2.png" alt="shape"></div>
            <div class="shape shape-3"><img src="ui/assets/img/shapes/page-header-shape-3.png" alt="shape"></div>
        </div>
    </div>
    <div class="container">
        <div class="page-header-content">
            <h1 class="title">Blog Details</h1>
            <h4 class="sub-title"><a class="home" href="index.html">Home </a><span class="icon">/</span><a
                    class="inner-page" href="blog-details.html"> Blog Details</a></h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->

<section class="blog-details pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-top-wrap">
                    <div class="blog-details-top">
                        <div class="blog-details-thumb">
                            <img src="ui/assets/img/blog/blog-details-img.png" alt="blog">
                        </div>
                        <ul class="post-meta">
                            <li><i class="fa-sharp fa-regular fa-clock"></i>August 15, 2024</li>
                            <li><i class="fa-sharp fa-regular fa-folder"></i>Marketing</li>
                        </ul>
                    </div>
                    <div class="blog-details-content">
                        <h2 class="details-title">Get Started React JS Tutorial For Beginners</h2>
                        <p class="mb-20">Uniquely pursue emerging experiences before liemerging content. Efficiently
                            underwhelm customer directed total linkage after B2C synergy. Dynamically simplify superior
                            human capital whereas efficient infrastructures generate business web-readiness after
                            wireless outsourcing.</p>
                        <p class="mb-30">Assertively recaptiualize interdependent alignments via backend leadership
                            skills. Monotonectally formulate focused quality vectors whereas proactive infomediaries.
                            Energistically utilize ethical initiatives without impactful applications. Authoritatively
                            coordinate seamless e-services and user friendly information. Interactively initiate optimal
                            resources before e-business expertise</p>
                        <blockquote>
                            <p>Compellingly administrate functional information alue added web services onotonectally
                                repurpose interdependent technology whereas best-of-breed architectures.</p>
                            <h4 class="author">Ronald Richards</h4>
                        </blockquote>
                        <p class="mb-20">Appropriately mesh standards compliant communities vis-a-vis client-centric
                            channels. Seamlessly reinvent open-source data via bricks-and-clicks bandwidth. Globally
                            leverage other's inexpensive technologies vis-a-vis user friendly systems. Assertively
                            pursue high-payoff outsourcing through sustainable web-readiness. Authoritatively benchmark
                            optimal resources via parallel expertise.</p>
                        <p class="mb-40">Uniquely seize open-source synergy without leveraged functionalities.
                            Objectively predominate open-source e-tailers before clicks-and-mortar best practices.
                            Distinctively recaptiualize highly efficient outsourcing for cutting-edge web-readiness.
                            Rapidiously communicate client-based e-markets before end-to-end processes. Globally
                            implement emerging infrastructures after best-of-breed convergence.</p>
                        <div class="details-list-wrap">
                            <h3 class="list-title">Aduky is the only theme you will ever need</h3>
                            <p class="mb-40">Phosfluorescently incubate market-driven networks and synergistic
                                e-services. Collaboratively harness ubiquitous applications via accurate results.
                                Conveniently incubate mission-critical e-business with high-quality systems.
                                Interactively provide access to open-source e-business without compelling e-markets.
                                Intrinsicly visualize user-centric meta-services after vertical e-business.</p>
                            <div class="details-img">
                                <img src="ui/assets/img/blog/blog-details-img-2.png" alt="">
                            </div>
                        </div>
                        <p class="mt-30 mb-20">Globally cultivate ubiquitous growth strategies before team building
                            users. Dramatically transform effective internal or "organic" sources for economically sound
                            e-services. Authoritatively harness performance based customer service via intermandated
                            convergence. Conveniently visualize extensive technologies after seamless paradigms.
                            Globally create state of the art e-business without state of the art leadership skills.</p>
                        <p>Globally cultivate ubiquitous growth strategies before team building users. Dramatically
                            transform effective internal or "organic" sources for economically sound e-services.
                            Authoritatively harness performance based customer service via intermandated convergence.
                            Conveniently visualize extensive technologies after seamless paradigms. Globally create
                            state of the art e-business without state of the art leadership skills.
                            Completely seize seamless e-tailers whereas mission-critical ideas. Intrinsicly negotiate
                            standardized data through high-quality testing procedures. Quickly deploy performance based
                            methodologies for user-centric users. Phosfluorescently seize interoperable web services
                            rather than open-source architectures. Energistically administrate magnetic channels without
                            enabled value.
                        </p>
                        <div class="tag-wrap">
                            <div class="tags">
                                <h4 class="tag">Tags:</h4>
                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">Online</a></li>
                                    <li><a href="#">Remote</a></li>
                                </ul>
                            </div>
                            <div class="social-list-wrap">
                                <h4 class="share">Share:</h4>
                                <ul class="social-list">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-contact-form">
                    <h2 class="title">Leave a Reply</h2>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <div class="request-form">
                        <form action="https://html.rrdevs.net/edcare/mail.php" method="post" id="ajax_contact"
                            class="form-horizontal">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <input type="text" id="fullname" name="fullname" class="form-control"
                                            placeholder="Your Name">
                                        <div class="icon"><i class="fa-regular fa-user"></i></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-item">
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Your Email">
                                        <div class="icon"><i class="fa-sharp fa-regular fa-envelope"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item">
                                        <input type="text" id="website" name="website" class="form-control"
                                            placeholder="Website">
                                        <div class="icon"><i class="fa-light fa-globe"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-item message-item">
                                        <textarea id="message" name="message" cols="30" rows="5"
                                            class="form-control address" placeholder="Message"></textarea>
                                        <div class="icon"><i class="fa-light fa-messages"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ed-contact-input-remeber">
                                <input id="remeber" type="checkbox">
                                <label for="remeber">Save my name, email, and website in this browser for the next time
                                    I comment.</label>
                            </div>
                            <div class="submit-btn">
                                <button id="submit" class="ed-primary-btn" type="submit">Submit Message <i
                                        class="fa-sharp fa-regular fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-widget">
                    <h3 class="widget-title">Search</h3>
                    <div class="search-box">
                        <form action="#" class="search-form">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="search-btn" type="button">
                                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="sidebar-widget">
                    <h3 class="widget-title">Category</h3>
                    <ul class="category-list">
                        <li><a href="#"><i class="fa-sharp fa-solid fa-circle-check"></i>Development</a></li>
                        <li><a href="#"><i class="fa-sharp fa-solid fa-circle-check"></i>Education</a></li>
                        <li><a href="#"><i class="fa-sharp fa-solid fa-circle-check"></i>Expert Teachers</a></li>
                        <li><a href="#"><i class="fa-sharp fa-solid fa-circle-check"></i>Extra Classes</a></li>
                        <li><a href="#"><i class="fa-sharp fa-solid fa-circle-check"></i>Category</a></li>
                    </ul>
                </div>
                <div class="sidebar-widget">
                    <h3 class="widget-title">Recent Post</h3>
                    <div class="sidebar-post">
                        <img src="ui/assets/img/blog/sidebar-thumb-1.png" alt="post">
                        <div class="post-content">
                            <h3 class="title"><a href="#">A picture is worth standard and stand us return</a></h3>
                            <ul class="post-meta">
                                <li><i class="fa-light fa-user"></i>By Admin</li>
                                <li><i class="fa-sharp fa-regular fa-folder-open"></i>Category</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-post">
                        <img src="ui/assets/img/blog/sidebar-thumb-2.png" alt="post">
                        <div class="post-content">
                            <h3 class="title"><a href="#">Shape your future with education Quality</a></h3>
                            <ul class="post-meta">
                                <li><i class="fa-light fa-user"></i>By Admin</li>
                                <li><i class="fa-sharp fa-regular fa-folder-open"></i>Category</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-post">
                        <img src="ui/assets/img/blog/sidebar-thumb-3.png" alt="post">
                        <div class="post-content">
                            <h3 class="title"><a href="#">Pipe Dreams, Real Solutions Your Trusted</a></h3>
                            <ul class="post-meta">
                                <li><i class="fa-light fa-user"></i>By Admin</li>
                                <li><i class="fa-sharp fa-regular fa-folder-open"></i>Category</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sidebar-widget sticky-widget">
                    <h3 class="widget-title">Tags</h3>
                    <ul class="tags">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Top</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">New</a></li>
                        <li><a href="#">Best</a></li>
                        <li><a href="#">Brutie</a></li>
                        <li><a href="#">Sonds</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ blog-details -->
@endsection