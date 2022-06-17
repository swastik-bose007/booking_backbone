<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ---------------------------- BOOTSTRAP CDN ------------------------------ --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- ---------------------------- STYLES ------------------------------ --}}

    @stack('menu')
    @stack('style-global')
    <link rel="stylesheet" href="{{ url('public/website_styles/navbar.css') }}">
    {{-- ---------------------------- WEBSITE INFO ------------------------------ --}}
    
    @stack('icon')
    @stack('title')
</head>

<body class="bg-light">
    {{-- ---------------------------- NAV BAR ------------------------------ --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="{{ url('public/website_images/logo.png') }}" alt="" width="120"
                                height="72">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="">@include('website.commons.hamberger')</span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ms-auto">
                                <a class="nav-link active me-md-5 font-1 color-1 navbar-custom" aria-current="page" href="#">
                                    Home
                                </a>
                                <a class="nav-link active me-md-5 font-1 color-1 navbar-custom" aria-current="page" href="#">
                                    About Us
                                </a>
                                <a class="nav-link active me-md-5 font-1 color-1 navbar-custom" aria-current="page" href="#">
                                    Find Places
                                </a>
                                <a class="nav-link active me-md-5 font-1 color-1 navbar-custom" aria-current="page" href="#">
                                    Scan QR
                                </a>
                                <a class="nav-link active me-md-5 font-1 color-1 navbar-custom" aria-current="page" href="#">
                                    Service
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        </nav>
    </div>
    </div>
    </div>
