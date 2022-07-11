@if (Route::has('login'))
    @auth
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src={{asset('images/logo.png')}} alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimoni</a>
                        </li>
                    </ul>
                    <div class="d-flex user-logged">
                        <a href="#">
                            Halo, Fatih
                            <img src={{asset('images/user_photo.png')}} class="user-photo" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    @else
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src={{asset('images/logo.png')}} alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimoni</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href={{ route('login') }} class="text-decoration-none me-3 px-4 py-2 rounded-pill mt-1" style="color:#FF4E3B; border: 1px solid #FF4E3B;">
                            Sign In
                        </a>
                        <a href={{ route('register') }} class="btn px-4 py-2 rounded-pill text-white mt-1" style="background-color: #FF4E3B;">
                            Sign Up
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    @endauth
@endif