@extends('layouts.main')

@section('container')
<link href="css/bs5/bootstrap.min.css" rel="stylesheet">
<style>
    .login-card {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #ebebeb;
    }

    .login-container {
        width: 100%;
        max-width: 400px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        padding: 2rem;
    }

    .login-header {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .login-header h1 {
        font-size: 1.8rem;
        color: #333333;
    }

    .form-control {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #6e8efb;
        box-shadow: 0 0 0 0.25rem rgba(110, 142, 251, 0.25);
        transform: scale(1.02);
    }

    .btn-primary {
        background: #717fe0;
        border: none;
    }

    .btn-primary:hover {
        background: #6e8efb;
    }

    .login-footer {
        text-align: center;
        margin-top: 1.5rem;
    }

    .login-footer a {
        color: #717fe0;
        text-decoration: none;
    }

    .login-footer a:hover {
        color: #6e8efb;
    }
</style>

<div class="login-card">
    <div class="login-container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="login-header">
            <h1>Login</h1>
        </div>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="button" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="login-footer">
            <p class="mt-3">Don't have an account? <a href="/register">Sign Up</a></p>
        </div>
    </div>
</div>


<script src="js/bs5/bootstrap.bundle.min.js"></script>
{{-- <script>
    onclick="handleLogin()"
    function handleLogin() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if (username && password) {
            alert(`Welcome, ${username}!`);
        } else {
            alert('Please fill in both fields.');
        }
    }
</script> --}}
@endsection
