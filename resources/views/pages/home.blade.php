<!DOCTYPE html>
<html lang="en" dir="{{ env('SITE_RTL') == 'on' ? 'rtl' : '' }}">
<head>
    <title>
        {{  config('app.name', 'Scripts&Canvas') }}
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Scripts&Canvas, Software Engineering." />
    <meta name="keywords" content="software engineering, web development, " />
    <meta name="author" content="scripts&canvas" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="{{ url("logos/scripts&canvas.png") }}" type="image/x-icon" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
        {{-- integrity="sha384-cn7l7gDp0eyK7H49j9l0bEUoxMfzLkBXI2RA7nU9EIvzEfGh9j4bBeKKnFhbfvlA" --}}
        crossorigin="anonymous"></script>



    {{-- @if (env('SITE_RTL') == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}" id="main-style-link">
    @else
        @if (isset($mode_setting['dark_mode']) && $mode_setting['dark_mode'] == 'on')
            <link rel="stylesheet" href="{{ asset('assets/css/style-dark.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
        @endif
    @endif --}}
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400..700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <header>

        @include('partials.nav')
        
    </header>

    <section class="hero-section">
        <div class="overlay">
            
        </div>
        <div class="container text-start text-white hero-content py-5">
            <h1 class="display-4 fw-bold mb-3">
                Transforming <span class="text-highlight">Vision</span><br>Into Reality
            </h1>
            <p class="lead mb-4">Transforming ideas into innovative solutions, automating processes, <br>and scaling businesses for sustainable success.</p>
            {{-- <p class="fw-semibold"><i class="bi bi-geo-alt-fill"></i> 237 Green Street, City</p> --}}
            <div class="cta-buttons mt-4 d-flex gap-3">
                <a href="#" class="btn-custom btn-lg px-5">Get Started</a>
                {{-- <a href="#about" class="btn btn-outline-light btn-lg px-5">Learn More</a> --}}
            </div>
        </div>
    </section>

    <section class="services-section py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-2">What We Offer</h2>
            <p class="fw-bold mb-5">Our Services</p>
            <div class="row g-4">
                <div class="col-md-3 col-sm-12">
                    <div class="service-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-laptop-code custom-icons mb-5"></i>
                        <h4>Web Development</h4>
                        <p>We build responsive, fast, and secure websites tailored to your needs.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="service-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-cogs custom-icons mb-5"></i>
                        <h4>Automation Solutions</h4>
                        <p>Streamline your processes with custom automation tools and workflows.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="service-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-chart-line mb-5 custom-icons"></i>
                        <h4>Business Growth</h4>
                        <p>Leverage our expertise to scale and expand your business efficiently.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-server mb-4 custom-icons mb-5"></i>
                        <h4>Web Hosting</h4>
                        <p>Reliable and secure hosting solutions to keep your website online and running smoothly.</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <section class="packages-section py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-4 mt-4">Our Packages</h2>
            <p class="text-white mb-5">Choose a package that fits your needs and budget. Designed to help you grow effortlessly.</p>
            <div class="row g-4">
                <!-- Basic Package -->
                <div class="col-md-4">
                    <div class="package-card p-4 shadow-sm bg-white rounded">
                        <h3 class="fw-bold text-primary-custom mb-3">Basic</h3>
                        <p class="text-muted">Perfect for individuals or small startups.</p>
                        <h4 class="fw-bold mb-3 text-dark">$49/month</h4>
                        <ul class="list-unstyled text-start mb-4 text-dark">
                            <li><i class="fas fa-check text-success me-2"></i> 1 Website</li>
                            <li><i class="fas fa-check text-success me-2"></i> 5GB Storage</li>
                            <li><i class="fas fa-check text-success me-2"></i> Basic Support</li>
                        </ul>
                        <a href="#" class="btn-custom-package btn-lg py-2 px-4">Get Started</a>
                    </div>
                </div>
                <!-- Standard Package -->
                <div class="col-md-4">
                    <div class="package-card p-4 shadow-sm bg-white rounded">
                        <h3 class="fw-bold text-primary-custom mb-3">Standard</h3>
                        <p class="text-muted">Ideal for growing businesses and teams.</p>
                        <h4 class="fw-bold mb-3 text-dark">$99/month</h4>
                        <ul class="list-unstyled text-start mb-4 text-dark">
                            <li><i class="fas fa-check text-success me-2"></i> 5 Websites</li>
                            <li><i class="fas fa-check text-success me-2"></i> 50GB Storage</li>
                            <li><i class="fas fa-check text-success me-2"></i> Priority Support</li>
                            <li><i class="fas fa-check text-success me-2"></i> Free Domain</li>
                        </ul>
                        <a href="#" class="btn-custom-package btn-lg py-2 px-4">Get Started</a>
                    </div>
                </div>
                <!-- Premium Package -->
                <div class="col-md-4">
                    <div class="package-card p-4 shadow-sm bg-white rounded">
                        <h3 class="fw-bold text-primary-custom mb-3">Premium</h3>
                        <p class="text-muted">Best for established businesses and enterprises.</p>
                        <h4 class="fw-bold mb-3 text-dark">$199/month</h4>
                        <ul class="list-unstyled text-start mb-4 text-dark">
                            <li><i class="fas fa-check text-success me-2"></i> Unlimited Websites</li>
                            <li><i class="fas fa-check text-success me-2"></i> Unlimited Storage</li>
                            <li><i class="fas fa-check text-success me-2"></i> Dedicated Support</li>
                            <li><i class="fas fa-check text-success me-2"></i> Advanced Analytics</li>
                        </ul>
                        <a href="#" class=" btn-custom-package btn-lg py-2 px-4">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="why-choose-us-section py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Why Choose Us</h2>
            <p class="text-muted mb-5">Discover the benefits of working with our expert team and innovative solutions.</p>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-user-shield fs-1  custom-icons mb-3"></i>
                        <h4>Reliable Support</h4>
                        <p>Our team is available 24/7 to address your concerns and provide assistance.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-trophy fs-1  custom-icons mb-3"></i>
                        <h4>Proven Expertise</h4>
                        <p>Years of experience delivering top-notch solutions for various industries.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-rocket fs-1  custom-icons mb-3"></i>
                        <h4>Innovative Solutions</h4>
                        <p>We bring creative and modern ideas to help your business stand out.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-4">
                <!-- Feature 4 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-handshake fs-1  custom-icons mb-3"></i>
                        <h4>Client-Centric Approach</h4>
                        <p>We prioritize your goals and work collaboratively to achieve success.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-chart-pie fs-1  custom-icons mb-3"></i>
                        <h4>Data-Driven Results</h4>
                        <p>Our strategies are backed by analytics to maximize efficiency and ROI.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="fas fa-thumbs-up fs-1  custom-icons mb-3"></i>
                        <h4>Customer Satisfaction</h4>
                        <p>We go the extra mile to ensure our clients are happy with the outcomes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact-details-section py-5 bg-light">
        <div class="overlay"></div>
        <div class="container">
            
            <h2 class="fw-bold text-center mb-4 text-white">Get In Touch</h2>
            <p class="text-center mb-5 text-white">We’d love to hear from you. Reach out to us through any of the methods below.</p>
            <div class="row g-5">
                <!-- Contact Details -->
                <div class="col-md-6">
                    <div class="row g-4">
                        <!-- Location -->
                        <div class="col-12">
                            <div class="contact-card p-4 shadow-sm bg-white rounded text-center">
                                <i class="fas fa-map-marker-alt fs-1  custom-icons mb-3"></i>
                                <h5>Our Location</h5>
                                <p>123 Business Avenue, Suite 101<br>Cityville, Country</p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="col-12">
                            <div class="contact-card p-4 shadow-sm bg-white rounded text-center">
                                <i class="fas fa-phone-alt fs-1 custom-icons mb-3"></i>
                                <h5>Call Us</h5>
                                <p>+1 234 567 890<br>+1 987 654 321</p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-12">
                            <div class="contact-card p-4 shadow-sm bg-white rounded text-center">
                                <i class="fas fa-envelope fs-1 custom-icons mb-3"></i>
                                <h5>Email Us</h5>
                                <p>support@example.com<br>info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-md-6">
                    <div class="contact-form text-white">
                        <h3 class="fw-bold mb-4">Send Us a Message</h3>
                        <form class="text-start">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" id="subject" class="form-control" placeholder="Enter your subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" class="form-control" rows="5" placeholder="Write your message here" required></textarea>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-custom px-4 py-2">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    @include('partials.footer')
    <style>
        
    </style>

</body>
</html>