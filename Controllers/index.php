<?php

if(isset($_GET['action'])){
	$action=$_GET['action'];
}
else{
	$action='';
}

switch ($action) {

 

	case 'index':{
     
        $id='ThuTu';
        $table='baiviet';
        $table2='monhoc';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
   
        
        $data3=$ad->getAllData1BV();
        $data=$ad->getAllData($table);
        $mh=$ad->getAllData($table2);
      
        $id;
        foreach($data3 as $value){
            $id=$value['idBV'];
        }
        $data2=$ad->getAllData4BV($id);

        if(isset($_POST['submit'])){
            $mail=$_POST['Email'];
            $res=$ad->insertMail($mail);
        }

        if(isset($_POST['dangky'])){
            $TenKH=$_POST['TenKH'];
            $SDT=$_POST['SDT'];
            $Email=$_POST['Email'];
            $TrangThai=0;
            $res=$ad->insertDK($TenKH,$SDT,$Email,$TrangThai);
        }
        
		require_once('Views/index/index.php');
		
		break;
    }
    
    case 'about':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        require_once('Views/index/about.php');
        break;
    }
    case 'chitiet':{
        session_start();
        $idBV=$_GET['id'];

        $module_name = 'tintuc';
        $session_name = $module_name . '_' . $idBV;

        
      
        if(isset($_SESSION[$session_name])){

        } else
        {
       
	        // Gán giá trị session
	        $_SESSION[$session_name] = 1;
	        // Thực hiện cập nhật lượt xem, cộng dồn thêm 1
            $data4=$model->dem_lan_xem($idBV);
        }
        $table2='binhluan';
        $data3=$ad->getAllData($table2);
     

        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        $table='baiviet';
        // $data=$model->getAllData($table);
        
        // $table1='danhmuc';
        // $id='ThuTu';
        $table2='binhluan';
        // $data3=$model->getAllData($table2);
        // $data1=$ad->getAllDataOrderBy($table,$id);
        $data=$ad-> getChitietBV($table, $idBV);
        
        if(isset($_POST['gui'])){
            $Ngay=date("Y/m/d");
            $HoTen=$_POST['HoTen'];
            $NoiDung=$_POST['NoiDung'];
            $TrangThai=1;
            $data=$model->insertBL($Ngay,$NoiDung,$HoTen,$TrangThai,$idBV);
            
            header('Location:index.php?controller=index&action=chitiet&id='.$idBV);
            
        }
        
		require_once('Views/index/chitiet.php');
    
		break;
    }
   
    case 'chitietmh':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        $table='monhoc';
        // $data=$model->getAllData($table);
        $id=$_GET['id'];
        // $table1='danhmuc';
        // $id='ThuTu';
        // $table2='binhluan';
        // $data3=$model->getAllData($table2);
        // $data1=$ad->getAllDataOrderBy($table,$id);
        $data=$ad->getAllData($table);
        // $data4=$model->dem_lan_xem($idBV);
        // if(isset($_POST['NoiDung'])){
        //     $Ngay=date("Y/m/d");
        //     $Email=$_POST['Email'];
        //     $HoTen=$_POST['HoTen'];
        //     $NoiDung=$_POST['NoiDung'];
        //     $TrangThai=1;
        //     $data=$model->insertBL($Ngay,$NoiDung,$Email,$HoTen,$TrangThai,$idBV);
        //     header('Location:index.php?controller=index&action=chitiet&id='.$idBV);
            
        // }
		require_once('Views/index/chitietmh.php');
    
		break;
    }
    
    case 'tintuc':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);
        $table2='baiviet';
       
        $data1=$ad->getAllData($table2);
        
            //Tính Record
            $rs=$model->totalPost();
            foreach($rs as $va){
                $total_records = $va['total'];
            }
            //TÌM LIMIT VÀ CURRENT_PAGE
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 2;
    
            //TÍNH TOÁN TOTAL_PAGE VÀ START
            // tổng số trang
            $total_page = ceil($total_records / $limit);
    
            // Giới hạn current_page trong khoảng 1 đến total_page
            if ($current_page > $total_page){
                $current_page = $total_page;
            }
            else if ($current_page < 1){
                $current_page = 1;
            }
    
            // Tìm Start
            $start = ($current_page - 1) * $limit;
    
            $rs1=$model->Paging($start,$limit);
        require_once('Views/index/tintuc.php');
		
		
		break;
    }



    case 'bvtl':{
        $id1='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id1);
        $tl=$ad->getAllData($tl);
        $MaTL=$_GET['id'];
    
        $table2='baiviet';
        $table='theloai';
        $table1='danhmuc';
        $id='Tin tức';
        $table2='baiviet';
        $data=$ad->getAllData2Table1($table,$table1,$id);
     
        $data1=$ad->getAllData($table2);

         //Tính Record
         $rs=$model->totalPostID($MaTL);
         foreach($rs as $va){
             $total_records = $va['total'];
         }
         //TÌM LIMIT VÀ CURRENT_PAGE
         $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
         $limit = 2;
 
         //TÍNH TOÁN TOTAL_PAGE VÀ START
         // tổng số trang
         $total_page = ceil($total_records / $limit);
 
         // Giới hạn current_page trong khoảng 1 đến total_page
         if ($current_page > $total_page){
             $current_page = $total_page;
         }
         else if ($current_page < 1){
             $current_page = 1;
         }
 
         // Tìm Start
         $start = ($current_page - 1) * $limit;
 
         $rs1=$model->PagingID($start,$limit,$MaTL);
         
        require_once('Views/index/theloai.php');
		
		
		break;
    }

    case 'monhoc':{
        $id='ThuTu';
        $tl='theloai';
        $dm='danhmuc';
        $dm=$ad->getAllDataOrderBy($dm,$id);
        $tl=$ad->getAllData($tl);

        $table='monhoc';
        // $table1='danhmuc';
        // $id='Tin tức - Sự kiện';
        // $table2='baiviet';
        // $data=$ad->getAllData2Table1($table,$table1,$id);
        $mh=$ad->getAllData($table);
        require_once('Views/index/monhoc.php');
		
		
		break;
    }


   
}

?>