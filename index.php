<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Summo Brandcom</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <!--================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <!--=====================================================-->
    <!--Contact US 
	=====================================================-->

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--=====================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--=====================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--=====================================================-->

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Custom CSS
        ============================================= -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Background Slideshow -->
    <link rel="stylesheet" href="css/jquery.slide.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">

    <!-- Font inport -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <style>
        #map {
            height: 250px;
            width: 100%;
        }
    </style>

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <!-- <a class="site-logo js-tilt">
                <img class="logo" data-tilt src="images/logo/summo_logo_new.svg" alt="Homepage">
                <img class="logo" data-tilt src="images/logo/Summo Brand Logo New.png" alt="Homepage">
            </a> -->
            <a class="site-logo">
                <!-- <img class="logo" data-tilt src="images/logo/summo_logo_new.svg" alt="Homepage"> -->
                <img class="logo" src="images/logo/Summo Brand Logo New.svg" alt="Homepage">
            </a>
        </div>
        <!-- end header-logo -->


        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close">
                <span>Close</span>
            </a>

            <div class="header-nav__content">
                <h3>Summo Brandcom</h3>

                <ul class="header-nav__list">
                    <li class="current">
                        <a class="smoothscroll" href="#home" title="home">Home</a>
                    </li>
                    <li>
                        <a class="smoothscroll" href="#about" title="about">About</a>
                    </li>
                    <li>
                        <a class="smoothscroll" href="#services" title="services">Services</a>
                    </li>
                    <li>
                        <a class="smoothscroll" href="#works" title="works">Works</a>
                    </li>
                    <li>
                        <a class="smoothscroll" href="#clients" title="clients">Clients</a>
                    </li>
                    <li>
                        <a class="smoothscroll" href="#contact" title="contact">Contact</a>
                    </li>
                </ul>


                <ul class="header-nav__social">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#0">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li> -->
                </ul>

            </div>
            <!-- end header-nav__content -->

        </nav>
        <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-icon"></span>
        </a>

    </header>
    <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section>
        <div id="home" class="slide">
            <div class="success">
                <?php
                if (isset($_REQUEST['success']) == true) {
                    echo '<div class="alert-box alert-box--success hideit">
                                <p>Thank you for contacting us.</p> <br> <p>We will be in touch with you very soon..</p>
                                <i class="fa fa-times alert-box__close" aria-hidden="true"></i>
                            </div>';
                }
                ?>
            </div>
            <ul>
                <li data-bg="images/banner/1.jpg">
                    <div class="shadow">
                        <div class="s-home target-section">
                            <div class="shadow-overlay"></div>
                            <div class="home-content">
                                <div class="home-content__main">
                                    <h1>
                                        Smarter
                                        <span class="highlight contentcolor"> Campaigns </span>
                                    </h1>
                                    <h3>Greater Reach. Richer Insights. Effective Campaigns = Smarter Impact.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-bg="images/banner/2.jpg">
                    <div class="shadow">
                        <div class="s-home target-section">
                            <div class="shadow-overlay"></div>
                            <div class="home-content">
                                <div class="home-content__main">
                                    <h1>
                                        A box to think
                                        <span class="highlight contentcolor"> outside of </span>
                                    </h1>
                                    <h3>Your Go-To Media Business for Scale, Impact And Effectiveness</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-bg="images/banner/3.jpg">
                    <div class="shadow">
                        <div class="s-home target-section">
                            <div class="shadow-overlay"></div>
                            <div class="home-content">
                                <div class="home-content__main">
                                    <h1>
                                        Bigger. Bolder.
                                        <span class="highlight contentcolor"> Beyond Reach </span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-bg="images/banner/4.jpg">
                    <div class="shadow">
                        <div class="s-home target-section">
                            <div class="shadow-overlay"></div>
                            <div class="home-content">
                                <div class="home-content__main">
                                    <h1>
                                        We are the
                                        <span class="highlight contentcolor"> entertainment </span>
                                    </h1>
                                    <h3>
                                        Not an Interruption, Not a Detraction <br>
                                        A Medium Where Brands ARE The Entertainment.
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- end home-content__main -->

            <a href="#about" class="home-scroll smoothscroll">
                <span class="home-scroll__text">Scroll Down</span>
                <span class="home-scroll__icon"></span>
            </a>
        </div>

        <!-- <ul class="home-sidelinks">
            <li>
                <a class="smoothscroll" href="#about">About
                    <span>who we are</span>
                </a>
            </li>
            <li>
                <a class="smoothscroll" href="#services">Services
                    <span>what we do</span>
                </a>
            </li>
            <li>
                <a class="smoothscroll" href="#works">Work
                    <span>our works</span>
                </a>
            </li>
            <li>
                <a class="smoothscroll" href="#clients">Clients
                    <span>our clients</span>
                </a>
            </li>
            <li>
                <a class="smoothscroll" href="#contact">Contact
                    <span>get in touch</span>
                </a>
            </li>
        </ul> -->
        <!-- end home-sidelinks -->

        <ul class="home-social">
            <li class="home-social-title">Follow Us</li>
            <li>
                <a href="#0">
                    <i class="fab fa-facebook"></i>
                    <span class="home-social-text">Facebook</span>
                </a>
            </li>
        </ul>
        <!-- end home-social -->
        <!-- <div class="slider-progress">
            <div class="progress"></div>
        </div> -->
    </section>
    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Who We Are</h3>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row" data-aos="fade-up">

            <div class="col-two tab-full ">
                <div class="intro-icon">
                    <img src="images/services/Intro_Icon.png" alt="Into Icon">
                </div>
            </div>
            <div class="col-ten tab-full ">
                <p class="lead">

                    A full fledged 360 degree media advertising agency head quartered in Mumbai, Summo Brandcom is the
                    perennial flow of fresh
                    ideas that sifts through the consumer values, needs and beliefs to communicate messages that propel
                    the
                    brand towards the target audience.
                    <br>
                    <br> Summo Brandcom offers your brand all media solutions including Media Planning & Buying,
                    Digital Marketing,
                    Ambient Media solutions, Experiential Marketing, Retail Management & Print Production.
                    <br>
                    <br> Our partnership with clients in strategic communication to bringing long term advantage for
                    their brands
                    and the organization has not only given positive results but has also cemented our relationship.
                    Breaking
                    away from the conventional Ad Agency set up, we are also offering Social Media and Online Marketing
                    with
                    Website Design and Development SEO and SEM services.
                    <br>
                    <br>

                </p>
            </div>
        </div>
        <!-- end about-desc -->
    </section>
    <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <!-- <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. 
                </p> -->
            </div>
        </div>
        <!-- end about-desc -->

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            <div class="col-block service-item backclr1" data-aos="fade-up">
                <div class="service-icon">
                    <!-- <i class="icon-group"></i> -->
                    <img src="images/services/Outofhome_Icon.png" alt="Out of Home ">
                </div>
                <div class="service-text">
                    <h3 class="h4">Out of Home </h3>
                    <p>We also specialize in impressions that can't be quantified. Our out of home media expertise and
                        connections
                        is the key to your brand's enhanced reach. Right from traditional formats such as Hoardings,
                        Gantry's,
                        Bus Q Shelter, Airport & Railway Stations, we're well versed when it comes to conceptualizing
                        and
                        executing various outdoor campaigns and out of home installations.
                    </p>
                </div>
            </div>

            <div class="col-block service-item backclr2" data-aos="fade-up">
                <div class="service-icon">
                    <!-- <i class="icon-earth"></i> -->
                    <img src="images/services/Ambientmedia_Icon.png" alt="Ambient  Media">
                </div>
                <div class="service-text">
                    <h3 class="h4">Ambient Media</h3>
                    <p>Ambient Media is all about captive audience and high dwell time areas where audience is in
                        receptive
                        mode giving high visibility to the communication of the brand. Ambient media is an extension to
                        OOH
                        where people are on move and in out of home space.  In Ambient media space your brand have the
                        opportunity
                        to advertise in Cinema, Malls & Multiplexes, Super Markets, Coffee Shops & Restaurants.
                    </p>
                </div>
            </div>

            <div class="col-block service-item backclr3" data-aos="fade-up">
                <div class="service-icon">
                    <!-- <i class="icon-cube"></i> -->
                    <img src="images/services/Digitalmarketing_Icon.png" alt="Digital Marketing">
                </div>
                <div class="service-text">
                    <h3 class="h4">Digital Marketing</h3>
                    <p>Our digital marketing team is well versed when it comes to managing and promoting your brand on
                        various
                        digital platforms. Content generation, Social Media Management, Search Engine Optimization,
                        Search
                        Engine Marketing, managing your websites, Instagram handles and Youtube channels are some of
                        the
                        services on our digital platter.
                    </p>
                </div>
            </div>

            <div class="col-block service-item backclr4" data-aos="fade-up">
                <div class="service-icon">
                    <!-- <i class="icon-window"></i> -->
                    <img src="images/services/Experiential_Marketing.png" alt="Experiential Marketing">
                </div>
                <div class="service-text">
                    <h3 class="h4">Experiential Marketing</h3>
                    <p>When brands become human, it's only because of the experience they deliver on a personal basis.
                        Our experiential
                        marketing solutions are catered towards propelling your brand beyond conventional mediums,
                        through
                        activations, on ground promotions and customized events. Creating optimum engagement is what we
                        do
                        best, and no better way than connecting directly to those who matter.
                    </p>
                </div>
            </div>

            <div class="col-block service-item backclr5" data-aos="fade-up">
                <div class="service-icon">
                    <!-- <i class="icon-lego-block"></i> -->
                    <img src="images/services/Retail_Management_Icon.png" alt="Retail Management">
                </div>
                <div class="service-text">
                    <h3 class="h4">Retail Management</h3>
                    <p>We are adept at crossing mediums to deliver ideal marketing solutions as well as highly
                        intrinsic when
                        it comes to guiding you through effective strategies to accentuate your retail spaces. Our
                        Store
                        Design, Signage, Visual Merchandising & Trade Marketing expertise will only heighten your
                        customer's
                        experience and leave an impression that will trigger them to come back for more.
                    </p>
                </div>
            </div>

            <div class="col-block service-item backclr6" data-aos="fade-up" data-aos-delay="0">
                <div class="service-icon">
                    <!-- <i class="icon-lego-block"></i> -->
                    <img src="images/services/Printprodution_Icon.png" alt="Print Production ">
                </div>
                <div class="service-text">
                    <h3 class="h4">Print Production</h3>
                    <p>From print, to audio to film, we attain the right partners to work with us when it comes to
                        executing
                        your specialized campaigns. With utmost quality being maintained in the pre-production stages,
                        we
                        execute intricate supervision and meticulous planning in the post production aspects as well -
                        carefully
                        managing and delivering only the best output through the most efficient minds in the industry.
                    </p>
                </div>
            </div>

        </div>
        <!-- end services-list -->

    </section>
    <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Works</h3>
                <h1 class="display-1">These are some of our recent campaigns</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row masonry-wrap">
            <div class="masonry">


                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/clients/ourwork/Mangaluru Airport Exit_45X25_Close View.jpeg" class="thumb-link" data-size="1050x700">
                                <img src="images/clients/ourwork/Mangaluru Airport Exit_45X25_Close View.jpeg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- end item-folio -->
                </div>
                <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/clients/ourwork/Bandrabranch_GSB.jpg" class="thumb-link" data-size="1050x700">
                                <!-- <img src="images/clients/ourwork/" 
                                     srcset="http://via.placeholder.com/100x100 1x, images/clients/ourwork/ 2x" alt=""> -->
                                <img src="images/clients/ourwork/Bandrabranch_GSB.jpg" alt="">
                            </a>
                        </div>

                        <!-- <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Title 1
                            </h3>
                            <p class="item-folio__cat">
                                Sub Title 1
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project 1
                        </a>

                        <div class="item-folio__caption">
                            <p>Desc 1 Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde
                                dolorem corrupti neque nisi.</p>
                        </div> -->

                    </div>
                    <!-- end item-folio -->
                </div>
                <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/clients/ourwork/DSC03816_2.jpg" class="thumb-link" data-size="1050x700">
                                <img src="images/clients/ourwork/DSC03816_2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- end item-folio -->
                </div>
                <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/clients/ourwork/eBiotech_1.jpg" class="thumb-link" data-size="1050x700">
                                <img src="images/clients/ourwork/eBiotech_1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- end item-folio -->
                </div>
                <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/clients/ourwork/IMG_9285.JPG" class="thumb-link" data-size="1050x700">
                                <img src="images/clients/ourwork/IMG_9285.JPG" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- end item-folio -->
                </div>
                <!-- end masonry__brick -->


                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/clients/ourwork/Lokmat_Dipotsavcampaign_Busshelter.png" class="thumb-link" data-size="1050x700">
                                <img src="images/clients/ourwork/Lokmat_Dipotsavcampaign_Busshelter.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- end item-folio -->
                </div>
                <!-- end masonry__brick -->

                <!-- <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="images/clients/ourwork/Solo-Ad-Bihar-Jharkhand.jpg" class="thumb-link"
                                data-size="1050x700">
                                <img src="images/clients/ourwork/Solo-Ad-Bihar-Jharkhand.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    end item-folio
                </div> -->
                <!-- end masonry__brick -->

            </div>
            <!-- end masonry -->
        </div>
        <!-- end masonry-wrap -->
    </section>
    <!-- end s-works -->

    <!-- Our Clients -->
    <section id='clients' class="s-clients light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--light">Our Clients</h3>
                <h1 class="display-1">Meet Our Clients</h1>
                <div class="owl-carousel">
                    <div> <img src="images/clients/clients_logo/chilly_willy.jpg" alt=""> </div>
                    <div> <img src="images/clients/clients_logo/Ebaotech_Logo.png" alt=""> </div>
                    <div> <img src="images/clients/clients_logo/Goldenbansi_logo_3.png" alt=""> </div>
                    <div> <img src="images/clients/clients_logo/Bharat Bank_Logo.png" alt=""> </div>
                    <div> <img src="images/clients/clients_logo/Lokmat_Logo.png" alt=""> </div>
                    <div> <img src="images/clients/clients_logo/MTR_Logo.jpg" alt=""> </div>
                    <div> <img src="images/clients/clients_logo/Sunday_Mobility_Logo.png" alt=""> </div>
                    <div> <img src="images/clients/clients_logo/Volvo_Car_Logo.jpg" alt=""> </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end clients -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--light">Contact Us</h3>
                <h1 class="display-1 display-1--light">Get in touch and let's make something great together. Let's turn
                    your idea into a greater brand visibility.</h1>
            </div>
        </div>
        <!-- end section-header -->

        <div class="row">

            <div class="col-full contact-main" data-aos="fade-up">
                <p>
                    <a href="mailto:enquiry@summobrand.com" class="contact-email">enquiry@summobrand.com</a>
                    <span class="contact-number">
                        <!-- <span class="subhead subhead--light">Tel:</span>
                        <a href="tel:02266627445" class="contact-cust"> 022 - 6662 7445</a> -->
                        <br>
                        <span class="subhead subhead--light"> Mob: </span>
                        <a href="tel:+917045263131" class="contact-cust">+91 70452 63131</a>
                    </span>
                </p>
            </div>
            <!-- end contact-main -->

        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-five tab-full contact-secondary" data-aos="fade-up">
                <h3 class="subhead subhead--light">Where To Find Us</h3>

                <p class="contact-address">
                    <span class="bname">Summo Brandcom</span>
                    <br>No.5, A-2,
                    <br>Shah & Nahar Industrial Estate,
                    <br>Lower Parel, Mumbai - 400 013.
                    <!-- <br>37/A, S. G. Barve Marg,
                    <br>Near Kamgar Nagar Municipal school,
                    <br>Kamgar Nagar, Kurla East,
                    <br>Mumbai - 400 024. -->
                </p>

                <!--The div element for the map -->
                <div id="map"></div>

            </div>
            <!-- end contact-secondary -->

            <div class="col-seven tab-full contact-secondary" data-aos="fade-up">
                <!-- <h3 class="subhead subhead--light">Follow Us</h3>

                <ul class="contact-social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-linkedin"></i></a>
                    </li>
                </ul> <!-- end contact-social -->

                <div class="contact-subscribe" id="contactus">
                    <div class="bg-contact2">
                        <div class="container-contact2">
                            <div class="wrap-contact2">
                                <form class="contact2-form validate-form" method="post" action="send_form_email.php">
                                    <h3 class="subhead subhead--light contacthead">Contact Us</h3>
                                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                                        <input class="input2 input288" type="text" name="name">
                                        <span class="focus-input2" data-placeholder="NAME"></span>
                                    </div>

                                    <div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="input2" type="text" name="email">
                                        <span class="focus-input2" data-placeholder="EMAIL"></span>
                                    </div>

                                    <div class="wrap-input2 validate-input" data-validate="Message is required">
                                        <textarea class="input2" name="message"></textarea>
                                        <span class="focus-input2" data-placeholder="MESSAGE"></span>
                                    </div>

                                    <div class="container-contact2-form-btn">
                                        <div class="wrap-contact2-form-btn">
                                            <div class="contact2-form-bgbtn"></div>
                                            <button class="contact2-form-btn">
                                                Send Your Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end contact-subscribe -->
            </div>
            <!-- end contact-secondary -->

        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-full cl-copyright">
                <span>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    <span class="cname">Summo Brandcom </span> Designed by
                    <a href="https://github.com/KarthikPoojary/" target="_blank">Karthik Poojary</a>
                </span>
            </div>
        </div>

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <i class="icon-arrow-up" aria-hidden="true"></i>
            </a>
        </div>

    </section>
    <!-- end s-contact -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div>
    <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/custom.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script type="text/javascript">
        $('.js-tilt').tilt({
            scale: 1.1,
            speed: 300,
        })
    </script>

    <!-- Background Slideshow -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <script src="js/jquery.slide.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.slide').slide({
                'isAutoSlide': true,
                'slideSpeed': 5000,
                'isHoverStop': true,
                'isShowArrow': false,
                'dotsEvent': 'mouseenter',
                'isLoadAllImgs': true
            });

        });
    </script>

    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                slideTransition: "ease-in-out",
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>

    <!-- Removal of Contact form alert box -->
    <script type="text/javascript">
        var uri = window.location.toString();
        if (uri.indexOf("?") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("?"));
            window.history.replaceState({}, document.title, clean_uri);
        }
        window.setTimeout(function() {
            $(".alert-box").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);
    </script>

    <!-- <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var uluru = {
                lat: 18.994440,
                lng: 72.827997
            };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 14,
                    center: uluru
                });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
    </script>

</body>

</html>
