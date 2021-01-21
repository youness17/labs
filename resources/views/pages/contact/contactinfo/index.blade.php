<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            @foreach ($contactinfo as $i)
                <div class="col-md-5 col-md-offset-1 contact-info col-push">
                    <div class="section-title left">
                        <h2>{{ $i->titre1 }}</h2>
                    </div>
                    <p>{{ $i->texte }}</p>
                    <h3 class="mt60">{{ $i->titreinfo }}</h3>
                    <p class="con-item">{{ $i->adress }}<br>{{ $i->ville }} </p>
                    <p class="con-item">{{ $i->numero }}</p>
                    <p class="con-item">{{ $i->mail }}</p>
                </div>
            @endforeach
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form class="form-class" id="con_form" action="/mailcontact" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button  class="site-btn">SEND</button>
                        </div>
                    </div>
                </form>
            </div>

           

        </div>
    </div>
</div>
<!-- Contact section end-->
