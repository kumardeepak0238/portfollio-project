<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>UI - Learnig</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"  />
    
    <!-- Custom-Files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Bootstrap-CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Style-CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.php">UI learnig</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu nav nav-pills">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#about">Join Now</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Short Courses <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="#events" class="drop-text">Graphics Design</a></li>
                                    <li><a href="#what" class="drop-text">Video Editing</a></li>
                                    <li><a href="#courses" class="drop-text">Android Development</a></li>
                                    <li><a href="#stats" class="drop-text">Web Development</a></li>
                                    <li><a href="#gallery" class="drop-text">Web Design</a></li>

                                </ul>
                            </li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="resume.php">Author</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Sign Up</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>

     <div class="main-w3pvt mian-content-wthree text-center" id="home">
        <div class="container">
            <div class="style-banner mx-auto">
                <h3 class="text-wh font-weight-bold">Welcome to <span>UI Learnig</span> <br>Best for short courses</h3>
                <p class="mt-3 text-li" id="join">Join UI now</p>
                <!-- form -->
                <div class="home-form-w3ls mt-5">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Name" placeholder="First Name"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Name" placeholder="Last exam"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Name" placeholder="" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Name" placeholder="Your Message" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Name" placeholder="Your Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Name" placeholder="Last Name"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Name" placeholder="Choose Short course" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Name" placeholder="Address" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Name" placeholder="Alreday admitted/not admitted" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="Name" placeholder="Your Message" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn_apt btn">Submit</button>
                    </form>
                </div>
                <!-- //form -->
            </div>
        </div>

    </div>
    <!-- //banner -->



</body>