<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<body class="vh-100 ">
    <!-- Navbar    -->
    <nav>
        <!DOCTYPE html>
        <html lang="en">
        <?php

        ?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cleaning Navbar</title>
            <link rel="stylesheet" href="../css/navbar.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </head>

        <body>
            <!-- Dismissabel alert -->
            <div class="content" style="margin-top: 75px; background-color:red;"></div>

            <?php

            ?>

            <div class="navbar p-0  border-bottom border-2 sticky-top ">
                <nav class="d-flex p-0 mybg navbar navbar-expand-md fixed-top navbar-light container-fluid ">
                    <div class="container p-0 ">

                        <!-- logo -->
                        <a class="navbar-brand  text-primary fs-2" href="#">Cleaning</a>
                        <!-- toggle button -->
                        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- sidebar -->
                        <div class="sidebar offcanvas offcanvas-start pr-0" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <!-- sidebar header -->
                            <div class="offcanvas-header bg-primary text-light">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Cleaning</h5>
                                <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <!-- sidebar body -->
                            <div id="sidebar" class="offcanvas-body d-flex flex-md-row flex-column p-3">
                                <ul id="navbody" class="navbar-nav justify-content-center flex-grow-1 fs-md-3">
                                    <li class="nav-item mx-1">
                                        <a class="nav-link " href="#home">Home</a>
                                    </li>
                                    <li class="nav-item mx-1">
                                        <a class="nav-link " href="#services">services</a>
                                    </li>
                                    <li class="nav-item mx-1">
                                        <a class="nav-link " href="#about">About</a>
                                    </li>
                                    <li class="nav-item mx-1">
                                        <a class="nav-link " href="#contact">Contact</a>
                                    </li>
                                </ul>

                                <?php
                                if (isset($_SESSION['login'])) {
                                ?>
                                    <a id="logout" class="text-decoration-none border border-primary border-2 py-1 px-2 rounded" href="./logout.php">Logout</a>
                                <?php
                                } else {

                                ?>
                                    <!-- login / sign up -->
                                    <div id="log" class="d-flex flex-column flex-md-row align-item-center text-align-center justify-content-center  gap-3">
                                        <a id="login" class="shadow-none text-decoration-none px-2 py-1 border border-2 border-primary rounded-3  text-bold font-weight-bold " data-bs-toggle="modal" data-bs-target="#loginmodule" href="#">login</a>

                                        <a id="signup" class="text-decoration-none border border-primary border-2 py-1 px-2 rounded" data-bs-toggle="modal" data-bs-target="#createmodule" href="#">Sign_Up</a>

                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>


            <!-- login Modal -->
            <div class="modal fade" id="loginmodule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-2 text-primary" id="staticBackdropLabel">Login</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid col-12">
                                <div class=" p-1 col-sm-12 cont-wid clr mx-auto text-primary rounded font-10 font-weight-bold ">
                                    <!-- log in form -->
                                    <form action="../php/login.php" name="myForm" method="POST" onsubmit="return loginvalidate()">
                                        <div class="email">
                                            <h4 id="" class="text-left">Email</h4>

                                            <input id="email" name="email" type="text" placeholder="email or number" class="w-100 form-control h-2" oninput="ec()">
                                            <label id="emailerror" class="fs-6"></label>
                                        </div>

                                        <div class="pass mb-3 col">
                                            <div class="text inline-block">
                                                <h4 class="w-auto inline1 float-start">Password</h4>
                                            </div>
                                            <input id="password" name="password" type="password" placeholder="**********" class="w-100  h-2 form-control">
                                            <label id="passerror"></label>
                                        </div>

                                        <div>
                                            <!-- <button type="submit" onclick="" class="btn btn-primary w-100 btn-grid" value="Submit">Login</button> -->
                                            <input type="submit" id="submit" name="submit" class="btn btn-primary w-100">

                                            <h6>Don't Have An Account ? <a data-bs-toggle="modal" data-bs-target="#createmodule" href="#">Sign Up</a></h6>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- create model -->
            <div class="modal fade" id="createmodule" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-2 text-primary" id="staticBackdropLabel">Create Account</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container rounded ">
                                <form name="myForm" onsubmit="return cvalidate()" method="post" action="../php/create.php">
                                    <div class="form pb-1">

                                        <div class="row ">
                                            <div class="col-md">
                                                <label class="h5 text-primary mb-0">First Name <label class="text-danger">*</label></label>
                                                <input id="fname" name="fname" type="text" class="form-control" placeholder="First Name">
                                                <label for="" id="fnameerror" class="text-danger"></label>
                                            </div>
                                            <div class="col-md ">
                                                <label class="h5 text-primary mb-0">Middle Name </label>
                                                <input id="mname" name="mname" type="text" class="form-control" placeholder="First Name">

                                            </div>
                                            <div class="col-md ">
                                                <label class="h5 text-primary mb-0">Last Name<label class="text-danger">*</label></label>
                                                <input id="lname" type="text" name="lname" class="form-control" placeholder="Last Name">
                                                <label for="" id="lnameerror" class="text-danger"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md ">
                                                <label class=" h5 text-primary mb-0">Phone<label class="text-danger">*</label></label>
                                                <input id="phone" type="text" name="phone" name="phone" class="form-control">
                                                <label for="" id="phoneerror" class="text-danger"></label>
                                            </div>
                                            <div class="col-md ">
                                                <label class=" h5 text-primary mb-0">Email<label class="text-danger">*</label></label>
                                                <input id="email2" type="text" name="email2" class="form-control " oninput="ec()">
                                                <label id="emailerror2"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md ">
                                                <label class=" h5 text-primary mb-0">Password<label class="text-danger">*</label></label>
                                                <input id="password2" name="password2" type="password" class="form-control ">
                                                <label for="" id="passerror2"></label>
                                            </div>
                                            <div class="col-md ">
                                                <label class=" h5 text-primary mb-0">Confirm Password<label class="text-danger">*</label></label>
                                                <input id="cpass" type="password" class="form-control " oninput="cpc()">
                                                <label id="cpasserror"></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md">
                                                <label class=" h5 text-primary">Address<label class="text-danger">*</label></label>
                                                <input id="address" type="text" name="address" class="form-control ">
                                                <label id="adderror"></label>

                                            </div>

                                        </div>

                                        <div class="col-md">
                                            <button type="submit" name="submit" value="Submit" class="btn btn-lg col-3 btn-primary">Submit</button>
                                        </div>
                                        <p>Already Have Account <a href="" data-bs-toggle="modal" data-bs-target="#loginmodule">Log in</a></p>
                                    </div>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

            <script src="../js/script.js"></script>

        </body>

        </html>
    </nav>

    <?php
    // include "../html/homepage.html";

    if (isset($_SESSION['login'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> Welcome </strong> You are now login
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } else {
    }

    if (isset($_SESSION['create'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> Congratulation </strong> You're account create successful. Now you can login using your email and password. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    } else {
    }
    ?>

    <!-- homepage  -->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>homepage</title>
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/homepage.css">
        <link rel="stylesheet" href="../css/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css">
        <script src="../js/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js"></script>

    </head>

    <body id="body" class="overflow-auto container ">
        <!-- display first -->
        <div id="home" class="container  border-primary mb-3  border-bottom">
            <div class=" d-flex row">
                <div class="d-flex-column my-auto align-item-center text-align-center col-sm-7 ">
                    <div class="contents">
                        <h2 class="d-flex my-3 align-item-top">Professional <i class="text-primary">
                                Cleaning</i></h2>
                        <h1 class="my-3 text-primary d-flex align-item-center">Service For Your Home<br> & Office</h1>
                        <div class="morphing fs-1 mb-3">
                            <div class="word">Green Cleaning</div>
                            <div class="word">Residential Cleaning</div>
                            <div class="word">Outdoor Cleaning</div>
                            <div class="word">Special Task</div>
                        </div>

                        <p class="text-justify">OT cleaning service is among those companies that not only work but also
                            satisfies their customers with cleaning service. An experience of many years with a quality has
                            already standardized our industry along with the customer’s comfort in our reliable cleaning.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-5 hide">
                    <img id="img" src="../img/CleanMan.png" alt="CleanMan" class="w-100">
                </div>
            </div>
        </div>
        <!-- services -->
        <div id="services" class="container pt-3 my-5">
            <h4 class="text-center mb-3 mt-5">Our Services</h4>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="../img/sofa-dry-cleaning-service-1000x1000.png" alt="house cleaning">

                        <div class="card-body">
                            <h4>Sofa Cleaning</h4>
                            <p class="card-text">Have you been using your sofa for a long time? Don’t worry! There is no
                                need to replace it.[....]</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                                </div>
                                <small class="text-body-secondary">9 Sep</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="../img/House cleaning.jpg" alt="house cleaning">

                        <div class="card-body">
                            <h4>House Cleaning</h4>

                            <p class="card-text">You spend most of your time at home and your home represents your
                                lifestyle. The best you can[....]</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                                </div>
                                <small class="text-body-secondary">9 Aug</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="../img/vehicle cleaning.jpg" alt="house cleaning">
                        <div class="card-body">
                            <h4>Vehicle Cleaning</h4>

                            <p class="card-text">We are not just a simple car washing service, we also offer a variety of
                                high-quality services for our [....] </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                                </div>
                                <small class="text-body-secondary">9 Jul</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="../img/watertankclean.jpg" alt="house cleaning">

                        <div class="card-body">
                            <h4>Water Tank Cleaning</h4>
                            <p class="card-text">To maintain water hygiene, water-storing tanks should be cleaned in a
                                regular interval. It is important to maintain the [....]</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                                </div>
                                <small class="text-body-secondary">9 Sep</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="../img/carpet-cleaning-27351-sstock.jpg" alt="house cleaning">

                        <div class="card-body">
                            <h4>Carpet Cleaning</h4>

                            <p class="card-text">OT Cleaning offers state of the art commercial and residential carpet
                                cleaning services. Our best [....]</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                                </div>
                                <small class="text-body-secondary">9 Aug</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="../img/Outdoor Class cleaning.jpg" alt="house cleaning">
                        <div class="card-body">
                            <h4>Outdoor Window and glass Cleaning</h4>

                            <p class="card-text">Why do you need outdoor window and glass cleaning services? [....]</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View More</button>
                                </div>
                                <small class="text-body-secondary">9 Jul</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us -->
        <div id="about" class="container">
            <h3 class="my-5 text-center">About Us</h3>
            <h5>Welcome to Cleaning Service Booking System Your Trusted Cleaning Partner</h5>
            <p>At Cleaning Service booking system, we take immense pride in being a leading cleaning company with over a decade of experience in providing top-notch cleaning services across Nepal. Our journey began with a vision to create cleaner, healthier, and more hygienic living and working spaces for everyone. Over the years, we have grown and evolved, becoming a trusted name synonymous with excellence, reliability, and professionalism in the cleaning industry.
            </p>

            <h5>A Decade of Excellence

            </h5>
            <p>With a legacy spanning 10 years, our commitment to delivering exceptional cleaning solutions has only grown stronger. Our extensive experience has allowed us to refine our techniques, tailor our services to meet diverse client needs, and continuously raise the bar for cleaning standards.


            </p>
            <h5>Diverse Expertise

            </h5>
            <p>Cleaning service booking system has had the privilege of working with a diverse clientele, including apartments, houses, offices, and even governmental bodies. Our versatility in serving both residential and commercial sectors has honed our skills to deliver unparalleled cleaning results, transforming spaces into pristine environments that promote well-being and productivity.


            </p>
            <h5>Our Mission

            </h5>
            <p>Our mission is simple yet powerful: to enhance the quality of life for individuals and communities by providing exceptional cleaning services. We are driven by the belief that a clean environment fosters health, happiness, and prosperity. By meticulously cleaning and maintaining spaces, we contribute to a better tomorrow.


            </p>

        </div>
        <!-- contact -->
        <div class="container">
            <h3 id="contact" class="text-center my-5">Contact Us</h3>
        </div>

        <script src="../js/script.js"></script>
    </body>

</html>
<footer>
    <!-- footer -->
    <?php
    include '../html/footer.html';
    ?>
</footer>

</body>

</html>