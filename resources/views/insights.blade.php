@extends('index-main')
@section('title')
    <title>Insights - Power Secrets | Energy Efficiency Blog & Resources</title>
    <meta name="description"
        content="Expert insights on energy efficiency, thermal imaging, electrical safety, and sustainability. Educational resources from India's leading energy audit professionals.">
@endsection
@section('csscontent')
    <style>
        #articles .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        #articles .card {
            height: 100%;
        }
    </style>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Energy Insights & Resources</h1>
            <p class="text-white">Expert knowledge and industry insights to help you understand energy efficiency, electrical
                safety, and sustainable practices for your facility.</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ Route('index') }}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Insights</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid bg-white overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Latest Articles</h1>
                <h6 class="text-primary">Stay informed with the latest trends, technologies, and best practices in energy
                    management</h6>
            </div>
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-8 about-text pb-5 ps-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 m-5">
                        <img src="{{ asset($featuredBlog->image) }}" class="rounded" alt="">
                        <div class="p-3 mt-3">
                            <div class="d-flex gap-5">
                                <p class="py-2 px-3 rounded-pill text-primary" style="background: #DBEAFE;">
                                    <b>{{ $featuredBlog->category }}</b>
                                </p>
                                <p class="py-2">{{ \Carbon\Carbon::parse($featuredBlog->created_at)->format('F d, Y') }}
                                </p>
                            </div>
                            <h3>{{ $featuredBlog->title }}</h3>
                            <p>{{ $featuredBlog->short_description }}</p>
                            <div>
                                <a href="" class="text-primary float-end">Read More &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeIn pe-5 py-5" data-wow-delay="0.1s">
                    @foreach ($latestBlogs as $blog)
                        <div class="card border-0 p-4 mb-3">
                            <div class="d-flex gap-3">
                                <p class="py-2 px-3 rounded" style="background: rgb(249, 224, 249); color: purple;">
                                    <b>{{ $blog->category }}</b>
                                </p>
                                <p class="py-2">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</p>
                            </div>
                            <h4>{{ $blog->title }}</h4>
                            <p>{{ $blog->short_description }}</p>
                            <div>
                                <a href="" style="color: purple;"><b>Read Article &rarr;</b></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-light overflow-hidden my-5 py-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Explore by Category</span></h1>
                <h6 class="text-primary">Find expert content tailored to your specific industry and interests</h6>
            </div>
            <div class="row justify-content-center mx-lg-5 px-5">
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #DBEAFE;">
                                <i class="fa fa-chart-pie px-1 text-primary"></i>
                            </span>
                        </div>
                        <h5 class="mb-3">Energy Auditing</h5>
                        <p>Methodologies, tools, and best practices for comprehensive energy assessments</p>
                        <p>12 Articles</p>
                        <div>
                            <a href="" class="text-primary">Browse Articles &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #FEE2E2;">
                                &nbsp;<i class="fa fa-thermometer-three-quarters px-1 text-danger"></i>&nbsp;
                            </span>
                        </div>
                        <h5 class="mb-3">Thermography</h5>
                        <p>Thermal imaging techniques, equipment reviews, and case studies</p>
                        <p>8 Articles</p>
                        <div>
                            <a href="" class="text-danger">Browse Articles &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: rgb(253, 244, 226);">
                                <i class="fa fa-user-shield px-1 text-warning"></i>
                            </span>
                        </div>
                        <h5 class="mb-3">Electrical Safety</h5>
                        <p>Safety protocols, compliance guidelines, and risk assessment strategies</p>
                        <p>10 Articles</p>
                        <div>
                            <a href="" class="text-warning">Browse Articles &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #c4fad6;">
                                <i class="fa fa-leaf px-1 text-success"></i>
                            </span>
                        </div>
                        <h5 class="mb-3">Sustainability</h5>
                        <p>Green energy solutions, carbon footprint reduction, and ESG compliance</p>
                        <p>6 Articles</p>
                        <div>
                            <a href="" class="text-success">Browse Articles &rarr;</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="container bg-white overflow-hidden m-5 px-lg-5">
        <div class="container about px-lg-0">
            <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1>Recent Articles</h1>
            </div>
            <div id="articles" class="row g-0 mx-lg-0 justify-content-center">
                @foreach ($remainingBlogs as $blog)
                    <div class="col-lg-4 p-3 about-text wow fadeIn" data-wow-delay="0.5s">
                        <div class="card border-0">
                            <img src="{{ asset($blog->image) }}" class="rounded" alt="">
                            <div class="p-3 mt-3">
                                <div class="d-flex gap-3 mb-2">
                                    <small class="rounded text-primary p-1 px-3" style="background: #DBEAFE;"><b>{{ $blog->category }}</b></small>
                                    <small class="p-1">{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</small>
                                </div>
                                <h5>{{ $blog->title }}</h5>
                                <p>{{ $blog->short_description }}</p>
                                <div>
                                    <a href="" class="text-primary float-end">Read More &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="text-center mt-4">
                <a href="" class="btn btn-primary py-3 px-5"><b>Load More Articles &rarr;</b></a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-primary">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4 text-white">Stay Updated with Energy Insights</h1>
                <h6 class="text-white">Get the latest articles, case studies, and industry insights delivered directly to
                    your inbox. Join 2,500+ energy professionals who trust our expertise.</h6>
                <br>
                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center mx-auto"
                    style="max-width: 500px;">
                    <input type="email" placeholder="Enter your email address"
                        class="p-2 border-0 rounded-start mb-2 mb-sm-0 w-100 w-sm-auto">
                    <button class="p-2 px-3 border-0 bg-success text-white rounded-end w-sm-auto mt-2 mt-sm-0">
                        Subscribe
                    </button>
                </div>
                <div class="text-center p-2">
                    <small class="text-white">Weekly insights • No spam • Unsubscribe anytime</small>
                </div>

            </div>
        </div>
    </div>

    <div class="container bg-light overflow-hidden my-5 py-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-4">Free Resources & Guides</span></h1>
                <h6 class="text-primary">Download our comprehensive guides and checklists to enhance your energy management
                    knowledge</h6>
            </div>
            <div class="row justify-content-center mx-lg-5 px-5">
                <div id="articles" class="col-lg-4 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #DBEAFE;">
                                <i class="fa fa-download px-1 text-primary"></i>
                            </span>
                        </div>
                        <h5 class="mb-3">Energy Audit Checklist</h5>
                        <p>Comprehensive 50-point checklist for conducting preliminary energy assessments in industrial
                            facilities.</p>

                        <div>
                            <a href="" class="btn bg-primary text-white"><b>Download PDF</b></a>
                        </div>
                    </div>
                </div>
                <div id="articles" class="col-lg-4 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: #FEE2E2;">
                                &nbsp;<i class="fa fa-book px-1 text-danger"></i>&nbsp;
                            </span>
                        </div>
                        <h5 class="mb-3">Thermography Guide</h5>
                        <p>Complete guide to thermal imaging applications, equipment selection, and image interpretation
                            techniques.</p>
                        <div>
                            <a href="" class="btn btn-danger">Download Guide</a>
                        </div>
                    </div>
                </div>
                <div id="articles" class="col-lg-4 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="card border-0 bg-white p-5 text-center">
                        <div class="mb-4">
                            <span class="rounded-circle text-white p-3 fs-3" style="background: rgb(253, 244, 226);">
                                <i class="fa fa-calculator px-1 text-warning"></i>
                            </span>
                        </div>
                        <h5 class="mb-3">ROI Calculator</h5>
                        <p>Interactive Excel calculator for evaluating energy efficiency project returns and payback
                            periods.</p>
                        <div>
                            <a href="" class="btn btn-warning text-white">Download Tool</a>
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
            $("#insights").addClass('active');
        });
    </script>
@endsection
