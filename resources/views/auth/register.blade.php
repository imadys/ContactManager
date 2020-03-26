@extends('layouts.layout')

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">@lang('auth.Register')</h1>
                  </div>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" placeholder="@lang('auth.Name')">
                   
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="@lang('auth.Enter Email Address...')">
                   
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror"  placeholder="@lang('auth.Password')">
                   
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <div class="form-group">
                            <input type="password" name="password_confirmation" class=" mt-3 form-control form-control-user @error('password_confirmation') is-invalid @enderror" placeholder="@lang('auth.Confirm Password')">
                       
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class=" mt-3 btn btn-primary">
                                @lang('auth.Register')
                            </button>
                        </div>
                    </div>
                </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html"></a>
                    @if (Route::has('password.request'))
                    <a class="small" href="{{ route('password.request') }}">
                        @lang('auth.Forgot Password?')
                    </a>
                @endif
                  </div>
                  <div class="text-center">
                  <a class="small" href="{{route('register')}}">@lang('auth.Create an Account!')</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="col-md-12 text-center">
      <a class="small" href="/locale/ar">
        @lang('auth.AR') |
    </a>
    <a class="small" href="/locale/en">
        @lang('auth.EN')
    </a>
    </div>
  </div>
@endsection
