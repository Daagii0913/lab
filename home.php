<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аялал</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <section class="header">

        <a href="home.php" class="logo"> Travels</a>


        <nav class="navbar">
            <a href="home.php">Нүүр</a>
            <a href="about.php">Сэтгэгдэл</a>
            <a href="package.php">package</a>
            <a href="book.php">Захиалга</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Дэлхийг тойрсон аялал</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">Илүү ихийг мэдэх</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services">

        <h1 class="heading-title"> our services </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- home about section starts  -->

    <section class="home-about">

        <div class="image">
            <img src="images/about-img.jpg" width="280" height="350" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Hi Welcome to AVSR travels we provides best Travel pasckages with your customization ..Your Hapiness is our Priority </p>
            <p>You can custamize your Tour package which you likes we provide our best service for your comfort</p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </section>

    <!-- home about section ends -->

    <!-- home packages section starts  -->

    <section class="home-packages">

        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>HIstorical Beauties</h3>
                    <p>In this package you gets best Romantic And Historical places to visit</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Beaches & Water Adventure</h3>
                    <p>Its Summer...! so lets go for the best beaches for some water fun...</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Are you Astrology lover ?? then this package is for you .. the best sky view and Environment </p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

    </section>

    <!-- home packages section ends -->

    <!-- home offer section starts  -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>On Ocasion of new year we are providing 50% Off on your first booking...... so lets grab this offer</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>

    <!-- home offer section ends -->
















    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 9373323711 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> amitkadlag36@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> MH 17 Sangamner, A nAgar Maharashtra </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/amit.kadlag.129/"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://twitter.com/?lang=en-in"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="https://www.bing.com/ck/a?!&&p=0d1f14e1b56cea79JmltdHM9MTY2NzM0NzIwMCZpZ3VpZD0yNDg3MTY5Zi1kODJmLTY4NGYtMmM2Mi0xOTM3ZDliNDY5MTAmaW5zaWQ9NTE5Mw&ptn=3&hsh=3&fclid=2487169f-d82f-684f-2c62-1937d9b46910&psq=instagram&u=a1aHR0cHM6Ly93d3cuaW5zdGFncmFtLmNvbS8&ntb=1">
                    <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>Amit Kadlag ,Vivek Jadhav,Sumedh Gawali,Rushikesh Lokhande </span> ! </div>

    </section>

    <!-- footer section ends -->








    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>