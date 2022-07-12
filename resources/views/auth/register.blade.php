@extends('layouts.guest')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
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
                        <h5 style="font-weight: 600; font-size: 22px;">Daftar</h5>
                        <p style="font-weight: 400; font-size: 16px; color:#888888;">Berani untuk memulai hal baru</p>
                    </div>
                </section>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <section class="d-grid gap-3" style="margin-bottom: 30px;">
                        <div>
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500; font-size:16px;">Nama <span style="font-weight: 400; color:#888888;">(Maks. 18 karakter)</span></label>
                            <input type="text" class="form-control rounded-pill @error('name') is-invalid @enderror" placeholder="Masukkan nama anda" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500; font-size:16px;">Email</label>
                            <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" placeholder="Masukkan email anda" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500; font-size:16px;">Password</label>
                            <input type="password" class="form-control rounded-pill @error('password') is-invalid @enderror"  id="password" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500; font-size:16px;">Confirm Password</label>
                            <input type="password" class="form-control rounded-pill" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </section>
                    <button type="submit" class="btn w-100 rounded-pill text-white border-0 h-50" style="background-color: #FF4E3B;">Daftar sekarang</button>
                </form>
            </section>
        </div>
    </section>
@endsection
