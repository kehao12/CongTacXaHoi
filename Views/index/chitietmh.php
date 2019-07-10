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
  <link rel="stylesheet" href="resources/index/ss/owl.theme.default.min.css">

  <link rel="stylesheet" href="resources/index/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="resources/index/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="resources/index/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="resources/index/css/aos.css">
  <link href="resources/index/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="resources/index/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <?php include('header.php');?>


  <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"
    style="background-image: url('resources/index/images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <?php foreach($data as $value){
                    if($value['idMH']==$id){?>
          <h2 class="mb-0"><?php echo $value['TenMH']?></h2>
          <?php }}?>
          <p></p>
        </div>
      </div>
    </div>
  </div>


  <div class="custom-breadcrumns border-bottom">
    <div class="container">
      <a href="index.html">Trang chủ</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <a href="courses.html">Môn học</a>
      <span class="mx-3 icon-keyboard_arrow_right"></span>
      <?php foreach($data as $value){
                    if($value['idMH']==$id){?>
      <span class="current"><?php echo $value['TenMH']?></span>
      <?php }}?>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <?php foreach($data as $value){
                    if($value['idMH']==$id){?>
        <div class="col-md-6 mb-4">
          <p>
            <img src="resources/index/images/<?php echo $value['HinhAnh']?>" alt="Image" class="img-fluid">
          </p>
        </div>
        <div class="col-lg-5 ml-auto align-self-center">
          <h2 class="section-title-underline mb-5">
            <span>Mô tả</span>
          </h2>

          <!-- <p><strong class="text-black d-block">Teacher:</strong> Craig Daniel</p> -->
          <p class="mb-5"><strong class="text-black d-block">Thời lượng:</strong>
            <?php echo $value['ThoiLuong']." buổi."?></p>
          <?php echo $value['NoiDung']?>
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At itaque dolore libero corrupti! Itaque, delectus?</p>
                        <p>Modi sit dolor repellat esse! Sed necessitatibus itaque libero odit placeat nesciunt, voluptatum totam facere.</p>
    
                        <ul class="ul-check primary list-unstyled mb-5">
                            <li>Lorem ipsum dolor sit amet consectetur</li>
                            <li>consectetur adipisicing  </li>
                            <li>Sit dolor repellat esse</li>
                            <li>Necessitatibus</li>
                            <li>Sed necessitatibus itaque </li>
                        </ul> -->

          <p>
            <a href="#" class="btn btn-primary rounded-0 btn-lg px-5">Đăng ký</a>
          </p>

        </div>
        <?php }}?>
      </div>
    </div>
  </div>

  <div class="section-bg style-1" style="background-image: url('resources/index/images/hero_1.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class="icon flaticon-mortarboard"></span>
          <h3>Our Philosphy</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
            delectus ea? Dolore, amet reprehenderit.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class="icon flaticon-school-material"></span>
          <h3>Academics Principle</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
            delectus ea?
            Dolore, amet reprehenderit.</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <span class="icon flaticon-library"></span>
          <h3>Key of Success</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis
            delectus ea?
            Dolore, amet reprehenderit.</p>
        </div>
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




  <script src="resources/index/js/main.js"></script>

</body>

</html>