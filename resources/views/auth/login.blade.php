@extends('layout.master-mini')
@section('content')
    <div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one"
         style="background-image: url({{ asset('public/fast_couriers_uk_banner.jpg') }}); background-size: cover;">
        <div class="row w-100">
            <div class="col-lg-4 mx-auto">
                <div class="auto-form-wrapper">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="label">Username</label>
                            <div class="input-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                                <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label">Password</label>
                            <div class="input-group">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">


                                <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn submit-btn btn-block"
                                    style="background:#AA1818;border:none;color:white;">Login
                            </button>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="form-check form-check-flat mt-0">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Keep me signed in </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-small forgot-password text-black">Forgot
                                Password</a>
                        </div>

                        <div class="text-block text-center my-3">
                            <span class="text-small font-weight-semibold">Not a member ?</span>
                            <a href="{{ url('/register') }}" class="text-black text-small">Create new account</a>
                        </div>
                    </form>
                </div>
                {{--                <ul class="auth-footer">--}}
                {{--                    <li>--}}
                {{--                        <a href="#">Conditions</a>--}}
                {{--                    </li>--}}
                {{--                    <li>--}}
                {{--                        <a href="#">Help</a>--}}
                {{--                    </li>--}}
                {{--                    <li>--}}
                {{--                        <a href="#">Terms</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
        </div>
    </div>

@endsection
