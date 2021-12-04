<nav class="navbar py-3 navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{url('/home')}}">
            <img class="logo" src="{{ URL::asset('gambar/anoulogo.svg') }}" width="120">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item align-self-center">
                    <a class="nav-link ms-4" aria-current="page" href="{{url('/home')}}">Home</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link ms-4" aria-current="page" href="{{url('/download')}}">Download</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link ms-4 " aria-current="page" href="{{url('/about')}}">About</a>
                </li>

            </ul>
        </div>
    </div>
</nav>