<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach ($services->take(3) as $i)
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{ $i->icone->icone }}"></i>
                            </div>
                            <h2>{{ $i->titre }}</h2>
                            <p>{{ $i->texte }}</p>
                        </div>
                    </div>
                @endforeach
                <!-- single card -->

            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    @foreach ($about as $i)
        <div class="about-contant">
            <div class="container">
                <div class="section-title">
                    <h2>{{ $i->titre }}</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>{{ $i->texte }}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{ $i->texte2 }}</p>
                    </div>
                </div>
                <div class="text-center mt60">
                    <a href="" class="site-btn">{{ $i->btn }}</a>
                </div>
    @endforeach

    <!-- popup video -->


    @foreach ($video as $i)

        <div class="intro-video">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <img src="{{ asset("img/$i->img") }}" alt="">
                    <a href="{{ $i->url }}" class="video-popup">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>


    @endforeach





</div>
</div>
</div>
<!-- About section end -->
