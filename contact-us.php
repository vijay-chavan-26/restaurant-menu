<?php
$msg="";
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['comment'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$mobile=mysqli_real_escape_string($con,$_POST['contact-number']);
	$comment=mysqli_real_escape_string($con,$_POST['message']);
	
	$html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$comment</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="sadysore@gmail.com";
	$mail->Password="S@dy10Sore";
	$mail->SetFrom("sadysore@gmail.com");
	$mail->addAddress("madysore10@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Mail send";
	}else{
		echo "Error occur";
	}
	//echo $msg;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicorn House</title>
    <link rel="stylesheet" href="/css styling/style.css">
    <link rel="stylesheet" href="/css styling/utility-classes.css">
    <link rel="stylesheet" href="/css styling/navbar.css">
    <link rel="stylesheet" href="/css styling/contact-us.css">
    <link rel="stylesheet" href="/css styling/contact-us-responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Great+Vibes&family=Montserrat:ital,wght@0,200;0,300;0,500;0,700;1,300;1,500&family=Pacifico&family=Tangerine:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-items">
                <div class="logo"><a href="/index.html"><img src="/images/unicorn-house-logo.png"
                            alt="Unicorn House Logo"></a>
                </div>
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="menu">
                    <ul class="menu-items">
                        <li class="menu-item1 mitem"><a href="/index.html">Foods</a></li>
                        <li class="menu-item2 mitem"><a href="/drinks.html">Drinks</a></li>
                        <!-- <li class="menu-item3 mitem"><a href="/happy-hour.html">Happy Hour</a></li> -->
                        <li class="menu-item4 mitem"><a href="/contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="contact-us-banner-section">
            <div class="contact-us-banner-items">
                <div class="contact-us-banner-heading">
                    <h1 class="main-heading">Unicorn House</h1>
                    <p class="slogan">- The only thing we love more than food is you!</p>
                </div>
                <div class="contact-us-banner-overlay"></div>
            </div>
        </section>

        <section class="page-heading drinks-page-heading">
            <h1>Contact Us</h1>
        </section>

        <section class="contact-info">
            <div class="contact-container">
                <div class="form container">
                    <form action="contact-us.php" method="post" class="inquiry-form">
                        <h1 class="heading">For Online Inquiries</h1>
                        <p>Fill up the below form and one from our team <br> will get back to you.</p>
                        <div class="input-boxes">
                            <input type="text" name="name" id="name" autocomplete="off" placeholder="Enter Name">
                            <input type="email" name="email" id="email" autocomplete="off" placeholder="Enter Email Id">
                            <input type="tel" id="contact-number" name="contact-number" placeholder="Enter Contact No.">
                            <textarea name="message" id="message" placeholder="Enter Your Message"></textarea>
                            
                            <button name="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="info">
                    <div class="our-social-media">
                        <h1 class="heading">Follow Us</h1>
                        <a href="https://www.instagram.com/unicornhouse.pune/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com/unicornhouse.pune/"><i class="fa fa-facebook-square"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="our-contacts">
                        <h1 class="heading">Contact No.</h1>
                        <div class="details">
                            <div class="no1 contacts">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                <a href="tel:+918766094122">+91 87660 94122</a>
                            </div>
                            <div class="no1 contacts">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                <a href="tel:+918766097324">+91 87660 97324</a>
                            </div>
                            <div class="mail contacts">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:unicornhousepune@gmail.com">unicornhousepune@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="our-location">
                        <h1 class="heading">Our Location</h1>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <p>Unicorn House 8th Floor, Rooftop, D-Mart Building, B3, Cerebrum IT Park, <br> Kalyani Nagar,
                            Pune-411016, Maharashtra, India.</p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.652168925731!2d73.90840091436904!3d18.544614073279668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c180030c44c7%3A0x83f47ef005887426!2sUnicorn%20House!5e0!3m2!1sen!2sin!4v1655535825703!5m2!1sen!2sin"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <footer>
        <div class="footer-section">
            <p class="copyright">Copyright &#169 2022 <span><a href="/index.html">Unicorn House</a></span> | Designed &
                Developed by <span>Vijay Chavan</span>.</p>
        </div>
    </footer>

    <script src="/index.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

</body>

</html>