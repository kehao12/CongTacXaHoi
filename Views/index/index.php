<!DOCTYPE html>
<html lang="en">

<head>
  <title>Hướng nghiệp Việt &mdash; Công Tác Xã Hội</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="resources/index/fonts/icomoon/style.css">

  <link rel="stylesheet" href="resources/index/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources/index/css/jquery-ui.css">
  <link rel="stylesheet" href="resources/index/css/owl.carousel.min.css">
  <link rel="stylesheet" href="resources/index/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="resources/index/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="resources/index/css/jquery.toast.min.css">
  <link rel="stylesheet" href="resources/index/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="resources/index/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="resources/index/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="resources/index/css/aos.css">
  <link href="resources/index/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="resources/index/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<?php include('header.php');?>


    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('resources/index/images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>GIÁO DỤC HƯỚNG NGHIỆP VIỆT</h1>
              <button type="button" class="btn btn-lg"
                style="background:#51BE78; border:none; cursor: pointer; color:white;" class="btn btn-primary"
                data-toggle="modal" data-target="#exampleModalCenter">
                Đăng ký ngay
              </button>
            </div>
          </div>
        </div>
      </div>


      <div class="intro-section" style="background-image: url('resources/index/images/hero_1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>NGÀNH CÔNG TÁC XÃ HỘI</h1>
              <button type="button" class="btn btn-lg"
                style="background:#51BE78; border:none; cursor: pointer; color:white;" class="btn btn-primary"
                data-toggle="modal" data-target="#exampleModalCenter">
                Đăng ký ngay
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div></div>

    <!-- <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-4 mb-5">
            <h2 class="section-title-underline mb-5">
              <span>Why Academics Works</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Personalize Learning</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Trusted Courses</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>Tools for Students</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>
                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div> -->


    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>Khóa học</span>
            </h2>
            <p></p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="owl-slide-3 owl-carousel">

              <?php foreach($mh as $mh1){ ?>
              <div class="course-1-item">
                <figure class="thumnail">
                  <a href="?controller=index&action=chitietmh"><img
                      src="resources/index/images/<?php echo $mh1['HinhAnh'] ?>" style="width:343px; height:220px;"
                      alt="Image" class="img-fluid"></a>
                  <!-- <div class="price">$99.00</div> -->
                  <div class="category">
                    <h3><?php echo $mh1['TenMH'] ?></h3>
                  </div>
                </figure>
                <div class="course-1-content pb-4">
                  <!-- <h2>How To Create Mobile Apps Using Ionic</h2> -->
                  <div class="rating text-center mb-3">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>


                  <p><a href="?controller=index&action=chitietmh&id=<?php echo $mh1['idMH'] ?>"
                      class="btn btn-primary rounded-0 px-4">Xem chi tiết</a></p>
                </div>
              </div>
              <?php }?>


            </div>

          </div>
        </div>



      </div>
    </div>




    <div class="section-bg style-1" style="background-image: url('resources/index/images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>VỀ CHÚNG TÔI</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">CÔNG TÁC XÃ HỘI (CTXH) LÀ MỘT NGHỀ CHUYÊN NGHIỆP VÀ ĐÓNG VAI TRÒ QUAN TRỌNG CHO VIỆC XÂY
              DỰNG MỘT XÃ HỘI NGÀY CÀNG TỐT ĐẸP HƠN. CHƯƠNG TRÌNH ĐÀO TẠO CÔNG TÁC XÃ HỘI NHẰM ĐÀO TẠO CỬ NHÂN CÔNG TÁC
              XÃ HỘI CÓ NĂNG LỰC VÀ CHUYÊN MÔN VỀ CÔNG TÁC XÃ HỘI VÀ CÁC KIẾN THỨC LIÊN QUAN NHƯ: PHÁT TRIỂN CỘNG ĐỒNG,
              AN SINH XÃ HỘI, TÂM LÝ ĐỂ CÓ THỂ ĐÁP ỨNG ĐƯỢC YÊU CẦU CÔNG VIỆC CỦA CÁC CƠ SỞ XÃ HỘI, DỰ ÁN XÃ HỘI CŨNG
              NHƯ CÁC LOẠI HÌNH DOANH NGHIỆP VÀ TỔ CHỨC KHÁC.</p>

            <p><a href="?controller=index&action=about.php">Đọc thêm</a></p>
          </div>
        </div>
      </div>
    </div>



    <div class="news-updates">
      <div class="container">

        <div class="row">
          <div class="col-lg-9">
            <div class="section-heading">
              <h2 class="text-black">TIN TỨC</h2>
              <a href="?controller=index&action=tintuc">Xem tất cả</a>
            </div>
            <div class="row">
              <?php foreach($data3 as $value3){?>
              <div class="col-lg-6">
                <div class="post-entry-big">
                  <a href="news-single.html" class="img-link"><img
                      src="resources/index/images/<?php echo $value3['HinhAnh'] ?>" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a
                        href="#"><?php $date=new DateTime($value3['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></a>
                      <span class="mx-1">/</span>
                      <a href="#"><?php echo $value['TaiKhoan']?></a>
                    </div>
                    <h3 class="post-heading"><a
                        href="?controller=index&action=chitiet&id=<?php echo $value3['idBV'] ?>"><?php echo $value3['TieuDe'] ?></a>
                    </h3>
                  </div>
                </div>
              </div>
              <?php }?>

              <div class="col-lg-6">
                <?php foreach($data2 as $value2){?>
                <div class="post-entry-big horizontal d-flex mb-4">
                  <a href="news-single.html" class="img-link mr-4"><img
                      src="resources/index/images/<?php echo $value2['HinhAnh'] ?>" alt="Image" class="img-fluid"></a>
                  <div class="post-content">
                    <div class="post-meta">
                      <a
                        href="#"><?php $date=new DateTime($value2['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></a>
                      <span class="mx-1">/</span>
                      <a href="#"><?php echo $value2['TaiKhoan']?></a>
                    </div>
                    <h3 class="post-heading"><a
                        href="?controller=index&action=chitiet&id=<?php echo $value2['idBV'] ?>"><?php echo $value2['TieuDe'] ?></a>
                    </h3>
                  </div>
                </div>
                <?php }?>


              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="section-heading">
              <h2 class="text-black">Videos</h2>
              <a href="#">Xem tất cả Videos</a>
            </div>
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="resources/index/images/course_5.jpg" alt="Image" class="img-fluid">
            </a>
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="resources/index/images/course_5.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section ftco-subscribe-1" style="background-image: url('resources/index/images/bg_1.jpg')">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <h2>Đăng ký với chúng tôi!</h2>
            <p>Để nhận được các thông tin sự kiện ưu đãi</p>
          </div>
          <div class="col-lg-5">
            <form action="" method="post" class="d-flex">
              <input type="email" class="rounded form-control mr-2 py-3" name="Email" placeholder="Email nhận ưu đãi">
              <button class="btn btn-primary rounded py-3 px-4" name="submit" type="submit">Gửi</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <?php include('footer.php');?>


  </div>
  <!-- .site-wrap -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Đăng ký</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form name="myForm"  method="POST" >
            <div class="form-group">
              <label for="formGroupExampleInput">Họ tên</label>
              <input type="text" required class="form-control TenKH" name="TenKH" id="formGroupExampleInput" placeholder="Nhập họ tên">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Email</label>
              <input type="email" required class="form-control Email" name="Email" id="formGroupExampleInput2" placeholder="Nhập Email">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Số điện thoại</label>
              <input type="text" required class="form-control SDT" pattern="(\+84|0)\d{9,10}" name="SDT" id="formGroupExampleInput2" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Chuyên ngành</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="chuyennganh" placeholder="Công tác xã hội"
                disabled>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="dangky" >Đăng ký</button>
            </div>
            </form>
        </div>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
      </div>
    </div>
  </div>

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#51be78" /></svg></div>

  <script src="resources/index/js/jquery-3.3.1.min.js"></script>
  <script src="resources/index/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="resources/index/js/jquery-ui.js"></script>
  <script src="resources/index/js/popper.min.js"></script>
  <script src="resources/index/js/bootstrap.min.js"></script>
  <script src="resources/index/js/owl.carousel.min.js"></script>
  <script src="resources/index/js/jquery.stellar.min.js"></script>
  <script src="resources/index/js/jquery.countdown.min.js"></script>
  <script src="resources/index/js/bootstrap-datepicker.min.js"></script>
  <script src="resources/index/js/jquery.easing.1.3.js"></script>
  <script src="resources/index/js/aos.js"></script>
  <script src="resources/index/js/jquery.fancybox.min.js"></script>
  <script src="resources/index/js/jquery.sticky.js"></script>
  <script src="resources/index/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="resources/index/js/jquery.toast.min.js"></script>	



  <script src="resources/index/js/main.js"></script>

  <script type = "text/javascript">
 
         function validateForm()  {
             // Get form via form name:
             var myForm = document.forms["myForm"];
 
             
             var s = myForm["SDT"].value;
 
             if(u== "") {
                 alert("Please enter your Username");
                 myForm["username"].focus(); // Focus
                 return false;
             }
             if(p == "") {
                 alert("Please enter you Password");
                 myForm["password"].focus(); // Focus
                 return false;
             }
 
             alert("All datas are valid!, send it to the server!")
 
             return true;
         }
      </script>
<!-- <script>
            function load_ajax() {
              $.ajax({
                url: "http://localhost:84/Congtacxahoi/index.php?controller=index&action=index",
                type: "post",
                data: {
                  number: $('#number').val(),
                  TenKH: $('.TenKH').val(),
                  Email: $('.Email').val(),
                  SDT: $('.SDT').val(),
                  dangky: 1
                }
              }).done(function () {
                $.toast({
                  text: "Bạn đã đăng ký thành công", // Text that is to be shown in the toast
                  heading: 'Thành công', // Optional heading to be shown on the toast
                  icon: 'success', // Type of toast icon
                  showHideTransition: 'fade', // fade, slide or plain
                  allowToastClose: true, // Boolean value true or false
                  hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                  stack: 10, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                  position: 'top-left', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



                  textAlign: 'left', // Text alignment i.e. left, right or center
                  loader: true, // Whether to show loader or not. True by default
                  loaderBg: '#9EC600', // Background color of the toast loader
                  beforeShow: function () {}, // will be triggered before the toast is shown
                  afterShown: function () {}, // will be triggered after the toat has been shown
                  beforeHide: function () {}, // will be triggered before the toast gets hidden
                  afterHidden: function () {} // will be triggered after the toast has been hidden
                });

              });
            }
        </script> -->

</body>

</html>