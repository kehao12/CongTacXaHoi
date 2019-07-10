
<ul class="sidebar navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=index">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            <?php if($_SESSION['quyen']==1){?>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qlqtv">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý quản trị viên</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qldm">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý mục tin tức</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qlmail">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý Email</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qlkh">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý khách hàng</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qlbl">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý bình luận</span></a>
                </li>
<?php }?>
               
<li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qlmh">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý môn học</span></a>
                </li>
          
                <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=qltt">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Quản lý tin tức</span></a>
                </li>
               
              
                <!-- <li class="nav-item">
                    <a class="nav-link" href="?controller=Admin&&action=bctk">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Báo cáo thống kê</span></a>
                </li> -->
            </ul>
           