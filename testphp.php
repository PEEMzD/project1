<?php
$name = 'Peera';                        //string
$lastname = "Sukcharoen";                 //string
$age = 40;                              //int


echo $name." ".$lastname."<p>";
echo "My name is ".$name." ".$lastname.". ".$age." yearold.";

$tmp = 37;             
//ถ้าอุณหภูมิเกิน 35 เสี่ยงเป็น COVID-19 แต่ถ้าเกิด 37 เป็น COVID-19 ถ้าไม่เกิน 35 คือไม่เป็น              
echo "<p>";
if ($tmp > 37) {
    echo "เป็น COVID-19";
}else{
    echo "ไม่เป็น COVID-19";
}

echo "<br>";
if ($tmp < 35){echo "ไม่เป็น COVID-19";}
elseif ($tmp <= 37){echo "เสี่ยงเป็น COVID-19";}
else{echo "เป็น COVID-19";}

echo "<br>";
if ($tmp > 37){echo "เป็น COVID-19";}
elseif ($tmp >= 35){echo "เสี่ยงเป็น COVID-19";}
else {echo "ไม่เป็น COVID-19";}

echo "<p>";
for ($x = 5; $x >= 0; $x--) {
    echo "The number is: $x <br>";
  }

echo "<p>";
$i = 1;
while ($i < 6) {
    echo $i;
    $i++;
  }


// กำหนดค่าการเชื่อมต่อฐานข้อมูล
echo"<p>";
$servername = "localhost";  // หรือที่อยู่ของเซิร์ฟเวอร์
$username = "root";         // ชื่อผู้ใช้ MySQL
$password = "";             // รหัสผ่าน MySQL (ถ้าไม่มีให้เว้นว่าง)
$dbname = "project1";  // ชื่อฐานข้อมูล

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// รับค่าจากฟอร์มด้วย $_POST
$RegisID = $_POST["RegisID"];
$RegisName = $_POST["RegisName"];
$RegisLastname = $_POST["RegisLastname"];
$RegisGender = $_POST["RegisGender"];
$RegisPhone = $_POST["RegisPhone"];

// ป้องกัน SQL Injection
$RegisID = mysqli_real_escape_string($conn, $RegisID);
$RegisName = mysqli_real_escape_string($conn, $RegisName);
$RegisLastname = mysqli_real_escape_string($conn, $RegisLastname);
$RegisGender = mysqli_real_escape_string($conn, $RegisGender);
$RegisPhone = mysqli_real_escape_string($conn, $RegisPhone);

// คำสั่ง SQL สำหรับ INSERT ข้อมูล
$sql = "INSERT INTO register (RegisID, RegisName, RegisLastname, RegisGender, RegisPhone) 
        VALUES ('$RegisID', '$RegisName', '$RegisLastname', '$RegisGender', '$RegisPhone')";

// ประมวลผลคำสั่ง SQL
if (mysqli_query($conn, $sql)) {
    echo "เพิ่มข้อมูลสำเร็จ!";
    echo "<script>window.location.href = 'register.php';</script>";
} else {
    echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>






