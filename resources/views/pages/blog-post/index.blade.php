@extends('templates.structure')

@section('content')
    <!-- Page header -->
    <div class="page-top-section">
        <div class="overlay"></div>
        <div class="container text-right">
            <div class="page-info">
                <h2>Blog</h2>
                <div class="page-links">
                    <a href="#">Home</a>
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end-->


    <!-- page section -->
    <div class="page-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 blog-posts">
                    <!-- Single Post -->

                    <div class="single-post">
                        <div class="post-thumbnail">
                            <img src="{{ asset("img/$post->img") }}">

                            
                                

                                <div class="post-date">
                                    <h2>03</h2>
                                    <h3>Nov 2017</h3>
                                </div>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">{{ $post->titre }}</h2>
                            <div class="post-meta">
                                <a href="">Loredana Papp</a>
                                <a href="">Design, Inspiration</a>
                                <a href="">2 Comments</a>
                            </div>
                            <p>{{ $post->texte }}</p>
                        </div>
                        <!-- Post Author -->
                        <div class="author">
                            <div class="avatar">
                                <img src="img/avatar/03.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <h2>Lore Williams, <span>Author</span></h2>
                                <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut
                                    hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.
                                </p>
                            </div>
                        </div>






                        <!-- Post Comments -->
                        <div class="comments">
                            <h2>Comments (2)</h2>
                            @forelse ($post->comments as $i)
                                <ul class="comment-list">
                                    <li>
                                        <div class="avatar">
                                            <img src=" {{ $i->user->photo }}" alt="">
                                        </div>
                                        <div class="commetn-text">
                                            <h3> {{ $i->user->name }}</h3>
                                            <p> {{ $i->content }} </p>
                                        </div>
                                    </li>

                                </ul>
                            @empty
                                <div class="alert alert-info">aucune commantaire</div>
                            @endforelse
                        </div>

                        <!-- Commert Form -->


                        <div class="row">
                            <div class="col-md-9 comment-from">
                                <h2>Leave a comment</h2>
                                <form class="form-class" method="POST" action="{{ route('comments.store', $post) }}">
                                    @csrf

                                    <div class=" row">
                                        <div class="col-sm-6">
                                            <input type="text" name="name" placeholder="Your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="email" placeholder="Your email">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" name="subject" placeholder="Subject">
                                            <textarea name="content" placeholder="Message"></textarea>
                                            <button type="submit" class="site-btn">send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




                {{-- ////////////////// --}}

                {{-- <h1>COMMENTAIRES</h1>
                @forelse ($post->comments as $i)
                <div class="card">
                    <div class="card-body">
                        {{ $i->content }}

                    </div>
                    <div class="card-body">
                        {{ $i->user->name }}

                    </div>
                </div>
                @empty
                <div class="alert alert-info">aucune commantaire</div>
                @endforelse

                <form method="POST" action="{{ route('comments.store', $post) }}">
                    @csrf

                    <div class="form-group">

                        <label for="content">votre comantaire</label>
                        <textarea class="form-control" name="content" id="content" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">poste</button>
                </form> --}}


                {{-- //////////////////// --}}
                <!-- Sidebar area -->
                <div class="col-md-4 col-sm-5 sidebar">
                    <!-- Single widget -->
                    <div class="widget-item">
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Search">
                            <button class="search-btn"><i class="flaticon-026-search"></i></button>
                        </form>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Categories</h2>
                        <ul>
                            <li><a href="#">Vestibulum maximus</a></li>
                            <li><a href="#">Nisi eu lobortis pharetra</a></li>
                            <li><a href="#">Orci quam accumsan </a></li>
                            <li><a href="#">Auguen pharetra massa</a></li>
                            <li><a href="#">Tellus ut nulla</a></li>
                            <li><a href="#">Etiam egestas viverra </a></li>
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Instagram</h2>
                        <ul class="instagram">
                            <li><img src="img/instagram/1.jpg" alt=""></li>
                            <li><img src="img/instagram/2.jpg" alt=""></li>
                            <li><img src="img/instagram/3.jpg" alt=""></li>
                            <li><img src="img/instagram/4.jpg" alt=""></li>
                            <li><img src="img/instagram/5.jpg" alt=""></li>
                            <li><img src="img/instagram/6.jpg" alt=""></li>
                        </ul>
                    </div>
                    <!-- Single widget -->
                    {{-- <div class="widget-item">
                        <h2 class="widget-title">Tags</h2>
                      
                        <ul class="tag">

                            <x-tags :tags="$post->tags"></x-tags>
                          
                           
                        </ul>
                    </div> --}}



                    <div class="widget-item">
                        <h2 class="widget-title">Tags</h2>
                        <ul class="tag">
                           
                                
                            <x-tags :tags="$post->tags"></x-tags>

                            
                            
                         
                        </ul>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Quote</h2>
                        <div class="quote">
                            <span class="quotation">‘​‌‘​‌</span>
                            <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit
                                metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia
                                turpis at ultricies vestibulum.</p>
                        </div>
                    </div>
                    <!-- Single widget -->
                    <div class="widget-item">
                        <h2 class="widget-title">Add</h2>
                        <div class="add">
                            <a href=""><img src="img/add.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page section end-->


    <!-- newsletter section -->
    <div class="newsletter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>Newsletter</h2>
                </div>
                <div class="col-md-9">
                    <!-- newsletter form -->
                    <form class="nl-form">
                        <input type="text" placeholder="Your e-mail here">
                        <button class="site-btn btn-2">Newsletter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- newsletter section end-->

@stop
