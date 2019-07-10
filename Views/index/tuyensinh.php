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

  <link rel="stylesheet" href="resources/index/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="resources/index/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="resources/index/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="resources/index/css/aos.css">
  <link href="resources/index/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="resources/index/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>


<div class="py-2 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9 d-none d-lg-block">
        <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Thông tin liên lạc: </a> 
        <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
        <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
      </div>
      <div class="col-lg-3 text-right">
        <a href="admin.php" class="small mr-3"><span class="icon-unlock-alt"></span> Đăng nhập</a>
        <!-- <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a> -->
      </div>
    </div>
  </div>
</div>
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

<div class="container">
  <div class="d-flex align-items-center">
    <div class="site-logo">
      <a href="index.php" class="d-block">
        <img src="resources/index/images/logo-e1541672296379.png" alt="Image" class="img-fluid">
      </a>
    </div>
    <div class="mr-auto">
      <nav class="site-navigation position-relative text-right" role="navigation">
       
        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
        <?php foreach ($dm as $value) {
        ?>
          <li class="has-children">
        <a href="
              <?php if($value['idDM']==12){?>?controller=index&action=tintuc<?php }?>
              <?php if($value['idDM']==4){?>?controller=index&action=index<?php }?> 
              <?php if($value['idDM']==5){?>?controller=index&action=about<?php }?> 
              <?php if($value['idDM']==6){?>?controller=index&action=lienhe<?php }?>
              <?php if($value['idDM']==7){?>?controller=index&action=tuyensinh<?php }?>  
              <?php if($value['idDM']==8){?>?controller=index&action=monhoc<?php }?> 
        "
                
            class="nav-link text-left"><?php echo $value['TenDM'] ?></a>
            <ul class="dropdown">
            <?php foreach($tl as $value1){
              if($value['idDM']==$value1['idDM']){?>
            
              <li><a href="<?php if($value['idDM']==12){?>?controller=index&action=bvtl&id=<?php echo $value1['idTL']?> <?php } ?>
              <?php if($value['idDM']==7){?>?controller=index&action=tuyensinh&id<?php echo $value1['idTL']?> <?php } ?>
              <?php if($value['idDM']==8){?>?controller=index&action=chitietmh&id=<?php echo $value1['idTL']?> <?php } ?>
              "><?php echo $value1['TenTL']?></a></li>
             
              <?php }}?>
            </ul>
          </li>
        <?php }?>

        </ul>                                                                                                                                                                                                                                                                                          </ul>
      </nav>

    </div>
    <div class="ml-auto">
      <div class="social-wrap">
        <a href="#"><span class="icon-facebook"></span></a>
        <a href="#"><span class="icon-twitter"></span></a>
        <a href="#"><span class="icon-linkedin"></span></a>

        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
          class="icon-menu h3"></span></a>
      </div>
    </div>
   
  </div>
</div>

</header>

    <?php foreach($data as $value){?>
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
                
              <h2 class="mb-0"><?php echo $value['TieuDe']?></h2>
              <p><?php $date=new DateTime($value['NgayTao']);  echo('Tháng '.date_format($date,"m").' '.date_format($date,"d").', '.date_format($date,"Y").' by '.$value['TaiKhoan']); ?></p>
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
    </div>



    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="resources/index/images/logo-e1541672296379.png" alt="Image" class="img-fluid"></p>
            <p>Đào tạo các cử nhân Công tác xã hội có phẩm chất chính trị đạo đức nghề nghiệp, có ý thức phục vụ nhân dân, có sức khoẻ, có tinh thần say mê yêu nghề, nắm vững kiến thức chuyên môn và kỹ năng thực hành về nghề Công tác xã hội, có khả năng phát hiện, giải quyết những vấn đề trong mối quan hệ xã hội và nâng cao năng lực con người.</p>  
            <p><a href="#">Đọc thêm</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>DANH MỤC</span></h3>
            <ul class="list-unstyled">
                <li><a href="?controller=index&action=index">TRANG CHỦ</a></li>
                <li><a href="?controller=index&action=about">VỀ CHÚNG TÔI</a></li>
                <li><a href="?controller=index&action=tuyensinh">TUYỂN SINH</a></li>
                <li><a href="?controller=index&action=monhoc">CHUYÊN ĐỀ ĐÀO TẠO</a></li>
                <li><a href="?controller=index&action=tintuc">TIN TỨC</a></li>
               
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>CHUYÊN ĐỀ ĐÀO TẠO</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">TÂM LÝ HỌC</a></li>
                  <li><a href="#">NHẬP MÔN XÃ HỘI</a></li>
                  <li><a href="#">KỸ NĂNG SỐNG</a></li>
                
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>LIÊN LẠC</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">181 Lê Đức Thọ - Phường 17 - Gò Vấp - HCM</a></li>
                  <li><a href="#">0936.201.222</a></li>
                  <li><a href="#">hello@company.com</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

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