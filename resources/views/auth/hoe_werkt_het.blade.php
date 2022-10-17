<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connectifly - hoe-werkt-het</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('images/web/connect-it-logo2.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7ae40850c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('owl/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/dist/assets/owl.theme.default.min.css') }}">
  </head>

  <body>
    <!-- <div class="home-page-banner" style="background-image:url(images/web/header2.jpg); background-size:cover; background-repeat:no-repeat; background-position:center;"> -->
    <!-- <section class="main-section" id="n-main-section">  -->
    @include('subviews.header')

    <div class="about-banner main-section">
      <div class="about-banner_left">
        <div class="left-text">
          <p class="about-banner_heading">Digitalizing the marketing</p>
          <button class="demo-btn">Request for Demo</button>
        </div>
      </div>
      <div class="about-banner_right">
        <img src="{{url('images/web/header_hoewerkthet-cut-section.png')}}" alt="">
      </div>
    </div>
    <div class="attactment-wrapper">
      <div class="attachment">
        <div class="attachment_list">
          <h2 class="about-banner_heading">Hoe werkt het?</h2>
          <hr class="hr-style">
          <ul>
            <div class="content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
              <span>Digitalisering van het netwerken tussen ondernemers en bedrijven.</span>
            </div>
            <div class="content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
              <span>Aanmelden (KNOP)</span>
            </div>
            <div class="content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
              <span>
                Bouw je eigen netwerk van nieuwe en bestaande klanten en communiceer in één tool. Val op <br>
                met een uitgebreid bedrijfsprofiel en persoonlijk profiel dat zichtbaar is voor andere ondernemers. <br>
                Identificeer en bereik proactief bestaande klanten en nieuwe leads.
              </span>
            </div>
            <div class="content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
              <span>
                Elke dag duizenden bedrijven online voor zakelijke kansen.
                Ontvang meldingen over jobs en/of vragen die passen bij uw bedrijf
                Er worden geen bemiddelingskosten of commissies in rekening gebracht door Connectifly
              </span>
            </div>
            <div class="content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
              <span>5. Meld je nu gratis aan (KNOP) REFERENTIES/AANGESLOTEN BEDRIJVEN FOOTER</span>
            </div>
          </ul>
        </div>
        <!-- Slider main container -->
        <div class="attachment-slider material-sider owl-carousel owl-theme">
          <div class="attach-item">
            <img src="{{url('images/web/infographichwh.png')}}" alt="">
          </div>
          <div class="attach-item">
            <img src="{{url('images/web/infographichwh.png')}}" alt="">
          </div>
          <div class="attach-item">
            <img src="{{url('images/web/infographichwh.png')}}" alt="">
          </div>
          <div class="attach-item">
            <img src="{{url('images/web/infographichwh.png')}}" alt="">
          </div>
          <div class="attach-item">
            <img src="{{url('images/web/infographichwh.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="listing-wrapper">
      <div class="attachment-slider material-sider owl-carousel owl-theme">
        <div class="attach-item">
          <img src="{{url('images/web/infographichwh_2.png')}}" alt="">
        </div>
        <div class="attach-item">
          <img src="{{url('images/web/infographichwh_2.png')}}" alt="">
        </div>
        <div class="attach-item">
          <img src="{{url('images/web/infographichwh_2.png')}}" alt="">
        </div>
        <div class="attach-item">
          <img src="{{url('images/web/infographichwh_2.png')}}" alt="">
        </div>
        <div class="attach-item">
          <img src="{{url('images/web/infographichwh_2.png')}}" alt="">
        </div>
      </div>
      <div class="listing-wrapper-right">
        <h2 class="about-banner_heading">Hoe werkt het?</h2>
        <hr class="hr-style">
          <ul>
            <div class="content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
                <span>Digitalisering van het netwerken tussen ondernemers en bedrijven.</span>
            </div>
            <div class=" content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
                <span>Aanmelden (KNOP)</span>
            </div>
            <div class=" content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
                <span>
                  Bouw je eigen netwerk van nieuwe en bestaande klanten en communiceer in één tool. Val op <br>
                  met een uitgebreid bedrijfsprofiel en persoonlijk profiel dat zichtbaar is voor andere ondernemers. <br>
                  Identificeer en bereik proactief bestaande klanten en nieuwe leads.
                </span>
            </div>
            <div class=" content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
                <span>
                  Elke dag duizenden bedrijven online voor zakelijke kansen.
                  Ontvang meldingen over jobs en/of vragen die passen bij uw bedrijf
                  Er worden geen bemiddelingskosten of commissies in rekening gebracht door Connectifly
                </span>
            </div>
            <div class=" content-list-wrap">
              <img src="{{url('images/web/tick.svg')}}"  alt="">
                <span>
                  5.Meld je nu gratis aan (KNOP) REFERENTIES/AANGESLOTEN BEDRIJVEN FOOTER
                </span>
            </div>
            </ul>
      </div>
    </div>
    <script src="{{ asset('owl/dist/jquery.js') }}"></script>
    <!-- <script src="./js/owl.carousel.min.js"></script> -->
    <!-- <script src="./js/script.js"></script> -->
    @include('subviews.footer')

    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset(' js/modal.js') }}"></script>

    <script src="{{ asset('owl/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('owl/dist/owl.carousel.min.js') }}"></script>

    @if (auth('user')->check() || auth('company')->check())
    <script src="{{ asset('js/unread.js') }}"></script>
    @endif

    <script>
      $('.material-sider').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        responsiveClass: true,

        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })

      $(document).ready(function () {
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
