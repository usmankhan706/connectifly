@extends("layouts.app")
@section('title', 'how-it-works')
@section('content')

<!-- How its work -->

<section class="main-section bg-section-img" id="n-main-section">
    <div class="container">
        <div class="content-section">
            <div class="flex">
                <div class="col-1">
                    <div class="">
                        <h2>Voor ondernemers, door ondernemers?</h2>
                        {{-- <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora illum error tenetur asperiores quo? Voluptates dolore, facilis dolores cum corrupti, quidem assumenda sapiente beatae perspiciatis eligendi soluta earum tempora eaque.
                        </p> --}}
                    </div>
                </div>
                <div class="col-2">
                    <div class="roket-wrapper">
                      <img src="{{ asset("images/web/roket-bg.png") }}" alt="">
                    </div>
                </div>
                {{-- <div class="Ask-ques">
                    <button class="Ask-ques">Get Started</button>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- how its work -->
<section class="section-how-its-work">
    <h1 class="section-work-heading">Hoe starten?</h1>
    <div class="step-1">
        <div class="left">
            <figure class="img-wrapper">
                <img src="{{ asset("images/web/comfirmmail-05.jpg") }}" class="s-img" alt="">
            </figure>
        </div>
        <div class="right">
            <div class="step--1">
                <div class="counter">
                    <h2>1</h2>
                </div>
                <div class="heading-secondary">
                    <h1>Gratis inschrijven</h1>
                   <p class="hiw-text">Maak uw account aan door het registratieformulier in te vullen en geniet van alle voordelen van Connectifly.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container arrow-right">
        <img src="{{asset("images/web/arrow-shape-0-1.png")}}" alt="">
        </div>
    <div class="step-1 modifier">
        <div class="right">
            <div class="step--1">
                <div class="counter">
                    <h2>2</h2>
                </div>
                <div class="heading-secondary">
                    <h1>Bevestig je email</h1>
                   <p class="hiw-text"> Ons doel is ervoor te zorgen dat ons platform aansluit bij uw behoeften als professional. Nadat u uw emailadres hebt bevestigd, wordt uw account gecontroleerd door ons klantensuccesteam. Als we vragen hebben, nemen we contact met je op.</p>
                </div>
            </div>
        </div>
        <div class="left">
            <figure class="img-wrapper">
                <img src="{{ asset("images/web/comfirmmail-06.jpg") }}" class="s-img" alt="">
            </figure>
        </div>
    </div>
    <div class="container arrow-left"><img src="{{asset("images/web/arrow-shape-1-1.png")}}" alt="">
    </div>
    <div class="step-1">
        <div class="left">
            <figure class="img-wrapper">
                <img src="{{ asset("images/web/profiel-07.jpg") }}" class="s-img" alt="">
            </figure>
        </div>
        <div class="right">
            <div class="step--1">
                <div class="counter">
                    <h2>3</h2>
                </div>
                <div class="heading-secondary">
                    <h1>Log in en maak je profiel aan</h1>
                 <p class="hiw-text">Vervolgens logt u in om uw account te activeren en uw profiel in te stellen.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container arrow-right">
        <img src="{{asset("images/web/arrow-shape-0-1.png")}}" alt="">
        </div>
    <div class="step-1 modifier">
        <div class="right">
            <div class="step--1">
                <div class="counter">
                    <h2>4</h2>
                </div>
                <div class="heading-secondary">
                    <h1>Begin met netwerken!</h1>
                   <p class="hiw-text"> Begin met het verkennen en netwerken met ondernemers in heel Nederland! REFERENTIES/
                    AANGESLOTEN BEDRIJVEN
                    FOOTER</p>
                </div>
            </div>
        </div>
        <div class="left">
            <figure class="img-wrapper">
                <img src="{{ asset("images/web/comfirmmail-06.jpg") }}" class="s-img" alt="">
            </figure>
        </div>
    </div>
    {{-- <div class="step-1 modifier">
        <div class="right">
            <div class="step--1">
                <div class="counter">
                    <h2>4</h2>
                </div>
                <div class="heading-secondary">
                    <h1>Begin met netwerken!</h1>
                   <p class="hiw-text">Begin met het verkennen en netwerken met ondernemers in heel Nederland</p>
                </div>
            </div>
        </div>
        <div class="left">
            <figure class="img-wrapper">
                <img src="{{ asset("images/web/step-1.png") }}" class="s-img" alt="">
    </figure>
    </div>
    </div> --}}
    {{-- <div class="step-1">
        <div class="left">
            <figure class="img-wrapper">
                <img src="{{ asset("images/web/step-1.png") }}" class="s-img" alt="">
    </figure>
    </div>
    <div class="right">
        <div class="step--1">
            <div class="counter">
                <h2>6</h2>
            </div>
            <div class="heading-secondary">
             <p class="hiw-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. In voluptas cupiditate fuga dignissimos dolorum repudiandae asperiores blanditiis tempore earum necessitatibus soluta dicta quia, dolorem temporibus omnis rerum, odio, ab aut!</p>
            </div>
        </div>
    </div>
    </div> --}}
    <div class="question-wrapper">
        <h2 class="section-work-heading-2">Ask a Question</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, adipisci.?</p>
        <div class="ask-wrapper">
            <a href="{{ route('contact') }}">
                <button class="Ask-ques">

                    Ask a question</button>
            </a>
        </div>
    </div>
</section>
@endsection