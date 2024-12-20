<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/insure/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2024 22:42:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <title>Insure - Insurance HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/img/favicon.html') }}" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;family=Poppins:wght@600;700&amp;display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}"
        rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/lib/animate/animate.min.css') }}"
        rel="stylesheet" />
    <link
        href="{{ asset('templates/template2/themewagon.github.io/insure/lib/owlcarousel/assets/owl.carousel.min.css') }}"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/css/bootstrap.min.css') }}"
        rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('templates/template2/themewagon.github.io/insure/css/style.css') }}" rel="stylesheet" />
</head>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@example.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-white-50 ms-4" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index-2.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img class="img-fluid me-3"
                    src="{{ asset('templates/template2/themewagon.github.io/insure/img/icon/icon-02-primary.png') }}"
                    alt="" />Insure
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                <a href="index-2.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="service.html" class="nav-item nav-link">Our Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light border-0 m-0">
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
        <a href="{{ route('login') }}" class="btn btn-primary px-3 d-none d-lg-block">Se connecter</a>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100"
                        src="{{ asset('templates/template2/themewagon.github.io/insure/img/carousel-1.jpg') }}"
                        alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown" style="color: #800000;">
                                        CLIENT AU CENTRE DE TOUT
                                    </h1>

                                    <p class="fs-5 text-body mb-5">
                                        Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                        duo justo magna dolore erat amet
                                    </p>
                                    <a href="#" class="btn btn-primary py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100"
                        src="{{ asset('templates/template2/themewagon.github.io/insure/img/carousel-2.jpg') }}"
                        alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown">
                                        The Best Insurance Begins Here
                                    </h1>
                                    <p class="fs-5 text-body mb-5">
                                        Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                        duo justo magna dolore erat amet
                                    </p>
                                    <a href="#" class="btn btn-primary py-3 px-5">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">
                    We Provide professional Insurance Services
                </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-10-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Life Insurance</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>
                        <a class="btn btn-light px-3" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-01-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Health Insurance</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>
                        <a class="btn btn-light px-3" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-05-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Home Insurance</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>
                        <a class="btn btn-light px-3" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-08-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Vehicle Insurance</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>
                        <a class="btn btn-light px-3" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-07-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Business Insurance</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>
                        <a class="btn btn-light px-3" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="img/icon/icon-06-light.png" alt="" />
                            </div>
                            <h4 class="mb-0">Property Insurance</h4>
                        </div>
                        <p class="mb-4">
                            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                            sit clita duo justo erat amet
                        </p>
                        <a class="btn btn-light px-3" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">
                        We're Award Winning Insurance Company
                    </h1>
                    <p class="text-white mb-5">
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                        stet lorem sit clita duo justo magna dolore erat amet. Tempor erat
                        elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                        diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                        clita duo justo magna.
                    </p>
                    <div class="bg-white rounded p-3">
                        <div class="d-flex align-items-center bg-primary rounded p-3">
                            <img class="flex-shrink-0 rounded-circle me-3" src="img/profile.jpg" alt="" />
                            <h5 class="text-white mb-0">Call Us: +012 345 6789</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname"
                                            placeholder="Gurdian Name" />
                                        <label for="gname">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail"
                                            placeholder="Gurdian Email" />
                                        <label for="gmail">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cname"
                                            placeholder="Child Name" />
                                        <label for="cname">Your Mobile</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cage"
                                            placeholder="Child Age" />
                                        <label for="cage">Service Type</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">
                                        Get Appointment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="text-white mb-4">
                        <img class="img-fluid me-3" src="img/icon/icon-02-light.png" alt="" />Insure
                    </h1>
                    <p>
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p>
                        <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="#">About Us</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <a class="btn btn-link" href="#">Our Services</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                    <a class="btn btn-link" href="#">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email" />
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://htmlcodex.com/">HTML Codex</a>
                        <br />Distributed By:
                        <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('templates/template2/code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script
        src="{{ asset('templates/template2/ccdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/owlcarousel/owl.carousel.min.js') }}">
    </script>
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('templates/template2/themewagon.github.io/insure/js/main.js') }}"></script>
</body>

<!-- Mirrored from themewagon.github.io/insure/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2024 22:42:05 GMT -->

</html>
