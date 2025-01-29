<?php
session_start();
//echo $_SESSION["userType"];
if(!$_SESSION["userType"]){
    echo "<script>window.location.href = 'login.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .table-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .btn-create-list {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            font-size: 14px;
            padding: 8px 20px;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .search-bar {
            width: 300px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">User Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href='login.php'>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-0">User Lists</h2>
            <button class="btn btn-create-list">Create List</button>
        </div>

        <div class="table-card">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <input type="text" class="form-control search-bar" placeholder="Search">
                <div class="d-flex gap-2">
                    <select class="form-select form-select-sm">
                        <option selected>All Authors</option>
                        <option value="1">Author 1</option>
                        <option value="2">Author 2</option>
                    </select>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">นามสกุล</th>
                        <th scope="col">เพศ</th>
                        <th scope="col">เบอร์โทรศัพท์</th>
                        <th scope="col">บัตรประจำตัวประชาชน</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "project1";  // ชื่อฐานข้อมูล
                        
                        // เชื่อมต่อฐานข้อมูล
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        
                        // ตรวจสอบการเชื่อมต่อ
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        
                        echo "Connected Successfully";

                        $sql = "SELECT * FROM register";
                        $result = mysqli_query($conn, $sql);

                        // ตรวจสอบว่ามีข้อมูลหรือไม่
                        if (mysqli_num_rows($result) > 0) {
                            // วนลูปแสดงข้อมูล
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                        <td>" . $row["RegisName"] . "</td>
                                        <td>" . $row["RegisLastname"] . "</td>
                                        <td>" . $row["RegisGender"] . "</td>
                                        <td>" . $row["RegisPhone"] . "</td>
                                        <td>" . $row["RegisID"] . "</td>
                                    </tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "ไม่มีข้อมูลในตาราง";
                        }

                        // ปิดการเชื่อมต่อฐานข้อมูล
                        mysqli_close($conn);
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
