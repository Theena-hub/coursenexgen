<!-- navbar - start -->
<div class="container-fluid" style="box-shadow: 0 4px 2px -2px rgba(0,0,0,.2)">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" class="" style="width: 150px;" alt="coursenexgen" /></a>
            <button id="tog-btn" class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" onclick="togShow()">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link fw-600" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-600" href="index.php#course">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-600" href="paymentdetails.php">Payments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-600" href="aboutus.php">About Us</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link fw-600" href="contactus.php">Contact Us</a>
                    </li>
                </ul>                
            </div>
        </nav>
    </div>
</div>
<!-- navbar - end -->
<script type="text/javascript">
    function togShow() {
        document.getElementById("navbarSupportedContent").classList.add("show");
        document.getElementById('tog-btn').setAttribute("onclick", "togHide()")
    }
    function togHide() {
        document.getElementById('navbarSupportedContent').classList.add("hide");
        document.getElementById('tog-btn').setAttribute("onclick", "togShow()")
    }
</script>