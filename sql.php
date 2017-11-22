<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$price=$_POST['price'];
		$producer=$_POST['producer'];
		$nsx=$_POST['nsx'];
		$hsd=$_POST['hsd'];
		$quantity=$_POST['quantity'];
	}
	try{
		require_once "include.php";
		$sql="INSERT INTO sanpham(tensanpham,giasanpham,nhasanxuat,ngaysx,hsd,soluong)
				VALUES('$name','$price','$producer','$nsx','$hsd','$quantity')";
		$connect -> exec($sql);
		echo "ket noi thành công"; 
	}
	catch(Exception $e){
		echo "ket noi loi".$e->getMessage();
	}
 ?>