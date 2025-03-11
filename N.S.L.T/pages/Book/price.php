<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Request Price Page Meta Tags -->
<meta name="keywords" content="Egypt tour price quote, Request a travel quote Egypt, Custom Egypt travel packages, Egypt safari cost, Red Sea diving prices, Luxury Egypt tours pricing">
<meta name="description" content="Request a price quote for your dream Egypt tour with Egyptian Safaris. Get customized packages for Red Sea diving, desert safaris, and luxury Nile cruises.">
<meta name="author" content="Egyptian Safaris">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Request Price - Egyptian Safaris">
<meta property="og:description" content="Get a customized price quote for your Egypt adventure with Egyptian Safaris.">
<meta property="og:image" content="https://www.egyptiansafaris.egy/images/request-price.jpg">
<meta property="og:url" content="https://www.egyptiansafaris.egy/request-price">
    <title>Request Price</title>
    <link rel="stylesheet" href="/N.S.L.T/Style-css/price.css">
</head>
<body>
    <!-- /////////////////////// -->

<?php
session_start()


?>


<?php
include("../../header/header.php");



?>
<!-- ////////////////////////// -->
    <div class="container">
        <h1>Request Price</h1>

        <!-- Booking Details -->
        <div class="details">
            
            <p><strong>Customer Name: <?php echo $_SESSION['name']; ?></strong> </p>
            <p><strong>From: <?php   echo $_SESSION['from'];  ?></strong> </p>
            <p><strong>To: <?php   echo $_SESSION['to']; ?></strong> </p>
            <p><strong>Oppointment Date: <?php   echo  $_SESSION['date'] ; ?></strong> </p>
            <p><strong>Oppointment Time: <?php   echo $_SESSION['time'] ; ?></strong> </p>
            <p><strong>Leave Date: <?php   echo $_SESSION['leave_date']; ?></strong> </p>

            
        </div>

        <!-- Email Field -->
        <div class="form-group">

            <form action="price_feedback.php " method="POST">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <!-- Buttons -->
         <input type="submit" value="Send Price via Email" name="send"  class="btn" onclick="sendEmail()">
</form>
        <button class="btn btn-whatsapp" onclick="sendWhatsApp()">Request Price via WhatsApp</button>
    </div>


    <script>
        function sendEmail() {
            const email = document.getElementById('email').value;
            if (email) {
                alert(`Price will be sent to: ${email}`);
                // Here you can add AJAX to send the email to your server
            } else {
                alert("Please enter your email.");
            }
        }

        function sendWhatsApp() {
            const message = "Hello, I would like to know the price for my booking.";
            const whatsappUrl = `https://wa.me/+201110882462?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        }
    </script>

<script src="/N.S.L.T/Java/sound.js"></script>

</body>


</html>