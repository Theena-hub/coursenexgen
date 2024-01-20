<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php') ?>
</head>

<body>
    <!-- navbar - start -->
    <?php include("nav.php") ?>
    <!-- navbar - end -->
    <!-- home hero section - start -->
    <div class="container-fluid paymentHeroSec position-relative d-flex justify-content-center align-items-center"
        style="background: url(assets/img/contactUsHeroImg.png);">
        <div style="background-color: #2356F6C4;" class="h-100 w-100 position-absolute"></div>
        <div class="container z-index-1">
            <h1 class="titleOne fw-600 color-FFFFFF">Payment Details</h1>
        </div>
    </div>
    <!-- home hero section - end -->
    <!-- paymentSecOne - start -->
    <div class="container-fluid paymentSecOne py-40">
        <div class="container">
            <div class="row row-gap">
                <div class="col-lg-5 col-md-12">
                    <div class="card h-100 p-20 bgPrimaryColor text-center d-flex justify-content-center">
                        <h5 class="titleFour fw-600 text-uppercase secondaryColor text-center mb-12">Account Details</h5>
                        <p class="titleFive fw-500 color-FFFFFF">Account Number : XXXX XXXX XXXX XXXX</p>
                        <p class="titleFive fw-500 color-FFFFFF">Account Holder : Coursenexgen</p>
                        <p class="titleFive fw-500 color-FFFFFF">Bank : State Bank Of India</p>
                        <p class="titleFive fw-500 color-FFFFFF mb-0">IFSC : SBI000003</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="card h-100 p-20 bgPrimaryColor text-center d-flex justify-content-center">
                        <h5 class="titleFour fw-600 text-center secondaryColor mb-12">Google Pay</h5>
                        <p class="titleFive fw-500 mb-0 color-FFFFFF">Mobile Number : 9876543210</p>
                        <p class="titleFive fw-500 color-FFFFFF">Name : Coursenexgen</p>
                        <h5 class="titleFour fw-600 text-center secondaryColor mb-12">Phone Pay</h5>
                        <p class="titleFive fw-500 mb-0 color-FFFFFF">Mobile Number : 9876543210</p>
                        <p class="titleFive fw-500 mb-0 color-FFFFFF">Name : Coursenexgen</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 p-20 bgPrimaryColor text-center d-flex justify-content-center">
                        <h5 class="titleFour fw-600 text-center secondaryColor mb-12">QR Code</h5>
                        <img class="w-100 h-100" src="assets/img/qrcode.svg" alt="coursenexgen">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- paymentSecOne - end -->
    <!-- footer - start -->
    <?php include('footer.php') ?>
    <!-- footer - end -->
    <!-- script - start -->
    <?php include('script.php') ?>
    <!-- script - end -->
</body>

</html>