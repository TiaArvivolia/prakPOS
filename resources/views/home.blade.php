<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Point of Sales</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef; /* Light grey background */
        }
        .hero-section {
            background: linear-gradient(to right, #343a40, #495057); /* Dark grey gradient */
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .hero-subtitle {
            font-size: 1.2rem;
            margin-top: 15px;
            font-weight: 300;
        }
        .btn-custom {
            background-color: #ffffff;
            color: #343a40;
            border: 2px solid #343a40;
            padding: 12px 24px;
            font-size: 1.1rem;
        }
        .btn-custom:hover {
            background-color: #343a40;
            color: #ffffff;
        }
        .features-section {
            margin-top: 50px;
        }
        .feature-card {
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: #ffffff;
            border-radius: 8px;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-icon {
            font-size: 3rem;
            color: #343a40;
        }
        .feature-title {
            font-size: 1.5rem;
            margin-top: 15px;
            font-weight: bold;
        }
        .feature-description {
            font-size: 1rem;
            color: #6c757d; /* Medium grey */
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1 class="hero-title">Welcome to the Point of Sales Application</h1>
            <p class="hero-subtitle">Simplify your sales process and manage your business efficiently.</p>
            <a href="#features" class="btn btn-custom btn-lg">Get Started</a>
        </div>
    </div>

    <!-- Features Section -->
    <section id="features" class="container features-section">
        <div class="row text-center">
            <div class="col-md-4">
                <a href="/prakPOS/public/category/food-beverage" class="text-decoration-none text-dark">
                    <div class="card feature-card shadow-sm p-4">
                        <i class="fas fa-box card-icon"></i>
                        <h3 class="feature-title">Manage Products</h3>
                        <p class="feature-description">Effortlessly manage your product listings, categories, and inventory.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/prakPOS/public/sales" class="text-decoration-none text-dark">
                    <div class="card feature-card shadow-sm p-4">
                        <i class="fas fa-chart-line card-icon"></i>
                        <h3 class="feature-title">Track Sales</h3>
                        <p class="feature-description">Keep track of all your sales transactions in one place.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/prakPOS/public/user/1/name/Tia" class="text-decoration-none text-dark">
                    <div class="card feature-card shadow-sm p-4">
                        <i class="fas fa-users card-icon"></i>
                        <h3 class="feature-title">Manage Users</h3>
                        <p class="feature-description">Easily handle customer, stakeholder, staff and team information.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>
