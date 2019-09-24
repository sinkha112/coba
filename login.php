<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<?php
	$koneksi = mysqli_connect("localhost","root","","user_level");

	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}


	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<header>
			<div class="row">
				<div class="logo">
				<img src="logo2.png">
				</div>
				<ul class="main-nav">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					<li><a href="article.html">ARTICLE</a></li>
					<li><a href="">FAQ</a></li>

				</ul>

			</div>
		</header>
<article>
	<div class="kotak_login">
		<p class="tulisan_login"></p>


		<form action="cek_login.php" method="post">
			<label></label>
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">

			<label></label>
			<input type="password" name="password" class="form_login1" placeholder="Password" required="required">

			<input type="submit" class="tombol_login" value="LOGIN">


			<br/>
			<br/>
			<center>
			</center>
		</form>

	</div>
</article>

</body>
</html>
