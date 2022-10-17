@extends("layouts.app")

@section("title", "Contact Us")
@section("content")
    <div class="home-page-banner" style="background-image:url(images/web/bg.png); background-size:cover; background-repeat:no-repeat; background-position:center;">
      <section class="main-section" id="n-main-section" style="padding-top: 93px;">
          <div class="container">
              <div class="content-section">
                  <div class="flex">
                      <div class="col-1">
                          <div class="">
                              <h2 style="color:#fff;">Hey ondernemer!</h2>
                              <p style="color:#fff;">Ben jij op zoek naar een betrouwbaar bedrijf dat jou kan helpen? Zoek dan niet langer, je
                                  bent op de juiste plek. We hebben alle betrouwbare ondernemers op ons platform voor je
                                  klaarstaan. Connectifly is het platform dat je helpt bij het oplossen van je problemen.
                                  Waar ben je naar op zoek?</p>                      
                          </div>
                      </div>
                      <div class="col-2 content-section-right">
                          <img src="http://connectifly.com/images/web/laptop-3.png" alt="">
                      </div>
                  </div>
              </div>
              <div class="partners">
                  <p class="pb-5" style="color:#fff;">vertrouwd door</p>
                  <div class="flex">
                      <div class="flex-50">
                          <section id="testimonial-home">
                              <div class="container">
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
        </div>
      </section>
    </div>
    <section id="contact-us">
        <div class="contact-wrapper">
            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196281.1293697616!2d-104.99519623948915!3d39.76451867365172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876b80aa231f17cf%3A0x118ef4f8278a36d6!2sDenver%2C%20CO%2C%20USA!5e0!3m2!1sen!2s!4v1639642707104!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <form action="{{ route("contact") }}" method="POST">
                <h2>Neem contact met ons op</h2>
                @if (session("message"))
                <p class="success mt-4">{{ session("message") }}</p>
                @endif
                @csrf
                <div class="form-flex mt-8">
                    <div class="form-control">
                        <input type="text" placeholder="Naam" name="name" value="{{ old("name") }}">
                        @error("name")
                            <p class="validation-message">{{ $message  }}</p>
                        @enderror
                    </div>
                    <div class="form-control">
                        <input type="text" placeholder="E-mail" name="email" value="{{ old("email") }}">
                        @error("email")
                            <p class="validation-message">{{ $message  }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <textarea name="message" id="" cols="30" rows="10" style="resize:vertical;" placeholder="Uw bericht...">{{ old("message") }}</textarea>
                    @error("message")
                        <p class="validation-message">{{ $message  }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <button type="submit" class="message-btn">Bericht versturen</button>
                </div>
            </form>
        </div>
    </section>
    @endsection
    
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset(' js/modal.js') }}"></script>

    <script src="{{ asset('owl/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('owl/dist/owl.carousel.min.js') }}"></script>
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
});
    </script>
   
          
 