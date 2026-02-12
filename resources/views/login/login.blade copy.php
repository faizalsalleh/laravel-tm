@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5 col-md-8">
        <div class="card p-4 shadow-sm border-0">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h1 class="h3 mb-3 fw-bold">Laravel TM</h1>
                    <p class="text-muted">Sign In to your account</p>
                </div>
                
                <form action="#" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="cil-user"></i>
                        </span>
                        <input class="form-control bg-light border-start-0" type="email" name="email" placeholder="Email" required autofocus>
                    </div>
                    
                    <div class="input-group mb-4">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="cil-lock-locked"></i>
                        </span>
                        <input class="form-control bg-light border-start-0" type="password" name="password" placeholder="Password" required>
                    </div>
                    
                    <div class="row items-center mb-4">
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label text-muted small" for="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn btn-link px-0 text-decoration-none small" type="button">Forgot password?</button>
                        </div>
                    </div>
                    
                    <div class="d-grid">
                        <button class="btn btn-primary px-4 py-2 fw-bold" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center mt-4">
            <p class="text-muted small">New here? <a href="#" class="text-decoration-none fw-bold">Create Account</a></p>
        </div>
    </div>
</div>
@endsection
