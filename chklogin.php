<?php
// กำหนดค่าการเชื่อมต่อฐานข้อมูล
session_start();
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
// รับค่าจากฟอร์ม
$username = $_POST["UseUsername"];
$password = sha1($_POST["UsePassword"]);

// ป้องกัน SQL Injection
$username = mysqli_real_escape_string($conn, $username);

// ใช้ SELECT เพื่อดึงรหัสผ่านที่เข้ารหัสจากฐานข้อมูล
$sql = "SELECT * FROM users WHERE UseUsername = '$username' AND UsePassword ='$password'";
$result = mysqli_query($conn, $sql);

// ตรวจสอบว่าพบข้อมูลผู้ใช้หรือไม่
if (mysqli_num_rows($result) == 1) {
    echo "เข้าสู่ระบบสำเร็จ";
    $_SESSION["userType"] = 'admin';
    echo "<script>window.location.href = 'user.php';</script>";

} else {
    echo "รหัสผ่านไม่ถูกต้อง!";
    echo "<script>window.location.href = 'login.php';</script>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>
