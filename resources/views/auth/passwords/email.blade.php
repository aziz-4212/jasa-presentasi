@extends('layouts.guest')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
                    <h5 style="font-weight: 600; font-size: 22px;">Reset Password</h5>
                    <p style="font-weight: 400; font-size: 16px; color:#888888;">Atur Ulang Password Kamu</p>
                </div>
            </section>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <section class="d-grid gap-3" style="margin-bottom: 30px;">
                    <div>
                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500; font-size:16px;">Email</label>
                        <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </section>
                <button type="submit" class="btn w-100 rounded-pill text-white border-0 h-50" style="background-color: #FF4E3B;">Send Password Reset Link</button>
            </form>
        </section>
    </div>
</section>
@endsection
