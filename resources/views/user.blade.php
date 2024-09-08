<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Point of Sales</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5; /* Light grey background */
            color: #495057; /* Dark grey for text */
        }
        .profile-card {
            margin: 50px auto;
            max-width: 600px;
            padding: 30px;
            background-color: #ffffff; /* White background for profile card */
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .profile-card-header {
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .profile-card-header h1 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #343a40; /* Dark grey for text */
        }
        .profile-info {
            font-size: 1.1rem;
            margin: 10px 0;
        }
        .profile-info strong {
            font-weight: 600;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 1.1rem;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Profile Card -->
    <div class="container">
        <div class="profile-card">
            <div class="profile-card-header">
                <h1>Profile of {{ $name }}</h1>
            </div>
            <div class="profile-info">
                <p><strong>User ID:</strong> {{ $id }}</p>
                <!-- Add more user details here if needed -->
            </div>
            <div class="text-center">
                <a href="/prakPOS/public/" class="btn btn-custom">Back to Home</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
