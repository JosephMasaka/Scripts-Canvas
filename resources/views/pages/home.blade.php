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

    <link rel="icon" href="{{ url("logos/scripts&canvas.png") }}" type="image/x-icon" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6LwMO1KN/aQwNfRWAd/5TqB6Z6v9ZEp3Je9L6jGEtJ2K6pAAmjh" crossorigin="anonymous"></script>


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
</head>

<body class="">
    <header">

        @include('partials.nav')

        <section class="hero-section">
            <div class="overlay">
                <div class="container text-start text-white">
                    <h1>Transforming Vision <br>Into Reality</h1>
                    <p>Your success is our business</p>
                    <p><strong>237 Green Street, City</strong></p>
                    <div class="cta-buttons mt-4">
                        <a href="#" class="btn-login p-4">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        
    </header>
    <style>
        .overlay .container {
            z-index: 10;
        }

        .hero-section {
            z-index: -10;
            top: -80px;
            position: relative;
            width: 100%;
            height: 100vh; /* Full-screen height */
            background: url('images/hero_bg.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Dark overlay for better text visibility */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); /* Add text shadow for better visibility */
        }

        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.5);
        }

        .hero-section .cta-buttons a {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            font-size: 1.2rem;
            font-weight: bold;
            /* border-radius: 5px; */
            /* margin: 0 10px; */
            text-decoration: none;
            color: white;
            box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.3);
            text-transform: uppercase;
            transition: background-color 0.3s, transform 0.2s;
        }

        .hero-section .btn-login {
            background-color: #28a745;
            /* font-size: 16px; */
        }

        .hero-section .btn-login:hover {
            cursor: pointer;
            background-color: #218838;
            transform: scale(1.05);
        }

        .hero-section .btn-signup {
            background-color: #000;
        }

    </style>
</body>
</html>