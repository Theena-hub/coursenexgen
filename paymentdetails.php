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
    <div class="container-fluid homeHeroSec d-flex justify-content-center align-items-center">
        <div class="container">
            <img class="centerImg" src="assets/img/homeHeroSecBg.svg" alt="coursenexgen" />
            <div class="row row-gap">
                <div class="col-lg-7 col-md-7 col-sm-7 m-auto">
                    <div class="left">
                        <h1 class="titleOne fw-600 color-FFFFFF">Best Way To Improve Your Skills</h1>
                        <p class="descriptionOne fw-400 color-FFFFFF mb-0">Unlock your full potential with
                            our unparalleled approach to personal and professional development. Learn without limits,
                            upskill your career, and elevate your performance with the world's most trusted training
                            partner, dedicated to enhancing knowledge, skills, and capabilities."</p>
                        <div class="d-flex btnBox">
                            <input type="button" class="btn bgSecondaryColor mr-20 br-30 fw-500 color-180101"
                                value="Explore Course" />
                            <input type="button"
                                class="btn bgColor-FFFFFF br-30 fw-500 secondaryColor btn-border-secondaryColor"
                                value="Contact Us" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 m-auto right">
                    <div class="text-center">
                        <img src="assets/img/homeHeroSecImg.png" alt="coursenexgen" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home hero section - end -->
    
    <!-- footer - start -->
    <?php include('footer.php') ?>
    <!-- footer - end -->
    <!-- script - start -->
    <?php include('script.php') ?>
    <!-- script - end -->   
</body>

</html>