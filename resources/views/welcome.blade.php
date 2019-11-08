@extends('layouts.app')

@section('content')
<section id="banner-section" class="py-4">
	<div class="container container1">
		<div class="row center signin_banner">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 id="head-banner">Welcome to Truckly</h1>
				<h4 class="highlight"><i class="fa fa-star" aria-hidden="true"></i> Delicious food delivered to you within 15 minutes!</i></h4>
			</div>
		</div>
	</div>
	<div class="container">
	<div class="banner-fold">
			<img src="/assets/banner.png" style="width: 100%; max-width: 600px;"/>
			<h4>Truckly is a fleet of food trucks located all over New York City. We are famous for our Asian fusion food. Our food has received tremendous praise from food critics such as Chase Green of Smart Eats and won the "Best New Chef" category at the 2016 NY Food Times Awards. We also pride ourselves in providing a seamless and fast delivery service with our state-of-the-art drone technology.
       </h4>
	</div>
</section>
<section id="body-section">
	<div class="jumbotron">
		<div class="container">
			<div class="row center white">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		  		<h4 id="head-banner center">We continue to provide a simple and speedy food delivery service with our industry leading drone delivery technology. The simple ordering process requires a quick location check to see if your home address is within 10 miles of our food trucks. Our mission is to provide our customers with a satisfying and delicious experience! </h4>
                <a href="/trucks" class="btn btn-primary btn-lg">Get Started</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="signin">
	<div class="container pt-5">
		<div class="row signin_form">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="text-center mb-5">Log into your Account</h1>
				<form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row login-form">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-center">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row login-form">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-center">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="d-flex justify-content-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-center">
                            <div class="d-flex justify-content-center flex-column">
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
</section>
@endsection

