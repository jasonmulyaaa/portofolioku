<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>404 Page</title>
    <style>
        *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

.fream{
	width: 100%;
	height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background: url('../gif.gif');
	background-position: center;
	background-repeat:no-repeat;
}

.fream p{
	position: absolute;
	top: 3rem;
	font-size: 7rem;
	color: #00000063;
}

.fream h2{
	position: absolute;
	bottom: 8rem;
	font-size: 35px;
}

.fream h5{
	position: absolute;
	bottom: 6rem;
	color: #9c9c9c;
}

.fream a{
	position: absolute;
	bottom: 1rem;
	background: linear-gradient(45deg,#ff0034,#ffbc00);
	padding: 12px;
	color: #fff;
	text-decoration:none ;
	font-size: 25px;
	border-radius: 15px;
}
    </style>
</head>
<body>
	<div class="fream">
		<p>404</p>
		<h2>Halaman Tidak Ditemukan.</h2>
		<h5>Page yang anda cari tidak tersedia.</h5>
		<a href="/">Go To Home</a>
	</div>
</body>
</html>