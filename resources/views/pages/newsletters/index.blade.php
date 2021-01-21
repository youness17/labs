<!-- newsletter section -->


<!-- newsletter form -->


@if (Route::has('login'))

    @auth
        <div class="newsletter-section spad">
            <div class="row">
                <div>
                    <h2 class="text-center">vous êtes inscrit </h2>
                </div>
            </div>
        </div>
    @else
        <div class="newsletter-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2>Newsletter</h2>
                    </div>
                    <div class="col-md-9">
                        <form class="nl-form" action="{{ route('newsletter.store') }}" method="POST">
                            @csrf
                            <input name="email" type="text" placeholder="Your e-mail here">
                            <button type="submit" class="site-btn btn-2">Newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth

@endif


{{-- <input name="email" type="text" placeholder="Your e-mail here">
<button type="submit" class="site-btn btn-2">Newsletter</button> --}}
{{--
</div>
</div>
</div> --}}

<!-- newsletter section end-->
