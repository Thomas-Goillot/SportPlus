<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="images/x-icon" href="images/shortcut.png" />
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
  <?php include('indexview.php');?>	
	<title><?php echo  title; ?> - Hello Page</title>
</head>

<style>:root {
	--primary: 0, 0%, 100%;
	--secondary: 202, 73%, 28%;
	--c: cubic-bezier(1,.49,.16,.96);
}

body {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100vh;
	font-family: 'Poppins', 'Helvetica', sans-serif;
	background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);	
}

.btn {
	--w: 300px;
	--h: 45px;
	position: relative;
	display: flex;
	width: var(--w);
	height: var(--h);
	border: 1px solid hsl(var(--primary));
}

div {margin-bottom: 20px;}
div:last-child {margin-bottom: 0px;}

i {
	content: '';
	width: 100%;
	height: 100%;
	transition: all .5s var(--c);
	background: hsl(var(--primary));
}

i:nth-child(1) {transition-delay: .02s;}
i:nth-child(2) {transition-delay: .04s;}
i:nth-child(3) {transition-delay: .06s;}
i:nth-child(4) {transition-delay: .08s;}
i:nth-child(5) {transition-delay: .10s;}
i:nth-child(6) {transition-delay: .12s;}
i:nth-child(7) {transition-delay: .14s;}
i:nth-child(8) {transition-delay: .16s;}
i:nth-child(9) {transition-delay: .18s;}
i:nth-child(10) {transition-delay: .2s;}


span {
	position: absolute;
	width: 100%;	
	font-size: 14px;
	font-weight: 800;
	line-height: var(--h);
	letter-spacing: 4px;
	text-align: center;
	text-transform: uppercase;
	color: hsl(var(--primary));	
	transition: all .4s var(--c);
	z-index: 100;
}

.style-1, 
.style-2 {
	flex-direction: column;
}
.style-3, 
.style-4, 
.style-5, 
.style-6 {
	flex-direction: row;
}

.style-1 i,
.style-5 i {transform-origin: center left;}

.style-2 i,
.style-6 i {transform-origin: center right;}

.style-3 i {transform-origin: center bottom;}

.style-4 i {transform-origin: center top;}

.style-1 i,
.style-2 i,
.style-5 i,
.style-6 i {	
	transform: scaleX(0);
}

.style-3 i,
.style-4 i {
	transform: scaleY(0);
}

.style-1:hover i,
.style-2:hover i,
.style-5:hover i,
.style-6:hover i {
	transform: scaleX(1);
}

.style-3:hover i,
.style-4:hover i {
	transform: scaleY(1);
}

.btn:hover span {
	color: hsl(var(--secondary));
	transition-delay: .4s;
}</style>
<body>
<a href="connexion.php">
<div class="btn style-2">	
	<i></i>
	<i></i>
	<i></i>
	<i></i>
	<i></i>
	<i></i>
	<i></i>
	<i></i>
	<i></i>
	<i></i>
  <span>Entrez sur le site</span>
</div>
</a>
</div>
</body>
</html>