<?php 
	require_once 'connect.php';
	$id = $_POST['id'];
	$data = $_POST;
	$query = "UPDATE users SET name='". $data['name'] . "',email='". $data['email'] ."', password='". $data['password'] ."', avatar='". $data['avatar'] ."' WHERE id=" . $id ;
	if (mysqli_query($conn,$query)) {
		echo "<script>alert('Bạn đã sửa thành công');window.location='users.php'</script>";
		}else{
			echo "<script>alert('Sửa không thành công');</script>";
		}
 ?>