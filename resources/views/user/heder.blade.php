<!-- Header -->

<style>
    .goog-te-gadget-simple {
    width: 170px;
    height: 40px;
    border-left: none;
    border-top: none;
    border-bottom: none;
    border-right: none;
    font-size: 10pt;
    display: inline-block;
    padding-top: 1px;
    padding-bottom: 2px;
    cursor: pointer;
    border-radius: 10px;
}

</style>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><h2 style="font-family: 'Times New Roman', Times, serif;">JACK <em>Pets</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="font-family: 'Times New Roman', Times, serif;"  href="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-family: 'Times New Roman', Times, serif;" href="/abouthome">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-family: 'Times New Roman', Times, serif;" href="/Homeproduct">Our Products</a>
                    </li>

                    <!-- Google Translate Widget -->
                    <li class="nav-item">
                        <div class="nav-link" style="font-family: 'Times New Roman', Times, serif;" id="google_translate_element" style="    height: 42px;"></div>
                    </li>

                    <li class="nav-item">
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" style="font-family: 'Times New Roman', Times, serif;"  href="{{ url('showcart') }}">
                                    <i class="fas fa-shopping-cart"></i>
                                    Cart[{{ $count }}]</a>
                            </li>
                            <x-app-layout></x-app-layout>
                            @else
                            <li><a class="nav-link" style="font-family: 'Times New Roman', Times, serif;"  href="{{ route('login') }}" >Log in</a></li>
                                @if (Route::has('register'))
                                <li> <a class="nav-link" style="font-family: 'Times New Roman', Times, serif;"  href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
            <button type="button" class="close" data-dismiss="alert"> X </button>
        </div>
    @endif
</header>
