<?php
session_start();
//echo $_SESSION["userType"];
if(!$_SESSION["userType"]){
    echo "<script>window.location.href = 'user.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0086A8;
            /* สีพื้นหลัง */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #006D84;
            border: none;
        }

        .btn-primary:hover {
            background-color: #00556B;
        }

        .link-primary {
            color: #00556B;
        }

        .link-primary:hover {
            color: #003E54;
        }
    </style>
</head>

<body>
    <div class="card p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4">Login</h2>
        <form method="POST" action="chklogin.php">
            <div class="mb-3">
                <label for="user" class="form-label">Username:</label>
                <input type="user" name="UseUsername" class="form-control" id="user" placeholder="Enter username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="UsePassword" class="form-control" id="password" placeholder="Enter password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="showPassword">
                <label class="form-check-label" for="showPassword">Show Password</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">SIGN IN</button>
        </form>
        <div class="text-center mt-3">
            <a href="#" class="link-primary">Forgot Username / Password?</a>
        </div>
        <div class="text-center mt-2">
            Don't have an account? <a href="#" class="link-primary">Sign up</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>