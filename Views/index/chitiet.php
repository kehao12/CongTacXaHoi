<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
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
  <?php foreach($data as $value){?>
  <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">

          <h2 class="mb-0"><?php echo $value['TieuDe']?></h2>
          <p>
            <?php $date=new DateTime($value['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y").' by '.$value['TaiKhoan']); ?>
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="custom-breadcrumns border-bottom">
    <div class="container">
      <a href="?controller=index&action=index">Trang chủ</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <span class="current">Tin tức</span>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 mb-4">

          <p class="mb-5">
            <img src="resources/index/images/<?php echo $value['HinhAnh'] ?>" alt="Image" class="img-fluid">
          </p>
          <?php echo $value['NoiDung']?>
          <?php }?>
        </div>

      </div>
    </div>

    <div class="news_post_comments container">
      <div class="comments_title">Bình luận</div>
      <ul class="comments_list">

        <!-- Comment -->
        <?php foreach($data3 as $value3){
          if($value3['TrangThai']==0 && $value3['idBV']==$idBV){?>
        <li class="comment">
          <div class="comment_container d-flex flex-row">
            <div>
              <div class="comment_image">
                <img src="resources/index/images/person_1.jpg" alt="">
              </div>
            </div>
            <div class="comment_content">
              <div class="comment_meta">
                <span class="comment_name"><a href="#"><?php echo $value3['HoTen']?></a></span>
                <span class="comment_separator">|</span>
                <span
                  class="comment_date"><?php $date=new DateTime($value3['Ngay']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y"));   ?></span>
                <!-- <span class="comment_separator">|</span>
                  <span class="comment_reply_link"><a href="#">Reply</a></span> -->
              </div>
              <p class="comment_text"><?php echo $value3['NoiDung']?></p>
            </div>
          </div>
        </li>
        <?php }}?>


        <li>
          <form>

            <div class="form-group col-md-12">
              <label for="inputPassword4">Họ tên:</label>
              <input type="text" name="HoTen" class="form-control HoTen" id="inputPassword4" placeholder="Họ tên"
                required>
            </div>

            <div class="form-group col-md-12">
              <label for="exampleFormControlTextarea1">Nội dung:</label>
              <textarea class="form-control NoiDung" name="NoiDung" id="exampleFormControlTextarea1" rows="3"
                required></textarea>

            </div>
            <div class="form-group col-md-12">
              <button type="button" name="gui" class="gui" onclick="load_ajax();"
                class="btn btn-primary mt-2">Gửi</button>
            </div>

          </form>
        </li>

      </ul>



    </div>

  </div>

  </div>






  <?php include('footer.php');?>
  <!-- .site-wrap -->

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

  <script>
    function load_ajax() {
      $.ajax({
        url: "http://localhost:84/Congtacxahoi/index.php?controller=index&action=chitiet&id=<?php echo $idBV ?>",
        type: "post",
        data: {
          HoTen: $('.HoTen').val(),
          NoiDung: $('.NoiDung').val(),
          gui: 1
        }
      }).done(function () {
        console.log('abc');
        $.toast({
          text: "Bạn đã gửi bình luận", // Text that is to be shown in the toast
          icon: 'success', // Type of toast icon
          showHideTransition: 'fade', // fade, slide or plain
          allowToastClose: true, // Boolean value true or false
          hideAfter: 3000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
          stack: 10, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
          position: 'top-left', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values



          textAlign: 'left', // Text alignment i.e. left, right or center

        });

      });
    }
  </script>
</body>

</html>