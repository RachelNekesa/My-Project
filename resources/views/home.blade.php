<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ShareNaMkenya</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <!-- <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+123 456 7890</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
              <h2 class="navbar-brand" style="font-size: 20px;
              text-transform: capitalize;
}


              ">
                ShareNaMkenya
              </h2>
                <!-- <a href="index.html" class="navbar-brand"
style="font-size: 35px; "
                >Share</a> -->
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                        <!-- <a href="causes.html" class="nav-item nav-link">Causes</a>
                        <a href="event.html" class="nav-item nav-link">Events</a> -->
                        <a href="/welfarehome" class="nav-item nav-link">Welfare Homes</a>
                          <a href="/registerhome" class="nav-item nav-link">Register Home</a>



                            @if (Route::has('login'))
                                <div class="navbar-nav ml-auto">
                                    @auth
                                    <x-app-layout>

                                    </x-app-layout>
                                    @else
                                      <!-- <li><a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>  </li> -->

                                        @if (Route::has('register'))
                                          <li> <a href="{{ route('register') }}" class="nav-item nav-link">Sign Up</a> </li>
                                        @endif
                                    @endauth
                                </div>
                            @endif





                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Share Na Mkenya</h1>
                            <p>
                              Let's be kind to the needy people
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="/welfarehome">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Get Involved with a helping hand</h1>
                            <p>
                                It is more blessed to give than to receive.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Bringing smiles to millions</h1>
                            <p>
                                Do something good for yourself and great for Kenya
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="">Donate Now</a>
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="img/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>About Us</p>
                            <h2> Charity organization in Kenya</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                  Seeks assistance to support educational opportunities for 100 pre-primary children who live in slum areas where there is a high rate of illiteracy in Kenya.  The school provides a free meal to entice children to come to school and learn.  The grant proposal requests support for 200 books with the organization providing $100 in matching funds.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                  Seeks assistance to support educational opportunities for 100 pre-primary children who live in slum areas where there is a high rate of illiteracy in Kenya.  The school provides a free meal to entice children to come to school and learn.  The grant proposal requests support for 200 books with the organization providing $100 in matching funds.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                  Seeks assistance to support educational opportunities for 100 pre-primary children who live in slum areas where there is a high rate of illiteracy in Kenya.  The school provides a free meal to entice children to come to school and learn.  The grant proposal requests support for 200 books with the organization providing $100 in matching funds..
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->










        <!-- Contact Start -->
     <div class="contact">
         <div class="container">
             <div class="section-header text-center">
                 <p>Get In Touch</p>
                 <h2>Contact for any query</h2>
             </div>
             <div class="contact-img">
                 <img src="img/contact.jpg" alt="Image">
             </div>
             <div class="contact-form">
                     <div id="success"></div>
                     <form name="sentMessage" id="contactForm" novalidate="novalidate">
                         <div class="control-group">
                             <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                             <p class="help-block text-danger"></p>
                         </div>
                         <div class="control-group">
                             <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                             <p class="help-block text-danger"></p>
                         </div>
                         <div class="control-group">
                             <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                             <p class="help-block text-danger"></p>
                         </div>
                         <div class="control-group">
                             <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                             <p class="help-block text-danger"></p>
                         </div>
                         <div>
                             <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                         </div>
                     </form>
                 </div>
         </div>
     </div>
     <!-- Contact End -->




        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Socials</h2>

                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Popular Causes</a>
                            <a href="">Upcoming Events</a>
                            <a href="">Latest Blog</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">ShareNaMkenya</a>, All Right Reserved.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
