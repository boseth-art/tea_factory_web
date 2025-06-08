@extends('layouts') {{-- Make sure this extends your main layout --}}

@section('title', 'Dashboard')

@section('content')
    <div class="container mt-4">
        <!-- Welcome message with user data from session -->
        @auth
            <div class="alert alert-success">
                Welcome back, {{ Auth::user()->email }}!
                <small class="float-end">
                    Last login: {{ session('last_login') ?? 'First time login!' }}
                </small>
            </div>
        @endauth

        <h1 class="text-center mb-4">Dashboard</h1>

        <div class="row">
            <!-- Left Navigation -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">Navigation</div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Overview</a>
                        <a href="#" class="list-group-item list-group-item-action">Reports</a>
                        <a href="#" class="list-group-item list-group-item-action">Users</a>
                        <a href="#" class="list-group-item list-group-item-action">Settings</a>

                        <!-- Logout Button -->
                        <form method="POST" action="{{ route('logout') }}" class="list-group-item">
                            @csrf
                            <button type="submit" class="btn btn-link text-danger p-0">Logout</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="row">
                    <!-- Stats Cards -->
                    <div class="col-md-4 mb-3">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h5 class="card-title">Total Sales</h5>
                                <p class="card-text">₹50,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card text-white bg-info">
                            <div class="card-body">
                                <h5 class="card-title">New Users</h5>
                                <p class="card-text">125</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <h5 class="card-title">Pending Orders</h5>
                                <p class="card-text">8</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Updates -->
                <div class="card mt-3">
                    <div class="card-header bg-secondary text-white">Recent Updates</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">New order received from John Doe.</li>
                        <li class="list-group-item">Product price updated by Admin.</li>
                        <li class="list-group-item">Monthly report generated.</li>
                        <li class="list-group-item">
                            <strong>Session Info:</strong>
                            You logged in at {{ now()->format('h:i A') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
