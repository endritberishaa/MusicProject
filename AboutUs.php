<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Styles/AboutStyle.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>About Us</title>
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

<div class="about-content">
        <div class="about-section">
            <img src="Images/guitar.jpg">
            <div class="inner-container">
                <h1>About Us</h1>
                <p class="text-about">
                    With Music, it’s easy to find the right music or podcast for every moment – on your phone, your computer, your tablet and more.

                    There are millions of tracks and episodes on Music. So whether you’re behind the wheel, working out, partying or relaxing, the right music or podcast is always at your fingertips. Choose what you want to listen to, or let Music surprise you.

                    You can also browse through the collections of friends, artists, and celebrities, or create a radio station and just sit back.

                    Soundtrack your life with Music. Subscribe or listen for free.
                </p>
                <div class="skills">
                    <span><a href="MusicPage.php">Home</a></span>
                    <span><a href="ContactUsPage.php">Contact us</a></span>
                    <span><a href="LoginForm.php">Log In</a></span>
                </div>
            </div>
        </div>
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
