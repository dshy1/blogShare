@extends('layouts.app02')

@section('content')

<div class="d-flex align-items-center justify-content-center ht-100v">
      <img src="{{ asset('template-dark/img/bg04.jpg') }}" class="wd-100p ht-100p object-fit-cover" alt="">
      <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> jana <span class="tx-info">dash</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-60">The Admin Template For Perfectionist</div>
        
             <form method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <input id="email" type="email" class="form-control fc-outline-dark{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus />
                     @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div><!-- form-group -->

                  <div class="form-group">
                    <input id="password" type="password" class="form-control fc-outline-dark{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif


                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                  </div><!-- form-group -->

                  <button type="submit" class="btn btn-info btn-block">{{ __('Login') }}</button>

                  <div class="mg-t-60 tx-center">Not yet a member? 
                    <a href="#" class="tx-info">Sign Up</a>
                  </div>
              </form>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
</div>

@endsection
