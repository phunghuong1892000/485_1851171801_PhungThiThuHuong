<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="trangchu.css">
    <title>Khoa Công Nghệ Thông Tin - Trường đại học Thủy Lợi</title>
</head>
<body>
    <div class="top-header col-xs-12 col-sm-12 col-md-12 ">
        <div class="container">
            <label for=""> <a  href="http://cse.tlu.edu.vn"> Trường Đại học Thủy Lợi - TLU</a></label>
            <ul class="list-top">
                <li>(+) |</li>
                <li id="login" class="login"> <a href="http://cse.tlu.edu.vn/login"> Login</a> </li>
                <li>|</li>
                <li id="register" class="register"> <a href="http://cse.tlu.edu.vn/Register"> Register</a> </li>
                <li>|</li>
                <li>
                    <span> Ngôn ngữ: </span>
                    <a href="#"  class="ui-link-white lang-vi"><img src="http://cse.tlu.edu.vn/cse/assets/images/icons/icon-lang-vi.png" > </a>
                    <a href="#"  class="ui-link-white lang-en"><img src="http://cse.tlu.edu.vn/cse/assets/images/icons/icon-lang-en.png" > </a>
                </li>
            </ul>
            <div class="search-box">
                <div class="input-group">
                    <input type="text" class="input-text" placeholder="Search" aria-label="Username" aria-describedby="search">
                    <input type="submit" value="Tìm" id="search" class="search-button" src="http://cse.tlu.edu.vn/chi-tiet/s">
                  </div>
            </div>

            <?php
            echo 'Xin chào, ';
            echo $_SESSION['name'];
            if(isset($_POST['logout']))
            {
                unset($_SESSION['name']);
                header("Location:login.php");
            }
            ?>
            <form method="POST">
                <input type="submit" value="Đăng xuất" name="logout"> 
            </form>

        </div>
    </div>
    <!-- phần đầu -->
    <div class="header">
        <div class="container">
            <div class="header-logo">
                <a href="http://cse.tlu.edu.vn"> <img src="picture/logo.jpg" alt=""></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="http://cse.tlu.edu.vn/home">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://cse.tlu.edu.vn/gioi-thieu">Giới thiệu</a>
                      <div class="nav-sub">
                        <ul>
                            <li> <a href="http://cse.tlu.edu.vn/logo-cua-khoa"> Logo Khoa CNTT</a></li>
                            <li> <a href="http://cse.tlu.edu.vn/gioi-thieu"> Lời chào mừng</a></li>
                            <li> <a href="http://cse.tlu.edu.vn/gioi-thieu"> Tổ chức</a></li>
                            <li> <a href="http://cse.tlu.edu.vn/gioi-thieu"> Hợp tác liên kết</a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">Nghiên cứu khoa học</a>
                        <div class="nav-sub">
                            <ul>
                                <li> <a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe"> Các đề tài, dự án</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe"> Thông tin seminar</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe"> Công trình công bố</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe"> Các phòng thí nghiện</a></li>
                            </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://cse.tlu.edu.vn/dao-tao">Đào tạo</a>
                        <div class="nav-sub">
                            <ul>
                                <li> <a href="http://cse.tlu.edu.vn/dao-tao"> Đào tạo đại học</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/dao-tao"> Đào tạo sau đại học</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/dao-tao"> Chuẩn đầu ra</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/dao-tao"> Định hướng ngành nghề</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/dao-tao"> Mô hình đào tạo</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/dao-tao"> Đề cương môn học</a></li>
                            </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://cse.tlu.edu.vn/bo-mon-trung-tam">Bộ môn - trung tâm</a>
                        <div class="nav-sub">
                            <ul>
                                <li> <a href="http://cse.tlu.edu.vn/bo-mon-trung-tam"> Công nghệ phần mềm</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/bo-mon-trung-tam"> Hệ thống thông tin</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/bo-mon-trung-tam"> Khoa học máy tính</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/bo-mon-trung-tam"> Kỹ thuật máy tính và mạng</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/bo-mon-trung-tam"> Toán học</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/bo-mon-trung-tam"> Tin học và kĩ thuật tính toán</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/bo-mon-trung-tam"> Trung tâm tin học</a></li>
                            </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://cse.tlu.edu.vn/sinh-vien">Sinh viên</a>
                        <div class="nav-sub">
                            <ul>
                                <li> <a href="http://cse.tlu.edu.vn/sinh-vien"> Tài liệu sinh viên</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/sinh-vien"> Tổ tư vấn học tập</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/sinh-vien"> Biểu mẫu ĐATN</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/sinh-vien"> Luận văn tốt nghiệp</a></li>
                            </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://cse.tlu.edu.vn/tin-tuc-thong-bao">Tin tức</a>
                        <div class="nav-sub">
                                <ul>
                                    <li> <a href="http://cse.tlu.edu.vn/tin-tuc-thong-bao"> Sự kiện</a></li>
                                    <li> <a href="http://cse.tlu.edu.vn/tin-tuc-thong-bao"> CSE trên báo</a></li>
                                </ul>
                            </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://cse.tlu.edu.vn/tin-thong-bao">Thông báo</a>
                        <div class="nav-sub">
                            <ul>
                                <li> <a href="http://cse.tlu.edu.vn/tin-thong-bao"> Thông báo</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/tin-thong-bao"> TB đào tạo</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/tin-thong-bao"> Chuẩn đầu ra</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/tin-thong-bao"> Nghiên cứu khoa học</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/tin-thong-bao"> Tuyển dụng</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/tin-thong-bao"> Học bổng</a></li>
                                <li> <a href="http://cse.tlu.edu.vn/tin-thong-bao"> Khác</a></li>
                            </ul>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="diendan.php">Diễn đàn</a>
                      </li>
                  </ul>
                </div>
              </nav>
        </div>
    </div>
        <!-- phần thân -->
    <div class="body">
            <div class="container">
                <div id="img" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#img" data-slide-to="0" class="active"></li>
                        <li data-target="#img" data-slide-to="1"></li>
                        <li data-target="#img" data-slide-to="2"></li>
                        <li data-target="#img" data-slide-to="3"></li>
                        <li data-target="#img" data-slide-to="4"></li>
                        <li data-target="#img" data-slide-to="5"></li>
                        <li data-target="#img" data-slide-to="6"></li>
                        <li data-target="#img" data-slide-to="7"></li>
                        <li data-target="#img" data-slide-to="8"></li>
                        <li data-target="#img" data-slide-to="9"></li>
                        <li data-target="#img" data-slide-to="10"></li>
                        <li data-target="#img" data-slide-to="11"></li>
                        <li data-target="#img" data-slide-to="12"></li>
                        <li data-target="#img" data-slide-to="13"></li>
                        <li data-target="#img" data-slide-to="14"></li>
            
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="picture/1.jpg" alt="khai truong">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/2.jpg" alt="trao doi">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/3.jpg" alt="bia ">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/4.jpg" alt="sanh">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/5.jpg" alt="anh 5">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/6.jpg" alt="anh 6">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/7.jpg" alt="anh 7">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/8.jpg" alt="anh 8">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/9.jpg" alt="anh 9">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/10.jpg" alt="anh 10">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/12.jpg" alt="anh 11">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/13.jpg" alt="anh 12">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/14.jpg" alt="anh 13">
                        </div>
                        <div class="carousel-item">
                            <img src="picture/15.jpg" alt="het">
                        </div>
            
                    </div>
                    <a class="carousel-control-prev" href="#img" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#img" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> 
                     
                <div class=" banner-page">
                <!-- Load Facebook SDK for JavaScript -->
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                    src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="WzjxHNzo"></script>
                    <!-- Your like button code -->
                    <div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn" 
                    data-tabs="" data-width="" data-height="" data-small-header="false" 
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/cse.tlu.edu.vn" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/cse.tlu.edu.vn">Khoa Công nghệ thông tin- Đại học Thủy lợi</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        <div class="col-md-12 column-both">
            <div class="container">
                <div class="col70 col-md-8 col-sm-10 col-xs-12">
                    <div class="col-md-4 col-sm-12 col-12" >
                        <div class="top">
                            <div class="photo">
                                <img src="picture/loi-chao-mung.jpg" alt="" class="class1">
                                <div class="class2"></div>
                                <div class="class3">
                                    <h5><a href="http://cse.tlu.edu.vn/loi-chao-mung">Lời chào mừng</a></h5>
                                </div>
                            </div>
                            <div class="text">
                                <h5>
                                    <a href="http://cse.tlu.edu.vn/loi-chao-mung/loi-chao-mung-8">Lời chào mừng</a>
                                    <br>
                                </h5>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="photo">
                                <img src="picture/nghiencuukhoahoc.jpg" alt="" class="class1">
                                <div class="class2"></div>
                                <div class="class3">
                                    <h5><a  class="nghiencuu" href="http://cse.tlu.edu.vn/loi-chao-mung">Nghiên cứu khoa học</a></h5>
                                </div>
                            </div>
                            <div class="text">
                                <h5>
                                    <a href="http://cse.tlu.edu.vn/loi-chao-mung/loi-chao-mung-8">Nghiên cứu khoa học</a>
                                    <br>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12" >
                        <div class="top">
                            <div class="photo">
                                <img src="picture/gv-khoa.jpg" alt="" class="class1">
                                <div class="class2"></div>
                                <div class="class3">
                                    <h5><a class="giangvien" href="http://cse.tlu.edu.vn/loi-chao-mung">Giảng viên</a></h5>
                                </div>
                            </div>
                            <div class="text">
                                <h5>
                                    <a href="http://cse.tlu.edu.vn/loi-chao-mung/loi-chao-mung-8">Giảng viên</a>
                                    <br>
                                </h5>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="photo">
                                <img src="picture/daotao.jpg" alt="" class="class1">
                                <div class="class2"></div>
                                <div class="class3">
                                    <h5><a class="daotao" href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">Đào tạo</a></h5>
                                </div>
                            </div>
                            <div class="text">
                                <h5>
                                    <a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">Đào tạo</a>
                                    <br>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="anh-khoa">
                            <a href="https://www.facebook.com/pg/cse.tlu.edu.vn/photos/?ref=page_internal"> 
                                <img src="picture/anhkhoa.jpg" alt=""> 
                            </a>
                        </div>
                        <div class="text-anhkhoa">
                            <h5><a href="https://www.facebook.com/pg/cse.tlu.edu.vn/photos/?ref=page_internal">Ảnh khoa CNTT</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col30"></div>
            </div>
        </div>
    </div>
            <!-- phần cuối -->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-3">
                    <ul>
                        <li><a href="http://cse.tlu.edu.vn/logo-cua-khoa">- Logo của khoa CNTT</a></li>
                        <li><a href="http://cse.tlu.edu.vn/gioi-thieu">- Lời chào mừng</a></li>
                        <li><a href="http://cse.tlu.edu.vn/gioi-thieu">- Tổ chức</a></li>
                        <li><a href="http://cse.tlu.edu.vn/gioi-thieu">- Hợp tác liên kết</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">- Đào tạo</a></li>
                        <li><a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">- Mô hình đào tạo</a></li>
                        <li><a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">- Đào tạo đại học</a></li>
                        <li><a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">- Định hướng ngành nghề</a></li>
                        <li><a href="http://cse.tlu.edu.vn/khoa-hoc-cong-nghe">- Đào tạo sau đại học</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href="http://cse.tlu.edu.vn/dao-tao">- Nghiên cứu khoa học</a></li>
                        <li><a href="http://cse.tlu.edu.vn/dao-tao">- Thông tin sinamer</a></li>
                        <li><a href="http://cse.tlu.edu.vn/dao-tao">- Các đề tài, dự án</a></li>
                        <li><a href="http://cse.tlu.edu.vn/dao-tao">- Công trình công bố</a></li>
                        <li><a href="http://cse.tlu.edu.vn/dao-tao">- Các phòng thí nghiệm</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href="http://cse.tlu.edu.vn/bo-mon-trung-tam">- Công nghệ phần mềm</a></li>
                        <li><a href="http://cse.tlu.edu.vn/bo-mon-trung-tam">- Hệ thống thông tin</a></li>
                        <li><a href="http://cse.tlu.edu.vn/bo-mon-trung-tam">- Khoa học máy tính</a></li>
                        <li><a href="http://cse.tlu.edu.vn/bo-mon-trung-tam">- Kĩ thuật máy tính và mạng</a></li>
                        <li><a href="http://cse.tlu.edu.vn/bo-mon-trung-tam">- Toán học</a></li>
                        <li><a href="http://cse.tlu.edu.vn/bo-mon-trung-tam">- Trung tâm tin học</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bot">
                <div class="left col-md-3">
                    <img src="picture/foot.jpg" alt="">
                </div>
                <div class="right col-md-9">
                    <span>© 2017 Khoa Công nghệ thông tin - Đại học Thủy lợi</span>
                    <p>Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội. Điện thoại: (+84)-024 3 5632211. Email: <a href="#">vpkcntt@tlu.edu.vn</a> </p>
                </div>
            </div>
        </div>
    </div>
        
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="trangchu.js"></script>
</body>
</html>