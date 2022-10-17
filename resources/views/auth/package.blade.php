@extends("layouts.app")

@section("title", "package")
<style>
 @media only screen and (max-width:1024px){
    #home-interested-in {
     clip-path: none !important;
     }
 }
</style>
@section("content")

<section class="" id="home-interested-in">
        <div class="container">
       

            

            <h2 class="text-centre choose-pkg-heading" style="text-align: center">Please choose your package to get the complete bussiness profile</h2>

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



@endsection
