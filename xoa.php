<?php
//lấy dữ liệu id cần xóa
$svid = $_GET['sid'];
//echo $id;

//kết nối
require_once 'ketnoi.php';

//câu lệch sql
$xoa_sql = "DELETE FROM sinhvien WHERE id=$svid";
//thực thi câu lệch
mysqli_query($conn, $xoa_sql);
//echo "<h1>Xóa thành công</h1>";
//trở về trang liệt kê
header("Location: lietke.php");
