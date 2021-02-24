<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/MusicPageStyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Music | Listening is everything</title>
</head>
<body>
	<nav class="navbar">
		<div class="content">
			<div class="logo">
				<a href="MusicPage.php"><img src="Images/musiclogo.jpg"></a>
			</div>
			<ul class="menu">
				<div class="icon cancel-btn">
					<i class="fas fa-times" style="color:white"></i>
				</div> 
				 <li><a id="bigfont" href="PremiumPage.php">Premium</a></li>
				 <li><a id="bigfont" href="DownloadPage.php">Download</a></li>
				 <span class="vertical-line"></span>
				 <li><a id="medium" href="LoginForm.php">Log in</a></li>
				 <li><a id="medium"href="Register.php">Sign up</a></li>
			</ul>
			<div class="icon menu-btn">
				<i class="fas fa-bars" style="color:white"></i>
			</div> 
	</nav>
	<div id="responsive">

	<div class="main1">
		<div class="card">
			<div class="imgBx">
				<img src="Images/clouds.jpg">
			</div>
		</div>
		<div class="textcontent">
			<h6>MUSIC PREMIUM</h6>
			<h2>Get Premium for</h2>
			<h5>Ad-free music, offline listening, and more. Cancel anytime.</h5>
			<br>
			<br>
			<a href="LoginForm.php"><button class="premiumbtn" type="submit">Get premium</button></a>
		</div>

	</div>
	<div id="main2">
		<div class="image">
			<img class = "marshmello_img" src="Images/marshmello1.jpg" alt=""> 
		</div>
		<div class ="hd">
			Feel The Music <i class="fas fa-music"></i>
		</div>
		<div class="text">
			<p>Music and rhythm find their way into<br> the secret places of the soul.</p>
		</div>
		<a class = "JOIN"  onclick="alert('Not currently available!')">DOWNLOAD</a>
					
	</div>
	<div class ="footer">
		<div class="footer-left">
			<a href="MusicPage.php"><img src="Images/musiclogo.jpg"></a>
			<div class="footer-links">
				<a href="MusicPage.php" class="removecontent">Home</a>
				<a href="AboutUs.php">About</a>
				<a href="#">Support</a>
				<a href="ContactUsPage.php">Contact</a>
			</div>
			<p class="footer-name">
				@2020 Music  
			</p>
		</div>
		<div class="footer-center">
			<div>
				<i class="fa fa-location-arrow"></i>
				<p><span>Agim Ramadani - </span> Pristina, Kosovo</p>
			</div>
			<div>
				<i class="fa fa-mobile"></i>
				<p>+383 49-555-555</p>
			</div>
			<div>
				<i class="fa fa-inbox"></i>
				<p><a href="#">music@gmail.com</a></p>
			</div>

		</div>
	</div>
</div>
	<script>
		const menu = document.querySelector(".menu");
		const menuBtn = document.querySelector(".menu-btn");
		const cancelBtn = document.querySelector(".cancel-btn");
		menuBtn.onclick = ()=> {
			menu.classList.add("active")
			menuBtn.classList.add("hide");
		}
		cancelBtn.onclick = ()=> {
			menu.classList.remove("active");
			menuBtn.classList.remove("hide");
		}

	</script>
</body>
</html>