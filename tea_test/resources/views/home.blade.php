<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Leaf Tea Factory</title>
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
        .navbar-brand img {
            height: 50px;
        }
        .tea-card {
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .tea-card:hover {
            transform: translateY(-5px);
        }
        .footer {
            background-color: #2c3e50;
            color: white;
            padding: 30px 0;
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
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#process">Process</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-3 fw-bold mb-4">Golden Leaf Tea Factory</h1>
        <p class="lead mb-5">Crafting premium teas since 1950 with tradition and care</p>
        <a href="#products" class="btn btn-light btn-lg px-4">Explore Our Teas</a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9" alt="Tea plantation" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Our Heritage</h2>
                <p class="lead">Three generations of tea craftsmanship</p>
                <p>Founded in 1950, Golden Leaf Tea Factory has been producing premium quality teas using traditional methods combined with modern technology. Our tea gardens are located in the pristine highlands where the perfect combination of altitude, soil, and climate creates the ideal conditions for growing exceptional tea.</p>
                <p>We are committed to sustainable farming practices that protect the environment while delivering the finest teas to our customers worldwide.</p>
                <a href="#" class="btn btn-success mt-3">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Premium Tea Selection</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card tea-card h-100">
                    <img src="https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9" class="card-img-top" alt="Black Tea">
                    <div class="card-body">
                        <h5 class="card-title">Golden Black Tea</h5>
                        <p class="card-text">A robust, full-bodied tea with a rich amber color and smooth finish. Perfect for mornings.</p>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-success">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card tea-card h-100">
                    <img src="https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9" class="card-img-top" alt="Green Tea">
                    <div class="card-body">
                        <h5 class="card-title">Mountain Green Tea</h5>
                        <p class="card-text">Delicate and refreshing with subtle grassy notes and antioxidant benefits.</p>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-success">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card tea-card h-100">
                    <img src="https://images.unsplash.com/photo-1564890369478-c89ca6d9cde9" class="card-img-top" alt="Herbal Tea">
                    <div class="card-body">
                        <h5 class="card-title">Herbal Infusions</h5>
                        <p class="card-text">A selection of caffeine-free herbal blends with natural flavors and health benefits.</p>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-success">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Our Artisanal Process</h2>
        <div class="row">
            <div class="col-md-3 process-step">
                <div class="process-icon">
                    <i class="bi bi-tree"></i>
                </div>
                <h4>Harvesting</h4>
                <p>Hand-picked leaves from our organic tea gardens at peak freshness.</p>
            </div>
            <div class="col-md-3 process-step">
                <div class="process-icon">
                    <i class="bi bi-moisture"></i>
                </div>
                <h4>Withering</h4>
                <p>Natural moisture reduction to prepare leaves for processing.</p>
            </div>
            <div class="col-md-3 process-step">
                <div class="process-icon">
                    <i class="bi bi-gear"></i>
                </div>
                <h4>Processing</h4>
                <p>Rolling, oxidizing, and drying using traditional methods.</p>
            </div>
            <div class="col-md-3 process-step">
                <div class="process-icon">
                    <i class="bi bi-box-seam"></i>
                </div>
                <h4>Packaging</h4>
                <p>Carefully packed to preserve freshness and flavor.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">What Our Customers Say</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"The Golden Black Tea is simply exceptional. The aroma and flavor are unmatched by any other brand I've tried."</p>
                            <footer class="blockquote-footer">Sarah Johnson, <cite>Tea Connoisseur</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"I appreciate their commitment to sustainable practices. Great tea that's good for the planet too!"</p>
                            <footer class="blockquote-footer">Michael Chen, <cite>Eco Blogger</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"The Mountain Green Tea is my daily ritual. It's refreshing and gives me just the right energy boost."</p>
                            <footer class="blockquote-footer">Emma Rodriguez, <cite>Yoga Instructor</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-success text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4">Visit Us</h2>
                <p class="lead">Experience the world of Golden Leaf Tea</p>
                <address>
                    <strong>Golden Leaf Tea Factory</strong><br>
                    123 Tea Garden Road<br>
                    Highlands, TN 12345<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                <p>Factory tours available Monday-Friday by appointment</p>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Contact Form</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-light">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Golden Leaf Tea Factory</h5>
                <p>Premium quality teas crafted with tradition and care since 1950.</p>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#about" class="text-white">About</a></li>
                    <li><a href="#products" class="text-white">Products</a></li>
                    <li><a href="#contact" class="text-white">Contact</a></li>
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
        <hr class="mt-4 mb-4 bg-light">
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
