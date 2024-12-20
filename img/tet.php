<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Lấy dữ liệu từ biểu mẫu HTML
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO Customers (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "Đặt vé thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
