<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('title')
    <meta name="description"
        content="Professional electrical and energy audits for industrial, commercial & data centers. Expert thermography, safety & cooling audits. Save up to 30% on energy costs. ISO 50001 certified." />
    <meta name="keywords"
        content="energy audit India, electrical thermography service, industrial energy audit, data center audit, cooling audit, safety audit, power quality analysis, UPS energy audit compliance" />
    <meta name="author" content="Power Secrets - Mahavir Sys Power Pvt Ltd" />
    <link rel="canonical" href="https://powersecrets.in" />

    <meta property="og:title" content="Power Secrets - Expert Electrical & Energy Audit Services" />
    <meta property="og:description"
        content="Reduce energy expenditure & boost efficiency with expert electrical audits. Comprehensive power, safety, and cooling audits for sustainable business operations." />
    <meta property="og:type" content="website" />

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('csscontent')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-white p-0 border-bottom">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+91 (0) 123 456 7890 </small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope text-primary me-2"></small>
                    <small>info@powersecrets.in</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Mumbai, India</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small><span class="text-primary"><b>150+ Years</b></span> of Combined Experience</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ Route('index') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary" style="line-height: 0.5;">Power Secrets<br><small
                    style="color: #9B9B9B; font-size: .7rem;">A Division of Mahavir Sys Power Pvt Ltd</small></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ Route('index') }}" class="nav-item nav-link" id="home">Home</a>
                <a href="{{ Route('about') }}" class="nav-item nav-link" id="about">About</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="services">Services</a>
                    <div class="dropdown-menu bg-light m-0">
                        @php
                            $services = \DB::table('services')->get();
                        @endphp
                        @foreach ($services as $service)
                            <a href="{{ Route('audit-services', ['slug' => $service->slug]) }}" class="dropdown-item">{{ $service->name }}</a>
                        @endforeach
                        
                    </div>
                </div>
                <a href="{{ Route('case-studies') }}" class="nav-item nav-link" id="case-studies">Case Studies</a>
                <a href="{{ Route('insights') }}" class="nav-item nav-link" id="insights">Insights</a>
                <a href="{{ Route('contact') }}" class="nav-item nav-link" id="contact">Contact</a>
            </div>
            <a href="" class="btn btn-primary rounded-0 py-4 px-lg-4 d-none d-lg-block">Free Audit<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    @yield('content')
    


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="{{ Route('index') }}" class="navbar-brand d-flex border-end">
                        <h2 class="m-0 text-primary" style="line-height: 0.5;">Power Secrets<br><small
                                style="color: #9B9B9B; font-size: .7rem;">A Division of Mahavir Sys Power Pvt Ltd</small></h2>
                    </a>
                    <br>
                    <small>Leading provider of electrical and energy audit services with 150+ years of combined experience. We help businesses optimize energy consumption and ensure electrical safety compliance.</small>
                    <br><br>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Mumbai, Maharastra, India</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 (0) 123 456 7890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@powersecrets.in</p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">Energy Audit</a>
                    <a class="btn btn-link" href="">Thermography Audit</a>
                    <a class="btn btn-link" href="">Safety Audit</a>
                    <a class="btn btn-link" href="">Data Center Audit</a>
                    <a class="btn btn-link" href="">Cooling Audit</a>
                    <a class="btn btn-link" href="">Energy Saver Solutions</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Stay Updated</h5>
                    <p>Get the latest energy efficiency tips and industry insights delivered to your inbox.</p>
                    <form>
                        <input type="email" name="email" class="form-control mb-2" placeholder="Enter your email">
                        <button class="form-control text-center rounded-pill btn btn-primary"><i class="fa fa-paper-plane me-3"></i>Subscribe</button>
                    </form>
                    <br>
                    <p class="text-white"><b>Follow Us</b></p>
                    <div class="d-flex">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; {{ date('Y') }} <a href="#">Power Secrets</a> - A Division of Mahavir Sys Power Pvt Ltd. All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div>
                            <a href="" class="me-3"><small>Privacy Policy</small></a>
                            <a href="" class="me-3"><small>Terms of Service</small></a>
                            <a href=""><small>Sitemap</small></a>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <small>Made with <i class="fa fa-heart text-danger"></i> by <a href="https://www.intouchsoftware.co.in" target="_blank">InTouch Software Solutions</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('jscontent')
</body>

</html>
