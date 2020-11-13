<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="forum.css">
    <title>Danh sách câu hỏi</title>

</head>
<body>
    <div class="banner-head mb-3">
        <div class="container">
            <a class="community" href="news.html">Community</a>
            <a href="login.php">Log in</a>
            <a href="register.php">Register</a>
        </div>
    </div>


    <div class="container">
        <div class="header mb-1">
            <a href="trangchu.php">
                <div class="header-logo mb-4" >
                    <img src="picture/logo.jpg" alt="" >
                </div>
            </a>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <a href="diendan.php"><i class="fas fa-undo"></i> Diễn đàn</a>
            </button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <a href="create.php">Đặt câu hỏi</a>
            </button>
            </div>
                    
        <div class="table-responsive">
            <table class="table table bordered">
                <tr>	
                    <th>STT</th>
                    <th>Người đăng</th>
                    <th>Lớp</th>
                    <th>Câu hỏi</th>
                    <th>Nội dung</th>
                    <th>Trả lời</th>
                    <th>Xóa</th>
                </tr>

            <?php
                require_once "config.php";
                $users=selectall();
                foreach ($users as $user):{
            ?>
                <tr>
                    <td><?php echo $user['0']?></td>	
                    <td><?php echo $user['2']?></td>
                    <td><?php echo $user['3']?></td>
                    <td><?php echo $user['4']?></td>			
                    <td><?php echo $user['5']?></td>	
                    <td><a href="reply.php"><i class="fas fa-reply"></i></a></td>
                    <td>
                        <a href="delete.php?id=<?php echo $user['0']?>"onclick="alert('xác nhận xóa')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>

                <?php }endforeach; ?>
            </table>

        </div>
    </div>
</body>
