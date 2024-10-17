<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'includes/connection.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from admin where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: dashboard.php");
            } else {
                $showError = "Invalid Credentials";
            }
        }
    } else {
        $showError = "Invalid Credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRMS</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Apply the Poppins font */
            background: url('images/vav2.jpg') no-repeat center center fixed; /* Add your background image here */
            background-size: cover;
        }

        .navbar {
            background-color: #E4C8E7; /* Maroon color */
        }

        .navbar-brand {
            color: white;
            font-weight: 600; /* Bold font for navbar brand */
        }

        .container {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent background for cards */
            border-radius: 15px;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
        }

        .btn-custom:hover {
            background-color: #218838;
        }

        .form-control {
            border-radius: 10px;
        }

        footer {
            margin-top: 50px;
            background-color: #E4C8E7; /* Maroon color */
            color: BLACK;
            padding: 15px 0;
            text-align: center;
            bottom:0;
            position: fixed;
            width:100%;
        }

        .header-image {
            width: 250px; /* Adjust the size as needed */
            margin-right: 10px;
        }

        /* Additional styling to adjust the spacing */
        .login-result-container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="images/logo.png" alt="Logo" class="header-image"> <!-- Add your image here -->
            <a class="navbar-brand text-black" href="#"> Student Result Management System</a>
        </div>
    </nav>

    <div class="container login-result-container">
        <div class="row justify-content-center">
            <!-- Student Result Card on the left side -->
            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="text-center mb-4">For Students</h2>
                    <div class="text-center">
                        <a href="find-result.php" class="btn btn-success btn-lg">Search Your Result</a>
                    </div>
                </div>
            </div>

            <!-- Admin Login Card on the right side -->
            <div class="col-md-6">
                <div class="card p-4">
                    <h2 class="text-center mb-4">Admin Login</h2>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-custom">Login</button>
                        </div>
                        <?php if ($showError): ?>
                        <div class="alert alert-danger mt-3">
                            <?= $showError; ?>
                        </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>University Of Vavuniya - Student Result Management System</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
