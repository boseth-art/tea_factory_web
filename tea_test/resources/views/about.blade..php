<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Leaf Tea Factory - About Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Georgia', serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            margin-bottom: 30px;
        }
        .tea-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .tea-card:hover {
            transform: translateY(-5px);
        }
        .process-step {
            text-align: center;
            padding: 20px;
        }
        .process-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #28a745;
        }
        .stat-box {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://via.placeholder.com/150x50?text=Golden+Leaf" alt="Golden Leaf Tea Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.html">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-3 fw-bold mb-4">Golden Leaf Tea Factory</h1>
        <p class="lead mb-5">Three generations of tea craftsmanship since 1950</p>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9" alt="Tea plantation" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Heritage</h2>
                <p class="lead">From leaf to cup - a journey of excellence</p>
                <p>Founded in 1950, Golden Leaf Tea Factory has been producing premium quality teas using traditional methods combined with modern technology. Our tea gardens are located in the pristine highlands where the perfect combination of altitude, soil, and climate creates the ideal conditions for growing exceptional tea.</p>
                <p>We are committed to sustainable farming practices that protect the environment while delivering the finest teas to our customers worldwide.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tea Production Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Tea Production Process</h2>
        <div class="row">
            <div class="col-md-4 process-step">
                <div class="process-icon">
                    <i class="bi bi-tree"></i>
                </div>
                <h4>Harvesting</h4>
                <p>Only the finest two leaves and a bud are hand-picked at peak freshness from our organic tea gardens.</p>
            </div>
            <div class="col-md-4 process-step">
                <div class="process-icon">
                    <i class="bi bi-moisture"></i>
                </div>
                <h4>Withering</h4>
                <p>Natural moisture reduction prepares leaves for processing while developing complex flavors.</p>
            </div>
            <div class="col-md-4 process-step">
                <div class="process-icon">
                    <i class="bi bi-gear"></i>
                </div>
                <h4>Processing</h4>
                <p>Traditional rolling, oxidizing, and drying methods create our signature tea profiles.</p>
            </div>
        </div>
    </div>
</section>

<!-- Quality Section -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4">Commitment to Quality</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="stat-box">
                    <h3>Quality Assurance</h3>
                    <p>Every batch undergoes rigorous testing by our master tea tasters to ensure consistent quality and flavor profiles.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="stat-box">
                    <h3>Sustainability</h3>
                    <p>We implement eco-friendly practices including rainwater harvesting, solar power, and organic farming methods.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Tea Masters</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card tea-card h-100">
                    <img src="https://via.placeholder.com/300x200?text=Tea+Master" class="card-img-top" alt="Tea Master">
                    <div class="card-body">
                        <h5 class="card-title">Mr. Li Wei</h5>
                        <p class="card-text">Head Tea Master with 40 years of experience in tea processing and blending.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card tea-card h-100">
                    <img src="https://via.placeholder.com/300x200?text=Tea+Taster" class="card-img-top" alt="Tea Taster">
                    <div class="card-body">
                        <h5 class="card-title">Ms. Aisha Patel</h5>
                        <p class="card-text">Master Tea Taster ensuring consistent quality across all our tea varieties.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card tea-card h-100">
                    <img src="https://via.placeholder.com/300x200?text=Garden+Manager" class="card-img-top" alt="Garden Manager">
                    <div class="card-body">
                        <h5 class="card-title">Mr. Rajiv Fernando</h5>
                        <p class="card-text">Garden Manager overseeing our sustainable farming practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-success text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Golden Leaf Tea Factory</h5>
                <p>Premium quality teas crafted with tradition and care since 1950.</p>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.html" class="text-white">Home</a></li>
                    <li><a href="about.html" class="text-white">About</a></li>
                    <li><a href="products.html" class="text-white">Products</a></li>
                    <li><a href="contact.html" class="text-white">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Connect With Us</h5>
                <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white"><i class="bi bi-pinterest"></i></a>
            </div>
        </div>
        <hr class="my-4 bg-light">
        <div class="text-center">
            <p class="mb-0">&copy; 2023 Golden Leaf Tea Factory. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</body>
</html>
