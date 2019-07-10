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




  <?php include('header.php');?>

        <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"
            style="background-image: url('images/bg_1.jpg')">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <h2 class="mb-0">Tin tức</h2>
                        <!-- <p>June 6, 2019 by Admin</p> -->
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
            <div class="news">
                <div class="container">
                    <div class="row">

                        <!-- News Column -->

                        <div class="col-lg-8">
                            <?php foreach ($rs1 as $value ) {
                              if($value['TrangThai']==1){?>
                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="resources/index/images/<?php echo $value['HinhAnh'] ?>">
                                </div>
                                <div class="news_post_top d-flex flex-column flex-sm-row">
                                    <div class="news_post_date_container">
                                        <div
                                            class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div><?php $date=new DateTime($value['NgayTao']); echo date_format($date,"d")?></div>
                                            <div><?php $date=new DateTime($value['NgayTao']); echo "Bảy"?></div>
                                        </div>
                                    </div>
                                    <div class="news_post_title_container">
                                        <div class="news_post_title">
                                            <a href="?controller=index&action=chitiet&id=<?php echo $value['idBV']?>"><?php echo $value['TieuDe'] ?></a>
                                        </div>
                                        <!-- <div class="news_post_meta">
                                            <span class="news_post_author"><a href="#"><?php echo $value['TaiKhoan'] ?></a></span>
                                            <span>|</span>
                                            <span class="news_post_comments"><a href="#">3 Comments</a></span>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="news_post_text">
                                    <p><?php echo $value['TomTat']?></p>
                                </div>
                                <div class="news_post_button text-center trans_200">
                                    <a href="?controller=index&action=chitiet&id=<?php echo $value['idBV']?>">Đọc thêm</a>
                                </div>
                            </div>
                            <?php }}?>

                            <!-- Page Nav -->

                             <div class="news_page_nav">
            <ul>
              <?php if ($current_page > 1 && $total_page > 1){?>
              <li class=" text-center trans_200"><a href="?controller=index&action=tintuc&page=<?php echo ($current_page-1) ?>">Prev</a></li>
              <?php } ?>
                
<?php for($i=1; $i<=$total_page;$i++){
   if ($i == $current_page){
  ?> 
             
              <li class="active text-center trans_200"><a href="?controller=index&action=tintuc&page=<?php echo $i?>"><?php echo $i?></a></li>
<?php } else {?>
              <li class="text-center trans_200"><a href="?controller=index&action=tintuc&page=<?php echo $i?>"><?php echo $i?></a></li>
<?php }}?>
            </ul>
          </div>

                        </div>

                        <!-- Sidebar Column -->

                        <div class="col-lg-4">
                            <div class="sidebar">

                                <!-- Archives -->
                                <!-- <div class="sidebar_section">
                                    <div class="sidebar_section_title">
                                        <h3>DANH MỤC</h3>
                                    </div>
                                    <ul class="sidebar_list">
                                        <li class="sidebar_list_item"><a href="#">Định hướng nghề nghiệp</a></li>
                                        <li class="sidebar_list_item"><a href="#">Cơ hội việc làm</a></li>
                                        <li class="sidebar_list_item"><a href="#">Khác</a></li>
                                    </ul>
                                </div> -->

                                <!-- Latest Posts -->

                                <div class="sidebar_section">
                                    <div class="sidebar_section_title">
                                        <h3>TIN MỚI NHẤT</h3>
                                    </div>

                                    <div class="latest_posts">

                                        <!-- Latest Post -->
                                        <?php foreach($data1 as $value){
                                          if($value['TrangThai']==1){?>
                                        <div class="latest_post">
                                            <div class="latest_post_image">
                                                <img src="resources/index/images/<?php echo $value['HinhAnh']?>" >
                                            </div>
                                            <div class="latest_post_title"><a href="?controller=index&action=chitiet&id=<?php echo $value['idBV']?>"><?php echo $value['TieuDe'] ?></a></div>
                                            <!-- <div class="latest_post_meta">
                                                <span class="latest_post_author"><a href="#">By Christian
                                                        Smith</a></span>
                                                <span>|</span>
                                                <span class="latest_post_comments"><a href="#">3 Comments</a></span>
                                            </div> -->
                                        </div>
                                        <?php }}?>

                                        

                                    </div>

                                </div>

                                <!-- Tags -->

                                <!--     <div class="sidebar_section">
              <div class="sidebar_section_title">
                <h3>Tags</h3>
              </div>
              <div class="tags d-flex flex-row flex-wrap">
                <div class="tag"><a href="#">KHÓA HỌC</a></div>
                <div class="tag"><a href="#">CÔNG TÁC XÃ HỘI</a></div>
                <div class="tag"><a href="#">TÂM LÝ HỌC</a></div>
                <div class="tag"><a href="#">CAO ĐẲNG</a></div>
              </div>
            </div> -->


                            </div>

                        </div>
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