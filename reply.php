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
        <a href="news.html">Log in</a>
        <a href="news.html">Register</a>
        </div>
    </div>
    <div class="container">
        <!-- phần đầu -->
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
                <a href="forum.php">Danh sách câu hỏi</a>
            </button>
        </div>

        <?php
        include('config.php');//nhúng file kết nối csdl nhó
        $output = '';//tạo 1 biến để hiển thị
        $connect=connection();//gọi hàm kết nối csdl
        $query = "SELECT * FROM forum ";//câu truy vấn lấy tất cả CSDL nếu mà cái hàm load_data ở file script gửi đi rỗng nè

        if (isset($_POST['query'])) {
            //câu truy vấn lấy thông tin
            $query = "SELECT `name`, `class`, `question`, `abc` FROM forum WHERE id='$id' ";
        }
        //thực thi hàm
        $result = mysqli_query($connect, $query);

        //đoạn này để đổ thông tin ra
        if(mysqli_num_rows($result) > 0) {
            $output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>	
							<th>Người đăng</th>
							<th>Lớp</th>
							<th>Câu hỏi</th>
                            <th>Nội dung</th>
                            <th>Trả lời câu hỏi</th>
						</tr>';
            while ($row = mysqli_fetch_array($result)) {
                $output .= '
			<tr>
			    <td>' . $row["1"] . '</td>	
			    <td>' . $row["2"] . '</td>
				<td>' . $row["3"] . '</td>
				<td>' . $row["4"] . '</td>			
			</tr>
		';
            }
            echo $output;
        }
        else
        {
            echo 'không có dữ liệu tìm kiếm';
        }
        ?>
</body>
