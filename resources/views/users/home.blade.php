<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connectifly - Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/web/connect-it-logo2.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7ae40850c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('owl/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/dist/assets/owl.theme.default.min.css') }}">
</head>

<body>
    @include('subviews.header')
    <div class="home-page-banner" style="background-image:url(images/web/bg.png); background-size:cover; background-repeat:no-repeat; background-position:center; padding-top: 75px;">
    <section class="main-section" id="n-main-section">
    

        <div class="container">
            <div class="content-section">
                <div class="flex">

                    <div class="col-1">
                        <div class="">
                            <h2>Hey ondernemer!</h2>

                            <p>Ben jij op zoek naar een betrouwbaar bedrijf dat jou kan helpen? Zoek dan niet langer, je
                                bent op de juiste plek. We hebben alle betrouwbare ondernemers op ons platform voor je
                                klaarstaan. Connectifly is het platform dat je helpt bij het oplossen van je problemen.
                                Waar ben je naar op zoek?</p>

                            {{-- <a href="javascript:void(0)" class="get-started">Get Started</a> --}}

                            {{-- <form action="{{ route('search') }}">
                                <div class="search-wrapper">
                                    <input type="text" class="main-search" name="service" placeholder="Enter Keyword">
                                    <button type="submit" class="search-btn">Find</button>
                                </div>
                            </form> --}}

                        </div>
                    </div>

                    <div class="col-2 content-section-right">
                        <img src="{{ asset('images/web/laptop-3.png') }}" alt="">
                    </div>

                </div>
            </div>

            <div class="partners">
                <p class="pb-5">Trusted by</p>

                <div class="flex">
                    <div class="flex-50">
                        <section id="testimonial-home">
                            <div class="container ">


                                <div class="owl-carousel container-carousel" id="">


                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="img-box">
                                                <img src="{{ asset('images/web/usarmy.png') }}" alt="">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="img-box">
                                                <img src="{{ asset('images/web/folklift.png') }}" alt="">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="img-box">
                                                <img src="{{ asset('images/web/gravity-display.png') }}"
                                                    alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="img-box">
                                                <img src="{{ asset('images/web/websitespace.png') }}" alt="">
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>

    </section>
    </div>


    <section id="home-choose-us">
        <div class="container">
            <h2>Waarom je bij ons moet aansluiten.</h2>
            <p>Wij hebben een groot netwerk dat bestaat uit verschillende ondernemers die allemaal één ding gemeen
                hebben: ‘Het hebben van een centrale plek dat door ondernemers en voor ondernemers gemaakt is.’
                Connectifly stimuleert het intern netwerken met talloze ondernemers die elkaar willen helpen. Je kunt op
                zakelijk gebied binnen enkele kliks nieuwe partners, opdrachten en potentiële klanten vinden. Daarom is
                het geen kwestie van waarom, maar wanneer jij je bij ons aansluit.</p>


            <div class="flex">
                <div class="col flex-1">
                    <span><i class="fas fa-paste"></i></span>
                    <p class="card-title">Plaats opdrachten</p>
                    <p class="card-detail">Zorg ervoor dat specialisten jouw opdracht kunnen zien. Je kunt jouw
                        opdracht eenvoudig aan ons doorgeven. Vervolgens komen de ondernemers die ervaring hebben bij
                        jouw opdracht, eenvoudig met je in contact. Vanuit daar kun je een keuze maken op het aantal
                        mensen dat zich heeft gemeld. Simpel als dat.</p>
                </div>

                <div class="col flex-1 f-card">
                    <span><i class="fas fa-users"></i></span>
                    <p class="card-title">Lees profielen door</p>
                    <p class="card-detail">Als je benieuwd bent naar de achtergrond van een potentiële partner, dan
                        kun je alle informatie vinden op hun profielpagina. Alle informatie omtrent zijn of haar
                        carrière kan daar gevonden worden, waardoor je kunt kijken of jullie bij elkaar passen om in de
                        toekomst een samenwerking aan te gaan.</p>
                </div>

                <div class="col flex-1">
                    <span><i class="fas fa-search-dollar"></i></span>
                    <p class="card-title">Vind jouw droom opdracht!</p>
                    <p class="card-detail">Je bent overtuigd van je kennis, ervaring en skills. Je voelt aan alles
                        dat je klaar bent om een opdracht te vinden die aansluit bij de fase waarin je ziet. Dan kun je
                        bij ons jouw droom opdracht vinden! Connectifly krijgt dagelijks nieuwe opdrachten binnen waar
                        jij op kunt.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="data-details">
        <div class="container">
            <div class="flex">

                <div class="col-1">
                    <p><i class="fas fa-briefcase"></i></p>
                    <div>
                        <h5><strong>10.000+ </strong></h5>
                        <p>Opdrachten gepost </p>
                    </div>
                </div>

                <div class="col-1">
                    <p><i class="fas fa-file-alt"></i></p>
                    <div>
                        <h5><strong>7500</strong></h5>
                        <p>Opdrachten vervuld </p>
                    </div>
                </div>

                <div class="col-1">
                    <p><i class="fas fa-building"></i></p>
                    <div>
                        <h5><strong>1000+</strong></h5>
                        <p>aangesloten bedrijven </p>
                    </div>
                </div>

                {{-- <div class="col-1">
                    <p><i class="fas fa-users"></i></p>
                    <div>
                        <h5><strong>127</strong></h5>
                        <p>Totaal aantal gebruikers</p>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    <section id="top-companies">
        <div class="container">
            <h2 class="heading">Aangesloten bedrijven </h2>
            <p class="sub-heading">Met ons platform hebben we al meer dan duizend bedrijven/ondernemers naar het
                volgende niveau geholpen. Bekijk hieronder de bedrijven die aangesloten zijn bij Connectifly.</p>

            <div class="owl-carousel" id="company-slider">

                @foreach ($companies as $company)
                    <div class="item">
                        <div class="item-inner">
                            <div class="img-box">
                                @if ($company->logo == null)
                                    <img src="{{ asset('images/web/user-placeholder.png') }}" alt="">
                                @else
                                    <img src="{{ asset('company_logos/' . $company->logo) }}" alt="">
                                @endif
                            </div>

                            <p class="company-name">{{ $company->name }}</p>
                            <p class="company-detail">{{ $company->description }}</p>
                            <p class="location"><i class="fas fa-map-marker-alt"></i>&nbsp;
                                {{ $company->city }}</p>
                            <a href="{{ route('company.view', $company->id) }}" class="explore-btn">Explore</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section id="home-interested-in">
        <div class="container">
            {{-- <div class="flex">
                <div class="col-1">
                    <h2 class="heading">ConnectIt Benefits</h2>
                    <p class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida</p>

                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nesciunt animi inventore.
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nesciunt animi inventore.
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nesciunt animi inventore.
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nesciunt animi inventore.
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nesciunt animi inventore.
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nesciunt animi inventore.
                        </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nesciunt animi inventore.
                        </li>

                        <a href="{{ route("company.payment") }}">Become Member</a>
                    </ul>
                </div>
                <div class="col-2">
                    <img src="{{ asset('images/bnefits.svg') }}" alt="">
                </div>
            </div> --}}

            {{-- <div class="flex">

                @foreach ($jobs as $job)

                <div class="banners">

                    <div class="image-box">
                        <div class="rounded">
                            <img src="{{ asset(" company_logos/".$job->company->logo) }}" alt="">
                        </div>
                    </div>

                    <div class="detail-box">
                        <h3 class="job-title">{{ $job->title }}</h3>
                        <p class="company"><i class="fas fa-building"></i> &nbsp; {{ $job->company->name }}</p>
                    </div>

                    <div class="bookmark">
                        <a><i class="fas fa-bookmark"></i></a>
                    </div>

                </div>
                @endforeach

            </div> --}}

            <h2 class="text-centre" style="text-align: center">Prijzen</h2>

            <p  class="section-card-text">Sluit u aan bij andere ondernemers die Connectifly
                gebruiken
                om de volgende carrièrestap te zetten</p>

            <div class="price-package" id="price-package">
                <div class="package" id="package">
                    <div class="head-icon" style="padding-bottom: 27px;">
                      <img src="{{ asset('images/rocket.png') }}" class="pakket-icon" alt="">
                      <h3 class="p-price">€10</h3>
                      <span class="p-limit">Per maand</span>
                    </div>
                    <div class="body">
                        <div class="p-features">
                             <h3>Basic</h3>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Eerste maand gratis</p>
                        </div>
                        <div style="display:flex; align-items:baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Maandelijks opzegbaar</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Vind de juiste personen en neem contact met ze op</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Promoot uw bedrijf en stimuleer groei</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Bouw relaties op met klanten en prospects</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Unlimited reageren op Jobs</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Unlimited plaatsen van Jobs</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Een extra persoonlijke user aanmaken</p>
                        </div>
                        </div>
                        <a class="member-btn" style="margin-top: 59px;" href="{{ route("company.payment.package", 'basic') }}">Become Member</a>
                    </div>
                </div>
                <div class="card-wrapper">
                  <p class="heading-sm">MEEST GEKOZEN</p>
                  <div class="package pk2-bg" id="package">
                    <div class="head-icon">
                      <img src="{{ asset('images/briefcase.png') }}" class="pakket-icon" alt="">
                      <h3 class="p-price">€7.5</h3>
                      <span class="p-limit">Per maand</span>
                    </div>
                    <div class="body">
                      <div class="p-features">
                        <h3>Lite</h3>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Eerste maand gratis</p>
                        </div>
                        <div style="display:flex; align-items:baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p> Elk kwartaal opzegbaar</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Vind de juiste personen en neem contact met ze op</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Promoot uw bedrijf en stimuleer groei</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Bouw relaties op met klanten en prospects</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Unlimited reageren op Jobs</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Unlimited plaatsen van Jobs</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Twee extra persoonlijke user aanmaken</p>
                        </div>
                     </div>
                     <a id="package_payment" href="{{ route("company.payment.package", 'lite') }}" class="pakket-2-btn member-btn" style="margin-top:31px;">Become Member</a>
                    </div>
                  </div>
                </div>
                <div class="package pk3-bg" id="package">
                    <div class="head-icon" style="padding-bottom: 27px;">
                      <img src="{{ asset('images/premium-quality.png') }}" class="pakket-icon" alt="">
                      <h3 class="p-price">€5</h3>
                      <span class="p-limit">Per maand</span>
                    </div>
                    <div class="body">
                      <div class="p-features">
                        <h3>Pro</h3>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Eerste maand gratis</p>
                        </div>
                        <div style="display:flex; align-items:baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Jaarlijks opzegbaar</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Vind de juiste personen en neem contact met ze op</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Promoot uw bedrijf en stimuleer groei</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Bouw relaties op met klanten en prospects</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Unlimited reageren op Jobs</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Unlimited plaatsen van Jobs</p>
                        </div>
                        <div style="display:flex; align-items: baseline; gap:10px">
                            <i class="fa fa-circle"></i>
                            <p>Dire extra persoonlijke user aanmaken</p>
                        </div>
                     </div>
                        <a href="{{ route("company.payment.package", 'pro') }}" class="pakket-3-btn member-btn" style="margin-top:59px;">Become Member</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- <section id="what-u-want">
        <div class="container">
            <div class="flex">
                <div class="col-1">
                    <div class="icon-box">
                        <p><i class="fas fa-users"></i></p>
                    </div>
                    <div class="text-box">
                        <h3>Looking For a Job?</h3>
                        <p>Your next role could be with one of these top leading organizations</p>
                        <a href="{{ route(" search") }}">Apply Now</a>
                    </div>
                </div>

                <div class="col-2">
                    <div class="icon-box">
                        <p><i class="fas fa-file-alt"></i></p>
                    </div>
                    <div class="text-box">
                        <h3>Are You Recruiting?</h3>
                        <p>Your next role could be with one of these top leading organizations</p>
                        <a href="{{ route(" company.profile") }}">Hire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="packages">
        <div class="container">
            <div class="heading">Become Our Member</div>
            <div class="packages-wrapper">
                <div class="package">
                    <h2 class="package--heading">Company</h2>
                    <span class="package--icon"><i class="fas fa-building"></i></span>
                    <p class="package--description">Get your company listed in featured companies</p>

                    @if (auth('company')->check())
                    <a href="{{ route(" company.payment") }}" class="package--payment-btn">Pay Now</a>
                    @elseif (auth("user")->check())
                    <p class="package--alert">Log In As A Company To Subscribe</p>
                    @else
                    <a href="{{ route(" comapny_login") }}" class="package--payment-btn">Pay Now</a>
                    @endif
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="top-companies">
        <div class="container">
            <h2 class="heading">Top Companies</h2>
            <p class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

            <div class="owl-carousel">

                <div class="item">
                    <div class="item-inner">
                        <div class="img-box">
                            <img src="{{ asset('images/web/lg7.png') }}" alt="">
                        </div>

                        <p class="company-name">Trophy & Sans</p>
                        <p class="location"><i class="fas fa-map-marker-alt"></i>&nbsp; City</p>
                        <a href="javascript:void(0)" class="explore-btn">Explore</a>
                    </div>
                </div>

                <div class="item">
                    <div class="item-inner">
                        <div class="img-box">
                            <img src="{{ asset('images/web/lg8.png') }}" alt="">
                        </div>

                        <p class="company-name">Trophy & Sans</p>
                        <p class="location"><i class="fas fa-map-marker-alt"></i>&nbsp; City</p>
                        <a href="javascript:void(0)" class="explore-btn">Explore</a>
                    </div>
                </div>

                <div class="item">
                    <div class="item-inner">
                        <div class="img-box">
                            <img src="{{ asset('images/web/lg9.png') }}" alt="">
                        </div>

                        <p class="company-name">Trophy & Sans</p>
                        <p class="location"><i class="fas fa-map-marker-alt"></i>&nbsp; City</p>
                        <a href="javascript:void(0)" class="explore-btn">Explore</a>
                    </div>
                </div>

                <div class="item">
                    <div class="item-inner">
                        <div class="img-box">
                            <img src="{{ asset('images/web/lg10.png') }}" alt="">
                        </div>

                        <p class="company-name">Trophy & Sans</p>
                        <p class="location"><i class="fas fa-map-marker-alt"></i>&nbsp; City</p>
                        <a href="javascript:void(0)" class="explore-btn">Explore</a>
                    </div>
                </div>

                <div class="item">
                    <div class="item-inner">
                        <div class="img-box">
                            <img src="{{ asset('images/web/lg11.png') }}" alt="">
                        </div>

                        <p class="company-name">Trophy & Sans</p>
                        <p class="location"><i class="fas fa-map-marker-alt"></i>&nbsp; City</p>
                        <a href="javascript:void(0)" class="explore-btn">Explore</a>
                    </div>
                </div>

                <div class="item">
                    <div class="item-inner">
                        <div class="img-box">
                            <img src="{{ asset('images/web/lg1.png') }}" alt="">
                        </div>

                        <p class="company-name">Trophy & Sans</p>
                        <p class="location"><i class="fas fa-map-marker-alt"></i>&nbsp; City</p>
                        <a href="javascript:void(0)" class="explore-btn">Explore</a>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

   

    @include('subviews.footer')

    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset(' js/modal.js') }}"></script>

    <script src="{{ asset('owl/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('owl/dist/owl.carousel.min.js') }}"></script>

    @if (auth('user')->check() || auth('company')->check())
        <script src="{{ asset('js/unread.js') }}"></script>
    @endif

    <script>
        $(document).ready(function() {
            $('.container-carousel').owlCarousel({

                items: 4,
                loop: true,
                margin: 10,
                dots: true,
                autoplay: true,
                autoplaySpeed: 1200,
                autoplayTimeout: 1200,
                // autoplayHoverPause: true,
                slideTransition: 'linear',
                // autoplayHoverPause: true,

            });

            $("#testimonial-slider").owlCarousel({
                items: 1,
                loop: true,
                nav: false,
                center: true,
                dots: true,
                autoplay: true,
                autoplayHoverPause: true,
                smartSpeed: 500,
                autoplayTimeout: 2000,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1,
                    },
                    // breakpoint from 480 up
                    480: {
                        items: 1,
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 1,
                    },
                    // breakpoint from 768 up
                    1024: {
                        items: 1,
                    }
                }
            });

            $("#company-slider").owlCarousel({
                items: 3,
                loop: true,
                nav: false,
                center: true,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                smartSpeed: 500,
                autoplayTimeout: 2000,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1,
                    },
                    // breakpoint from 480 up
                    480: {
                        items: 2,
                    },
                    // breakpoint from 768 up
                    768: {
                        items: 2,
                    },
                    // breakpoint from 768 up
                    1024: {
                        items: 3,
                    }
                }
            });
        });
    </script>
    @if (session('status'))
        @dd('plans')
    @endif
</body>

</html>
