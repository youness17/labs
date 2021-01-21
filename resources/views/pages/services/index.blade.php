@extends('templates.structure')

@section('content')

    <!-- Page header -->
    <div class="page-top-section">
        <div class="overlay"></div>
        <div class="container text-right">
            <div class="page-info">
                <h2>Services</h2>
                <div class="page-links">
                    <a href="#">Home</a>
                    <span>Services</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Page header end-->

    @include('pages.services.services.index')

    @include('pages.services.services-primes.index')

    @include('pages.services.blog-rapides.index')

    @include('pages.newsletters.index')

    @include('pages.contact.contactinfo.index')


    


@endsection
