<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title> 
    

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

    <!-- header section starts -->
    <section class="header">
    <img src="img/logo.jpg" class="logo">
    <div class="hello">St. Michael the Archangel <span>Parish Church</span> </div>
        
   

        <ul>
            <li><a href="home.php">Our Parish</a></li>

            <li>
            <a href="#">Services <i class="fas fa-caret-down"></i></a>

                <div class="dropdown">
                    <ul> 
                        <li><a href="ms.php">Mass Schedule</a></li>
                        <li><a href="#">Blessings</a></li>
                        <li><a href="#">Weddings</a></li>
                        <li><a href="#">Funerals</a></li>
                        <li><a href="#">Blessing Requests</a></li>
                    </ul>
                </div>
            </li>

            <li><a href="donate.php" >Donate</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        

        <div id="menu-btn" class="fas fa-bars"></div>

        </nav>

    </section>

     <!-- header section ends -->

     <!-- header section starts -->

     <section class="home">

        <div class="background">

                <div class="slide" style="background:url(img/background.png) no repeat">
                    <div class="content">
                        <span>St. Michael Archangel Parish Church</span>
                        <h3>St.Michael the Archangel Parish of the Roman  catholic diocese of Basey, Samar</h3>
                        <a href="login.php" class="btn"> Church Admin </a>
                        <a href="home.php" class="btn"> Parishioner </a>
                    </div>
                </div>
        </div>
     </section>
      <!-- header section end -->


      <!-- header section starts -->

      <section class="services">

        <h1 class="heading-title"> our services </h1>

        <div class="box-container">

            <div class="box">
                <img src="images" alt="">
            </div>
        </div>
      </section>
        <!-- header section ends -->
     

















<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Our Parish</a>
            <a href="services.php"> <i class="fas fa-angle-right"></i> Services</a>
            <a href="donate.php"> <i class="fas fa-angle-right"></i> Donate</a>
            <a href="events.php"> <i class="fas fa-angle-right"></i> Events</a>
            <a href="contact.php"> <i class="fas fa-angle-right"></i> Contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +639-165-236-139</a>
            <a href="#"> <i class="fas fa-phone"></i> +639-234-559-999</a>
            <a href="#"> <i class="fas fa-envelope"></i> st.michaelarchangelparish@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> basey,samar 9999</a>      
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
        </div>

    </div>

    <div class="credit"> created by <span>Researchers of LNU</span> | all right reserved </div>

</section>

<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
     <script src="js/script.js"></script>
</body>
</html>



