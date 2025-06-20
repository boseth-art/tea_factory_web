@extends('layouts')
@section('title','registration')
@section('content')

    <div class="container">
        <div class="container mt-5">
            <form action="/registration" method="POST" style="max-width: 500px; margin: auto;">
                @csrf
                <h2 class="mb-4 text-center">Register</h2>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>

    @endsection
