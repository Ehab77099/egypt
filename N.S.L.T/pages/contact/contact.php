<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Contact Page Meta Tags -->
<meta name="keywords" content="Contact Egyptian Safaris, Egypt travel inquiries, Customer support Egypt tours, How to reach us, Egypt tour booking contact, Travel agency in Egypt">
<meta name="description" content="Contact Egyptian Safaris for all your travel inquiries. Our team is here to help you plan your dream trip to Egypt. Reach out today!">
<meta name="author" content="Egyptian Safaris">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Contact Us - Egyptian Safaris">
<meta property="og:description" content="Get in touch with Egyptian Safaris to plan your next adventure in Egypt.">
<meta property="og:image" content="https://www.egyptiansafaris.egy/images/contact-us.jpg">
<meta property="og:url" content="https://www.egyptiansafaris.egy/contact">
    <title>contact</title>
</head>

<link rel="stylesheet" href="/N.S.L.T/Style-css/callus.css">
<body>
    
<!-- //////////////////////// -->

<?php
include("../../header/header.php");
?>
<!-- /////////////////// -->
    
<div class="contact">
<h2 class="m">We Do It With A Love</h2>

    <h2>contact</h2>
    <p>contact to us report a problem</p>
    
    <form action="/N.S.L.T/data-mysql/contact.php" method="post">
        <input type="hidden" name="return_url" values="<?php echo $_SERVER['REQUEST_URI'] ; ?>">
        <div class="form">

        <div class="name_email">

            <div class="name">

            <label for="name">your name*</label>
            <input type="text" placeholder="your name" id="name" name="name" required>
      </div>
            <div class="email">
                <label for="name">your email*</label>
                <input type="email" placeholder="your email" id="email" name="email" required>
            </div>
    
        </div>

       

        <div class="message">
            <label for="message">message*</label>
<textarea name="message" id="message" required placeholder="Message"></textarea>
        </div>

        <div class="btn">
            <input type="submit" value="send" onclick=" sendmessage()">
        </div>

    </div>
    </form>
</div>



<script>
            function sendmessage() {
            const message_customer = document.getElementById('message').value;
            if (message_customer) {
                alert(`Thank you for contact us , as soon as possible we will call you: ${message_customer}`);
                // Here you can add AJAX to send the email to your server
            }
        }
</script>

<!-- //////////////////////// -->

<?php
include("../../footer/footer.php");
?>
<!-- /////////////////// -->
<script src="/N.S.L.T/Java/sound.js"></script>

</body>
</html>