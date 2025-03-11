<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Booking Page Meta Tags -->
<meta name="keywords" content="Book Egypt tours online, Egypt safari booking, Red Sea diving packages, Desert trips booking Egypt, Luxury travel booking Egypt, Egypt tour reservations">
<meta name="description" content="Book your Egypt adventure with Egyptian Safaris. Secure your spot for Red Sea diving, desert safaris, and luxury Nile cruises. Easy online booking available!">
<meta name="author" content="Egyptian Safaris">
<meta name="robots" content="index, follow">
<meta property="og:title" content="Booking - Egyptian Safaris">
<meta property="og:description" content="Book your dream trip to Egypt with Egyptian Safaris. Explore Red Sea diving, desert safaris, and more.">
<meta property="og:image" content="https://www.egyptiansafaris.egy/images/booking.jpg">
<meta property="og:url" content="https://www.egyptiansafaris.egy/booking">
    <title>booking</title>
</head>
<link rel="stylesheet" href="/N.S.L.T/Style-css/book.css">
<body>
    


<!-- //////////////////////// -->

<?php
include("../../header/header.php");
?>
<!-- /////////////////// -->

<div class="container_book">
    
    <div class="book">
    <h2>Registeration</h2>
    <h2>We Do It With A Love</h2>


<form action="/N.S.L.T/data-mysql/english/book.php" method="POST">

<div class="customer_info">

    <div class="customer_name">
<input type="text"  placeholder="customer name" id="customer" name="customer" required>
</div>

<div class="customer_phone">

<input type="text" placeholder=" phone number " name="phone" required>
</div>
</div>

<div class="from_to">

    <div class="from">

    <input type="text" placeholder="from" required name="from" id="from">
</div>
<div class="to">
    <input type="text" placeholder="to" required name="to" id="to">

</div>
</div>

<div class="date_time">

    <div class="date">
        <label for="date">Oppointment date</label>
        <input type="date" required name="date" id="name">
    </div>
    
    <div class="time">
        <label for="time">time</label>
        <input type="time" required id="time" name="time">
    </div>


    <div class="date">
        <label for="leave">Leave date</label>
        <input type="date" required name="leave_date" id="leave">
    </div>


</div>

<label for="new_old">Are you new or old customer ?</label>
<div class="select">

<select name="new_old" id="new_old" >


<option value="new" selected>New </option>
    <option value="old">Old </option>

</select>

</div>

<div class="btn">
    <input type="submit" value="Register">
</div>



</form>
</div>




</div>






<!-- //////////////////////// -->

<?php
include("../../footer/footer.php");
?>
<!-- /////////////////// -->
<script src="/N.S.L.T/Java/sound.js"></script>

</body>
</html>