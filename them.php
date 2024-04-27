<?php
//nhận dữ liệu từ form
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];

//kết nối csdl
require_once 'ketnoi.php';

//viết lệch sql để thêm dữ liệu

$themsql = "INSERT INTO 
sinhvien(masv, hoten, lop) VALUES 
('$masv', '$ht', '$lop')";
// echo $themsql; exit;

//thực thi câu lệch thêm
if (mysqli_query($conn, $themsql)){
    //in thông báo thành công
echo "<h1>Thêm thành công</h1>";
};



