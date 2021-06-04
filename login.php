<?php
include("userService.php");

session_start();
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PEMILIHAN KETUA HIMPUNAN 2022</title>	
</head>
<body>
	<h1>LAMAN PEMILIHAN KETUA HIMPUNAN 2022</h1>
	<div class="kotak_login">
	<p class="tulisan_login">Silakan Login Terlebih Dahulu</p>
	<form action="" method="POST">		
		<table>
			<tr>
				<td>Email</td>
				<td><input type="text" class="form_login" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" class="form_login" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="tombol_login" name="login" value="Log In"></td>
			</tr>
		</table>
	</form>
	 <?php
    if (isset($_POST['email'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        $user = new user($_SESSION['email'], $_SESSION['password']);
        $getUser = $user->login();
        if ($getUser) {
            header("Location: http://localhost/andra/desc.php");
        } else {
            header("Location: http://localhost/andra/desc.php");
        }
    }
    ?>
</body>
</html>
