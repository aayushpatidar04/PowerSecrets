@extends('index-main')
@section('title')
    <title>Contact Us - Power Secrets | Free Energy Audit Consultation</title>
    <meta name="description"
        content="Contact Power Secrets for professional energy audit services. Schedule your free consultation and get expert advice on reducing energy costs and improving efficiency.">
@endsection
@section('csscontent')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Get Started Today</h1>
            <p class="text-white">Ready to reduce your energy costs? Contact our expert team for a free consultation and
                discover how we can help optimize your facility's energy performance.</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ Route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
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
                        <h1 class="mb-4">Request Your Free Audit</h1>
                        <p>Fill out the form below and our expert team will contact you within 24 hours to schedule your
                            preliminary energy assessment.</p>
                        <form>
                            <div class="row text-dark">
                                <div class="col-lg-6 mb-2">
                                    <label for="fname">First Name <span class="text-danger">*</span></label>
                                    <input type="text" id="fname" name="fname" class="form-control"
                                        placeholder="Enter your first name">
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <label for="lname">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" id="lname" name="lname" class="form-control"
                                        placeholder="Enter your last name">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Enter your email address">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Enter your phone number">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="company">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" id="company" name="company" class="form-control"
                                        placeholder="Enter your company name">
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="industry">Industry Type <span class="text-danger">*</span></label>
                                    <select name="industry" id="industry" class="form-select">
                                        <option value="" selected disabled>Select your industry</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Healthcare">Healthcare</option>
                                        <option value="Data Center / IT">Data Center / IT</option>
                                        <option value="Commercial Building">Commercial Building</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Education">Education</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="services">Services Interested In <span class="text-danger">*</span></label>
                                    <div class="row g-3">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]"
                                                    value="energy-audit" id="energyAudit">
                                                <label class="form-check-label text-dark" for="energyAudit">
                                                    Energy Audit
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]"
                                                    value="thermography" id="thermography">
                                                <label class="form-check-label text-dark" for="thermography">
                                                    Thermography
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]"
                                                    value="safety-audit" id="safetyAudit">
                                                <label class="form-check-label text-dark" for="safetyAudit">
                                                    Safety Audit
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]"
                                                    value="data-center-audit" id="dataCenterAudit">
                                                <label class="form-check-label text-dark" for="dataCenterAudit">
                                                    Data Center Audit
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]"
                                                    value="cooling-audit" id="coolingAudit">
                                                <label class="form-check-label text-dark" for="coolingAudit">
                                                    Cooling Audit
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="services[]"
                                                    value="consultation" id="consultation">
                                                <label class="form-check-label text-dark" for="consultation">
                                                    General Consultation
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="facilitySize" class="form-label fw-semibold text-dark">
                                        Facility Size (sq ft)
                                    </label>
                                    <select id="facilitySize" name="facilitySize" class="form-select">
                                        <option value="">Select facility size</option>
                                        <option value="under-10000">Under 10,000 sq ft</option>
                                        <option value="10000-50000">10,000 - 50,000 sq ft</option>
                                        <option value="50000-100000">50,000 - 100,000 sq ft</option>
                                        <option value="100000-500000">100,000 - 500,000 sq ft</option>
                                        <option value="over-500000">Over 500,000 sq ft</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="monthlyBill" class="form-label fw-semibold text-dark">
                                        Monthly Energy Bill (₹)
                                    </label>
                                    <select id="monthlyBill" name="monthlyBill" class="form-select">
                                        <option value="">Select range</option>
                                        <option value="under-1-lakh">Under ₹1 Lakh</option>
                                        <option value="1-5-lakh">₹1 - 5 Lakh</option>
                                        <option value="5-10-lakh">₹5 - 10 Lakh</option>
                                        <option value="10-25-lakh">₹10 - 25 Lakh</option>
                                        <option value="over-25-lakh">Over ₹25 Lakh</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <label for="message" class="form-label fw-semibold text-dark">
                                        Additional Information
                                    </label>
                                    <textarea id="message" name="message" rows="4"
                                        placeholder="Tell us about your specific energy challenges or goals..." class="form-control">
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input me-2" type="checkbox" id="consent" name="consent"
                                    required>
                                <label class="form-check-label text-muted small" for="consent">
                                    I agree to receive communications from Power Secrets regarding my inquiry and understand
                                    that I can unsubscribe at any time.
                                </label>
                            </div>

                            <button type="submit"
                                class="btn btn-primary fw-semibold w-100 d-flex align-items-center justify-content-center">
                                <i class="fas fa-paper-plane me-2"></i>
                                Send My Request
                            </button>


                        </form>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-0 wow fadeIn p-5 d-flex align-items-center" data-wow-delay="0.1s">
                    <div>
                        <div class="mb-5">
                            <h2 class="h2 fw-bold text-dark mb-3">Get in Touch</h2>
                            <p class="fs-5 text-muted">
                                Multiple ways to reach our expert team. We're here to help you achieve
                                significant energy savings and operational efficiency.
                            </p>
                        </div>

                        <div class="d-flex flex-column gap-4">
                            <!-- Phone -->
                            <div class="d-flex align-items-start">
                                <div class="bg-light border rounded-circle d-flex align-items-center justify-content-center me-3 mt-2"
                                    style="width:48px; height:48px;">
                                    <i class="fas fa-phone text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="fs-5 fw-bold text-dark mb-1">Phone</h3>
                                    <p class="text-muted mb-2">Speak directly with our energy experts</p>
                                    <a href="tel:+911234567890" class="text-primary fw-semibold text-decoration-none">
                                        +91 (0) 123 456 7890
                                    </a>
                                    <p class="small text-muted mt-1">Mon-Fri 9:00 AM - 6:00 PM IST</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="d-flex align-items-start">
                                <div class="bg-light border rounded-circle d-flex align-items-center justify-content-center me-3 mt-2"
                                    style="width:48px; height:48px;">
                                    <i class="fas fa-envelope text-success"></i>
                                </div>
                                <div>
                                    <h3 class="fs-5 fw-bold text-dark mb-1">Email</h3>
                                    <p class="text-muted mb-2">Send us your detailed requirements</p>
                                    <a href="mailto:info@powersecrets.com"
                                        class="text-success fw-semibold text-decoration-none">
                                        info@powersecrets.com
                                    </a>
                                    <p class="small text-muted mt-1">Response within 4 hours</p>
                                </div>
                            </div>

                            <!-- Address -->
                            <div class="d-flex align-items-start">
                                <div class="bg-light border rounded-circle d-flex align-items-center justify-content-center me-3 mt-2"
                                    style="width:48px; height:48px;">
                                    <i class="fas fa-map-marker-alt text-purple"></i>
                                </div>
                                <div>
                                    <h3 class="fs-5 fw-bold text-dark mb-1">Office</h3>
                                    <p class="text-muted mb-2">Visit our headquarters</p>
                                    <p class="text-dark">
                                        Power Secrets - Mahavir Sys Power Pvt Ltd<br>
                                        123 Industrial Complex<br>
                                        Andheri East, Mumbai 400099<br>
                                        Maharashtra, India
                                    </p>
                                </div>
                            </div>

                            <!-- WhatsApp -->
                            <div class="d-flex align-items-start">
                                <div class="bg-light border rounded-circle d-flex align-items-center justify-content-center me-3 mt-2"
                                    style="width:48px; height:48px;">
                                    <i class="fab fa-whatsapp text-success"></i>
                                </div>
                                <div>
                                    <h3 class="fs-5 fw-bold text-dark mb-1">WhatsApp</h3>
                                    <p class="text-muted mb-2">Quick queries and support</p>
                                    <a href="https://wa.me/911234567890"
                                        class="text-success fw-semibold text-decoration-none">
                                        +91 123 456 7890
                                    </a>
                                    <p class="small text-muted mt-1">Available 24/7</p>
                                </div>
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="mt-5 p-4 bg-light rounded">
                            <h3 class="fs-5 fw-bold text-dark mb-3">Business Hours</h3>
                            <div class="small">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Monday - Friday</span>
                                    <span class="text-dark fw-semibold">9:00 AM - 6:00 PM</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Saturday</span>
                                    <span class="text-dark fw-semibold">9:00 AM - 2:00 PM</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Sunday</span>
                                    <span class="text-dark fw-semibold">Closed</span>
                                </div>
                                <div class="pt-2 border-top">
                                    <p class="text-muted small">
                                        Emergency consultations available outside business hours by appointment
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Visit Our Office</h1>
                <h6 class="text-primary">Located in the heart of Mumbai's industrial district, our office is easily
                    accessible for meetings and consultations.</h6>
            </div>
            <div class="bg-white rounded shadow overflow-hidden">
                <div class="ratio-21x9 ratio">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.123456789!2d72.865!3d19.119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c123456789%3A0xabcdef123456789!2sAndheri%20East%2C%20Mumbai%20400099!5e0!3m2!1sen!2sin!4v1634567890123!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="text-center p-4">
                    <i class="fas fa-map-marked-alt fa-3x text-secondary mb-3"></i>
                    <p class="text-muted fs-5">Interactive Map Integration</p>
                    <p class="text-muted small">
                        Power Secrets Office<br>
                        Andheri East, Mumbai 400099
                    </p>
                </div>
            </div>


        </div>
    </div>

    <div class="container bg-white overflow-hidden px-lg-5 my-3">
        <div class="rounded-3 p-5 text-white text-center"
            style="background: linear-gradient(to right, #22c55e, #2563eb);">
            <div class="mx-auto" style="max-width: 768px;">
                <div class="mb-4">
                    <i class="fas fa-download fa-3x text-white opacity-25"></i>
                </div>
                <h2 class="h1 fw-bold mb-3">Download Our Free Energy Savings Guide</h2>
                <p class="fs-5 text-light mb-4">
                    Get instant access to our comprehensive guide featuring proven strategies,
                    real case studies, and actionable tips to reduce your energy costs by 15-30%.
                </p>

                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center mx-auto"
                    style="max-width: 500px;">
                    <input type="email" placeholder="Enter your email for instant download"
                        class="p-2 border-0 rounded-start mb-2 mb-sm-0 w-100 w-sm-auto">
                    <button class="p-2 px-3 border-0 bg-success text-white rounded-end w-sm-auto mt-2 mt-sm-0"
                        style="width: 200px;">
                        Get Free Guide
                    </button>
                </div>

                <div class="d-flex justify-content-center align-items-center gap-4 small text-light">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle me-2"></i>
                        <span>50+ page guide</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle me-2"></i>
                        <span>Real case studies</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-check-circle me-2"></i>
                        <span>ROI calculator included</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid py-5 bg-light">
        <div class="container px-3">
            <div class="text-center mb-5">
                <h2 class="h1 fw-bold text-dark mb-3">Frequently Asked Questions</h2>
                <p class="fs-5 text-muted mx-auto" style="max-width: 768px;">
                    Get quick answers to common questions about our energy audit services and process
                </p>
            </div>

            <div class="mx-auto" style="max-width: 900px;">
                <div class="accordion" id="faqAccordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1Heading">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                aria-controls="faq1">
                                How long does a typical energy audit take?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1Heading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                A comprehensive energy audit typically takes 2-5 days depending on facility size and
                                complexity.
                                Our preliminary assessment can be completed in 4-8 hours, followed by detailed analysis and
                                report preparation which takes an additional 1-2 weeks.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2Heading">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                aria-controls="faq2">
                                What kind of savings can we expect?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2Heading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Our clients typically see 15-35% reduction in energy costs. Savings vary based on current
                                efficiency levels, facility type, and implemented recommendations. We provide detailed ROI
                                calculations for all proposed measures with realistic payback periods.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3Heading">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                aria-controls="faq3">
                                Do you help with implementation?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3Heading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, we provide comprehensive implementation support including vendor recommendations,
                                project management assistance, and post-implementation monitoring. Our goal is to ensure
                                you achieve the projected savings through proper execution.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4Heading">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                aria-controls="faq4">
                                Is the preliminary audit really free?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4Heading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Absolutely. Our free preliminary audit includes facility walkthrough, basic energy
                                assessment,
                                and identification of major opportunities. This 2-4 hour assessment helps you understand
                                potential savings before committing to a comprehensive audit.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq5Heading">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                aria-controls="faq5">
                                What industries do you serve?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5Heading"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                We serve manufacturing, healthcare, data centers, commercial buildings, hospitality,
                                education, and retail sectors. Our team has specialized expertise in each industry's
                                unique energy challenges and regulatory requirements.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
@section('jscontent')
    <script>
        $(document).ready(function() {
            $("#contact").addClass('active');
        });
    </script>
@endsection
