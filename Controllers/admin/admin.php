<?php 
	include "./resources/PHPMailer-master/src/PHPMailer.php";
	include "./resources/PHPMailer-master/src/Exception.php";
	include "./resources/PHPMailer-master/src/OAuth.php";
	include  "./resources/PHPMailer-master/src/POP3.php";
	include "./resources/PHPMailer-master/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

if(isset($_GET['action'])) {
	$action=$_GET['action'];
}

else {
	$action='';
}

switch ($action) {
	case 'index': {
		session_start();
		if(isset($_SESSION['login'])) {
		require_once('Views/admin/adindex.php');
		}
		else 
		header('Location:admin.php?controller=Admin&action=login');
		break;
	}

	case 'login': {
		if(isset($_POST['DN'])) {
			$TenTK=$_POST['TenTK'];
			$Pass=$_POST['Pass'];
			$result=$model->login($TenTK, $Pass);
			$table="taikhoan";
			$data=$model->getAllData1AD($TenTK);
			$Quyen;
			
			//$data=$model->fetchUser($TenTK);
			if($result==1) {
				session_start();
				$_SESSION['login']=1;
				$_SESSION['admin']=$TenTK;
				foreach($data as $value){
					$_SESSION['quyen']=$value['Quyen'];
					
				}
				
			

				header('Location:admin.php?controller=Admin&action=index');
			}

			else {

				header('Location:admin.php?controller=Admin&action=login');
			}

		}

		else {
			require_once('Views/admin/adlogin.php');
		}

		break;
	}

	case'logout': {
		session_start();
		unset($_SESSION['login']);
		unset($_SESSION['admin']);
		header('Location:admin.php?controller=Admin&action=login');
		break;

	}

	// Quản lý quản trị viên
	case 'qlqtv': {
		session_start();
		
			if(isset($_SESSION['login'])) {
				if ($_SESSION['quyen']==1) {
				$table="nhanvien";
				$table1="taikhoan";
				$data=$model->getAllData($table);
				$data1=$model->getAllData($table1);
				require_once('Views/admin/quanlyqtv.php');
			}
	
			else {
				header('Location:admin.php?controller=Admin&action=index');
			}

		}
		else 
		header('Location:admin.php?controller=Admin&action=login');
	
		

		break;
	}

	case 'themqtv': {
		session_start();
		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$table="nhanvien";
			$table="taikhoan";
			$data=$model->getAllData($table);

			if(isset($_POST['them'])) {
				$Tenqtv=$_POST['tenqtv'];
				$Diachi=$_POST['diachi'];
				$Tentk=$_POST['tentk'];
				$Matkhau=$_POST['matkhau'];
				$Quyen=$_POST['quyen'];
				$Trangthai=$_POST['trangthai'];
				$tt=1;
				$result=$model->insertTK($Tentk, $Matkhau, $Quyen, $Trangthai);
				$result=$model->insertNV($Tenqtv, $Diachi, $tt, $Tentk);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/qtv/themqtv.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	

		break;
	}

	case 'suaqtv': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaQTV=$_GET['id'];
			$table="nhanvien";

			$data=$model->getAllData($table);

			if(isset($_POST['sua'])) {
				$Tenqtv=$_POST['tenqtv'];
				$Diachi=$_POST['diachi'];
				$Trangthai=$_POST['trangthai'];
				$result=$model->updateNV($MaQTV,$Tenqtv, $Diachi, $Trangthai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/qtv/suaqtv.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoaqtv': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaQTV=$_GET['id'];

			if($model->deleteQTV($MaQTV)) {
				header('Location:admin.php?controller=Admin&action=qlqtv');
			}
			else {
				header('Location:admin.php?controller=Admin&action=index');
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	

		break;
	}

	case 'qldm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$table='danhmuc';
			$table1='theloai';
			$id='ThuTu';
			$id1='idDM';
			$data=$model->getAllDataOrderBy($table, $id);
			$data1=$model->getAllDataOrderBy($table1, $id);
			$data2=$model->dem($table1, $id1);
			require_once('Views/admin/quanlydm.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themdm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			if(isset($_POST['them1'])) {
				$TenDM=$_POST['TenDM'];
				$ThuTu=$_POST['ThuTu'];
				$Trangthai=$_POST['TrangThai'];
				$result=$model->insertDM($TenDM, $ThuTu, $Trangthai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/danhmuc/themdm.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}



	case 'suadm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaDM=$_GET['id'];
			$id='ThuTu';
			$table='danhmuc';
			$data=$model->getAllDataOrderBy($table, $id);

			if(isset($_POST['sua'])) {
				$TenDM=$_POST['TenDM'];
				$ThuTu=$_POST['ThuTu'];
				$Trangthai=$_POST['TrangThai'];
				$result=$model->updateDM($TenDM, $ThuTu, $Trangthai, $MaDM);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/danhmuc/suadm.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoadm': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaDM=$_GET['id'];

			if($model->deleteDM($MaDM)) {
				header('Location:admin.php?controller=Admin&action=qldm');
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}


	case 'themtl': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaDM=$_GET['id'];
			$table='theloai';
			$data=$model->getAllData($table);

			if(isset($_POST['them1'])) {
				$TenTL=$_POST['TenTL'];
				$ThuTu=$_POST['ThuTu'];
				$Trangthai=$_POST['TrangThai'];
				$result=$model->insertTL($TenTL, $ThuTu, $Trangthai, $MaDM);

				if($result) {
					$thanhcong[]='success';
				}

				header('Location:admin.php?controller=Admin&action=qldm');
			}

			require_once('Views/admin/theloai/themtl.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suatl': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaTL=$_GET['id'];
			$MaTL=$_GET['id'];
			$table='theloai';
			$data=$model->getAllData($table);

			if(isset($_POST['them1'])) {
				$TenTL=$_POST['TenTL'];
				$ThuTu=$_POST['ThuTu'];
				$result=$model->updateTL($TenTL, $ThuTu, $MaTL);

				if($result) {
					$thanhcong[]='success';
				}

				header('Location:admin.php?controller=Admin&action=qldm');
			}

			require_once('Views/admin/theloai/suatl.php');
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoatl': {
		session_start();

		if(isset($_SESSION['login'])) {
			if ($_SESSION['quyen']==1) {
			$MaTL=$_GET['id'];

			if($model->deleteTL($MaTL)) {
				header('Location:admin.php?controller=Admin&action=qldm');
			}
		}
		else {
			header('Location:admin.php?controller=Admin&action=index');
		}
	}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qltt': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			$table1='theloai';
			$table='baiviet';
			$id='idDM';
			$data=$model->getAllData($table);
			$data1=$model->getAllDataOrderBy($table1, $id);
			require_once('Views/admin/quanlytt.php');
		}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suatt': {
		session_start();

		if(isset($_SESSION['login'])) {
		
			$table1='theloai';
			$table='baiviet';
			$id='12';
			$data=$model->getAllData($table);
			$data1=$model->getAllDataOrderBy($table1, $id);
			$MaBV=$_GET['id'];
			$data2=$model->getAllDataTLBV();
			if(isset($_POST['sua'])) {

				$TieuDe=$_POST['TieuDe'];
				$TacGia=$_POST['TacGia'];
				$TomTat=$_POST['TomTat'];
				$NgayTao=date("d/m/Y");
			
				if($_POST['HinhTam']==null){
				$HinhAnh=$_POST['HinhAnh'];
				} else {
					$HinhAnh=$_POST['HinhTam'];
				}
				$NoiDung=$_POST['NoiDung'];
				$SoLanXem=0;
				$TrangThai=$_POST['TrangThai'];
				$idTL=$_POST['idTL'];

				$result=$model->updateBV($TieuDe, $TacGia, $TomTat, $HinhAnh, $NoiDung, $TrangThai, $idTL, $MaBV);

				if($result) {
					$thanhcong[]='success';
				}

				header('Location:admin.php?controller=Admin&action=qltt');
			}

			require_once('Views/admin/tintuc/suatt.php');
		}


		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	

		break;
	
}

	case 'xoatintuc':{
		session_start();

		if(isset($_SESSION['login'])) {
			$MaBV=$_GET['id'];

			if($model->deleteBV($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qltt');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themtt': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table='theloai';
			$id='ThuTu';
			$data=$model->getAllDataOrderBy($table, $id);
			$data2=$model->getAllDataTLBV();
			if(isset($_POST['them1'])) {
				$TieuDe=$_POST['TieuDe'];
				$TacGia=$_POST['TacGia'];
				$TomTat=$_POST['TomTat'];
				$NgayTao=date("Y/m/d");
				$HinhAnh=$_POST['HinhAnh'];
				$NoiDung=$_POST['NoiDung'];
				$SoLanXem=0;
				$TrangThai=$_POST['TrangThai'];
				$idTL=$_POST['TL'];
				$TaiKhoan=$_SESSION['admin'];
				$result=$model->insertBV($TieuDe, $TacGia, $TomTat, $NgayTao, $HinhAnh, $NoiDung, $SoLanXem, $TrangThai, $idTL, $TaiKhoan);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/tintuc/themtt.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qlbl': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			$table='binhluan';
			$data=$model->getAllData($table);
			$table1='baiviet';
			$data1=$model->getAllData($table1);

			require_once('Views/admin/qlbl.php');
		}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suabl':{
		session_start();

		if(isset($_SESSION['login'])) {
			$MaBV=$_GET['id'];

			if($model->updateBL($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qlbl');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoabl':{
		session_start();

		if(isset($_SESSION['login'])) {
			$MaBV=$_GET['id'];

			if($model->deleteBL($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qlbl');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qlmh': {
		session_start();

		if(isset($_SESSION['login'])) {
			
			$table='monhoc';
			$data=$model->getAllData($table);

			require_once('Views/admin/quanlymh.php');
		}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'themmh': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table='monhoc';
			$id='ThuTu';
			$data=$model->getAllData($table);
	
			if(isset($_POST['them1'])) {
				$TenMH=$_POST['TenMH'];
				$NoiDung=$_POST['NoiDung'];
				$ThoiLuong=$_POST['ThoiLuong'];
				$HinhAnh=$_POST['HinhAnh'];
				// $NgayTao=date("Y/m/d");
				$TrangThai=$_POST['TrangThai'];
				$result=$model->insertMH($TenMH, $NoiDung, $ThoiLuong, $HinhAnh, $TrangThai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/monhoc/themmh.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'suamh': {
		session_start();

		if(isset($_SESSION['login'])) {
			$table='monhoc';
			
			$data=$model->getAllData($table);
			$MaBV=$_GET['id'];
	
			if(isset($_POST['them1'])) {
				$TenMH=$_POST['TenMH'];
				$NoiDung=$_POST['NoiDung'];
				$ThoiLuong=$_POST['ThoiLuong'];
				if($_POST['HinhTam']==null){
					$HinhAnh=$_POST['HinhAnh'];
					} else {
						$HinhAnh=$_POST['HinhTam'];
					}
				// $NgayTao=date("Y/m/d");
				$TrangThai=$_POST['TrangThai'];
				$result=$model->updateMH($MaBV,$TenMH, $NoiDung, $ThoiLuong, $HinhAnh, $TrangThai);

				if($result) {
					$thanhcong[]='success';
				}
			}

			require_once('Views/admin/monhoc/suamh.php');
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'xoamh':{
		session_start();

		if(isset($_SESSION['login'])) {
			$MaBV=$_GET['id'];

			if($model->deleteMH($MaBV)) {
				header('Location:admin.php?controller=Admin&action=qlmh');
			}
		}

		else {
			header('Location:admin.php?controller=Admin&action=login');
		}

		break;
	}

	case 'qlkh': {
		session_start();
	
		if(isset($_SESSION['login'])) {
			
			$table='khachhang';
			$data=$model->getAllData($table);
			require_once('Views/admin/qlkhachhang.php');
		}
	
		else {
			header('Location:admin.php?controller=Admin&action=login');
		}
	
		break;
	}





case 'qlmail': {
	session_start();

	if(isset($_SESSION['login'])) {
		
		$table1='theloai';
		$table='dangky';
		$data=$model->getAllData($table);
		require_once('Views/admin/qlmail.php');
	}

	else {
		header('Location:admin.php?controller=Admin&action=login');
	}

	break;
}



case 'sendmail': {
	session_start();

	if(isset($_SESSION['login'])) {
		$table='dangky';
		$data=$model->getAllData($table);
		// header('Location:admin.php?controller=Admin&action=qlmail');

		if(isset($_POST["send"])){

		
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username =  $_POST['post'];             // SMTP username
    $mail->Password =  $_POST['pass'];                      // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
	$mail->setFrom($_POST['post'],$_POST['ten']);
  	foreach($data as $value){    // Add a recipient
	$mail->addAddress($value['Email']);   
	              }            // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
	$mail->isHTML(true); 
	$mail->CharSet = "utf8";                                 // Set email format to HTML
    $mail->Subject = $_POST['subject'];;
    $mail->Body    = $_POST['message'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
	$mail->send();
	header('Location:admin.php?controller=Admin&action=qlmail');
   
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ';
}
		}
		require_once('Views/admin/mail/formmail.php');
	}

	else {
		header('Location:admin.php?controller=Admin&action=login');
	}

	break;
}

case 'sendmailID': {
	session_start();

	if(isset($_SESSION['login'])) {
		$table='dangky';
		$MaKH=$_GET['id'];
		$data=$model->getAllDataID($table,$MaKH);
		// header('Location:admin.php?controller=Admin&action=qlmail');

		if(isset($_POST["send"])){
			echo  $_POST['post'];
			echo  $_POST['pass'];
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username =  $_POST['post'];             // SMTP username
    $mail->Password =  $_POST['pass'];                         // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
	$mail->setFrom($_POST['post'],$_POST['ten']);
  	foreach($data as $value){    // Add a recipient
	$mail->addAddress($value['Email']);   
	              }            // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
	$mail->isHTML(true); 
	$mail->CharSet = "utf8";                                 // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
	$mail->send();
	header('Location:admin.php?controller=Admin&action=qlmail');
   
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;;
}
		}
		require_once('Views/admin/mail/formmailID.php');
	}

	else {
		header('Location:admin.php?controller=Admin&action=login');
	}

	break;
}

case 'sendmailIDKH': {
	session_start();

	if(isset($_SESSION['login'])) {
		$table='khachhang';
		$MaKH=$_GET['id'];
		$data=$model->getAllDataIDKH($table,$MaKH);
		// header('Location:admin.php?controller=Admin&action=qlmail');

		if(isset($_POST["send"])){

		
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username =  $_POST['post'];             // SMTP username
    $mail->Password =  $_POST['pass'];                       // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom($_POST['post'],$_POST['ten']);
  	foreach($data as $value){    // Add a recipient
	$mail->addAddress($value['Email']);   
	              }            // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
	$mail->isHTML(true); 
	$mail->CharSet = "utf8";                                 // Set email format to HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
	$mail->send();
	header('Location:admin.php?controller=Admin&action=qlkh');
   
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ';
}

	$TrangThai=1;
	$rs=$model->updateSTATUSKH($TrangThai,$MaKH);
		}
		require_once('Views/admin/mail/formmailID.php');
	}

	else {
		header('Location:admin.php?controller=Admin&action=login');
	}

	break;
}

}

	?>