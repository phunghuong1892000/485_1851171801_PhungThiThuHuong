<?php
if (isset($_POST['register']))
{
    require_once "config.php";
    //bắt dữ liệu từ form

    $masv=$_POST['masv'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $class=$_POST['class'];
    $email=$_POST['email'];

    //test hiển thị xem được chưa
    register($masv, $username, $password, $class, $email);
    echo 'thành công';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="register.css">
    <title> Register  </title>
</head>
<body>
    <a href="diendan.php" class="btn btn-success">Diễn đàn</a>
    <a href="login.php" class="btn btn-success">Đăng nhập</a>

    <section class="section " >
        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-4 "></div>
        <div class="col-xs-8 col-sm-6 col-md-6 col-lg-4 form-backround ">
            <h3>REGISTER NOW</h3>
            <p>Vui lòng nhập đầy đủ thông tin!</p>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="row">
                    <form name="login-form " method="POST">
                        <div class="form-group">
                            <label>Mã sinh viên:</label>
                            <input type="text" name="masv" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Tên đăng nhập:</label>
                            <input type="text" name="username" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>Mật khẩu:</label>
                            <input type="password" name="password" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>Lớp:</label>
                            <input type="text" name="class" class="form-control ">
                        </div>

                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control ">
                        </div>

                         <div class="form-group">
                            <div class="col-sm-12 col-md-12 col-lg-12 form-item ">
                                <input type="submit" name="register" class="btn-register" value="REGISTER "/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-4 "></div>
    </section>


     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>