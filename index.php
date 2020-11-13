<!doctype html>
<html lang="en">
<?php?>
<head>
    <title>Danh sách</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<?php

include('config.php');//nhúng file kết nối csdl nhó
$output = '';//tạo 1 biến để hiển thị
$connect=connection();//gọi hàm kết nối csdl
$query = "SELECT * FROM forum ";//câu truy vấn lấy tất cả CSDL nếu mà cái hàm load_data ở file script gửi đi rỗng nè

if (isset($_POST['query'])) {
    //hàm này để bỏ ký tự đặc biệt ( nâng cao để bảo mật thông tin thôi :) )
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    //câu truy vấn lấy thông tin
    $query = "SELECT * FROM forum WHERE id LIKE '%" . $search . "%'";
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


