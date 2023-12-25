<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php') ?>
</head>

<body>
    <!-- navbar - start -->
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-column br-10"
            style="width: fit-content; height: 250px;position: fixed;left: 0px;top: 50%;transform: translateY(-50%);border-left: 5px solid #fff;z-index: 5;">
            <div class="ml-5">
                <a href="#">
                    <img src="assets/img/homeIcon.svg" alt="cousenexgen" />
                    <h1 class="titleFive width-fit-content color-FFFFFF fw-500">Home</h1>
                </a>
            </div>
            <div class="ml-5">
                <a href="index.php#course">
                    <img src="assets/img/courseIcon.svg" alt="cousenexgen" />
                    <h1 class="titleFive width-fit-content color-FFFFFF fw-500">Course</h1>
                </a>
            </div>
            <div class="ml-5">
                <a href="">
                    <img src="assets/img/aboutIcon.svg" alt="cousenexgen" />
                    <h1 class="titleFive width-fit-content color-FFFFFF fw-500">About</h1>
                </a>
            </div>
            <div class="ml-5">
                <a href="">
                    <img src="assets/img/contactIcon.svg" alt="cousenexgen" />
                    <h1 class="titleFive width-fit-content color-FFFFFF fw-500">Contact</h1>
                </a>
            </div>

        </div>
    </div>
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
    <!-- homesecOne - start -->
    <div id="course" class="container-fluid homeSecOne">
        <div class="container">
            <div class="card bgColor-FFFFFF b-none">
                <div class="owl-carousel owl-theme owl-carousel-homeSecOne">
                    <div class="item">
                        <div class="cntBox one d-flex flex-column align-items-center">
                            <div class="clrBox bgColor-F3EEFF br-4 d-flex justify-content-center align-items-center">
                                <img src="assets/img/homeSecOneImgOne.svg" alt="coursenexgen" />
                            </div>
                            <h2 class="titleSix text-center mt-3 mb-0">Post-Course Support</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cntBox two d-flex flex-column align-items-center">
                            <div class="clrBox bgColor-FEF4E8 br-4 d-flex justify-content-center align-items-center">
                                <img src="assets/img/homeSecOneImgTwo.svg" alt="coursenexgen" />
                            </div>
                            <h2 class="titleSix text-center mt-3 mb-0">Accredited Courses</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cntBox three d-flex flex-column align-items-center">
                            <div class="clrBox bgColor-FDEDEF br-4 d-flex justify-content-center align-items-center">
                                <img src="assets/img/homeSecOneImgThree.svg" alt="coursenexgen" />
                            </div>
                            <h2 class="titleSix text-center mt-3 mb-0">Dedicated Learning Partner</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cntBox four d-flex flex-column align-items-center">
                            <div class="clrBox bgColor-E8F8F5 br-4 d-flex justify-content-center align-items-center">
                                <img src="assets/img/homeSecOneImgFour.svg" alt="coursenexgen" />
                            </div>
                            <h2 class="titleSix text-center mt-3 mb-0">Course Materials</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cntBox five d-flex flex-column align-items-center">
                            <div class="clrBox bgColor-E3F0F4 br-4 d-flex justify-content-center align-items-center">
                                <img src="assets/img/homeSecOneImgFive.svg" alt="coursenexgen" />
                            </div>
                            <h2 class="titleSix text-center mt-3 mb-0">Qualified Instructors</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- homesecOne - end -->
    <!-- homesecTwo - start -->
    <div class="container-fluid homeSecTwo py-40">
        <div class="container">
            <h1 class="titleTwo fw-500 color-000000">Pick a <span class="secondaryColor">Course</span> to Get Started
            </h1>
            <div class="owl-carousel owl-theme owl-carousel-courses">
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100">
                        <img src="assets/img/courseOneImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Advanced Certification Program in Data
                                Science (with Generative AI)</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100">
                        <img src="assets/img/courseTwoImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Full Stack Developer Course</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100">
                        <img src="assets/img/courseThreeImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Global Diploma Program in Data Science from
                                State University of New York</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100" style="filter: drop-shadow(0 0 0.75rem rgba(0,0,0,.07));">
                        <img src="assets/img/courseOneImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Advanced Certification Program in Data
                                Science (with Generative AI)</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100" style="filter: drop-shadow(0 0 0.75rem rgba(0,0,0,.07));">
                        <img src="assets/img/courseTwoImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Full Stack Developer Course</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100" style="filter: drop-shadow(0 0 0.75rem rgba(0,0,0,.07));">
                        <img src="assets/img/courseThreeImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Global Diploma Program in Data Science from
                                State University of New York</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100" style="filter: drop-shadow(0 0 0.75rem rgba(0,0,0,.07));">
                        <img src="assets/img/courseOneImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Advanced Certification Program in Data
                                Science (with Generative AI)</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100" style="filter: drop-shadow(0 0 0.75rem rgba(0,0,0,.07));">
                        <img src="assets/img/courseTwoImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Full Stack Developer Course</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card m-2 b-none br-15 h-100" style="filter: drop-shadow(0 0 0.75rem rgba(0,0,0,.07));">
                        <img src="assets/img/courseThreeImage.png" alt="coursenexgen" />
                        <div class="card-body bgColor-FFFFFF br-15">
                            <h1 class="titleFive fw-500 color-252424 mb-0">Global Diploma Program in Data Science from
                                State University of New York</h1>
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25 mt-4"
                                value="Explore Course">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- homesecTwo - end -->
    <!-- homSecThree - start -->
    <div class="container-fluid homeSecThree py-40">
        <div class="wrapper d-flex align-items-center justify-content-center">
            <img src="assets/img/leftMark.svg" alt="coursenexgen" />
            <h1 class="titleTwo fw-600 color-000000 text-center mb-0 width-fit-content">Why <span
                    class="secondaryColor">Choose</span> Us?</h1>
            <img src="assets/img/rightMark.svg" alt="coursenexgen" />
        </div>

    </div>
    <!-- homSecThree - end -->
    <!-- homeSecFour - start -->
    <div class="container-fluid homeSecFour py-40 bgColor-F5F5F5">
        <div class="container">
            <div class="row row-gap">
                <div class="col-lg-5 col-md-5">
                    <div>
                        <img class="img-fluid" src="assets/img/homeSecFourImg.png" alt="coursenexgen" />
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 m-auto">
                    <div>
                        <h1 class="titleThree fw-600 color-272727">Dedicated <span class="secondaryColor">Learning
                                Partner</span></h1>
                        <p class="descriptionOne fw-400 color-505050">Embark on a transformative learning journey with a
                            dedicated partner invested in your growth
                            and success. Our years of expertise and unique business solutions ensure measurable impact,
                            building in-demand skills that deliver the outcomes you desire, backed by our 100%
                            Satisfaction Guarantee for ultimate peace of mind.</p>
                        <div class="d-flex">
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25"
                                value="Explore Course">
                            <img class="rightArwMark" src="assets/img/rightMark.svg" alt="coursenexgen" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- homeSecFour - end -->
    <!-- homeSecFive - start -->
    <div class="container-fluid homeSecFive py-40">
        <div class="container">
            <div class="row row-gap">
                <div class="col-lg-7 col-md-7 m-auto">
                    <div>
                        <h1 class="titleThree fw-600 color-272727">Experienced <span
                                class="secondaryColor">Instructors</span></h1>
                        <p class="descriptionOne fw-400 color-505050">Benefit from the wealth of experience held by our
                            seasoned instructors who bring extensive
                            expertise to each training session. We meticulously deploy trainers specific to relevant
                            courses, ensuring our pathfinder instructors guide participants through an interactive and
                            engaging learning experience, with a deliberate emphasis on 80% practical application and
                            20% theory. Our sessions are led by Subject Matter Experts who seamlessly impart real-world
                            knowledge for practical, hands-on learning</p>
                        <div class="d-flex">
                            <input type="button" class="btn bgPrimaryColor color-FFFFFF fw-500 br-25"
                                value="Explore Course">
                            <img class="rightArwMark" src="assets/img/rightMark.svg" alt="coursenexgen" />
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div>
                        <img class="img-fluid" src="assets/img/homeSecFiveImg.png" alt="coursenexgen" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- homeSecFive - end -->
    <!-- homeSecSix - start -->
    <div class="container-fluid homeSecSix py-40 bgColor-F5F5F5">
        <h1 class="titleTwo color-272727 fw-600 text-center">Lorrem Ipsum is a duumy</h1>
        <div class="container pt-30">
            <div class="row row-gap">
                <div class="col-lg-4">
                    <div class="card b-none h-100">
                        <img class="mx-auto" src="./assets/img/homeSecSixImgOne.svg" alt="coursenexgen" />
                        <h1 class="titleFour fw-600 color-272727 text-center my-3">Accredited Courses</h1>
                        <p class="descriptionOne mb-0 fw-400 color-505050 text-center">Our Company has accreditation for
                            all courses. No
                            worries to learn in our education center. Achieve certification from the best universities,
                            validating your expertise and ensuring a credential that stands out in your field.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card b-none h-100 b-none bgSecondaryColor">
                        <img class="mx-auto" src="./assets/img/homeSecSixImgOne.svg" alt="coursenexgen" />
                        <h1 class="titleFour fw-600 color-272727 text-center my-3">Course Materials</h1>
                        <p class="descriptionOne mb-0 fw-400 color-505050 text-center">100% effective course materials
                            provided by our
                            company with the help of trainer and Subject Matter Expert support. eBooks are provided
                            before the course for preparation.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card b-none h-100">
                        <img class="mx-auto" src="./assets/img/homeSecSixImgOne.svg" alt="coursenexgen" />
                        <h1 class="titleFour fw-600 color-272727 text-center my-3">Post-Course Support</h1>
                        <p class="descriptionOne mb-0 fw-400 color-505050 text-center">Our trainer would provide
                            post-course support for the
                            participants who are in need of clarification with our course. We help them to prepare for
                            the exam. 24/7 Learner Support to ensure needs are always met</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- homeSecSix - end -->
    <!-- homeSecSeven - start -->
    <div class="container-fluid homeSecSeven py-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 m-auto">
                    <div class="left">
                        <h1 class="titleTwo fw-600 secondaryColor">Our Placement</h1>
                        <h1 class="titleTwo tw-600 color-272727">Partners</h1>
                        <p class="descriptionOne fw-400 color-505050">Benefit from the wealth of experience held by</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 m-auto">
                    <div class="owl-carousel owl-theme owl-carousel-partners">
                        <div class="item">
                            <div class="d-flex justify-content-between align-items-center my-5">
                                <img src="assets/img/partnerOne.svg" alt="coursenexgen">
                                <img src="assets/img/partnerTwo.svg" alt="coursenexgen">
                                <img src="assets/img/partnerThree.svg" alt="coursenexgen">
                            </div>
                            <div class="d-flex justify-content-between align-items-center my-5">
                                <img src="assets/img/partnerFour.svg" alt="coursenexgen">
                                <img src="assets/img/partnerFive.svg" alt="coursenexgen">
                                <img src="assets/img/partnerSix.svg" alt="coursenexgen">
                            </div>
                        </div>
                        <div class="item">
                            <div class="d-flex justify-content-between align-items-center my-5">
                                <img src="assets/img/partnerTwo.svg" alt="coursenexgen">
                                <img src="assets/img/partnerThree.svg" alt="coursenexgen">
                                <img src="assets/img/partnerOne.svg" alt="coursenexgen">
                            </div>
                            <div class="d-flex justify-content-between align-items-center my-5">
                                <img src="assets/img/partnerSix.svg" alt="coursenexgen">
                                <img src="assets/img/partnerFour.svg" alt="coursenexgen">
                                <img src="assets/img/partnerFive.svg" alt="coursenexgen">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- homeSecSeven - end -->
    <!-- homeSecEight - start -->
    <div class="container-fluid homeSecEight py-50">
        <div class="container">
            <div class="card bgPrimaryColor b-none">
                <div class="row row-gap">
                    <div class="col-lg-7 col-md-6 m-auto">
                        <div class="left">
                            <h1 class="titleTwo fw-500 color-FAFAFB">Lorem Ipsy</h1>
                            <p class="descriptionOne fw-400 color-FAFAFB">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.
                                Dignissim velit, ac tincidunt risus, consequat pellentesque a</p>
                            <input type="button" class="btn bgSecondaryColor color-000000 br-25 mt-2 fw-500"
                                value="Contact Us" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="right">
                            <img class="img-fluid" src="./assets/img/homeSecEightImg.svg" alt="coursenexgen" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- homeSecEight - end -->
    <!-- footer - start -->
    <?php include('footer.php') ?>
    <!-- footer - end -->
    <!-- script - start -->
    <?php include('script.php') ?>
    <!-- script - end -->
    <script>
        $('.owl-carousel-courses').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            autoplay: true,
            navText: ["<img src='assets/img/arrow-left.svg'/>", "<img src='assets/img/arrow-right.svg'/>"],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
        $(".owl-carousel-partners").owlCarousel({
            loop: true,
            dots: false,
            autoplay: true,
            items: 1,
            nav: false,
            autoplayHoverPause: true,
            animateOut: 'slideOutUp',
            animateIn: 'slideInUp'
        });
        $('.owl-carousel-homeSecOne').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: 5,
            lazyLoad: true,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        })       
    </script>
</body>

</html>