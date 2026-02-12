@extends('layouts.app')

@section('content')
<div class="login-page min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card glass-card p-4">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h1 class="text-white fw-bold mb-2">Welcome Back</h1>
                            <p class="text-white-50">Sign In to continue to TM Portal</p>
                        </div>
                        <form method="POST" action="{{ route('login.submit') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="text-white-50 small mb-2">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="icon icon-user"></i>
                                    </span>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                                </div>
                                @error('email')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="text-white-50 small mb-2">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="icon icon-lock-locked"></i>
                                    </span>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="••••••••" required>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input bg-transparent border-white-50" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-white-50 small" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="#" class="text-white-50 small text-decoration-none">Forgot Password?</a>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="login-error" value="{{ session('login_error') }}">
<script>
    <?php include resource_path('views/login/login-js/invalid.js'); ?>
</script>
@endsection