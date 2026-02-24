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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .glass-box {
            background: linear-gradient(135deg,
                    rgba(0, 0, 0, 0.55),
                    rgba(0, 0, 0, 0.35));
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
    </style>
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
            <a href="/" class="navbar-brand p-0 d-flex align-items-center">
                <img src="img/logofinal-remove.png" alt="KiteBeach Logo" class="logo" style="width: 150px; height: 150px;">
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
                    <a href="{{ route('contact.index') }}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <!-- From Uiverse.io by cssbuttons-io -->
                <button class="c-button c-button--gooey"> Book Your Event
                    <div class="c-button__blobs">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </button>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
                    <defs>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                            <feBlend in="SourceGraphic" in2="goo"></feBlend>
                        </filter>
                    </defs>
                </svg>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">

        <!-- Slide 1 (NO FORM HERE) -->
        <div class="header-carousel-item">
            <video class="img-fluid w-100" autoplay muted loop playsinline>
                <source src="img/vid.mp4" type="video/mp4">
            </video>

            <div class="carousel-caption">
                <div class="container py-4">
                    <div class="row align-items-center">
                        <div class="col-xl-7">
                            <div class="glass-box p-5">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">
                                    Welcome To KiteBeach
                                </h4>

                                <h1 class="display-4 text-uppercase text-white mb-4">
                                    Beach Park And Restaurant
                                </h1>

                                <p class="mb-4 fs-5 text-white">
                                    A place where the sea kisses the shore and joy sits down beside you.
                                </p>

                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">
                                    Our Packages
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 (ONLY FORM HERE) -->
        <div class="header-carousel-item">
            <video class="img-fluid w-100" autoplay muted loop playsinline>
                <source src="img/vid2.mp4" type="video/mp4">
            </video>

            <div class="carousel-caption">
                <div class="container py-4">
                    <div class="row g-5 align-items-center">

                        <div class="col-xl-7">
                            <div class="glass-box p-5">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">
                                    Welcome To KiteBeach
                                </h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">
                                    Beach park and restaurant
                                </h1>
                                <p class="mb-4 fs-5">
                                    A place where the sea kisses the shore and joy sits down beside you.
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <div class="ticket-form p-5">
                                <h2 class="text-dark text-uppercase mb-4">
                                    Book Your Event
                                </h2>

                                <form action="{{ route('booking.store') }}" method="POST">
                                    @csrf

                                    <div class="row g-4">

                                        <div class="col-12">
                                            <input type="text" name="name"
                                                class="form-control border-0 py-2"
                                                placeholder="Your Name" required>
                                        </div>

                                        <div class="col-12 col-xl-6">
                                            <input type="email" name="email"
                                                class="form-control border-0 py-2"
                                                placeholder="Your Email" required>
                                        </div>

                                        <div class="col-12 col-xl-6">
                                            <input type="tel" name="phone"
                                                class="form-control border-0 py-2"
                                                placeholder="Phone" required>
                                        </div>

                                        <div class="col-12">
                                            <select name="package"
                                                class="form-select border-0 py-2" required>
                                                <option value="">Select Package</option>
                                                <option value="Bamboo Hut Celebration">
                                                    Bamboo Hut Celebration
                                                </option>
                                                <option value="Open stage Celebration">
                                                    Open Stage Celebration
                                                </option>
                                                <option value="Beach Side Grand Celebration">
                                                    Beach Side Grand Celebration
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <input type="date" name="event_date"
                                                class="form-control border-0 py-2" required>
                                        </div>

                                        <div class="col-12">
                                            <input type="number" name="guests"
                                                class="form-control border-0 py-2"
                                                placeholder="Guests" required>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary w-100 py-2 px-5">
                                                Book Now
                                            </button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <!-- <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item">
                            <img src="img/feature-1.jpeg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">👨‍👩‍👧‍👦 Moments That Matter</h4>
                                                            
                                    <p class="text-white">At our beachside space, it’s not just about food — it’s about the time you share. Feel the soft sea breeze, hear the gentle waves, and watch the sunset while laughing with the people who mean the most.
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item">
                            <img src="img/ph1.jpeg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">🌅 Together by the Shore</h4>
                                    <p class="text-white">Whether it’s family bonding, friendly catch-ups, or simply escaping busy days, our beach offers the perfect setting to slow down and enjoy life’s simple joys — good company, good views, and good vibes.
                                    </p>
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item">
                            <img src="img/ph3.jpeg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">🤍 Where Memories Are Made</h4>
                                    <p class="text-white">Children playing near the shore, friends sharing stories over snacks, families dining with the ocean as their backdrop — every visit becomes a memory you’ll want to relive again and again.
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Feature End -->

    <!-- About Start -->
    <div class="container-fluid about pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div><br>
                        <h4 class="text-primary">About Kitebeach</h4>
                        <h4 class="display-5 mb-4">We bring together the joy of seaside relaxation with delightful flavours and unforgettable experiences.</h4>
                        <p class="mb-5">We offer a peaceful seaside atmosphere, friendly service, and delightful food to make every event truly memorable.
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="me-3"><i class="fas fa-glass-cheers fa-3x text-primary"></i></div>
                                    <div>
                                        <h4>Food & Drinks</h4>
                                        <p>At Kite Beach, great views come with great flavors. Enjoy delicious food and refreshing drinks while relaxing beside the sea breeze.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="me-3"><i class="fas fa-dot-circle fa-3x text-primary"></i></div>
                                    <div>
                                        <h4>Many Attractions</h4>
                                        <p>A safe and cheerful space where children can laugh, run, and enjoy playful moments while parents relax nearby.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="me-3"><i class="fas fa-hand-holding-usd fa-3x text-primary"></i></div>
                                    <div>
                                        <h4>Affordable Price</h4>
                                        <p>Spend quality time together, celebrate special occasions, or simply relax — all within your budget.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="me-3"><i class="fas fa-users fa-3x text-primary"></i></i></div>
                                    <div>
                                        <h4>Perfect for All Ages</h4>
                                        <p>Whether you're here to play, eat, or simply relax, Kite Beach offers something special for every member of the family.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="position-relative rounded">
                        <div class="rounded" style="margin-top: 40px;">
                            <div class="row g-0">
                                <div class="col-lg-12">
                                    <div class="rounded mb-4">
                                        <img src="img/ph4.jpeg" class="img-fluid rounded w-100" alt="">
                                    </div>
                                    <div class="row gx-4 gy-0">
                                        <div class="col-6">
                                            <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                                <div class="counter-item-icon mx-auto mb-3">
                                                    <i class="fas fa-thumbs-up fa-3x text-white"></i>
                                                </div>
                                                <div class="counter-counting mb-3">
                                                    <span class="text-white fs-2 fw-bold" data-toggle="counter-up">150</span>
                                                    <span class="h1 fw-bold text-white">K +</span>
                                                </div>
                                                <h5 class="text-white mb-0">Happy Visitors</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                                <div class="counter-item-icon mx-auto mb-3">
                                                    <i class="fas fa-certificate fa-3x text-white"></i>
                                                </div>
                                                <div class="counter-counting mb-3">
                                                    <span class="text-white fs-2 fw-bold" data-toggle="counter-up">122</span>
                                                    <span class="h1 fw-bold text-white"> +</span>
                                                </div>
                                                <h5 class="text-white mb-0">Events

                                                </h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Experience Badge -->
                        <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center"
                            style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%); background: linear-gradient(135deg, #ffcc00, #6699ff);">
                            <h3 class="mb-0 text-white"> KiteBeach Park</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container service-section py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Service</h4>
                <h1 class="display-5 text-white mb-4">Explore Kitebeach Park service</h1>
                <p class="mb-0 text-white">Enjoy a perfect blend of fun, food, and relaxation at Kite Beach Park. Whether you're here for adventure, family time, or a peaceful escape by the sea, we have something for everyone.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-days p-4">
                        <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap">
                            <h4 class="mb-0 pb-2 pb-sm-0">Monday - Friday</h4>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>03:00 PM - 03:00 AM</p>
                        </div>
                        <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                            <h4 class="mb-0 pb-2 pb-sm-0">Saturday - Sunday</h4>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 03:00 AM</p>
                        </div>
                        <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                            <h4 class="mb-0">Holiday</h4>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 03:00 AM</p>
                        </div>
                    </div>
                </div>
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item p-4">
                        <div class="service-content">
                            <div class="mb-4">
                                <i class="fas fa-home fa-4x"></i>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-2">🏝 Bamboo Hut Experience</a>
                            <p class="text-muted mb-2">Cozy | Private | Traditional Beach Feel</p>

                            <p class="mb-1">👥 Up to 40 Guests</p>
                            <p class="mb-1">⏳ 2 Hours</p>
                            <p class="mb-1">💰 ₹2,500 (Without Food)</p>
                            <p class="mb-0">🍽 Food: Negotiable</p>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item p-4">
                        <div class="service-content">
                            <div class="mb-4">
                                <i class="fas fa-gifts fa-4x"></i>

                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">🎤 Open Stage Celebration</a>
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
                            <a href="#" class="h4 d-inline-block mb-3">🌅 Beach Side Celebration – Open Stage</a>
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
                            <a href="#" class="h4 d-inline-block mb-3">👑 Grand Beach Side Celebration</a>
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


    <!-- Ticket Packages Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="packages-item h-100">
                        <h4 class="text-primary"> Packages</h4>
                        <h1 class="display-5 mb-4">Choose The Best Packages For Your Family</h1>
                        <p class="mb-4">At Kite Beach Park, celebrations are not just events — they are curated experiences. Set against the breathtaking backdrop of the ocean, our premium beachside venues are designed for families who seek elegance, comfort, and unforgettable memories.
                        </p>
                        <p><i class="fa fa-check text-primary me-2"></i>✨ Premium seating arrangements</p>

                        <p><i class="fa fa-check text-primary me-2"></i>✨ Professional sound & stage setup</p>
                        <p><i class="fa fa-check text-primary me-2"></i>✨ Custom-themed décor</p>
                        <p class="mb-5"><i class="fa fa-check text-primary me-2"></i>✨ Curated catering options</p>
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-item bg-dark rounded text-center p-5 h-100">
                        <div class="pb-4 border-bottom">


                            <h2 style="color:white;"> <i class="bi bi-umbrella-fill text-warning"></i> Bamboo Hut Experience</h2>

                            <p class="mb-4">Kite Beach Park is one of the most loved beach event destinations, offering bamboo huts, open stages, and grand beachside celebration spaces.!</p>

                            <h2 class="mb-0 text-primary">₹2500<span class="text-body fs-5 fw-normal"></span></h2>
                        </div>
                        <div class="py-4">
                            <div class="mb-3 d-flex align-items-start">
                                <i class="fa fa-check text-primary me-3 mt-1"></i>
                                <span>Chairs</span>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <i class="fa fa-check text-primary me-3 mt-1"></i>
                                <span>Hall Frame Setup</span>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <i class="fa fa-check text-primary me-3 mt-1"></i>
                                <span>Sound System</span>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <i class="fa fa-check text-primary me-3 mt-1"></i>
                                <span>Customisation Available (Extra Charges Apply)</span>
                            </div>

                            <div class="mb-3 d-flex align-items-start">
                                <i class="fa fa-check text-primary me-3 mt-1"></i>
                                <span>Curated Catering Options</span>
                            </div>
                        </div>

                        <a href="#" class="btn btn-light rounded-pill py-3 px-5"> Book Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-item bg-primary rounded text-center p-5 h-100">
                        <div class="pb-4 border-bottom">
                            <h2 class="text-dark mb-4">👑 Grand Beach Side Celebration</h2>
                            <p class="text-white mb-4">Our thoughtfully designed celebration packages blend luxury with flexibility.!</p>
                            <h2 class="text-dark mb-0">₹5000<span class="text-white fs-5 fw-normal"></span></h2>
                        </div>
                        <div class="text-white py-4">
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Premium seating arrangements</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Professional sound & stage setup</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Custom-themed décor</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Curated catering options</p>
                        </div>
                        <a href="#" class="btn btn-dark rounded-pill py-3 px-5"> Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ticket Packages End -->


    <!-- Attractions Start -->
    <div class="container-fluid attractions py-5">
        <div class="container attractions-section py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Attractions</h4>
                <h1 class="display-5 text-white mb-4">Explore Kitebeach Park Attractions</h1>
                <p class="text-white mb-0">A happy place where families laugh together, children play freely, and beautiful seaside memories are made every day.
                </p>
            </div>
            <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="attractions-item wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/be2.jpg" class="img-fluid rounded w-100" alt="">
                    <a href="#" class="attractions-name">Roller Coaster</a>
                </div>
                <div class="attractions-item wow fadeInUp" data-wow-delay="0.4s">
                    <img src="img/res2.jpeg" class="img-fluid rounded w-100" alt="">
                    <a href="#" class="attractions-name"></a>
                </div>
                <div class="attractions-item wow fadeInUp" data-wow-delay="0.6s">
                    <img src="img/beach1.jpeg" class="img-fluid rounded w-100" alt="">
                    <a href="#" class="attractions-name"></a>
                </div>
                <div class="attractions-item wow fadeInUp" data-wow-delay="0.8s">
                    <img src="img/ju2.jpeg" class="img-fluid rounded w-100" alt="">
                    <a href="#" class="attractions-name"></a>
                </div>
                <div class="attractions-item wow fadeInUp" data-wow-delay="1s">
                    <img src="img/tea.jpeg" class="img-fluid rounded w-100" alt="">
                    <a href="#" class="attractions-name"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Attractions End -->

    <!-- Gallery Start -->
    <div class="container-fluid gallery pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Gallery</h4>
                <h1 class="display-5 mb-4">Captured Moments In Kitebeach</h1>
                <p class="mb-0">Kitebeach is more than just a destination — it’s where families come together, laughter fills the air, and unforgettable memories are made. From joyful family get-togethers to beautiful engagement celebrations, every gathering here feels special and full of life.
            </div>
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="img/gallery-1.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-1.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="img/gallery-2.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-2.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-2"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="img/gallery-3.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-3.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="img/gallery-4.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-4.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="img/gallery-5.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-5.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="img/gallery-6.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-6.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Blog Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Blog</h4>
                <h1 class="display-5 mb-4">Latest Blog & Articles</h1>
                <p class="mb-0">Stay Updated with Events, Celebrations & Special Moments at Kite Beach Park.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#">
                                <img src="img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </a>
                            <div class="blog-date"><i class="fas fa-clock me-2"></i>August 19, 2025</div>
                        </div>
                        <div class="blog-content p-4">
                            <a href="#" class="h4 d-inline-block mb-4">🎠 Safe & Fun Play Area</a>
                            <p class="mb-4">Kids love having a dedicated play space just for them. Our play area allows them to run, laugh, and enjoy exciting activities in a safe and friendly environment while parents relax nearby.
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#">
                                <img src="img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </a>

                            <div class="blog-date"><i class="fas fa-clock me-2"></i></div>
                        </div>
                        <div class="blog-content p-4">
                            <a href="#" class="h4 d-inline-block mb-4">🌅 Vast Coastal Open Space</a>
                            <p class="mb-4">The wide coastal area gives children the freedom to explore, play games, build sand creations, and enjoy the fresh sea breeze. Open spaces make them feel adventurous and energetic.
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#">
                                <img src="img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                            </a>

                            <div class="blog-date"><i class="fas fa-clock me-2"></i>August 19, 2025</div>
                        </div>
                        <div class="blog-content p-4">
                            <a href="#" class="h4 d-inline-block mb-4">👨‍👩‍👧‍👦 Perfect for Family Time</a>
                            <p class="mb-4">The sound of waves, soft sand under their feet, and beautiful sunsets create a magical outdoor experience that children naturally enjoy.
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Meet Our Team</h4>
                <h1 class="display-5 mb-4">Our Kitebeach Park Dedicated Team Member</h1>
                <p class="mb-0">Behind every joyful celebration and memorable beachside experience is a team that truly cares. Our dedicated staff works with passion, professionalism, and attention to detail to ensure every guest feels welcomed and valued.
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">Sanoop Nakulan</h4>
                                        <p class="mb-0">Director</p>
                                    </div>
                                    <div>
                                        <img src="img/team-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">Suresh Babu C.V</h4>
                                        <p class="mb-0">Director</p>
                                    </div>
                                    <div>
                                        <img src="img/team-2.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">Reshma Ravi</h4>
                                        <p class="mb-0">Managing Director</p>
                                    </div>
                                    <div>
                                        <img src="img/team-3.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">Vipina Chandran</h4>
                                        <p class="mb-0">CEO</p>
                                    </div>
                                    <div>
                                        <img src="img/team-2.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, quibusdam eveniet itaque provident sequi deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


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
                                <h4>Lilly varghees</h4>
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
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Beena Suresh</h4>
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
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Jemshid Usman</h4>
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
                            <p class="mb-2">“Sun, sand, smiles — that’s KiteBeach life.”...</p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0">Hosdurg beach, Kanhangad</p>
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
                            <!-- <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a> -->
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                            <!-- <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a> -->
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
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>03:PM - 03:00 AM</p>
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
             <div class="col-md-6 text-center text-md-end text-body">
                        /*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
        <!--                        
                    </div> 
                </div>
            </div> -->
        <!-- </div> --?
        Copyright End -->


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