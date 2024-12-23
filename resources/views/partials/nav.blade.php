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
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dash-item dash-hasmenu dropdown px-2">
                    <a href="#" class="dash-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class=""><i class=""></i></span>
                        <span class="dash-mtext">{{ __('Events') }}</span>
                        <span class="dash-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="dropdown-menu dash-submenu">
                        <li class="nav-item px-2">
                            <a class="dash-link dropdown-item" href="">
                                {{ __('Upcoming Events') }}
                            </a>                            
                        </li>
                        <li class="nav-item px-2">
                            <a class="dash-link dropdown-item" href="">
                                {{ __('Past Events') }}
                            </a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="dash-link dropdown-item" href="">
                                {{ __('Ongoing Events') }}
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item px-2">
                    <a class="nav-link" href="">Merchandise</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="">About us</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#pricing">Contact</a>
                </li>

                @if(Auth::check())
                    <li class="nav-item px-2"><a class="btn btn-light ms-2 me-1" href="">Dashboard</a></li>
                    <li class="nav-item px-2"><a class="btn btn-light ms-2 me-1" href="">Logout</a></li>
                @else
                    <li class="nav-item px-2"><a class="nav-link ms-2 me-1" href=""
                        ><span class="fa-user">Login</span></a></li>
                    {{-- @if (App\Models\Utility::getValByName('disable_signup_button') == 'on') --}}
                        <li class="nav-item">
                            <a class="btn btn-primary ms-2 me-1"
                                href="">{{ __('Register') }}</a>
                        </li>
                    {{-- @endif --}}
                @endif
                
            </ul>
        </div>
    </div>
</nav>

<script>
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
    background-color: #000;
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