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
                    <?php if($value['idDM']==6){?>#<?php }?>
                    <?php if($value['idDM']==7){?>?controller=index&action=tintuc<?php }?>  
                    <?php if($value['idDM']==8){?>?controller=index&action=monhoc<?php }?> 
              "
                      
                  class="nav-link text-left"><?php echo $value['TenDM'] ?></a>
                  <ul class="dropdown">
                  <?php foreach($tl as $value1){
                    if($value['idDM']==$value1['idDM']){?>
                  
                    <li><a href="<?php if($value['idDM']==12){?>?controller=index&action=bvtl&id=<?php echo $value1['idTL']?> <?php } ?>
                    <?php if($value['idDM']==7){?>?controller=index&action=bvtl&id=<?php echo $value1['idTL']?> <?php } ?>
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