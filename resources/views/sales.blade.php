<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Sales - Transactions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons (Optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .page-header {
            background-color: #343a40;
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .page-title {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .container {
            margin-top: 30px;
        }
        .table-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .table-title {
            font-size: 1.8rem;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <h1 class="page-title">Sales Transaction Dashboard</h1>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="table-container">
            <h2 class="table-title">Recent Sales Transactions</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Transaction ID</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>T12345</td>
                        <td>2024-09-08</td>
                        <td>Tia Arvivolia</td>
                        <td>$150.00</td>
                        <td>Completed</td>
                        <td>
                            <a href="#" class="btn btn-custom btn-sm">View Details</a>
                        </td>
                    </tr>
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome Icons (Optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>
</html>
