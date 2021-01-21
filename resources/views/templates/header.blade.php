    <!-- Header section -->
    <header class="header-section">
        @foreach ($logo as $i)
            <div class="logo">
                <img src="{{ asset("img/$i->img") }}" alt=""><!-- Logo -->
            </div>
        @endforeach

        <!-- Navigation -->
        <div class="responsive"><i class="fa fa-bars"></i></div>
        <nav>
            <ul class="menu-list">

                {{-- @foreach ($menu as $i)

                @endforeach --}}
                @foreach ($menus as $i)
                    <li><a href="{{ $i->link }}">{{ $i->name }}</a></li>
                @endforeach
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>

                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
               
                <li>
                    @if (Route::has('login'))

                        @auth
                            <a href="{{ route('admin') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth

                    @endif
                </li>
            </ul>
        </nav>
    </header>

    <!-- Header section end -->
