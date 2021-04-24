@extends('layouts.auth')
@section('page-title', 'User Registration')
@section('form')
<body class="font-muli theme-cyan gradient">

    <div class="auth option2">
        <div class="auth_left">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a class="header-brand" href="/dashboard">
                            <img src="{{asset('images/favicon.png')}}" class="brand-logo" width="50px" height="50px">
                            {{-- <i class="fa fa-graduation-cap brand-logo"></i> --}}
                        </a>
                        <div class="card-title mt-3">Create new account</div>
                    <!--    <button type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</button>
                        <button type="button" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</button>
                        <h6 class="mt-3 mb-3">Or</h6>
                    --> 
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                          
                            <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            placeholder="Enter name"
                            name="name" 
                            value="{{ old('name') }}" 
                            required autocomplete="name" 
                            autofocus
                            >

                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group">
                       
                            <input 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror"  
                            placeholder="Enter email"
                            
                            name="email" value="{{ old('email') }}" 
                            required autocomplete="email"
                            >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                        
                            <input 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            placeholder="Password"
                            name="password" 
                            required autocomplete="new-password"
                            >

                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            

                        </div>
                        <div class="form-group"> 
                         
                            <input 
                                type="password" 
                                class="form-control" 
                                name="password_confirmation" 
                                required autocomplete="new-password"
                                placeholder="Confirm Password"
                                >

                        </div> 
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="form-group">
                                <label class="custom-control custom-checkbox"> 
                                
                            <input 
                            type="checkbox" 
                            class="custom-control-input" 
                            name="terms"
                            id="terms"
                            />
                                
                            <span class="custom-control-label">Agree to <a href="{{route('terms.show')}}">terms of use policy</a></span>
                                </label>
                            </div>
                        @endif  
                        <div class="text-center">

                            <button type="submit" class="btn btn-primary btn-block">Create new account</button>

                            

                            <div class="text-muted mt-4">Already have account? <a href="{{route('login')}}">Sign in</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection