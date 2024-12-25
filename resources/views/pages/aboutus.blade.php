<!DOCTYPE html>
<html lang="en" dir="{{ env('SITE_RTL') == 'on' ? 'rtl' : '' }}">
<head>
    <title>{{ config('app.name', 'Scripts&Canvas') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Scripts&Canvas, Software Engineering." />
    <meta name="keywords" content="software engineering, web development" />
    <meta name="author" content="Scripts&Canvas" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="{{ url('logos/scripts&canvas.png') }}" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
    {{-- integrity="sha384-cn7l7gDp0eyK7H49j9l0bEUoxMfzLkBXI2RA7nU9EIvzEfGh9j4bBeKKnFhbfvlA" --}}
    crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400..700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        .hero-section
        {
            background: url(./images/hero_bg_sec.jpg) no-repeat center center / cover;
        }

        .hero-section .overlay {
            background: rgba(0, 0, 0, 0.5);
        }
        
    </style>
</head>

<body>
    <header>
        @include('partials.nav')
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="overlay">
                
            </div>
            <div class="container text-start text-white hero-content py-5">
                <h1 class="display-4 fw-bold mb-3">
                    <span class="text-highlight">Welcome to</span><br>{{__("< Scripts&Canvas / >")}}
                </h1>
                <p class="lead mb-4">Engineering innovative solutions for a modern world.</p>
                {{-- <p class="fw-semibold"><i class="bi bi-geo-alt-fill"></i> 237 Green Street, City</p> --}}
                <div class="cta-buttons mt-4 d-flex gap-3">
                    <a href="#" class="btn-custom btn-lg px-5">See More</a>
                    {{-- <a href="#about" class="btn btn-outline-light btn-lg px-5">Learn More</a> --}}
                </div>
            </div>
        </section>

        <!-- Mission Section -->
        <section>
            <div class="container d-flex justify-content-center">
                <div class="col-md-6 py-2 col-sm-12 pe-5">
                    <h3 class="section-title my-3 fw-bold">Shaping Tomorrow, Together</h3>
                    <p class=" lh-base text-justify">
                        We stand at the crossroads of innovation and possibility, where every line of code and every breakthrough solution can redefine the way we live, work, and connect.  
                        At Scripts&Canvas, we believe in harnessing the power of technology to inspire progress and create opportunities that benefit all.  
                        Our purpose is not just to build software but to craft experiences that empower businesses, elevate communities, and shape a future where everyone thrives.  
                        Together, we can turn today’s challenges into tomorrow’s possibilities.
                    </p>
                </div>
                
                <div class="col-md-6 mx-3">
                    <img src="{{ asset('images/aboutus.jpg') }}" alt="About Us" class="img-fluid " height="300" >
                </div>
            </div>
        </section>

        <!---------------------Vision Section--------------------------->
        <section>
            <div class="container mt-4">
                <div class="row bg-light py-5">
                    <div class="col-12 col-md-8">
                        <h2 class="fw-bold">
                            Empowering Businesses to Shape Tomorrow
                        </h2>
                        <p class="text-secondary">
                            At the core of our mission lies a vision to inspire positive change, innovate, and redefine possibilities for a brighter future.
                        </p>
                        <a href="https://www.microsoft.com/en-us/corporate-responsibility" class="btn btn-primary" target="_blank">
                            Learn About Our Vision
                        </a>
                    </div>
                </div>
            
                <div class="row my-5">
                    <!-- Card 1 -->
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow">
                            <img src="https://via.placeholder.com/380x213" class="card-img-top" alt="Expand Opportunities Image">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Expand Opportunities</h5>
                                <p class="card-text">
                                    Driving innovation to bridge gaps and open new avenues for success across communities.
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
            
                    <!-- Card 2 -->
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow">
                            <img src="https://via.placeholder.com/380x213" class="card-img-top" alt="Build Trust Image">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Build Trust</h5>
                                <p class="card-text">
                                    Creating strong relationships by upholding values of transparency and integrity.
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
            
                    <!-- Card 3 -->
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow">
                            <img src="https://via.placeholder.com/380x213" class="card-img-top" alt="Foster Inclusion Image">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Foster Inclusion</h5>
                                <p class="card-text">
                                    Embracing diversity and creating spaces where every voice is valued and heard.
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
            
                    <!-- Card 4 -->
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <div class="card h-100 shadow">
                            <img src="https://via.placeholder.com/380x213" class="card-img-top" alt="Drive Sustainability Image">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Drive Sustainability</h5>
                                <p class="card-text">
                                    Pioneering eco-friendly initiatives to ensure a greener, healthier planet for future generations.
                                </p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <!-- Overview Section -->
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="section-title fw-bold mt-3">Who We Are</h2>
                        <p class="lh-lg">
                            Scripts&Canvas is a team of passionate developers, designers, and innovators 
                            committed to creating impactful software. Our journey began with a vision to redefine 
                            technology solutions for businesses, and today, we stand as a trusted partner to companies.
                        </p>
                    </div>
                    <div class="col-md-6 px-3">
                        <img src="{{ asset('images/aboutus.jpg') }}" alt="About Us" class="img-fluid " >
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team Section -->
        <section class="content-section">
            <div class="container">
                <h2 class="section-title fw-bold mt-3">Our Team</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/380x213" class="card-img-top" alt="Team Member 1">
                            <div class="card-body">
                                <h5 class="card-title">John Doe</h5>
                                <p class="card-text">Founder & CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/380x213" class="card-img-top" alt="Team Member 2">
                            <div class="card-body">
                                <h5 class="card-title">Jane Smith</h5>
                                <p class="card-text">Lead Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="https://via.placeholder.com/380x213" class="card-img-top" alt="Team Member 3">
                            <div class="card-body">
                                <h5 class="card-title">Mike Johnson</h5>
                                <p class="card-text">Creative Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Footer -->
        @include('partials.footer')
    </main>
</body>
</html>
