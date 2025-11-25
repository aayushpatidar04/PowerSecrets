@extends('index-main')

@section('title')
    <title>Services - Power Secrets | Energy Audit & Electrical Safety Solutions</title>
    <meta name="description" content="Comprehensive energy audit services including thermography, safety audits, data center efficiency, and cooling system optimization. Professional solutions for industrial and commercial clients.">
@endsection
@section('csscontent')
    
@endsection
@section('content')
    {{-- {!! $service->content !!} --}}

    <div class="container-fluid bg-white overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0 justify-content-center">

                <div class="col-lg-5 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="pe-lg-0">
                        <h1><span class="p-3" style="background:#DBEAFE; border-radius: 50%;"><i class="fa fa-chart-pie text-primary p-1"></i></span> Energy Audit</h1>
                        <p class="mb-4 ms-5 ps-4"><i>Industrial, Commercial & Corporate Energy Audit Experts</i></p>
                        <p>PowerSecrets provides PAN India Energy Audit services designed to help industries, commercial buildings, and corporate facilities reduce electricity costs, improve energy efficiency, and identify hidden power losses. Our certified engineers use advanced diagnostic tools and data-driven methods to deliver accurate, actionable insights.</p>
                        <p>If you are looking for the Best Energy Audit in India, PowerSecrets ensures reliable service, nationwide coverage, and measurable savings.</p>
                        <hr>
                        <h2>What is an Energy Audit?</h2>
                        <p>An Energy Audit is a systematic assessment of your facility’s power consumption.</p>
                        <p>It identifies energy wastage, inefficiencies, load imbalance, and opportunities to reduce electricity bills.</p>
                        <p>An Energy Audit analyzes how your facility uses electricity and provides solutions to reduce energy costs.</p>
                        <hr>
                        <h2>Why Energy Audit is Important</h2>
                        <p>Businesses across India benefit from Energy Audits because they help:</p>
                        <ul>
                            <li>Reduce electricity bills (10%-30%)</li>
                            <li>Improve power factor and system efficiency</li>
                            <li>Prevent breakdowns and downtime</li>
                            <li>Enhance electrical safety</li>
                            <li>Optimize energy consumption</li>
                            <li>Extend equipment life</li>
                            <li>Lower overall operating costs</li>
                        </ul>
                        <hr>
                        <h2>Our Energy Audit Process</h2>
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <h6>1. Site Inspection</h6>
                                <p>We assess:</p>
                                <ul>
                                    <li>Distribution boards</li>
                                    <li>Transformers</li>
                                    <li>Cables & switchgear</li>
                                    <li>Motors & machinery</li>
                                    <li>UPS & DG sets</li>
                                    <li>HVAC & lighting systems</li>
                                </ul>
                                
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>2. Power & Load Study</h6>
                                <p>We measure:</p>
                                <ul>
                                    <li>kW, kVA, kVAR</li>
                                    <li>Power factor</li>
                                    <li>Maximum demand</li>
                                    <li>Load imbalance</li>
                                    <li>Voltage fluctuations</li>
                                    <li>Harmonics</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>3. Power Quality Analysis</h6>
                                <p>We identify:</p>
                                <ul>
                                    <li>Harmonic distortion</li>
                                    <li>Voltage dips/sags</li>
                                    <li>Overloading</li>
                                    <li>Transient surges</li>
                                    <li>Reactive power issues</li>
                                </ul>
                                
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>4. Identify Energy Losses</h6>
                                <p>We detect:</p>
                                <ul>
                                    <li>Inefficient motors</li>
                                    <li>Idle running loads</li>
                                    <li>Unbalanced phases</li>
                                    <li>Poor power factor</li>
                                    <li>Inefficient HVAC & lighting</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>5. Energy Saving Recommendations</h6>
                                <p>We provide:</p>
                                <ul>
                                    <li>Power factor correction</li>
                                    <li>Load balancing</li>
                                    <li>Harmonic filtration</li>
                                    <li>Equipment optimization</li>
                                    <li>Energy-efficient upgrades</li>
                                    <li>Operational improvements</li>
                                </ul>
                                
                            </div>
                            <div class="col-lg-6 mb-2">
                                <h6>6. Detailed Audit Report</h6>
                                <p>Your report includes:</p>
                                <ul>
                                    <li>Measurement data</li>
                                    <li>Thermal images</li>
                                    <li>Safety findings</li>
                                    <li>Energy-saving plan</li>
                                    <li>ROI & payback analysis</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 ps-lg-0 wow fadeIn p-5" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/energy-audit-service.png') }}" class="img-fluid rounded mb-3"
                        alt="Power Secrets">
                    <div class="card p-4"
                        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border: 0; border-left: 4px solid #0F52A9;">
                        <h2>Who Needs an Energy Audit?</h2>
                        <ul>
                            <li>Industrial plants</li>
                            <li>Commercial complexes</li>
                            <li>Data centers & IT parks</li>
                            <li>Hospitals & labs</li>
                            <li>Retail stores & malls</li>
                            <li>Hotels & hospitality</li>
                            <li>Schools, colleges & institutions</li>
                            <li>Corporate offices</li>
                            <li>Warehouses & MSMEs</li>
                        </ul>
                        {{-- <div class="row my-3">
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
                        </div> --}}
                        <div class="bg-light text-center rounded p-2 text-dark">
                            <b>Serving PAN India: Mumbai, Delhi, Bengaluru, Chennai, Pune, Hyderabad, Kolkata, Ahmedabad, Jaipur, Noida, Gurgaon, Indore, Surat, and more.</b>
                        </div>
                    </div>
                    <br><br>
                    <div class="pe-lg-0">
                        <h2>Why Choose PowerSecrets?</h2>
                        <p>PowerSecrets is a trusted choice for Energy Audit services across India due to expertise, accuracy, and measurable results.</p>
                        <h6>✔ Certified Energy Audit Experts</h6>
                        <p>Experienced engineers and power quality specialists ensure precise analysis.</p>
                        <h6>✔ Advanced Testing & Diagnostic Tools</h6>
                        <p>We use world-class analysers for reliable data.</p>
                        <h6>✔ PAN India Coverage</h6>
                        <p>Energy Audit services available anywhere in India.</p>
                        <h6>✔ Clear & Actionable Reports</h6>
                        <p>Includes measurements, thermal images, savings roadmap, and ROI.</p>
                        <h6>✔ 10%–30% Energy Savings</h6>
                        <p>Most clients achieve a measurable reduction in electricity bills.</p>
                        <h6>✔ Transparent & Professional</h6>
                        <p>All recommendations are data-backed and practical.</p>
                        <h6>✔ End-to-End Support</h6>
                        <p>We help implement corrective actions like PFC, load balancing, and optimization.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h6>1. Do you provide Energy Audit services across India?</h6>
                            <p>Yes, we offer nationwide Energy Audit services for industrial, commercial, and corporate facilities.</p>
                        </div>
                        <div class="col-lg-6">
                            <h6>2. How much energy can we save after an audit?</h6>
                            <p>Most businesses save 10%-30% after implementing recommendations.</p>
                        </div>
                        <div class="col-lg-6">
                            <h6>3. Will the Energy Audit disrupt operations?</h6>
                            <p>No. The audit is conducted without interrupting your production or daily activities.</p>
                        </div>
                        <div class="col-lg-6">
                            <h6>4. What does an Energy Audit include?</h6>
                            <p>Load study, power quality analysis, thermography, safety assessment, and an ROI-based improvement plan.</p>
                        </div>
                        <div class="col-lg-6">
                            <h6>5. Do you offer Industrial Energy Audits?</h6>
                            <p>Yes — we specialize in Industrial Energy Audits for high-load environments across India.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jscontent')

@endsection