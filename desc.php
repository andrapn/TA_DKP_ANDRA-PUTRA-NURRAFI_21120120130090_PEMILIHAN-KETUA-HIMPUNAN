<?php
include("userService.php");
session_start();
    $user = new user($_SESSION['email'], $_SESSION['password']);
    $getUser = $user->login();
    if($getUser){ ?>
			<!DOCTYPE HTML>
			<html>
				<head>
					<title>VISI MISI CALON KETUA HIMPUNAN 2022</title>
					<meta charset="utf-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1" />
					<link rel="stylesheet" href="assets/css/main.css" />
				</head>

				<body class="landing">
							<section id="one" class="wrapper style1">
								<div class="inner">
									<article class="feature left">
										<span class="image"><img src="images/pic1.png" alt="" /></span>
										<div class="content">

											<h1>Muhamad Yahya Oktariansyah</h1>
											<h3>VISI</h3>
											<p>
												Menjadikan HIMASKOM sebagai organisasi yang aspiratif dan berkarakter serta memberi pengaruh positif di dalam maupun di luar kampus.
											</p>
											<h3>MISI</h3>
											<p>
												1. Memaksimalkan kinerja HIMASKOM.<br>
												2. Menonjolkan peran aktif HIMASKOM dalam memberikan pelayanan di lingkungan departemen.<br>
												3. Menumbuhkan sikap komunikatif dengan dosen dan ormawa lain agar terciptanya kerjasama yang baik.
											</p>
											<h3>PROGRAM KERJA</h3>
											<p>
												1. PKKMB 2022 <br>
												2. Rapat Kerja 2022<br>
												3. LKMMPD 2022<br>
												4. POR TEKKOM 2022<br>
												5. RECREATION 2022<br>
												6. LPJ 2022<br>
											</p>
										</span>
										<ul class="actions">
											<li>
											</li>
										</ul>
									</div>
								</article>
								<article class="feature right">
									<span class="image"><img src="images/pic2.jpg" alt="" /></span>
									<div class="content">
										<h1>Naufal Daffa' Riswanda</h1>
										<h3>Visi</h3>
										<p>
											Menjadikan HIMASKOM sebagai organisasi yang efisien dalam pelaksanaan kerja dan kompeten dalam pemanfaatan teknologi
										</p>
											<h3>Misi</h3>
											<p>
												1. Menjadikan HIMASKOM sebagai pemberi layanan yang berintegritas.<br>   
												2. Meningkatkan kualitas HIMASKOM disektor Informasi dan Publikasi.<br>
												3. Menjaga Keharmonisan HIMASKOM dengan ormawa lain dan departemen.<br>
											</p>
											<h3>Proker</h3>
											<p>
												1. PKM 2022<br>
												2. ECEG 2022
											</p>
										</span>
										<ul class="actions">
											<li>
											</li>
										</ul>
									</div>
								</article>
								<article class="feature left">
									<span class="image"><img src="images/pic3.jpeg" alt="" /></span>
									<div class="content">
										<h1>Whisnu Tauhid Ilham Saputra</h1>
										<h3>Visi</h3>
										<p>
											Menjadikan HIMASKOM sebagai wadah aspirasi, inspirasi,dan tempat musyawarah seluruh mahasiswa serta menjadikan organisasi yang menjembatani penyelesaian masalah yang ada di departemen.
										</p>
										<span id="dots"></span>

										<h3>Misi</h3>
										<p>
											1. Merealisasikan ide dari mahasiswa.<br>   
											2. Mengadakan evaluasi kinerja sekbid-sekbid minimal 1 bulan sekali.<br>
											3. Mengadakan musyawarah guna membahas dan menyelesaikan permasalah yang ada di departemen.<br>

										</p>
										<h3>Proker</h3>
										<p>
											1. TEC 2022<br>
											2. ACE 2022

										</p>
										<ul class="actions">
											<li>
											</li>
										</ul>
									</div>
								</article>
							</div>
						</section>
						<footer id="footer">
							<div class="inner">
								<form class="pilih" method="POST" action="hasil1.php">
								<?= $getUser->username . " Silakan Memilih Dari hati nurani "; ?>
								<p>Choose Your Leader For 2022 :</p>
								<center>
									<input type="radio" id="okta" name="kahim" value="MUHAMAD YAHYA OKTARIANSYAH">
									<label for="okta" style="color: white;">MUHAMAD YAHYA OKTARIANSYAH</label><br>
									<input type="radio"id="daffa" name="kahim" value="NAUFAL DAFFA' RISWANDA">
									<label for="daffa" style="color: white;">&nbsp;&nbsp;NAUFAL DAFFA' RISWANDA</label><br>
									<input type="radio" id="whisnu" name="kahim" value="WHISNU TAUHID ILHAM SAPUTRA">
									<label for="whisnu" style="color: white;">&ensp;WHISNU TAUHID ILHAM SAPUTRA</label><br>
									<input type="submit" name="submit" value="Submit">
								</center>
								</form>
							</div>
						</footer>
					</body>
				</html>
				<?php    
    } else {
        header("location: http://localhost/andra/login.php");
    }
?>