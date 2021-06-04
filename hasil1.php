<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="undip.png">
	<title>Pemilihan Ketua Himpunan 2022</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-dark bg-danger fixed-top">
	  <a class="navbar-brand" href="#" style="color: #fff;">
	    Pemilihan Ketua Himpunan 2022
	  </a>
	</nav>

	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;"><?= "TERIMAKASIH TELAH MEMILIH <br>";?></h2><hr>
		<div>
			<h3 align="center"><?= "<p style=\"font-size : 60px\">Kamu memilih " . $_POST['kahim']."</p>";?></h3>
		</div>
		<div class="row mb-3">
			<div class="col-sm-12">
				<center>
				<a href="logout.php"><button type="button" style="place-items: center;" class="btn btn-danger">Log Out</button>
				<a href="list.php"><button type="button" style="place-items: center;" class="btn btn-success">Lihat Hasil</button>
					</center>
			</div>
		</div><hr>
</body>
</html>