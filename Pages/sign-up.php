<?php
    define('style_link','../style.css');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    include '../Assets/header.php';
?>
<body>
    <!-- Info before Nav -->
    <div class="container-fluid">
        <div class="banner">
            <marquee behavior="" direction="">Use code FIRST and Get 10% OFF* on Fresh Watches over Rs 2499. Maximum Discount: Rs.500. T&C Apply Use code FIRST and Get 10% OFF* on Fresh Watches over Rs 2499. Maximum Discount: Rs.500. T&C Apply Get 10% cashback on payment via Mobikwik wallet over Rs. 2999. T&C Apply.
            </marquee>
        </div>
    </div>

    <!-- Navigation Bar -->
     <?php
    include '../Assets/navigation.php';     
     ?>

    <div class="container">
        <div class="signupbox d-flex">
            <div class="col-md-6">
                <img src="../Images/sign-up-banner-image.jpg" alt="">
            </div>
            <div class="col-md-6 p-5 d-flex flex-wrap align-items-end justify-content-center">
                <h4>Enter Your Mobile Number</h4>
                <form action="get">
                    <input type="tel" class="inputtext">
                    
                    <button class="btn btn-primary rounded-pill w-100 mt-5">Request OTP</button>    
                </form>
                <p class="text-center btm-text">By continuing, I agree with Fastrack's <br>
                <a href="#">Terms of Service</a> and <a href="#">Privacy Policies</a></p>
            </div>
        </div>
    </div>

    
    <!-- Footer -->
    <footer class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 center-align ">
                    <div class="row">
                        <a href="#">
                            <img src="Images/FASTRACK-Logo-White.svg" class="footer-logo-image" alt="">
                        </a>
                    </div>
                    <div class="row footer-logo-small center-align">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-pinterest"></i>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <h5>CUSTOMER SERVICE</h5>
                    <ul>
                        <li><a href="#">Payment Options</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Find a Store</a></li>
                        <li><a href="#">Encircle Program</a></li>
                    </ul>
                    <br>
                    <h5>CONTACT US</h5>
                    <ul>
                        <li><a href="#">1800-266-0123</a></li>
                        <li><a href="#">customercare@titan.co.in</a></li>
                        <li><a href="#">FAQ's</a></li>
                    </ul>                
                </div>
                <div class="col-md-2">
                    <h5>POLICIES</h5>
                    <ul>
                        <li><a href="#">Brand Protection</a></li>
                        <li><a href="#">Cancellation</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Warranty Policies</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>ABOUT FASTRACK</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help and Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                    <br>
                    <h5>NEED HELP?</h5>
                    <h5>Chat with us on <a href="#" style="color: white;">Whatsapp</a></h5>
                </div>
            </div>
        </div>
    <div class="container-fluid text-center tnc">
        <h6><a href="#">Terms and Conditions</a> <a href="#"> | </a><a href="#">Privacy Policy</a></h6>
    </div>
    <div class="container-fluid">
        <div class="row partner">
            <div class="col-md-7 center-align justify-content-space-between center-align">
                <img class="partner-footer-img" src="Images/visaFd.svg" alt="" >
                <img class="partner-footer-img" src="Images/mastercardiconFD.svg" alt="" >
                <img class="partner-footer-img" src="Images/paypalFD.svg" alt="" >
                <img class="partner-footer-img" src="Images/maestro.svg" alt="" >
                <img class="partner-footer-img" src="Images/rupeeFD.svg" alt="" >
                <img class="partner-footer-img" src="Images/axisbankFD.svg" alt="" >
                <img class="partner-footer-img" src="Images/icicibankFD.svg" alt="" >
                <img class="partner-footer-img" src="Images/DinnerClubFD.svg" alt="" >
                <img class="partner-footer-img" src="Images/americanExpressFD.svg" alt="" >
            </div>
            <div class="col-md-5 text-center center-align">
                <h6>&copy 2023 Titan Company Limited. All Rights Reserved. </h6>
            </div>
        </div>
    </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
     
</body>

</html>