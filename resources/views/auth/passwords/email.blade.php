@extends('layouts.auth')
<!-- Password Reset Form --> 

@section('form')
<body class="font-muli theme-cyan gradient">

    <div class="auth option2">
        <div class="auth_left">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a class="header-brand" href="{{route('dash')}}"><i class="fa fa-graduation-cap brand-logo"></i></a>
                        <div class="card-title">Forgot password</div>

                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    </div>
                    <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail1">Email address</label>
                            <input 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="exampleInputEmail1" 
                            aria-describedby="emailHelp" 
                            placeholder="Enter email"
                            name="email" 
                            value="{{ old('email') }}" 
                            required autocomplete="email" 
                            autofocus
                            >

                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                        <div class="text-center">
                            <button 
                            type="submit" 
                            class="btn btn-primary btn-block"
                            >

                            Send me a new password
                        </button>
                            <div class="text-muted mt-4">Forget it, <a href="{{route('login')}}">Send me Back</a> to the Sign in screen.</div>
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
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input 
                                id="email" 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required autocomplete="email" 
                                autofocus
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
</div>
@endsection
