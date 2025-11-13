@extends('index-main')
@section('title')
    <title>About Us - Power Secrets | Expert Energy Audit Team</title>
    <meta name="description" content="Meet our experienced team of energy audit professionals. 150+ years combined experience in electrical safety and energy efficiency solutions.">
@endsection
@section('csscontent')
    
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <p class="text-white">The specialized energy audit division of Mahavir Sys Power Pvt Ltd, dedicated to helping businesses achieve maximum energy efficiency and cost savings.</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ Route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid bg-white overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h1 class="mb-4">Our Story</h1>
                        <p>Power Secrets was established as the energy audit and electrical safety division of Mahavir Sys Power Pvt Ltd, recognizing the growing need for specialized expertise in energy efficiency and electrical safety compliance.</p>
                        <p>With over 150 years of combined experience across our team, we have developed a comprehensive approach to energy auditing that goes beyond simple assessments to deliver actionable insights with measurable ROI.</p>
                        <p>Our expertise spans across industries including manufacturing, data centers, commercial buildings, and industrial facilities, with a track record of helping clients achieve average energy savings of 30%.</p>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="card py-5 px-5 border-0 text-center" style="background: #DBEAFE">
                                    <h3 class="text-primary">500+</h3>
                                    <p>Successful Energy Audits Completed</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="card py-5 px-5 border-0 text-center" style="background: #c4fad6">
                                    <h3 class="text-success">₹50Cr+</h3>
                                    <p>Energy Costs Saved for Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-0 wow fadeIn p-5 d-flex align-items-center" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/our-story.jpeg') }}" class="img-fluid rounded"
                        alt="Power Secrets">
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light overflow-hidden my-5 py-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Our Mission</h1>
                <h6 class="text-primary">"To empower businesses with data-driven energy solutions that reduce operational costs, improve efficiency, and contribute to a sustainable future through expert analysis and practical recommendations."</h6>
            </div>
            <div class="row justify-content-center mx-lg-0">
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #DBEAFE;">
                                <i class="fa fa-eye px-1 text-primary"></i>
                            </span>
                        </div>
                        <h5 class="mb-3">Our Vision</h5>
                        <p>To be India's most trusted energy audit consultancy, recognized for delivering exceptional value and sustainable energy solutions.</p>
                    </div>
                </div>
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #c4fad6;">
                                <i class="fa fa-leaf px-1 text-success"></i>
                            </span>
                        </div>
                        <h5 class="mb-3">Our Values</h5>
                        <p>Integrity, innovation, and sustainability guide everything we do. We believe in transparent reporting and ethical business practices.</p>
                    </div>
                </div>
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #FEE2E2;">
                                <i class="fa fa-chart-line px-1 text-danger"></i>
                            </span>
                        </div>
                        <h5 class="mb-3">Our Goal</h5>
                        <p>To help 1000+ businesses reduce their energy footprint by 2030, contributing to both cost savings & environmental preservation.</p>
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Our Expert Team</h1>
                <h6 class="text-primary">Meet the certified professionals who bring decades of experience to every energy audit project</h6>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{ asset('assets/img/team-1.jpg') }}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Rajesh Sharma</h5>
                            <span class="text-primary">Senior Energy Auditor & Team Lead</span>
                            <p>25+ years in electrical engineering with specialization in industrial energy systems. Certified Energy Auditor and thermography expert.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{ asset('assets/img/team-2.jpg') }}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Priya Patel</h5>
                            <span class="text-primary">Data Center Efficiency Specialist</span>
                            <p>15+ years in data center operations and energy optimization. Expert in PUE calculations and cooling system efficiency analysis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{ asset('assets/img/team-3.jpg') }}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Amit Kumar</h5>
                            <span class="text-primary">Electrical Safety Compliance Expert</span>
                            <p>20+ years in electrical safety and compliance. Specialized in industrial safety audits and risk assessment methodologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Why Choose Power Secrets?</h1>
                <h6 class="text-primary">Our unique combination of technical expertise, practical approach, and commitment to results sets us apart</h6>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="mb-4 d-flex align-items-center">
                        <span class="rounded-circle text-white p-3 fs-3 me-3" style="background: #FEE2E2;">
                            <i class="fa fa-heart px-1" style="color: red;"></i>  
                        </span>
                        <div>
                            <h5 class="mb-3">Passion for Excellence</h5>
                            <p>We're genuinely passionate about energy efficiency and helping our clients succeed. Every project receives our full attention and expertise, regardless of size.</p>
                        </div>
                    </div>
                    <div class="mb-4 d-flex align-items-center">
                        <span class="rounded-circle text-white p-3 fs-3 me-3" style="background: #DBEAFE;">
                            <i class="fa fa-handshake px-1 text-primary"></i>  
                        </span>
                        <div>
                            <h5 class="mb-3">Long-term Commitment</h5>
                            <p>Our relationship doesn't end with the audit report. We provide ongoing support, monitoring, and guidance throughout the implementation process.</p>
                        </div>
                    </div>
                    <div class="mb-4 d-flex align-items-center">
                        <span class="rounded-circle text-white p-3 fs-3 me-3" style="background: #c4fad6;">
                            <i class="fa fa-industry px-1 text-success"></i>  
                        </span>
                        <div>
                            <h5 class="mb-3">Practical Solutions</h5>
                            <p>All our recommendations are practical, cost-effective, and backed by detailed ROI calculations. We focus on solutions that deliver real, measurable results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('assets/img/why-power-secrets.jpeg') }}" class="img-fluid rounded"
                        alt="Power Secrets">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-primary">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4 text-white">Ready to Work with India's Energy Audit Experts?</h1>
                <h6 class="text-white">Let our experienced team help you identify significant energy savings opportunities. Start with a free preliminary assessment.</h6>
                <br>
                <a href="" class="btn btn-primary py-3 px-lg-4">Schedule Your Free Consultation<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>


@endsection
@section('jscontent')
    <script>
        $(document).ready(function(){
            $("#about").addClass('active');
        });
    </script>
@endsection