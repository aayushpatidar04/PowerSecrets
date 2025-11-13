@extends('index-main')
@section('title')
    <title>Case Studies - Power Secrets | Energy Audit Success Stories</title>
    <meta name="description" content="Real energy audit success stories and case studies. See how we've helped clients achieve 15-40% energy cost reductions across various industries.">
@endsection
@section('csscontent')
    <style>
        /* Container for the progress bar */
        .progress-container {
            width: 100%;
            max-width: 400px;
            background-color: #e7e6e6;
            border-radius: 25px;
            overflow: hidden;
            height: 10px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
            padding-left: 0px;
        }

        /* The filled part of the progress bar */
        .progress-bar {
            height: 100%;
            text-align: center;
            line-height: 10px;
            font-weight: bold;
            transition: width 0.4s ease;
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Success Stories</h1>
            <p class="text-white">Real results from real clients. See how our energy audit solutions have helped businesses
                across various industries achieve significant cost savings and efficiency improvements.</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ Route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Case Studies</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container bg-light overflow-hidden my-5 py-5 px-lg-0">
        <div class="container about px-lg-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Our Track Record</span></h1>
                <h6 class="text-primary">Over 500 successful audits across manufacturing, healthcare, IT, and commercial
                    sectors</h6>
            </div>
            <div class="row justify-content-center mx-lg-0">
                <div class="col-lg-3 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-success p-3 fs-3" style="background: #c4fad6;">
                                <b>Rs</b>
                            </span>
                        </div>
                        <h2 class="mb-3">₹50Cr+</h2>
                        <p>Total Energy Costs Saved</p>
                    </div>
                </div>
                <div class="col-lg-3 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-primary p-3 fs-3" style="background: #DBEAFE;">
                                <b>&nbsp;%&nbsp;</b>
                            </span>
                        </div>
                        <h2 class="mb-3">28%</h2>
                        <p>Average Cost Reduction</p>
                    </div>
                </div>
                <div class="col-lg-3 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #FEE2E2;">
                                <i class="fa fa-clock px-1 text-danger"></i>
                            </span>
                        </div>
                        <h2 class="mb-3">14 Months</h2>
                        <p>Average ROI Period</p>
                    </div>
                </div>
                <div class="col-lg-3 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #fbf1da;">
                                <i class="fa fa-leaf px-1 text-warning"></i>
                            </span>
                        </div>
                        <h2 class="mb-3">25,000</h2>
                        <p>Tons CO₂ Reduced</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid bg-white overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0 justify-content-center">

                <div class="col-lg-5 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <p class="text-primary"><span class="rounded-pill p-2 px-5" style="background:#DBEAFE">Manufacturing
                                • Energy Audit</span></p>
                        <h1 class="mb-4">Auto Parts Manufacturing Plant</h1>
                        <h4>The Challenge</h4>
                        <p>A leading auto parts manufacturer was facing escalating energy costs that were impacting their
                            competitiveness. Monthly electricity bills had increased by 35% over two years, with no
                            corresponding increase in production output.</p>
                        <h4>Our Solution</h4>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Comprehensive 3-day energy audit covering
                            all production areas</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Power quality analysis revealing harmonic
                            issues</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Thermographic inspection of electrical
                            panels and motors</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Load optimization and power factor
                            correction recommendations</p>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="card p-3 border-0 text-danger" style="background: #fde4e4">
                                    <h6 class="text-danger">Before Audit</h6>
                                    <h3 class="text-danger">₹18.5 <br> Lakhs/month</h3>
                                    <p>Average electricity cost</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="card p-3 border-0 text-success" style="background: #d8f9e3">
                                    <h6 class="text-success">After Implementation</h6>
                                    <h3 class="text-success">₹12.8 <br> Lakhs/month</h3>
                                    <p>31% cost reduction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 ps-lg-0 wow fadeIn p-5" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/our-solutions.jpeg') }}" class="img-fluid rounded mb-3"
                        alt="Power Secrets">
                    <div class="card p-4"
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 0; border-left: 4px solid #0F52A9;">
                        <h4>Key Improvements Implemented</h4>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <p>Variable Frequency Drives</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary"><b>22% energy savings</b></p>
                            </div>
                            <div class="col-md-6">
                                <p>Power Factor Correction</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-success"><b>₹1.2L/month demand charges saved</b></p>
                            </div>
                            <div class="col-md-6">
                                <p>LED Lighting Upgrade</p>
                            </div>
                            <div class="col-md-6">
                                <p style="color: purple;"><b>18% lighting cost reduction</b></p>
                            </div>
                            <div class="col-md-6">
                                <p>Compressed Air Optimization</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-warning"><b>25% compressor energy saved</b></p>
                            </div>
                        </div>
                        <div class="bg-light text-center rounded p-2 text-dark">
                            <b>ROI Period:</b> 11 months | <b>Annual Savings:</b> ₹68 Lakhs
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0 justify-content-center">

                <div class="col-lg-5 ps-lg-0 wow fadeIn p-5" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/data-center-opt.jpeg') }}" class="img-fluid rounded mb-3"
                        alt="Power Secrets">
                    <div class="card p-4"
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 0; border-left: 4px solid purple;">
                        <h4>Optimization Strategies</h4>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <p class="m-0">Hot/Cold Aisle Containment</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary m-0"><b>30% cooling reduction</b></p>
                            </div>
                            <div class="text-center">
                                <div class="progress-container mb-3 mt-2">
                                    <div class="progress-bar"
                                        style="width: 30%; background: linear-gradient(90deg, #5393e6, #0F52A9);"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="m-0">Variable Speed Fan Control</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-success m-0"><b>18% HVAC savings</b></p>
                            </div>
                            <div class="text-center">
                                <div class="progress-container mb-3 mt-2">
                                    <div class="progress-bar"
                                        style="width: 18%; background: linear-gradient(90deg, #60f998, #16A249);"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="m-0">Free Cooling Implementation</p>
                            </div>
                            <div class="col-md-6">
                                <p style="color: purple;" class="m-0"><b>40% cooling cost reduction</b></p>
                            </div>
                            <div class="text-center">
                                <div class="progress-container mb-3 mt-2">
                                    <div class="progress-bar"
                                        style="width: 40%; background: linear-gradient(90deg, rgb(247, 111, 247), purple);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="m-0">Server Virtualization Optimization</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-warning m-0"><b>15% overall load reduction</b></p>
                            </div>
                            <div class="text-center">
                                <div class="progress-container mb-3 mt-2">
                                    <div class="progress-bar"
                                        style="width: 15%; background: linear-gradient(90deg, rgb(250, 206, 139), #a9800f);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light text-center rounded p-2 text-dark">
                            <b>Annual Savings:</b> ₹2.1 Crores | <b>Implementation Cost:</b> ₹85 Lakhs
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <p><span class="rounded-pill p-2 px-5" style="background:rgb(253, 227, 253); color: purple;">IT
                                Services • Data Center Audit</span></p>
                        <h1 class="mb-4">Enterprise Data Center Optimization</h1>
                        <h4>The Challenge</h4>
                        <p>A Tier 3 data center was operating with a PUE of 2.1, significantly higher than industry
                            benchmarks. Cooling costs represented 45% of total energy consumption, indicating major
                            inefficiencies in the thermal management system.</p>
                        <h4>Comprehensive Assessment</h4>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Detailed PUE calculation and power flow
                            mapping</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Thermal imaging of server rooms and
                            cooling systems</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Airflow analysis and hotspot
                            identification</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>UPS efficiency analysis and load
                            optimization</p>
                        <br><br>
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="card p-3 border-0 text-danger" style="background: #fde4e4">
                                    <h6 class="text-danger">Initial PUE</h6>
                                    <h3 class="text-danger">2.1</h3>
                                    <p>Industry benchmark: 1.4-1.6</p>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="card p-3 border-0 text-success" style="background: #d8f9e3">
                                    <h6 class="text-success">Optimized PUE</h6>
                                    <h3 class="text-success">1.6</h3>
                                    <p>24% efficiency improvement</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid bg-white overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0 justify-content-center">

                <div class="col-lg-5 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <p class="text-success"><span class="rounded-pill p-2 px-5" style="background:#d3fddd">Healthcare
                                • Safety + Energy Audit</span></p>
                        <h1 class="mb-4">Multi-Specialty Hospital Complex</h1>
                        <h4>Critical Requirements</h4>
                        <p>A 500-bed hospital needed to reduce energy costs while maintaining critical systems' reliability.
                            Patient safety and uninterrupted medical equipment operation were paramount, making this a
                            complex optimization challenge.</p>
                        <h4>Specialized Approach</h4>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Medical equipment power quality
                            assessment</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Emergency backup system evaluation</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>HVAC optimization for infection control
                            compliance</p>
                        <p><i class="fa fa-check-circle text-success p-1 me-2"></i>Electrical safety audit for patient
                            areas</p>
                        <br><br>
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="card p-3 border-0 text-success" style="background: #eafff1ff">
                                    <h4 class="text-success">Patient-Safe Improvements</h4>
                                    <div class="row py-4">
                                        <div class="col-md-6 text-center">
                                            <i class="fa fa-user-shield text-success fs-5"></i>
                                            <p><b>Zero Downtime</b><br><small>During implementation</small></p>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <i class="fa fa-heart text-danger fs-5"></i>
                                            <p><b>Critical Systems</b><br><small>100% protected</small></p>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <i class="fa fa-thermometer-three-quarters text-primary fs-5"></i>
                                            <p><b>Climate Control</b><br><small>±1°C precision maintained</small></p>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <i class="fa fa-certificate text-warning fs-5"></i>
                                            <p><b>Compliance</b><br><small>All safety standards met</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 ps-lg-0 wow fadeIn p-5" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/hospital.jpeg') }}" class="img-fluid rounded mb-3"
                        alt="Power Secrets">
                    <div class="card p-4"
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 0; border-left: 4px solid #16A249;">
                        <h4>Results Achieved</h4>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <p>Monthly Energy Cost</p>
                            </div>
                            <div class="col-md-6">
                                <p><del>₹12.5 Lakhs</del><br><b class="text-primary">₹8.7 Lakhs</b></p>
                            </div>
                            <div class="col-md-6">
                                <p>Power Factor</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-success"><b>0.78 → 0.95</b><br><small>Demand charges eliminated</small></p>
                            </div>
                            <div class="col-md-6">
                                <p>HVAC Efficiency</p>
                            </div>
                            <div class="col-md-6">
                                <p style="color: purple;"><b>22% improvement</b><br><small>Without compromising air
                                        quality</small></p>
                            </div>
                            <div class="col-md-6">
                                <p>Lighting Costs</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-warning"><b>35% reduction</b><br><small>LED upgrade + controls</small></p>
                            </div>
                        </div>
                        <div class="bg-light text-center rounded p-2 text-dark">
                            <b>Annual Savings:</b> ₹45 Lakhs | <b>Patient Safety:</b> Maintained 100%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light overflow-hidden my-5 py-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Results Across Industries</span></h1>
                <h6 class="text-primary">Our proven methodologies deliver consistent results across diverse sectors</h6>
            </div>
            <div class="row justify-content-center mx-lg-0">
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white px-3 py-5">
                        <div class="text-center">
                            <div class="mb-4">
                                <i class="fa fa-industry px-1 text-primary" style="font-size: 32px;"></i>
                            </div>
                            <h5 class="mb-3">Manufacturing</h5>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Avg. Savings
                            </div>
                            <div class="col-6 text-success">
                                <b>25-35%</b>
                            </div>
                            <div class="col-6">
                                ROI Period
                            </div>
                            <div class="col-6 text-primary">
                                <b>8-14 months</b>
                            </div>
                            <div class="col-6">
                                Projects
                            </div>
                            <div class="col-6 text-dark">
                                <b>180+</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white py-5 px-3">
                        <div class="text-center">
                            <div class="mb-4">
                                <i class="fa fa-database px-1" style="color:purple; font-size: 32px;"></i>
                            </div>
                            <h5 class="mb-3">Data Centers</h5>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Avg. Savings
                            </div>
                            <div class="col-6 text-success">
                                <b>20-30%</b>
                            </div>
                            <div class="col-6">
                                ROI Period
                            </div>
                            <div class="col-6 text-primary">
                                <b>12-18 months</b>
                            </div>
                            <div class="col-6">
                                Projects
                            </div>
                            <div class="col-6 text-dark">
                                <b>45+</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white px-3 py-5">
                        <div class="text-center">
                            <div class="mb-4">
                                <i class="fa fa-hospital px-1 text-success" style="font-size: 32px;"></i>
                            </div>
                            <h5 class="mb-3">Healthcare</h5>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Avg. Savings
                            </div>
                            <div class="col-6 text-success">
                                <b>18-28%</b>
                            </div>
                            <div class="col-6">
                                ROI Period
                            </div>
                            <div class="col-6 text-primary">
                                <b>10-16 months</b>
                            </div>
                            <div class="col-6">
                                Projects
                            </div>
                            <div class="col-6 text-dark">
                                <b>75+</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white px-3 py-5">
                        <div class="text-center">
                            <div class="mb-4">
                                <i class="fa fa-building px-1 text-warning" style="font-size: 32px;"></i>
                            </div>
                            <h5 class="mb-3">Commercial</h5>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Avg. Savings
                            </div>
                            <div class="col-6 text-success">
                                <b>15-25%</b>
                            </div>
                            <div class="col-6">
                                ROI Period
                            </div>
                            <div class="col-6 text-primary">
                                <b>6-12 months</b>
                            </div>
                            <div class="col-6">
                                Projects
                            </div>
                            <div class="col-6 text-dark">
                                <b>200+</b>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">What Our Clients Say</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="p-4">
                            <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i
                                class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i
                                class="fa fa-star text-warning"></i>
                            <p class="text-dark p-1">
                                <i>"Power Secrets delivered exactly what they promised. 31% cost reduction with zero impact on our production. The team's expertise and professionalism were outstanding."</i>
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/rajesh.jpeg') }}" style="max-width:80px; border-radius: 50%;" alt="Rajesh Gupta">&nbsp;&nbsp;
                                <div>
                                    <h5 class="m-0">Rajesh Gupta</h5>
                                    <span class="text-primary m-0"><small>Plant Manager, AutoTech Industries</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="p-4">
                            <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i
                                class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i
                                class="fa fa-star text-warning"></i>
                            <p class="text-dark p-1">
                                <i>"The data center audit was comprehensive and the results exceeded our expectations. PUE improvement from 2.1 to 1.6 has saved us crores annually."</i>
                            </p>
                            <br>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/anita.jpeg') }}" style="max-width:80px; border-radius: 50%;" alt="Priya Sharma">&nbsp;&nbsp;
                                <div>
                                    <h5 class="m-0">Priya Sharma</h5>
                                    <span class="text-primary m-0"><small>IT Director, TechFlow Solutions</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="p-4">
                            <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i
                                class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i
                                class="fa fa-star text-warning"></i>
                            <p class="text-dark p-1">
                                <i>"Patient safety was never compromised during the energy optimization. 35% savings in lighting costs alone. Highly recommend their healthcare expertise."</i>
                            </p>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/anita.jpeg') }}" style="max-width:80px; border-radius: 50%;" alt="Dr. Anita Patel">&nbsp;&nbsp;
                                <div>
                                    <h5 class="m-0">Dr. Anita Patel</h5>
                                    <span class="text-primary m-0"><small>Administrator, City General Hospital</small></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->


    <div class="container-fluid py-5 bg-primary">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4 text-white">Ready to Join Our Success Stories?</h1>
                <h6 class="text-white">Let us help you achieve similar results. Schedule a free consultation to discuss your specific energy challenges and discover potential savings opportunities.</h6>
                <br>
                <div class="d-flex  justify-content-center gap-3">
                    <a href="" class="btn btn-primary py-3 px-lg-4">Get Your Success Story Started<i
                            class="fa fa-arrow-right ms-3"></i></a>
                    <a href="" class="btn btn-outline-light py-3 px-lg-4">Download Case Studies Portfolio<i
                            class="fa fa-download ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jscontent')
    <script>
        $(document).ready(function() {
            $("#case-studies").addClass('active');
        });
    </script>
@endsection
