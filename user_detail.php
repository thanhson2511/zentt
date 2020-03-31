<?php 
	require_once 'connect.php';
	$id = $_GET['id'];
	$query = "SELECT * FROM users WHERE id= " . $id;
	$result = $conn->query($query);
	$user = $result->fetch_assoc();
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USER ---</h3>
        <!-- <a href="users_add.php" class="btn btn-primary">Add New User</a> -->
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Avatar</th>
                <th>Created_at</th>
            </thead>
            <?php {?>
            	<tr>
            		<td><?php echo $user['id']; ?></td>
            		<td><?php echo $user['name']; ?></td>
            		<td><?php echo $user['email']; ?></td>
            		<td><?php echo $user['password'] ?></td>
            		<td><?php echo $user['avatar'] ?></td>
            		<td><?php echo $user['created_at'] ?></td>               	
                </tr>
       <?php } ?>
   </table>
            
    </div>
</body>
</html>