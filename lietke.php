<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách sinh viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Danh sách sinh viên</h1>
        <!-- Button to Open the Modal -->
        <button style="margin-bottom: 5px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Thêm mới sinh viên
        </button>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Mã sinh viên</th>
                    <th>Họ tên</th>
                    <th>Lớp</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kết nối
                require_once 'ketnoi.php';

                // Câu lệch 
                $lietke_sql = "SELECT * FROM sinhvien ORDER BY lop, hoten";

                // Thực thi câu lệch
                $result = mysqli_query($conn, $lietke_sql);

                // Duyệt qua kết quả và in ra
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $r['masv']; ?></td>
                        <td><?php echo $r['hoten']; ?></td>
                        <td><?php echo $r['lop']; ?></td>
                        <td>
                            <a href="sua.php?sid=<?php echo $r['id']; ?>" class="btn btn-info">Sửa</a>
                            <a onclick="return confirm('Bạn có muốn xóa sinh viên này không');" href="xoa.php?sid=<?php echo $r['id']; ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Thêm mới sinh viên</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="them.php" method="post">
                        <div class="form-group">
                            <label for="hoten">Họ tên</label>
                            <input type="text" class="form-control" id="hoten" name="hoten">
                        </div>
                        <div class="form-group">
                            <label for="masv">Mã sinh viên</label>
                            <input type="text" class="form-control" name="masv" id="masv">
                        </div>
                        <div class="form-group">
                            <label for="lop">Lớp</label>
                            <input type="text" class="form-control" id="lop" name="lop">
                        </div>
                        <button type="submit" class="btn btn-success">Thêm sinh viên</button>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
