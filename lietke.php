<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách sinh viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ tên</th>
                    <th>Lớp</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //kết nối
                require_once 'ketnoi.php';

                //câu lệch 
                $lietke_sql = "SELECT * FROM sinhvien order by lop, hoten";

                //thực thi câu lệch
                $result = mysqli_query($conn, $lietke_sql);

                //duyệt qua result và in ra(lấy từng dòng kết quả đưa vào biến r)
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $r['masv']; ?></td>
                        <td><?php echo $r['hoten']; ?></td>
                        <td><?php echo $r['lop']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
