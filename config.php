<?php

const host="localhost";
const username="root";
const pass='';
const dbname='csetlu';
const port='3308';

//hàm chuẩn bị câu lệch kết nối
function connection()
{
    //chuẩn bị câu lệnh
    $con=mysqli_connect(host,username,pass,dbname,port);
    //trả về $con có câu lệnh kết nối
    //nếu câu lệnh sai thì hiển thị:
    if (!$con)
    {
        die("Không thể kết nối");
    }
    //nếu câu lệnh đúng sẽ trả về $con
    return $con;
}
//forum
function selectall()
{
    $getcon=connection();
    $sqL_select="SELECT * FROM forum";
    $result=mysqli_query($getcon,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}


//login
function selectformasv($masv)
{
    $getcon=connection();
    $sqL_select="SELECT * FROM user where masv=$masv";
    $result=mysqli_query($getcon,$sqL_select);
    $users=mysqli_fetch_all($result);
    return $users;
}
//create 

function isinsert($masv,$name,$class,$question,$content)
{
    $getcon=connection();
    $sql_insert="INSERT INTO forum (`masv`,`name`,`class`,`question`,`content`)
                            value ('$masv','$name','$class','$question','$content')";
    $result=mysqli_query($getcon,$sql_insert);
    if ($result)
    {
        echo "thành công";
    }
    else {
        echo "Thất bại roài";
    }
}
///delete
function delete($masv) {
    $getcon = connection();
    $sql_delete = " DELETE FROM forum WHERE masv = $masv";
    $result = mysqli_query($getcon, $sql_delete);
    if($result) {
            header("location:forum.php");
    }
    else
    {
        echo"Bạn không xóa dc bài viết này";
    }
    return $result;
}
//register
function register($masv, $username, $password, $class, $email)
{
    $getcon = connection();
    $sql_insert = " insert into user(masv, username, password, class, email)
                    values ('$masv', '$username','$password','$class','$email')";
    $result=mysqli_query($getcon,$sql_insert);
    if ($result)
    {
        header("location:login.php");
    }
    else
    {
        echo "Đăng kí thất bại";
    }
}

//login
function sosanh($masv, $pass,$username)
{
    $kiemtra = false;
    $connection = connection();
    $sql_select = "SELECT * FROM user";
    $results = mysqli_query($connection, $sql_select);
//kiểm tra xem có bản ghi nào trả về từ câu truy vấn select hay ko
    if (mysqli_num_rows($results) > 0) {
        //lấy ra được dữ liệu mong muốn,
//    cần chú ý phải truyền hằng MYSQLI_ASSOC để có thể trả về 1 mảng
//    kết hợp
        $forums = mysqli_fetch_all($results, MYSQLI_ASSOC);
        //lặp và hiển thị ra các thông tin
        foreach ($forums as $forum) {
            if ($masv == $forum['masv'] && $pass == $forum['password'] && $username== $forum['username']) {
                $kiemtra = true;
                break;
            }
        }
    }
    return $kiemtra;
}

function port()
{
    $getcon=connection();
    $sqL_select="SELECT COUNT(id) FROM forum";
    $result=mysqli_query($getcon,$sqL_select);
    $port=mysqli_fetch_all($result);
    return $port;
}
?>


