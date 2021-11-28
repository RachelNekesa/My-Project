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
        <div class="top-bar d-none d-md-block">
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
        </div>
        <!-- Top Bar End -->

        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
              <h2 class="navbar-brand" style="font-size: 20px;
              text-transform: capitalize;
}


              ">
                ShareNaMkenya
              </h2>
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



        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Register Welfare Home</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" >

            <div class="container">


                <div class="row align-items-center">


                    <div class="col-lg-5">

                        <div class="volunteer-form">

                            <h3 style="text-align:center; position: relative; top: -45px;">Register Home Form</h3>



                            <form name="form1" method="post" action="{{url('/store-form')}}">
                              @csrf

                                <div class="control-group">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">

                                  <select class="form-control" name="category" placeholder="Category" id="category">
                                     <option value="" selected disabled>Select Category</option>
      <option style="color:black;">Children Home</option>
      <option style="color:black;">Home for the old</option>
      <option style="color:black;">Other</option>

    </select>
                                    <!-- <input type="text" class="form-control" placeholder="Category" required="required"
                                     /> -->

                                </div>

                                <div class="control-group">
                                    <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone Number" required="required" />
                                </div>
                                <div class="control-group">
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <input id="location" name="location" type="text" class="form-control" placeholder="Location" required="required" />
                                </div>
                                <div class="control-group">
<p>
  image/logo
                                    <input id="image"  name="image" type="file" class="form-control"  />
</p>

                                </div>
                                <div class="control-group">
                                    <textarea id="description" name="description" class="form-control" placeholder="Description" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" name="button" type="submit">Register Home</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">

                          <div>

                            @if(session('status'))
                            <div style="position: relative; top: -275px;" class=" alert alert-success">
                              <button class="close" type="button" name="button" data-dismiss="alert">x</button>
                              {{ session('status') }}
                            </div>


                              @endif
                          </div>
                            <div class="section-header" style="position: relative; top: -105px;">
                                <p>Register Home</p>
                                <h2 >Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->










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
