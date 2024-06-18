<!-- Variables -->
<?php
    define('style_link', 'style.css');
    define('nav_head_link', 'index.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php
    include 'Assets/header.php';

?>
<body>
    <!-- Info before Nav -->
    <?php
        include 'Assets/marquee.php';
    ?>

    <!-- Navigation -->
    
    <?php
        include 'Assets/navigation.php';
    ?>

    <!-- Info after Nav -->
    <?php 
        include 'Assets/info.php';
    ?>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="Images/slide1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="Images/slide2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="5000" >
            <img src="Images/slide3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Another Carousel -->
    <div class="container-fluid ac w-100">
        <div class="row w-100">
            <div class="col-md-9 d-flex">
                <div class="col-md-1 d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <a href=""><i class="fa-solid fa-angle-left"></i></a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="Images/analog-watches.jpg" class="card-img-top " alt="...">
                            <h3>Analog Watches</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="Images/smart-watches.jpg" class="card-img-top" alt="...">
                            <h3>Smart Watches</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-image">
                            <img src="Images/hearables.jpg" class="card-img-top" alt="...">
                            <h3>Hearables</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <div class="text-center">
                        <a href=""><i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <h1 class="vertical-text">Fastrack <br> Categories</h1>
            </div>
            <div class="col-md-12 p-2">
                <div class="row w-100 d-flex">
                    <div class="col-md-1 angle-icons">
                        <!-- <div class="text-center">
                            <a href=""><i class="fa-solid fa-angle-left"></i></a>
                        </div> -->
                    </div>
                    <div class="col-md-3">
                        <!-- <div class="card">
                            <div class="card-image">
                                <img src="Images/analog-watches.jpg" class="card-img-top " alt="...">
                                <h3>Analog Watches</h3>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-3">
                        <!-- <div class="card">
                            <div class="card-image">
                                <img src="Images/smart-watches.jpg" class="card-img-top" alt="...">
                                <h3>Smart Watches</h3>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-3">
                        <!-- <div class="card">
                            <div class="card-image">
                                <img src="Images/hearables.jpg" class="card-img-top" alt="...">
                                <h3>Hearables</h3>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-1 angle-icons">
                        <!-- <div class="text-center">
                            <a href=""><i class="fa-solid fa-angle-right"></i></a>
                        </div> -->
                    </div>
                    <div class="col-md-2 ">
                        <!-- <h1 class="vertical-text">Fastrack <br> Categories</h1> -->
                    </div>
        
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Axio Banner -->
    <div class="container mb-5">
        <img class="w-100 rounded" src="Images/axio-banner.jpg" alt="">
    </div>
    <div class="container-fluid black">
        <marquee behavior="" direction="">Trending</marquee>
    </div>

    <div class="container mt-4">
        <h3 style="margin: 0 0 0 2rem;">TRENDING</h3>
        <div class="card-container">
            <div class="card">
                <div class="card-image">
                    <img src="Images/card-1.jpg" alt="">
                </div>
                <div class="card-body">
                    <h6 class="card-title">Fastrack Vyb Halo Quartz Analog Brown Dial Metal Strap Watch</h6>
                    <h6>Girls Watches</h6>
                    <h5 class="card-text"><span class="mprice">₹1950 </span><span class="cprice">₹2750</span><span class="discount">   30% Off</span></h5>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="Images/card-2.jpg" alt="">
                </div>
                <div class="card-body">
                    <h6 class="card-title">Fastrack Vyb Halo Quartz Analog Brown Dial Metal Strap Watch</h6>
                    <h6>Girls Watches</h6>
                    <h5 class="card-text"><span class="mprice">₹1950 </span><span class="cprice">₹2750</span><span class="discount">   30% Off</span></h5>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="Images/card-3.jpg" alt="">
                </div>
                <div class="card-body">
                    <h6 class="card-title">Fastrack Vyb Halo Quartz Analog Brown Dial Metal Strap Watch</h6>
                    <h6>Girls Watches</h6>
                    <h5 class="card-text"><span class="mprice">₹1950 </span><span class="cprice">₹2750</span><span class="discount">   30% Off</span></h5>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="Images/card-4.jpg" alt="">
                </div>
                <div class="card-body">
                    <h6 class="card-title">Fastrack Vyb Halo Quartz Analog Brown Dial Metal Strap Watch</h6>
                    <h6>Girls Watches</h6>
                    <h5 class="card-text"><span class="mprice">₹1950 </span><span class="cprice">₹2750</span><span class="discount">   30% Off</span></h5>
                </div>
            </div>
            <!-- <div class="card">
                <div class="card-image">
                    <img src="Images/card-3.jpg" alt="">
                </div>
                <div class="card-body">
                    <h6 class="card-title">Fastrack Vyb Halo Quartz Analog Brown Dial Metal Strap Watch</h6>
                    <h6>Girls Watches</h6>
                    <h5 class="card-text"><span class="mprice">₹1950 </span><span class="cprice">₹2750</span><span class="discount">   30% Off</span></h5>
                </div>
            </div> -->
        </div>

        <!-- Banner -->
        <a href="#" class="banner-1">
            <img src="Images/explore-now.jpg" alt="">
        </a>

        <!-- Second Carousel -->
        <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div> -->
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="Images/slide-1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img src="Images/slide-2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="5000" >
                <img src="Images/slide-3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="5000" >
                <img src="Images/slide-4.jpg" class="d-block w-100" alt="...">
  
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br><br>
        <!-- Second Card Section -->
        <h3 style="margin:  0 0 3rem; padding-left: 2rem;">SHOP YOUR VIBE</h3>
        <div class="container container-cards">
            <div class="card banner-card">
                <img src="Images/banner-card-1.jpg" alt="">
            </div>
            <div class="card banner-card">
                <img src="Images/banner-card-2.jpg" alt="">
            </div>
            <div class="card banner-card">
                <img src="Images/banner-card-3.jpg" alt="">
            </div>
        </div>

        <!-- BestSellers Section -->
        
        <h4 style="margin: 3.5rem 0 0 2rem;">BESTSELLERS</h4>
        <div class="card-container">
            <?php
                for($i = 1; $i <=4; $i++) {
            ?>

            <div class="card">
                <div class="card-image">
                    <img src= <?php echo "Images/bestseller-card-". $i . ".jpg" ?> alt="">
                </div>
                <div class="card-body">
                    <h6 class="card-title">Fastrack Vyb Halo Quartz Analog Brown Dial Metal Strap Watch</h6>
                    <h6 class="grey-text-small">Girls Watches</h6>
                    <h5 class="card-text"><span class="mprice">₹1950 </span><span class="cprice">₹2750</span><span class="discount">   30% Off</span></h5>
                </div>
            </div>
            <?php 
                }
            ?>
        </div>
        <!-- Banner Image Ranveer -->
        <a href="">
            <img src="Images/banner-image.jpg" alt="">
        </a>

        <h3 style="margin: 3rem 0 2rem 0;">FASTRACK #BEBOTH</h3>
        <div class="row mb-5">
            <div class="col-md-12">
                <iframe width="100%" height="382" src="https://www.youtube.com/embed/-OZLBI8e-00?list=TLGGqJ46dRo7NOAyMTA0MjAyNA" title="Fastrack | #BeBoth ft. Vijay Deverakonda" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Two Banner (50%) -->
        <div class="row">
            <div class="col-md-6">
                <!-- Carousel -->
  
  
              
            </div>
            <div class="col-md-6">
                <img src="Images/featured-collection-1.jpg" alt="">
            </div>
        </div>


        <!-- Follow Us -->

        <h3 style="font-weight: 300; margin: 3rem 0 2rem 0;">FOLLOW US</h3>
        <div class="row" style="margin-bottom: -4%;">
            <div class="col-md-6">
                <img src="Images/follow-us-1.jpg" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="Images/follow-us-2.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="Images/follow-us-3.jpg" alt="">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <img src="Images/follow-us-4.jpg" class="exp" alt="" style="">
                    </div>
                    <div class="col-md-6">
                        <img src="Images/follow-us-5.jpg" class="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Follow us Second Row -->
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="Images/follow-us-6.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="Images/follow-us-7.jpg" alt="">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <img src="Images/follow-us-8.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="Images/follow-us-9.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="Images/follow-us-10.jpg" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <a href="Pages/product_page.php" class="btn btn-outline-dark" style="width: 10%; margin: auto;">Show more</a>
        </div>
    </div>
    </div>
    <!-- Info before Footer -->
    <div class="container-fluid info3-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 info3">
                    <i class="fa-solid fa-shield"></i>
                    <h3>SAFE AND SECURE CHECKOUT</h3>
                </div>
                <div class="col-md-3 info3">
                    <i class="fa-solid fa-sack-dollar"></i>
                    <h3>PREMIUM QUALITY PRODUCTS</h3>
                </div>
                <div class="col-md-3 info3">
                    <i class="fa-solid fa-truck"></i>
                    <h3>7 DAY RETURN</h3>
                </div>
                <div class="col-md-3 info3">
                    <i class="fa-solid fa-truck-fast"></i>
                    <h3>FREE SHIPPING NATIONWIDE</h3>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Footer -->
    <?php
        include 'Assets/footer.php';
    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>