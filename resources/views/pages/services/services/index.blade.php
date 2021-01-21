<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            
            {{-- <h2>{!! $str6 !!}</h2> --}}
            <h2>GET IN THE LAB AND SEE THE SERVICES</h2>
            
        </div>
        <div class="row">
            <!-- single service -->
            
            @foreach ($services->take(-9) as $i)
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="{{ $i->icone->icone}}"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{ $i->titre }}</h2>
                        <p>{{ $i->texte }}</p>
                    </div>
                </div>
            </div>
                
            @endforeach
            <div class="w-100">
                <div class="text-center">
                    {{-- {{ $services->links() }} --}}
                </div>
            </div>
            
           
        </div>
        <div class="text-center">
            
            <a href="{{ route("services") }}#servicePrime" class="site-btn">boutton</a>
                
            
            
        </div>
    </div>
</div>
<!-- services section end -->