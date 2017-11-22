<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
	<style>	
		h1{
			width: 100%;
			text-align: center;
		}	
		.table{
			width: 60%;
			text-align: center;
			margin-left: 240px;
		}
	</style>
</head>
<body>
	<h1>Thông tin sản phẩm</h1>
	<?php
	try{
		require_once "include.php";
		$select=$connect -> prepare("SELECT * FROM sanpham");
		$select -> execute();
		$select ->setFetchMode(PDO::FETCH_ASSOC);
		$result =$select -> fetchAll();
		echo "<table class= 'table' border = '1'>"; 
			echo "<tr>";
				echo "<th>Tên sản phẩm</th>";
				echo "<th>Giá sản phẩm</th>";
				echo "<th>Nhà sản xuất</th>";
				echo "<th>Ngày sản xuất</th>";
				echo "<th>Hạn sử dụng</th>";
				echo "<th>Số lượng</th>";
			foreach ($result as $key => $value) {
				echo "<tr>";
					echo "<td>".$value['tensanpham']."</td>";
					echo "<td>".number_format($value['giasanpham'])."<sup>đ</sup></td>";
					echo "<td>".$value['nhasanxuat']."</td>";
					echo "<td>".$value['ngaysx']."</td>";
					echo "<td>".$value['hsd']."</td>";
					echo "<td>".$value['soluong']."</td>";
			}
		echo "</table>";
	} 
	catch(Exception $e){
		echo "lỗi".$e->getMessage();
	}
 ?>
</body>
</html>