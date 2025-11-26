@extends('index-main')
@section('title')
    <title>Power Secrets - Energy Audit & Electrical Safety Solutions | Mahavir Sys Power</title>
    <meta name="description" content="Professional Energy Audit, Thermography, and Electrical Safety services. Reduce energy costs by up to 30% with our certified experts. 150+ years combined experience.">
@endsection
@section('csscontent')
    <style>
        .image-wrapper {
            position: relative;
            max-width: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-wrapper img {
            max-height: 80%;
            width: auto;
            border-radius: 30px;
        }

        .overlay-card {
            position: absolute;
            padding: 0.75rem 1rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 2;
            width: max-content;
        }

        .top-left {
            background: #0F52A9;
            top: -35px;
            left: 77px;
        }

        .bottom-right {
            background: #ffffff;
            bottom: -70px;
            right: 120px;
        }
    </style>
@endsection
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid bg-light py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row justify-content-start align-items-center py-5">
            <div class="col-lg-6 pb-3">
                <h1 class="display-2 animated slideInDown">Reduce Energy Expenditure & <br><span class="text-primary">Boost
                        Efficiency<br></span><span style="color: #16A249;">with Expert Electrical Audits</span></h1>
                <p class="fw-medium text-dark mb-4 pb-3">Comprehensive Power, Safety, and Cooling Audits for Sustainable
                    Business Operations. Save up to 30% on energy costs with our data-driven audit solutions.</p>
                <div class="row py-3">
                    <div class="col-md-6 pb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="#16A249" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg> <b><span class="text-dark">ISO 50001 Certified Audits</span></b>
                    </div>
                    <div class="col-md-6 pb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="#16A249" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg> <b><span class="text-dark">150+ Years Combined Experience</span></b>
                    </div>
                    <div class="col-md-6 pb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="#16A249" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg> <b><span class="text-dark">500+ Successful Projects</span></b>
                    </div>
                    <div class="col-md-6 pb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-4" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="#16A249" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg> <b><span class="text-dark">Same-Day Report Delivery</span></b>
                    </div>
                    <div class="col-md-6 pb-3 text-center">
                        <a href="" class="btn btn-primary py-2 px-5 animated slideInLeft"><i
                                class="fa fa-download text-white me-1"></i>Get Your Free Audit Guide</a>
                    </div>
                    <div class="col-md-6 pb-3 text-center">
                        <a href="" class="btn btn-outline-primary py-2 px-5 animated slideInLeft">Schedule
                            Consultation <i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
                <hr style="border-color: #000000;">
                <div class="row mb-5">
                    <div class="col-lg-6 mb-3">
                        <span class="text-white p-2 me-3 bg-primary"
                            style="border-radius:50%; font-size: 14px;"><b>&nbsp;✓&nbsp;</b></span><small>Trusted by Fortune
                            500 Companies</small>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <span class="text-white p-2 me-3"
                            style="border-radius:50%; background-color:#16A249; font-size: 14px;"><b>&nbsp;★&nbsp;</b></span><small>4.9/5 Client Satisfaction</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center position-relative">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/img/hero-energy-audit.jpg') }}" class="img-fluid rounded"
                        alt="Power Secrets">

                    <!-- Top Left Card -->
                    <div class="overlay-card top-left text-white text-center">
                        <p><b>ISO 50001</b><br><small>Certified</small></p>
                    </div>

                    <!-- Bottom Right Card -->
                    <div class="overlay-card bottom-right text-center">
                        <h3 style="color: #16A249;">30%</h5>
                            <p style="color: #9B9B9B;">Average Energy Savings</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">500</h1><h1 class="mb-0">&nbsp;+</h1>
                    </div>
                    <h5 class="mb-3">Successful Audits</h5>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-chart-line text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">30</h1><h1 class="mb-0">&nbsp;%</h1>
                    </div>
                    <h5 class="mb-3">Average Energy Savings</h5>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">150</h1><h1 class="mb-0">&nbsp;+</h1>
                    </div>
                    <h5 class="mb-3">Years Combined Experience</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <!-- Service Start -->
    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Our Core Audit Services</h1>
                <h6 style="color: #16A249;">Comprehensive electrical and energy audit solutions designed for industrial, commercial, and data center facilities. Our expert team delivers actionable insights to optimize your energy performance and ensure safety compliance.</h6>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/img/energy-audit.png') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-bolt fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Energy Audit</h4>
                            <p>Comprehensive analysis of energy consumption patterns to identify cost-saving opportunities with detailed ROI calculations.</p>
                            <p><i class="fa fa-check text-success me-2"></i>Load analysis & power quality<br><i class="fa fa-check text-success me-2"></i>Equipment efficiency assessment<br><i class="fa fa-check text-success me-2"></i>Energy conservation measures</p>
                            <a class="small fw-medium" href="{{ Route('audit-services', ['slug'=> 'energy-audit']) }}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/img/thermography-audit.png') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-thermometer-three-quarters fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Thermography Audit</h4>
                            <p>Advanced thermal imaging to detect electrical faults, equipment overheating, and energy losses before they become costly failures.</p>
                            <p><i class="fa fa-check text-success me-2"></i>Electrical system scanning<br><i class="fa fa-check text-success me-2"></i>Hotspot Detection<br><i class="fa fa-check text-success me-2"></i>Predictive maintenance planning<br><i class="fa fa-check text-success me-2"></i>Thermal efficiency analysis</p>
                            <a class="small fw-medium" href="{{ Route('audit-services', ['slug'=> 'thermography-audit']) }}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/img/safety-audit.png') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-user-shield fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Safety Audit</h4>
                            <p>Comprehensive electrical safety assessments ensuring compliance with national standards and workplace safety regulations.</p>
                            <p><i class="fa fa-check text-success me-2"></i>Code compliance verification<br><i class="fa fa-check text-success me-2"></i>Risk assessment & mitigation<br><i class="fa fa-check text-success me-2"></i>Safety procedure development</p>
                            <a class="small fw-medium" href="{{ Route('audit-services', ['slug'=> 'safety-audit']) }}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/img/data-center-audit.png') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-database fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Data Center Audit</h4>
                            <p>Specialized audits for data centers focusing on power usage effectiveness (PUE) optimization and infrastructure efficiency.</p>
                            <p><i class="fa fa-check text-success me-2"></i>PUE calculation & optimization<br><i class="fa fa-check text-success me-2"></i>Cooling system efficiency<br><i class="fa fa-check text-success me-2"></i>Power distribution analysis</p>
                            <a class="small fw-medium" href="{{ Route('audit-services', ['slug'=> 'data-center-audit']) }}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/img/cooling-audit.png') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-snowflake fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Cooling Audit</h4>
                            <p>HVAC and cooling system evaluation to maximize efficiency while maintaining optimal environmental conditions.</p>
                            <p><i class="fa fa-check text-success me-2"></i>HVAC system optimization<br><i class="fa fa-check text-success me-2"></i>Energy conservation opportunities<br><i class="fa fa-check text-success me-2"></i>ECO report with recommendations</p>
                            <a class="small fw-medium" href="{{ Route('audit-services', ['slug'=> 'cooling-audit']) }}">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/img/energy-saver-solutions.png') }}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Energy Saver Solutions</h4>
                            <p>Implementation of energy-saving technologies and solutions for long-term cost reduction.</p>
                            <p><i class="fa fa-check text-success me-2"></i>LED Retrofits<br><i class="fa fa-check text-success me-2"></i>Smart Controls<br><i class="fa fa-check text-success me-2"></i>Power Factor Correction<br><i class="fa fa-check text-success me-2"></i>Renewable Integration</p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Our 3-Step <span class="text-success">Audit Process</span></h1>
                <h6>Simple, efficient, and thorough approach to energy auditing</h6>
            </div>
            <div class="row g-5 text-center">
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="mb-4">
                        <span class="bg-primary rounded-circle text-white p-3 fs-3">
                            &nbsp;<b>1</b>&nbsp;
                        </span>
                    </div>
                    <h5 class="mb-3">Assessment & Planning</h5>
                    <p>Initial consultation and site survey to understand your facility's unique requirements and challenges.</p>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="mb-4">
                        <span class="bg-success rounded-circle text-white p-3 fs-3">
                            &nbsp;<b>2</b>&nbsp;
                        </span>
                    </div>
                    <h5 class="mb-3">Data Collection & Analysis</h5>
                    <p>Comprehensive data gathering using advanced instruments and detailed analysis of energy patterns.</p>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="mb-4">
                        <span class="bg-secondary rounded-circle text-white p-3 fs-3">
                            &nbsp;<b>3</b>&nbsp;
                        </span>
                    </div>
                    <h5 class="mb-3">Report & Recommendations</h5>
                    <p>Detailed report with actionable recommendations and ROI projections for energy optimization.</p>
                </div>
            </div>
        </div>
    </div>

     <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0 py-5">
        <div class="container feature px-lg-0">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">why Choose <span class="text-success">Power Secrets</span></h1>
                <h6>Our proven methodology and experienced team deliver results that make a real difference to your bottom line</h6>
            </div>
            <div class="row g-5 text-center px-5">
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="mb-4">
                        <span class="rounded-circle text-white p-3 fs-3" style="background: #FEE2E2;">
                            <i class="fa fa-heart px-1" style="color: red;"></i>
                        </span>
                    </div>
                    <h5 class="mb-3">Passion</h5>
                    <p>We're passionate about energy efficiency and helping businesses reduce their environmental footprint while saving costs.</p>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="mb-4">
                        <span class="rounded-circle text-white p-3 fs-3" style="background: #DBEAFE;">
                            <i class="fa fa-handshake text-primary px-1"></i>
                        </span>
                    </div>
                    <h5 class="mb-3">Commitment</h5>
                    <p>Our commitment goes beyond the audit report. We support you through implementation and provide ongoing monitoring.</p>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="mb-4">
                        <span class="rounded-circle text-white p-3 fs-3" style="background: #c4fad6;">
                            <i class="fa fa-industry text-success px-1"></i>
                        </span>
                    </div>
                    <h5 class="mb-3">Practical Approach</h5>
                    <p>Our recommendations are practical and achievable, with clear ROI timelines and implementation roadmaps.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Quote Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0" style="background: linear-gradient(to bottom right, #0F52A9, #16A249);">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5">
                        <h1 class="text-white">7 Cost-Saving Insights from Real Energy Audits</h1>
                        <p class="text-white">Download our comprehensive guide featuring real case studies, proven strategies, and actionable insights that have helped businesses save millions in energy costs.</p>
                        <h4 class="text-white"><b>What You'll Learn:</b></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> <small class="text-white">Identify hidden energy waste patterns</small>
                            </div>
                            <div class="col-md-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> <small class="text-white">Calculate potential savings for your facility</small>
                            </div>
                            <div class="col-md-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> <small class="text-white">Understand ROI timelines for energy projects</small>
                            </div>
                            <div class="col-md-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> <small class="text-white">Implement quick-win energy efficiency measures</small>
                            </div>
                            <div class="col-md-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> <small class="text-white">Navigate energy audit compliance requirements</small>
                            </div>
                            <div class="col-md-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-check-big w-5 h-5 text-energy flex-shrink-0">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                    <path d="m9 11 3 3L22 4"></path>
                                </svg> <small class="text-white">Benchmark your facility against industry standards</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5 rounded bg-white">
                        <div class="text-center">
                            <h3 class="text-primary"><i class="fa fa-download bg-primary text-white rounded-circle p-3"></i></h3>
                            <h3 class="mb-4">Get Your Free Guide Now</h3>
                            <p class="mb-4 pb-2">No spam, just valuable energy insights delivered to your inbox.</p>
                        </div>
                        <form action="{{ route('index-form') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="text-dark" for="name">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control border-0" id="name" placeholder="Enter your full name"
                                        style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <label class="text-dark" for="email">Business Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control border-0" placeholder="Enter your email"
                                        style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <label class="text-dark" for="phone">Phone Number <span class="text-danger">*</span></label>
                                    <input type="number" name="phone" id="phone" class="form-control border-0" placeholder="9876543210"
                                        style="height: 55px;" requied>
                                </div>
                                <div class="col-12">
                                    <label class="text-dark" for="company-name">Company Name</label>
                                    <input type="text" name="company" id="company-name" class="form-control border-0" placeholder="Your company name"
                                        style="height: 55px;">
                                </div>
                                
                                <div class="col-12">
                                    <button class="form-control bg-success btn btn-primary rounded-pill py-3 px-5" type="submit"><i class="fa fa-download me-3"></i> Download Free Guide</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

@endsection
@section('jscontent')
    <script>
        $(document).ready(function(){
            $("#home").addClass('active');
        });
    </script>
@endsection
