<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Kitebeach - Water Park Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="" class="navbar-brand p-0">
                   <h1 class="display-6 text-dark"></i>KiteBeach<img src="img/logo.png" alt="Logo" class="me-3" style="width: 70px; height: 150px;"></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                 <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                        <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
                        <a href="{{ route('attraction')}}" class="nav-item nav-link">Attractions</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('feature') }}" class="dropdown-item">Our Feature</a>
                                <a href="{{ route('gallery') }}" class="dropdown-item">Our Gallery</a>
                                <a href="{{ route('attraction')}}" class="dropdown-item">Attractions</a>
                                <a href="{{ route('package') }}" class="dropdown-item">Ticket Packages</a>
                                <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                                <a href="{{ route('testimonial')}}" class="dropdown-item">Testimonial</a>
                                <a href="{{ route('404') }}" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="{{ route('contact.index')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0">Get Started</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Service</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Service Start -->
        <div class="container-fluid service py-5" style="margin-top: 100px;">
            <div class="container service-section py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Service</h4>
                    <h1 class="display-5 text-white mb-4">Explore Kitebeach Park service</h1>
                    <p class="mb-0 text-white">Enjoy a perfect blend of fun, food, and relaxation at Kite Beach Park. Whether you're here for adventure, family time, or a peaceful escape by the sea, we have something for everyone.
                    </p>
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                    <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-days p-4">
                            <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Monday - Friday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>03:00 PM - 03:00 AM</p></div>
                            <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Saturday - Sunday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 03:00 AM</p></div>
                            <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0">Holiday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 03:00 AM  </p></div>
                        </div>
                    </div>
                    <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-home fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">🏝 Bamboo Hut Experience</a>
                                <p class="text-muted mb-2">Cozy | Private | Traditional Beach Feel</p>

<p class="mb-1">👥 Up to 40 Guests</p>
<p class="mb-1">⏳ 2 Hours</p>
<p class="mb-1">💰 ₹2,500 (Without Food)</p>
<p class="mb-0">🍽 Food: Negotiable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-gifts fa-4x"></i>

                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">🎤  Open Stage Celebration</a>
                                <p class="text-muted mb-2">Spacious | Open | Group Events</p>

<p class="mb-1">👥 Up to 100 Guests</p>

<p class="mb-1">💰 ₹4000 (Without Food)</p>
<p class="mb-0">🍽 Food: Negotiable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-music fa-4x"></i>

                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">🌅 Beach Side Celebration – Open Stage<</a>
                                 <p class="text-muted mb-2">Waves & Sunset Views</p>

<p class="mb-1">👥 Above 100 Guests</p>

<p class="mb-1">💰 ₹5000 (Without Food)</p>
<p class="mb-0">🍽 Food: Negotiable</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-ring fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">👑  Grand Beach Side Celebration</a>
                               <p class="text-muted mb-2">For Large Gatherings</p>

<p class="mb-1">👥 Above 100 Guests</p>

<p class="mb-1">💰 Rate: Customized for Your Event</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item">
                            <img src="img/feature-1.jpg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">🍽 CHARCOL Restaurant</h4>
                                    <p class="text-white">Experience rich flavors and coastal vibes at CHARCOL Restaurant, where delicious grilled specialties and fresh dishes are served with warmth and elegance. A perfect place to relax, dine, and enjoy quality time with family by the beach.
                                    </p>
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item">
                            <img src="img/feature-2.jpg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">🍵 Tea Shop</h4>
                                    <p class="text-white">Take a refreshing break at our cozy Tea Shop. Enjoy hot tea, light snacks, and peaceful seaside moments that make every sip special.
                                    </p>
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item">
                            <img src="img/feature-3.jpg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">🥤 Juice Shop</h4>
                                    <p class="text-white">Cool down with freshly prepared juices and refreshing drinks. Our Juice Shop offers vibrant flavors that perfectly match the breezy beach atmosphere.
                                    </p> 
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonials</h4>
                    <h1 class="display-5 text-white mb-4">Our Clients Riviews</h1>
                    <p class="text-white mb-0">Nothing makes us happier than seeing families smile and celebrations turn into beautiful memories. Our guests share their experiences of joyful moments, delicious food, peaceful seaside views, and unforgettable events at Kite Beach Park.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4">“We celebrated my daughter’s birthday at Kite Beach Park, and it was absolutely wonderful. The play area kept the kids happy, the food was delicious, and the beachside setting made everything feel magical. Highly recommended for family events!”
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p class="text-start text-white">Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4">“The sunset celebration setup was beautiful and well organized. The team was very supportive and handled everything smoothly. Our guests loved the seashore seating and the peaceful atmosphere.”
                        </p>
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p class="text-start text-white">Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4">“We hosted our engagement celebration here, and it was beyond our expectations. The decoration, sound system, and overall coordination were excellent. Truly a memorable experience!”
                        </p>
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Person Name</h4>
                                <p class="text-start text-white">Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <a href="index.html" class="p-0">
                                <h4 class="text-white mb-4"><img src="img/logo.png" alt="Logo" class="me-3" style="width: 50px; height: 50px;"></i>Kitebeach</h4>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                            <p class="mb-2">“Sun, sand, smiles — that’s KiteBeach life.”......</p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">Hosdurg beach, kanhangad</p>
                            </div>
                            <div class="d-flex align-items-center">
                                
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">Kitebeachpark@gmail.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">9947066222</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Opening Hours</h4>
                            <div class="opening-date mb-3 pb-3">
                                <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Monday - Friday:</h6>
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 03:00 pM - 03:00 AM</p>
                                </div>
                                <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Satur - Sunday:</h6>
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 09:00 AM - 03:00 AM</p>
                                </div>
                                <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Holiday:</h6>
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 09:00 AM - 03:00 AM</p>
                                </div>
                            </div>
                            <div>
                                <p class="text-white mb-2">Payment Accepted</p>
                                <img src="img/payment.png" class="img-fluid" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <!-- <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body"> -->
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        <!-- Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>