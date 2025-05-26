<?php 
require "funcdb.php";
// code ketika tombol login di tekan
if (isset($_POST['submit'])) {
	$username = $_POST['username']??'';
	$password = $_POST['password']??'';

	$user = login($username, $password);
	if ($user) {
		$_SESSION['username'] = $username;
		header("location:index.php");
		exit();
	}else{
		$error = "username atau password anda salah 💋💋💋💋🤑😝😝😝😝";
	}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="../css/style.css">
 	<title></title>
 </head>
 <body>
 	<?php echo $error; ?>
 <form action="" method="post">
 	Username : <input type="text" name="username"><br>
 	Password : <input type="text" name="password">
 	<button type="submit" name="submit">LOGIN</button>
 </form>
 </body>
 </html>