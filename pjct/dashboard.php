<!-- admin_dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Admin Dashboard</h1>
        <div class="card mt-4">
            <div class="card-header">Overview</div>
            <div class="card-body">
                <p><strong>Total Users:</strong> <!-- Add PHP code to display user count here --></p>
                <p><strong>Total Tasks:</strong> <!-- Add PHP code to display task count here --></p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">Recent Tasks</div>
            <div class="card-body">
                <ul class="list-group">
                    <!-- Add PHP loop here to list recent tasks -->
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
