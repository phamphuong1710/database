<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="sql.php" method="POST">
		<table>
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" value="" name="name"></td>
			</tr>
			<tr>
				<td>giá sản phẩm</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Nhà sản xuất</td>
				<td><input type="text" value="" name="producer"></td>
			</tr>
			<tr>
				<td>Ngày sản xuất</td>
				<td><input type="date" name="nsx"></td>
			</tr>
			<tr>
				<td>Hạn sử dụng</td>
				<td><input type="date" value="" name="hsd"></td>
			</tr>
			<tr>
				<td>Số lượng sản phẩm</td>
				<td><input type="text" name="quantity" value=''></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>