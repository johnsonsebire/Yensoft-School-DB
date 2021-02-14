@extends('layouts.auth')
@section('page-title', 'User Access')
@section('form')

    <div class="auth option2">
        <div class="auth_left">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a class="header-brand" href="{{route('dashboard')}}">
                            <img src="{{asset('images/favicon.png')}}" class="brand-logo" width="50px" height="50px"> 
                            {{-- <i class="fa fa-graduation-cap brand-logo"></i> --}}
                        </a>
                        <div class="card-title mt-3">Login to your account</div>
                       <!-- <button type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</button>
                        <button type="button" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</button>
                        <h6 class="mt-3 mb-3">Or</h6>
                       -->
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">

                            <input 
                            type="email"
                            class="form-control @error('email') is-invalid @enderror" 
                            id="exampleInputEmail1" 
                            aria-describedby="emailHelp" 
                            placeholder="Enter email"
                            name="email"

                            value="{{ old('email') }}"
                            required autocomplete="email" autofocus
                            />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" 
                                class="float-right small">Password Reset</a>
                            @endif
                                
                                </label>
                            
                            <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="exampleInputPassword1" 
                            placeholder="Password"
                            name="password"
                            required autocomplete="current-password"
                            
                            />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                            <input 
                            type="checkbox" 
                            class="custom-control-input" 
                            name="remember"
                            {{ old('remember') ? 'checked' : '' }}
                            />
                          
                            <span class="custom-control-label">Remember me</span>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block" title="">Sign in</button>

                           

                            <div class="text-muted mt-4">Don't have account yet? 
                                
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}">Sign up</a>
                        @endif
                                                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
@endsection