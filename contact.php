<!DOCTYPE HTML>
<html lang="en">

<head>
  <title>Motion Graphics Designer - Connie</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="cpstyle.css" title="style" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>

<body class="wrap-contact">
    <header>
        <nav id="navbar"> 
            <video autoplay loop muted id="logo-loop">
                <source src="videos/Logo_Loop_SQ.mp4" type="video/mp4" />
                    Your browser does not support the mp4 file. Please change your browser!
            </video>
            <ul class="navbar-items">
                <li><a href="index.html#demoreel">Show Reel</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="index.html#about">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            
            <div class="hamburger">
                <img src="images/menu-4-48.png">
            </div>
        </nav>
        
    </header>
        
    <main>
        <h2>Contact</h2>
        <p>Contact me to discuss a possible project or learn more about my work.</p>
        
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full name" required>
            <input type="text" name="mail" placeholder="Your email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button type="submit" name="button">SEND</button>
        </form>
        
    </main>
    
    <footer>
        <div class="wrap-footer">
            <h2>Social</h2>
            <ul>
                <li><a href="https://twitter.com/conniepico"><img src="images/twitter-4-24.png" alt="twitter"></a></li>
                <li><a href="https://vimeo.com/user9624280"><img src="images/vimeo-4-24.png" alt="vimeo"></a></li>
                <li><a href="https://www.instagram.com/connie.pico/"><img src="images/instagram-4-24.png" alt="instagram"></a></li>
                <li><a href="https://www.linkedin.com/in/connie-pico-b7a838103/"><img src="images/linkedin-4-24.png" alt="linkedin"></a></li>
            </ul>
        </div>
    </footer>
    
    <script>
    $(document).ready(function(){
        $(".hamburger").click(function(){
            $(".navbar-items").toggle();
        })
    })
    </script>
    
</body>
</html>
