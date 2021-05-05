<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Framework | ANANG NUR PRASETYA</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		body {
			font-family: sans-serif;
		}

		.bungkus {
			width: 80%;
			margin: auto;
			box-sizing: border-box;
		}

		.bungkus.main {
			margin-top: 120px;
			background-color: #8cff66;
			width: 70%;
			text-align: center;
			color: white;
			padding-top: 20px;
			padding-bottom: 20px;
			border-radius: 30px;
			font-size: 20px;
		}

		.bungkus.main a {
			color: white;
		}

		nav {
			background-color: #66ff33;
			padding-top: 20px;
			padding-bottom: 20px;
		}

		nav h1 {
			float: left; 
		}

		nav ul {
			float: right;
		}

		li {
			display: inline-block;
			margin-right: 20px;
		}

		ul li a {
			text-decoration: none;
			color: black;
			padding: 10px;
		}

		li a:hover {
			background-color: #33cc00;
			color: white;
			border-radius: 10px;
		}

		.bersih {
			clear: both;
		}

		h2 {
			margin-bottom: 20px;
		}


	</style>
</head>
<body>
	<nav>
		<div class="bungkus">
			<h1>Anangprasetya</h1>
			<ul>
				<li><a href="#">My</a></li>
				<li><a href="#">Framework</a></li>
				<li><a href="#">PHP</a></li>
			</ul>
			
			<div class="bersih"></div>
		</div>
	</nav>

	<div class="bungkus main">
		<h2>Framework Sederhana</h2>
		<p>File ini adalah controller default</p>
		<p>Controller Anang yang berada di folder</p>
		<p>App/Controllers</p>
		<br> <br>
		<p>Controller Anang ini memanggil view anang</p>
		<p>Yang berada di folder views</p>

		<br> <br>
		<p>Pembuat : ANANG NUR PRASETYA</p>
		<p>Email : anangnr.pras@gmail.com</p>
		<p>IG : <a href="https://www.instagram.com/anangprasetyaa/" target="_blank">Anangprasetyaa</a></p>
		<p>FB : <a href="https://web.facebook.com/profile.php?id=100051525842729" target="_blank">Anang</a></p>
	</div>

</body>
</html>