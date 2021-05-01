<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="https://bosbiocon.com/Contact" />
        <meta name="keywords" content="Brian Wiley, Bioconsulting, Boston Bioconsulting"> 
        <title><?php echo "Boston BioConsulting, LLC." ?></title>
        <meta name="description" content="<?php echo "Contact us for information regarding 
        our services or to inquire about joining our networks." ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="shortcut icon" href="https://bosbiocon.com/Logo.ico" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
        <script src="https://kit.fontawesome.com/aa3a1e3822.js" crossorigin="anonymous"></script>
        <script src="https://bosbiocon.com/BBCscripts.js"></script>
        <script charset="utf-8" type="text/javascript" src="https://js.hsforms.net/forms/shell.js"></script>
        <script charset="utf-8" type="text/javascript" src="https://bosbiocon.com/BBCscripts.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <style><?php include 'normalize.css'; ?></style>
        <style><?php include 'HomeStyle.css'; ?></style>
    </head>
<body>
    <ul class="navcontainer">
        <li class="navlist logo_top"><img id="logo" src="https://bosbiocon.com/Logo Graphic.png" alt=""></li>
        <li class="navlist logo_top company" style="margin: 7px auto 1px auto;">Boston BioConsulting, LLC.</li>
        <li class="navlist menu"><button onclick="openNav()" class="dropdown">
            <i class="fas fa-bars"></i> Menu</button>
    </ul>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-display">
          <a href="/">Home</a>
          <a href="Capabilities">Capabilites</a>
          <a href="Network">Network</a>
          <a href="Contact">Contact</a>
        </div>
      
    </div>
    <div id="shrunk_Home">
        <img id="coverImage" src="https://bosbiocon.com/banner.png" alt="">
        <h2 class="shrunk">Get in Touch</h2>
    </div>
    <div class="row">
     <div class="column center contact">
        <p class="contact" style="border-bottom: inset 2px  rgb(165, 165, 165);font-weight: bold; color: rgb(0,125,195);">Boston BioConsulting, LLC.</p>
        <p class="contact" style="color:rgb(0,125,195);">brian@bosbiocon.com</p>
        <p class="contact" style="color:rgb(0,125,195);text-decoration: none;">617-710-3995 </p>
        <a class="social" href="https://www.linkedin.com/in/brian-wiley-2412b71/"><i class="fab fa-linkedin"></i></a>
        <a class="social" href="https://twitter.com/brianwiley721"><i class="fab fa-twitter"></i></a>
        </div>
    <div class="column" id="Information">
        <form id="contact-form" autocomplete="off" method="POST">
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="email" placeholder="Email" required><br>
            <input type="text" name="phone" placeholder="Phone Number"><br>
            <textarea name="messaage" placeholder="Message"></textarea><br>
            <div class="g-recaptcha" data-sitekey="6LeOSbMZAAAAAKoeSXn2XPZH6L6ShreU9HWTHMq_"></div>
            <p id="recaptcha-failure">reCaptcha not used, form not submitted</p>
            <input class="submit-btn" name ="submit" type="submit" Value="SEND">
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST['name']);
            $email = test_input($_POST['email']);
            $phone = test_input($_POST['phone']);
            $message= test_input($_POST['messaage']);

            $message=wordwrap($message,65);

            $from='natewiley11@gmail.com';
            $subject='Boston BioConsulting Website Form Submission';
            $body='Name: $name\nEmail: $email\nPhone Number: $phone\nMessage: $message\n';
            $to = 'nwiley2@villanova.edu';
            if ($_POST['submit']){
                mail($to,$subject,$body);
            
                if(isset($_POST['g-recaptcha-response'])){
                    $captcha=$_POST['g-recaptcha-response'];
                    }
                if(!$captcha){
                    echo "<script type='text/javascript'>
                    document.getElementById('recaptcha-failure').style.display = 'block';</script>";
                    exit;
                    }
                $secretKey = "6LeOSbMZAAAAANSRYTZwsty02cgC1L_X0zrsVdW6";
                $ip = $_SERVER['REMOTE_ADDR'];
                // post request to server
                $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                $response = file_get_contents($url);
                $responseKeys = json_decode($response,true);
                // should return JSON with success as true
                if($responseKeys["success"]) {
                    echo "<script type='text/javascript'>
                    document.getElementById('contact-form').style.display = 'none';</script>";
                    echo "<div id='thank-you'>
                    <p>Thank you for reaching out!</p>
                    <p>Your submission was received!</p>
                    <br><br>
                    <img src='https://bosbiocon.com/Logo Graphic.png' height='50px' width='50px' alt=''>
                    </div>";
                }    
            
                }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }?>

    </div>
        
    </div>
    </div>
    <hr>
    <div class="bottom-info">
        <div class="contact">
            <p>Boston BioConsulting, LLC. &copy 2020.</p>
        </div>
        <div class="contact">
            <a href="https://www.linkedin.com/in/brian-wiley-2412b71/">
                <img src="https://1000logos.net/wp-content/uploads/2017/03/LinkedIn-Logo.png"
                width=30 height=30 alt="">
            </a>

        </div>
</body>
</html>