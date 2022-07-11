@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="row container-fluid align-items-center">
        <div class="d-none d-md-block col-sm-6 col-md-6 col-lg-6" style="height: 100vh; background-color: #FF4E3B;">
            <img class="w-100 my-5" src={{asset('images/ill_login_new.png')}} alt="">
        </div>
        <div class="d-block col-12 col-sm-6 col-md-6 col-lg-6">
            <section class="card p-4 mx-auto" style="border: none; width: 24rem;">
                <section style="margin-bottom: 15px;">
                    <img class="w-50" style="margin-bottom: 30px;" src={{asset('images/Logo.png')}} alt="">
                    <div class="d-flex flex-column">
                        <h5 style="font-weight: 600; font-size: 22px;">Masuk</h5>
                        <p style="font-weight: 400; font-size: 16px; color:#888888;">Mulai sekarang, atau tidak sama sekali</p>
                    </div>
                </section>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <section class="d-grid gap-3" style="margin-bottom: 30px;">
                        <div>
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500; font-size:16px;">Email</label>
                            <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500; font-size:16px;">Password</label>
                            <input type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" id="exampleFormControlInput1" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </section>
                    <button type="submit" class="btn w-100 rounded-pill text-white border-0 h-50" style="background-color: #FF4E3B;">Lanjutkan</button>
                </form>
                <span class="text-center my-2" style="font-weight: 500; font-size: 16px; color:#555555;">atau</span>
                <button type="submit" class="btn w-100 border border-1 rounded-pill d-flex align-items-center">
                    <div class="mx-auto d-flex align-items-center" style="gap: .5rem;">
                        <img style="width: 1.5rem;" src={{asset('images/icons8-google-48.png')}} alt="">
                        <p class="mb-0">Masuk dengan Google</p>
                    </div>
                </button>
            </section>
        </div>
    </section>

@endsection
