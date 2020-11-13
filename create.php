<?php
session_start();
if (isset($_POST['create']))
{
    require_once "config.php";
    //bắt dữ liệu từ form

    $masv=$_SESSION['masv'];
    $name=$_POST['name'];
    $class=$_POST['class'];
    $question=$_POST['question'];
    $content=$_POST['content'];

    //test hiển thị xem được chưa
//  echo 
    isinsert($masv,$name,$class,$question,$content);}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="create.css">
    <title>Thêm Câu hỏi</title>

</head>
<body>  

<a href="forum.php" class="btn btn-success">Quay lại Forum</a>

    <section class="section" >
        <div class="col-xs-2 col-sm-3 col-md-3 col-lg-4 "></div>

        <div class="col-xs-8 col-sm-6 col-md-6 col-lg-4 form-backround ">
            <h3>Đăng câu hỏi</h3>
            <p>Vui lòng nhập đầy đủ thông tin</p>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="row">
                    <form name="login-form" method="POST">
                        <div class="form-group">
                            <label>Tên người đăng:</label>
                            <input type="text" name="name" value="">
                        </div>   
                        <div class="form-group">
                            <label>Lớp:</label>
                            <input type="text" name="class" value="">
                        </div>  
                        <div class="form-group">
                            <label>Câu hỏi:</label>
                            <input type="text" name="question" value="">
                        </div>  
                        <div class="form-group">
                            <label>Nội dung:</label>
                            <input type="text" name="content" value="">
                        </div>   
                        
                        <div class="form-group">
                            <input type="submit" name="create" class="submit" value="Đăng">
                            <input type="reset" name="reset" class="submit" value="Reset">
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
    <script src="diendan.js"></script>
</body>
</html>
