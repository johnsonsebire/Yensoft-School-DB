@extends('layouts.auth')

@section('form')
<body class="font-muli theme-cyan gradient">

    <div class="auth option2">
        <div class="auth_left">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a class="header-brand" href="{{route('dash')}}"><i class="fa fa-graduation-cap brand-logo"></i></a>
                        <div class="card-title">Create new account</div>
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
                        <div class="form-group">
                            <label class="custom-control custom-checkbox"> 
                            
                           <input 
                           type="checkbox" 
                           class="custom-control-input" 
                           
                           />
                            
                           <span class="custom-control-label">Agree to <a href="{{route('terms.usage')}}">terms of use policy</a></span>
                            </label>
                        </div>
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


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6"> 

                                <input 
                                id="name" 
                                type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                name="name" 
                                value="{{ old('name') }}" required 
                                autocomplete="name" 
                                autofocus
                                >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">

                                <input 
                                id="email" 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" 
                                required autocomplete="email"
                                >
 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input 
                                id="password" 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6"> 
                                <input 
                                id="password-confirm" 
                                type="password" 
                                class="form-control" 
                                name="password_confirmation" 
                                required autocomplete="new-password">
                            </div>
                        </div>
                    
                    

                        <div class="form-group row mb-0">
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
</div>
@endsection
