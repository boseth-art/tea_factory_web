@extends('layouts')

@section('title', 'Login')

@section('content')
    <div class="container mt-5">
        <!-- Error Message (if login fails) -->
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" style="width: 500px; margin: auto;">
            @csrf <!-- Security! Always include this -->

            <h2>Login</h2>

            <!-- Email (Remembered with Cookie) -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control"
                       value="{{ Cookie::get('remember_email') ?? '' }}" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <!-- "Remember Me" Checkbox (Uses Cookies) -->
            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input"
                    {{ Cookie::get('remember_email') ? 'checked' : '' }}>
                <label class="form-check-label">Remember Me</label>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
