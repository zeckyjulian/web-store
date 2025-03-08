@extends('layouts.main')

@section('container')
<link href="css/bs5/bootstrap.min.css" rel="stylesheet">
<style>
    .register-card {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #ebebeb;
    }

    .register-container {
        width: 100%;
        max-width: 400px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        padding: 2rem;
    }

    .register-header {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .register-header h1 {
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

    .register-footer {
        text-align: center;
        margin-top: 1.5rem;
    }

    .register-footer a {
        color: #717fe0;
        text-decoration: none;
    }

    .register-footer a:hover {
        color: #6e8efb;
    }
</style>

<div class="register-card">
    <div class="register-container">
        <div class="register-header">
            <h1>Registration</h1>
        </div>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <div class="register-footer">
            <p class="mt-3">Have an account? <a href="/login">Log In</a></p>
        </div>
    </div>
</div>


<script src="js/bs5/bootstrap.bundle.min.js"></script>
{{-- <script>
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
