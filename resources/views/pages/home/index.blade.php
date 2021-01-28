@extends('templates.structure')

@section('content')

    <!-- Intro Section -->

    @include('pages.home.banner.banner')

    <!-- Intro Section -->


    <!-- About section -->

    @include('pages.home.about.index')

    <!-- About section end -->


    <!-- Testimonial section -->
    <div class="testimonial-section pb100">
        <div class="test-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="section-title left">
                        <h2>What our clients say</h2>
                    </div>
                    <div class="owl-carousel" id="testimonial-slide">
                        <!-- single testimonial -->
                        @include('pages.home.testimonials.index')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section end-->


    <!-- Services section -->
    @include('pages.services.services.index')
    <!-- services section end -->


    <!-- Team Section -->
    <div class="team-section spad">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h2>Get in <span>the Lab</span> and meet the team</h2>
            </div>
            <div class="row">
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/1.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Project Manager</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/2.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Junior developer</h3>
                    </div>
                </div>
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/3.jpg" alt="">
                        <h2>Christinne Williams</h2>
                        <h3>Digital designer</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section end-->


    <!-- Promotion section -->
    <div class="promotion-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Are you ready to stand out?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
                </div>
                <div class="col-md-3">
                    <div class="promo-btn-area">
                        <a href="" class="site-btn btn-2">Browse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion section end-->


    <!-- Contact section -->
    @include('pages.contact.contactinfo.index')
    <!-- Contact section end-->


@endsection
