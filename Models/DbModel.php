<?php 
	class DbModel{
		public function connect()
		{
			$con=mysqli_connect('localhost','root','','ctxh');
			if(mysqli_connect_errno()){
				echo 'Connect error'.mysqli_connect_error();
			}
			$con->query('SET NAMES UTF8');
			return $con;
		}	
	}
 ?>