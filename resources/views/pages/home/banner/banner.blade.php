<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($logo as $i)
                <img class="logo2" src="{{ asset("/img/$i->img") }}" alt="">

            @endforeach

            @foreach ($titreSlogan as $i)
                <p>{{ $i->titre }}</p>
            @endforeach

        </div>
    </div>

    <!-- slider -->

    <div id="hero-slider" class="owl-carousel">
        @foreach ($banner as $i)
            <div class="item  hero-item" data-bg="{{ asset("/img/$i->img") }}"></div>

        @endforeach

    </div>


</div>
<!-- Intro Section -->
