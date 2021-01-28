<!-- single testimonial -->
@foreach ($testimonials as $i)
    <div class="testimonial">
        <span>‘​‌‘​‌</span>
        <p>{{ $i->text }}</p>
        <div class="client-info">
            <div class="avatar">
                <img src="{{ asset("img/$i->img") }}" alt="">
            </div>
            <div class="client-name">
                <h2>{{ $i->name }}</h2>
                <p>{{ $i->job }}</p>
            </div>
        </div>
    </div>
@endforeach


