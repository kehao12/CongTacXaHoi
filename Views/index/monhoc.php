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

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Môn học</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="?controller=index&action=index">Trang chủ</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Môn học</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
            <?php foreach($mh as $mh1){ ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        <a href="?controller=index&action=chitietmh&id=<?php echo $mh1['idMH'] ?>"><img src="resources/index/images/<?php echo $mh1['HinhAnh']?>" style="width:343px; height:220px;" alt="Image" class="img-fluid"></a>
                        <!-- <div class="price">$99.00</div> -->
                        <div class="category"><h3></h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2><?php echo $mh1['TenMH']?></h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>

                        <p><a href="?controller=index&action=chitietmh&id=<?php echo $mh1['idMH'] ?>" class="btn btn-primary rounded-0 px-4">Chi tiết khóa học</a></p>
                        </div>
                    </div>
                </div>
            <?php }?>

                <!-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="images/course_2.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="images/course_3.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="images/course_4.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="images/course_5.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                                <a href="course-single.html"><img src="images/course_6.jpg" alt="Image" class="img-fluid"></a>
                        <div class="price">$99.00</div>
                        <div class="category"><h3>Mobile Application</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>How To Create Mobile Apps Using Ionic</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                        <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>

   
      

    <?php include('footer.php');?>
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