<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Home Page Meta Tags -->
<meta name="keywords" content="New Skey for Limousine and Trips, Luxury travel Egypt, Egypt adventure trips, Red Sea diving tours, Desert safari Egypt, Egypt tourism packages">
<meta name="description" content="Discover unforgettable journeys with New Skey for Limousine and Trips. Explore luxury travel, Red Sea diving, desert adventures, and Egypt's top tourist destinations. Book your dream trip today!">
<meta name="author" content="New Skey for Limousine and Trips">
<meta name="robots" content="index, follow">
<meta property="og:title" content="New Skey for Limousine and Trips- Luxury and Adventure Travel in Egypt">
<meta property="og:description" content="Explore Egypt with New Skey for Limousine and Trips. From Red Sea diving to desert adventures, we offer unforgettable travel experiences.">
<meta property="og:image" content="https://www.newskeyforlimousineandtrips.com/images/hero-image.jpg">
<meta property="og:url" content="https://www.newskeyforlimousineandtrips.egy">
    <title>New Skey for Limousine and Trips</title>
</head>

<link rel="stylesheet" href="/N.S.L.T/Style-css/index.css">
<body>

<?php


include('header/header.php');



include('data-mysql/dba.php');
?>

<!-- //////////////////////////////////////////////////// -->




<div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
        <h1 class="animate-title">Airport to Hotel Transfer Service</h1>
<h2 class="animate-title m">We Do It With A Love</h2>

          <p class="animate-text">
            We offer our guests a comfortable and luxurious transfer service from the airport to hotels,
            using modern, air-conditioned vehicles with professional, multilingual drivers.
             We ensure a safe and pleasant journey from the moment you arrive in Egypt

          </p>      
          <a href="/N.S.L.T/pages/about/about.php" class="cta-button animate-button">Explore More</a>
        </div>
      </div>


<div class="container3">

<div class="section1">

    <div class="about">
        <div class="content">
        <h2>The New Skey for Limousine and Trips ways for travel and trips</h2>
        <p>
            At New Skey for Limousine and Trips, we offer unique travel experiences that combine adventure and luxury, taking you on an unforgettable journey through Egypt’s most beautiful tourist destinations. Whether you’re looking to explore the depths of the Red Sea, enjoy the beauty of the Eastern Desert, or discover Egypt’s ancient history in Luxor and Aswan, we guarantee an exceptional travel experience that meets all your expectations.

            We pride ourselves on providing high-quality tourism services, including sea trips, desert adventures, and visits to famous tourist cities. With our professional team of tour guides and travel experts, we ensure every detail is taken care of to make your trip smooth and enjoyable from start to finish.

        </p>
    </div>
    <div class="about_img">
        <img src="/N.S.L.T/images/index/index5.jpg" alt="index5">
    </div>
</div>
</div>





<div class="section2">
<h1>What Sets Us Apart</h1>
<div class="features">

<div class="feature">
        <img src="images/index/ryanair-5249631_1280.jpg" alt="index10">
        <h2>Airport to Hotel Transfer Service</h2>
    <p>We offer our guests a comfortable and luxurious transfer service from the airport to hotels, using modern, air-conditioned vehicles with professional,</p>
    
    </div>

    
    <div class="feature">
    <img src="images/index/index6.jpg" alt="index6">
    <h2> Diverse Trips</h2>
<p>We offer sea trips, desert adventures, and city tours to meet all your travel desires.</p>    

</div>

<div class="feature">
    <img src="images/index/index7.jpg" alt="index7">
    <h2>Unique Experiences  </h2>
<p>Enjoy Snorkeling not diving trips, camel rides, stargazing, and dinners under the open sky.</p>
</div>




<div class="feature">
    <img src="images/index/index8.jpg" alt="index8">
    <h2>Professional Team </h2>
<p>Our team of tourism experts ensures a smooth and enjoyable travel experience from start to finish.</p>

</div>



<div class="feature">
    <img src="images/index/index9.jpg" alt="index9">
    <h2>Special Offers </h2>
<p>We provide exclusive offers on sea trips, desert adventures, and city tours.</p>
</div>



<div class="feature">
    <img src="images/index/index11.jpg" alt="index11">
    <h2> Moon Viewing Through a Telescope </h2>
<p>Enjoy observing the moon and stars through advanced telescopes, guided by astronomy experts in a serene and magical atmosphere.</p>
</div>

</div>



</div>






    <div class="section3">

        <div class="our_company">

             
    <div class="video">
            <video id="video" poster="/N.S.L.T/images/index_video_poster.jpg" controls>
            <source src="/N.S.L.T/images/VID-20250215-WA0079.mp4"  type="video/mp4"></video>
        </div>

    <div class="content">
        <h2>Luxury Hub’s Exclusive Showroom and the Beginning of Our Success Journey</h2>
<p>In the final part of the video, we invite you to explore Luxury Hub’s exclusive showroom, where you’ll find a distinguished collection of cars that combine modern design with powerful performance. We also share moments from the grand opening of our company, which marked the beginning of our journey to deliver unique travel experiences. Watch how we redefine luxury and excellence in every detail.</p>   
   <div class="btn">
<a href="/N.S.L.T/pages/book/book.php"><button>Book now</button></a>
</div>
      </div>




    </div>
    

        </div>
        



<div class="section4">
    <div class="feedback">
        <h2>Your feedback matters to us</h2>

        

            <form action="/N.S.L.T/data-mysql/feedback.php" method="POST">
<div class="user_name">
    <input class="name" name="user_name" type="text" placeholder="name">
</div>

<div class="user_comment">
    <label for="comment">feedback</label>
    <textarea name="comment" id="comment" placeholder="comment"></textarea>

</div>

 <input class="submit" type="submit" value="send">


 </form>
    </div>
</div>

        <div class="section5">

            
            
            <div class="customers">
                <h1>customers evaluations</h1>

            <div class="customer_user">
<?php

$me="";

$sql="select * from feedback";

$connect_mysql=$conn->query($sql);

if($connect_mysql->num_rows > 0):
    
    while($row=$connect_mysql->fetch_assoc()):
?>
           


    <div class="users">   
        <div class="user_name">
          <h3> <?php echo $row ['name'] ; ?> :</h3>  
        </div>
    
        <div class="comment">
            <p><?php echo $row ['feedback']; ?> </p>
        </div>
        
        </div>     
        
        <?php endwhile ; ?>    
        <?php endif ; ?>
            
            

        
</div>
        </div>
</div>
<!-- ////////////////////////////////////////////// -->

<?php
include("footer/footer.php");

?>

<!-- ////////////////////////////////////////////// -->

</div>

<script src="/N.S.L.T/Java/sound.js"></script>


</body>
</html>