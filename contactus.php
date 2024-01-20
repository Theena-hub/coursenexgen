<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php') ?>
</head>

<body>
    <!-- navbar - start -->
    <?php include("nav.php") ?>
    <!-- navbar - end -->
    <!-- contactus hero section - start -->
    <div class="container-fluid contactHeroSec position-relative d-flex justify-content-center align-items-center"
        style="background: url(assets/img/contactUsHeroImg.png);">
        <div style="background-color: #2356F6C4;" class="h-100 w-100 position-absolute"></div>
        <div class="container z-index-1">
            <h1 class="titleOne fw-600 color-FFFFFF text-center">Contact <span class="secondaryColor">Us</span></h1>
            <p class="descriptionOne fw-400 color-FFFFFF mb-0 text-center">Will look forward to hear from you!</p>
        </div>
    </div>
    <!-- contactus hero section - end -->
    <!-- contactus section one - start -->
    <div class="container-fluid contactSecOne py-40 position-relative">
        <div class="bgWrapper position-absolute bgSecondaryColor"></div>
        <div class="container">
            <h1 class="titleTwo fw-600 color-505050">Feel free to talk!</h1>
            <p class="descriptionOne fw-400 color-505050">Use the form below to get all your queries
                answered.</p>
            <div class="row row-gap">
                <div class="col-lg-6 col-md-5 m-auto">
                    <div>
                        <form class='enquiryForm'>
                            <div class="form-group d-flex flex-column my-2">
                                <label class="descriptionOne fw-400 color-505050" for="name">Full Name <span
                                        class="color-E04048">*</span></label>
                                <input class="form-control color-505050 bg-transparent py-10" type="text"
                                    name="enq_name" id="name" required>
                            </div>
                            <div class="form-group d-flex flex-column my-2">
                                <label class="descriptionOne fw-400 color-505050" for="contact">Contact Number <span
                                        class="color-E04048">*</span></label>
                                <input class="form-control color-505050 bg-transparent py-10" type="text"
                                    name="enq_mobile" id="contact" required>
                            </div>
                            <div class="form-group d-flex flex-column my-2">
                                <label class="descriptionOne fw-400 color-505050" for="email">Email <span
                                        class="color-E04048">*</span></label>
                                <input class="form-control color-505050 bg-transparent py-10" type="email"
                                    name="enq_mail" id="email" required>
                            </div>
                            <div class="form-group d-flex flex-column my-2">
                                <label class="descriptionOne fw-400 color-505050" for="message">Message <span
                                        class="color-E04048">*</span></label>
                                <textarea name="enq_msg" id="message" class="form-control color-505050 bg-transparent"
                                    cols="10" rows="2" required></textarea>
                            </div>
                            <input type="submit" class="btn bgSecondaryColor w-100 color-180101 br-4 mt-2 fw-500"
                                value="Send" />
                            <input type="hidden" name="req_type" id="req_type" value="add">                            
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 m-auto">
                    <div class="mx-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62189.032827918716!2d80.16779534623609!3d13.047473316843687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1705554894864!5m2!1sen!2sin"
                            width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contactus section one - end -->
    <!-- contactus section two - start -->
    <div class="container-fluid contactSecTwo py-40 bgColor-F5F5F5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 rightBorder m-auto">
                    <div>
                        <h1 class="titleThree fw-500 color-180101">Address</h1>
                        <p class="descriptionOne fw-400 color-180101">Plot 12C 1, South Phase, Guindy Industrial Estate,
                            SIDCO Industrial Estate, Guindy, Chennai</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 rightBorder d-flex">
                    <div class="width-fit-content m-auto">
                        <h1 class="titleThree fw-500 color-180101">Phone</h1>
                        <p class="descriptionOne fw-400 color-180101">+91 - 044 2655 8091 / 92</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 m-auto">
                    <div class="width-fit-content m-auto">
                        <h1 class="titleThree fw-500 color-180101">Email</h1>
                        <p class="descriptionOne fw-400 color-180101">principal@spcet.ac.in</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contactus section two - end -->
    <!-- footer - start -->
    <?php include('footer.php') ?>
    <!-- footer - end -->
    <!-- script - start -->
    <?php include('script.php') ?>
    <!-- script - end -->
</body>

</html>