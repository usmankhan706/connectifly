@extends("layouts.app")

@section("title", "How It Begin")


@section('content')

<!-- How its begin -->
<div class="how-its-begin">
    <main class="signup-container">
        <h1 class="heading-primary">Sign up<span class="span-blue">.</span></h1>
        <p class="text-mute">Enter your credentials to access your account.</p>
        <div class="login-wrapper">
            <div class="line-breaker">
                <span class="line"></span>
                <span>or</span>
                <span class="line"></span>
            </div>
        </div>
        <form class="signup-form">
            <label class="inp">
                <input type="email" class="input-text" placeholder="&nbsp">
                <span class="label">First Name</span>
                <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
            </label>
            <label class="inp">
                <input type="email" class="input-text" placeholder="&nbsp;">
                <span class="label">Last Name</span>
                <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
            </label>
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                <span class="label">Email</span>
                <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
            </label>
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                <span class="label">Password</span>
                <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
            </label>
            <label class="inp">
                <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                <span class="label">Confirm Password</span>
                <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
            </label>
            <button class="btn btn-login">Sign up</button>
        </form>
        <p class="text-mute">Not a member? <a href="$">Sign up</a></p>
    </main>
    <div class="welcome-container">
        <h1 class="heading-secondary">Welcome to <span class="lg">Connect It!</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolores laboriosam libero at ducimus autem
            culpa voluptatum porro similique. Molestiae!</p>
        <img src="https://png2.cleanpng.com/sh/82506800d9e08bf14cb0a38d53322fea/L0KzQYm3VsI1N6Rug5H0aYP2gLBuTfxieKV0iJ9taYPzfLLCTfRmfppofZ92dXz3eb7shPliNZ1miOZ4cD3wf7TylgAuPZM3fqNsMEC4RIKAUsQvOmU5SaUBMkm0RYOCWME1OGI7S6Y9NT7zfri=/kisspng-laptop-display-device-multimedia-laptop-mockup-5b2f1c00541724.2441362915298140163445.png"
            alt="">
    </div>
</div>
<section>
    <div class="select-package">
        <h1 class="section-work-heading-2">Select Package as You Need</h1>
        <div class="pkgp-detail">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt dolores magnam cumque repudiandae qui in
            cum ipsa, optio doloremque odio enim, perspiciatis blanditiis consequatur, excepturi rerum possimus totam
            doloribus? Veritatis eveniet quam facere
            explicabo tempore optio nihil sed officiis similique! Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Quod consequuntur sapiente repudiandae dolorem adipisci dolore ex sint ipsam rerum, nulla enim qui
            delectus exercitationem vel,
            nihil consequatur! Cumque, magnam obcaecati.
        </div>
        <div class="ask-wrapper">
            <button class="Ask-ques">Get Started</button>
        </div>
    </div>
</section>

<section class="business-details">
    <div class="business-details__wrapper">
        <main class="signup-container">
            <h1 class="heading-primary">Add Your Business details<span class="span-blue">.</span></h1>
            <p class="text-mute">Enter your Business Detail to access your account.</p>
            <div class="login-wrapper">
                <div class="line-breaker">
                    <span class="line"></span>
                    <span>or</span>
                    <span class="line"></span>
                </div>
            </div>
            <form class="signup-form">
                <label class="inp">
                    <input type="email" class="input-text" placeholder="&nbsp">
                    <span class="label">Company Name</span>
                    <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                </label>
                <label class="inp">
                    <input type="email" class="input-text" placeholder="&nbsp;">
                    <span class="label">Website</span>
                    <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                </label>
                <label class="inp">
                    <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                    <span class="label">Employees number</span>
                    <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
                </label>
                <label class="inp">
                    <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                    <span class="label">Branch number</span>
                    <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
                </label>
                <label class="inp">
                    <input type="password" class="input-text" placeholder="&nbsp;" id="password">
                    <span class="label">Office Address</span>
                    <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
                </label>
                <button class="btn btn-login">Submit</button>
            </form>
        </main>
    </div>
</section>
<section>

    <ul class="list-members">
        <li class="member">
            <div class="member-image">
                <img src="https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/1.png">
            </div>
            <div class="member-info">
                <h3>Hazel Andrea</h3>
                <p>Founder & CEO</p>
                <div class="social-link">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </li>
        <li class="member">
            <div class="member-image">
                <img src="https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/2.png">
            </div>
            <div class="member-info">
                <h3>Lucas Edward</h3>
                <p>Product Manager</p>
                <div class="social-link">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </li>
        <li class="member">
            <div class="member-image">
                <img src="https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/3.png">
            </div>
            <div class="member-info">
                <h3>Ella Piper</h3>
                <p>Marketing Head</p>
                <div class="social-link">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </li>
        <li class="member">
            <div class="member-image">
                <img src="https://fadzrinmadu.github.io/hosted-assets/team-section-design-using-html-and-css/4.png">
            </div>
            <div class="member-info">
                <h3>Jaxon Mathew</h3>
                <p>Affiliate Manager</p>
                <div class="social-link">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </li>
    </ul>
</section>
@endsection
