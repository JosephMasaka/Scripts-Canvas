<nav class="navbar navbar-expand-md bg-transparent default top-nav-collapse p-0">
    <div class="container-fluid">
        <a class="navbar-brand bg-transparent mr-0" href="{{ route('home') }}">
             <img style="height: 70px;" src="{{url("logos/logo.webp")}}" alt="logo" />
             {{-- <h6>{{__("ChessHub")}}</h6> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand-heading">{{__("SCRIPTS&CANVAS")}}</h1>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0 font-weight-bold">
                <li class="nav-item px-2">
                    <a class="nav-link px-4 {{ Request::routeIs('home') ? '' : 'active'}}" href="{{ route('home') }}">Home</a>
                </li>
                
                <!------------------ Dropdown ------------------->
                <li class="nav-item dropdown px-2">
                    <a class="nav-link px-4 dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    
                </li>
                <div class="dropdown-menu w-100 p-4 shadow-lg border-0 position-absolute" aria-labelledby="servicesDropdown">
                    <div class="d-flex flex-wrap">
                        <!-- Web Development Category -->
                        <div class="category me-4">
                            <h6 class="fw-bold text-primary">Web Development</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" class="dropdown-item">Custom Website Design</a></li>
                                <li><a href="#" class="dropdown-item">Responsive Web Development</a></li>
                                <li><a href="#" class="dropdown-item">E-commerce Solutions</a></li>
                                <li><a href="#" class="dropdown-item">Content Management Systems (CMS)</a></li>
                                <li><a href="#" class="dropdown-item">Web Application Development</a></li>
                                <li><a href="#" class="dropdown-item">API Development and Integration</a></li>
                                <li><a href="#" class="dropdown-item">SEO Optimization</a></li>
                                <li><a href="#" class="dropdown-item">Website Maintenance and Updates</a></li>
                            </ul>
                        </div>
            
                        <!-- Automation Solutions Category -->
                        <div class="category me-4">
                            <h6 class="fw-bold text-primary">Automation Solutions</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" class="dropdown-item">Process Automation</a></li>
                                <li><a href="#" class="dropdown-item">Workflow Automation</a></li>
                                <li><a href="#" class="dropdown-item">Custom Software Solutions</a></li>
                                <li><a href="#" class="dropdown-item">Data Entry Automation</a></li>
                                <li><a href="#" class="dropdown-item">Chatbot Development</a></li>
                                <li><a href="#" class="dropdown-item">Marketing Automation</a></li>
                                <li><a href="#" class="dropdown-item">Inventory Management Automation</a></li>
                                <li><a href="#" class="dropdown-item">Integration of IoT Devices</a></li>
                            </ul>
                        </div>
            
                        <!-- Business Growth Category -->
                        <div class="category me-4">
                            <h6 class="fw-bold text-primary">Business Growth</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" class="dropdown-item">Digital Marketing Services</a></li>
                                <li><a href="#" class="dropdown-item">Market Research and Analysis</a></li>
                                <li><a href="#" class="dropdown-item">Sales Funnel Optimization</a></li>
                                <li><a href="#" class="dropdown-item">Brand Strategy Development</a></li>
                                <li><a href="#" class="dropdown-item">Customer Relationship Management (CRM)</a></li>
                                <li><a href="#" class="dropdown-item">Data Analytics and Reporting</a></li>
                                <li><a href="#" class="dropdown-item">Employee Training Programs</a></li>
                                <li><a href="#" class="dropdown-item">Strategic Business Consulting</a></li>
                            </ul>
                        </div>
            
                        <!-- Web Hosting Category -->
                        <div class="category">
                            <h6 class="fw-bold text-primary">Web Hosting</h6>
                            <ul class="list-unstyled">
                                <li><a href="#" class="dropdown-item">Shared Hosting</a></li>
                                <li><a href="#" class="dropdown-item">Virtual Private Server (VPS) Hosting</a></li>
                                <li><a href="#" class="dropdown-item">Dedicated Server Hosting</a></li>
                                <li><a href="#" class="dropdown-item">Cloud Hosting</a></li>
                                <li><a href="#" class="dropdown-item">Managed Hosting Services</a></li>
                                <li><a href="#" class="dropdown-item">Domain Registration and Management</a></li>
                                <li><a href="#" class="dropdown-item">SSL Certificate Installation</a></li>
                                <li><a href="#" class="dropdown-item">Backup and Disaster Recovery</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!----------------------------------------------->
                {{-- <li class="nav-item px-2">
                    <a class="nav-link px-4" href="">Services</a>
                </li> --}}
                <li class="nav-item px-2">
                    <a class="nav-link px-4 {{ Request::routeIs('aboutus') ? 'active' : ''}}" href="{{ route('aboutus') }}">About us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link px-4" href="#pricing">Contact</a>
                </li>

                @if(Auth::check())
                    <li class="nav-item px-2"><a class="btn btn-light ms-2 me-1" href="">Dashboard</a></li>
                    <li class="nav-item px-2"><a class="btn btn-light ms-2 me-1" href="">Logout</a></li>
                @else
                    <li class="nav-item px-2"><a class="btn-custom ms-2 me-1 px-5 py-2" href=""
                        ><i class="fas fa-user mr-2"></i> Login</a></li>
                    {{-- @if (App\Models\Utility::getValByName('disable_signup_button') == 'on') --}}
                        {{-- <li class="nav-item">
                            <a class="btn btn-primary ms-2 me-1"
                                href="">{{ __('Register') }}</a>
                        </li> --}}
                    {{-- @endif --}}
                @endif
                
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        let ost = 0;
        document.addEventListener("scroll", function() {
            let cOst = document.documentElement.scrollTop;
            if (cOst == 0) {
                document.querySelector(".navbar").classList.add("top-nav-collapse");
            } else if (cOst > ost) {
                document.querySelector(".navbar").classList.add("top-nav-collapse");
                document.querySelector(".navbar").classList.remove("default");
            } else {
                document.querySelector(".navbar").classList.remove("top-nav-collapse");
                document.querySelector(".navbar").classList.add("default");
            }
            ost = cOst;
        });

        //hover
        document.querySelector('#servicesDropdown').addEventListener('mouseover', function () {
            const dropdownMenu = document.querySelector(".dropdown-menu");
            dropdownMenu.classList.add("Dropdownhover");
            document.querySelector(".navbar").classList.add("navbar-dark");
        });

        document.querySelector('#servicesDropdown').addEventListener('mouseout', function () {
            const dropdownMenu = document.querySelector(".dropdown-menu");
            dropdownMenu.classList.remove("Dropdownhover");
            document.querySelector(".navbar").classList.remove("navbar-dark");
        });

    });
</script>

<style>
    .navbar-brand-heading
    {
        font-family: "Montserrat", serif;
        font-size: 1.4rem;
        font-optical-sizing: auto;
        font-weight: 600;
        font-style: normal;
        color: #fff
    }
    /* Base styles for navbar links */
    .nav-link, .dropdown-item {
        position: relative; /* Required for pseudo-elements */
        text-decoration: none; /* Remove underline */
        transition: color 0.3s ease; /* Smooth color transition */
    }

    .nav-link {
        color: #fff;
    }

    /* Hover effect for navbar links */
    .nav-link:hover {
        color: #fff; /* Change text color on hover */
        background-color: rgb(128, 0, 0);
        border: none;
    }

    /* Optional: Add a background color on hover */


    /* For dropdown menu items */
    .dropdown-menu .dropdown-item {
        transition: background-color 0.3s ease; /* Smooth background transition */
    }

    /* Change background for dropdown items on hover */
    .dropdown-menu .dropdown-item:hover {
        background-color: rgba(255, 255, 255, 0.1); /* Light background for dropdown items */
    }

</style>