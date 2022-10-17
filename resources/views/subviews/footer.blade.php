<footer>

    <section id="footer-upper">
        <div class="container">

            <div class="flex">
                <div class="col-1">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                        <img src="{{ asset('images/web/connect-it-logo.png') }}" alt=""></a>
                    </div>
                    {{-- <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error harum illum nesciunt iste velit?
                    </p> --}}

                    <ul>
                        <li><a href="javascript:void(0)" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="javascript:void(0)" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="javascript:void(0)" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0)" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="javascript:void(0)" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>

                <div class="col-2">

                    <span>Quick Links</span>

                    <a href="{{ route("home") }}" class="location" target="blank"><i class="fas fa-angle-double-right"></i>&nbsp; Home</a>

                    <a href="{{ route("search") }}" class="number"><i class="fas fa-angle-double-right"></i>&nbsp; Find Job</a>

                    <a href="{{ route("contact") }}" class="email"><i class="fas fa-angle-double-right"></i>&nbsp; Contact</a>
                </div>

                <div class="col-2">

                    <span>For Users</span>

                    <a href="{{ route("search") }}" class="location" target="blank"><i class="fas fa-angle-double-right"></i>&nbsp; Job List</a>

                    <a href="{{ route("search") }}" class="location" target="blank"><i class="fas fa-angle-double-right"></i>&nbsp; Companies</a>

                    @if (!auth("company")->check() && !auth("user")->check())
                    <a href="" class="number"><i class="fas fa-angle-double-right"></i>&nbsp; Sign Up</a>
                    @endif

                    <a href="#n-main-section" class="email"><i class="fas fa-angle-double-right"></i>&nbsp; Browse Categories</a>
                </div>

                <div class="col-2">

                    <span>Information</span>

                    <a href="{{ route("contact") }}" class="location" style="color:#fff; text-decoration:auto;">
                      <i class="mr-4 fas fa-map-pin" aria-hidden="true"></i>
                          123, Denver, USA
                     </a>

                    <!--<a href="tel: +1 000 000-0000" class="number">-->
                    <!--    <i class="mr-4 fas fa-phone" aria-hidden="true"></i> +1 000 000-0000-->
                    <!--</a>-->

                    <!--<a href="mailto: contact@connectit.com" class="email">-->
                    <!--    <i class="mr-4 fas fa-mail-bulk lg:text-xl" aria-hidden="true"></i>contact@connectit.com-->
                    <!--</a>-->
                </div>
            </div>
        </div>
    </section>

    <section id="footer-bottom">

        <div class="container">
            <div class="flex pt-2 pb-2">
                <p>
                    &copy; 2022 Connectifly. All Rights Reserved.
                </p>

                {{-- <ul>
                    <li>
                        <li><a href="javascript:void(0)" target="_blank"><i class="fab fa-facebook"></i></a></li>

                    </li>
                    <li>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>

                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-whatsapp"></i></a>

                    </li>
                    <li>
                        <a href="javascript:void(0)" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                </ul> --}}
                <div class="policy-links">
                        <a href="{{url('/policies')}}">Policies ||</a> 
                        <a href="{{url('/terms&condition')}}">Terms & Conditions</a>

                </div>
            </div>
        </div>
    </section>
</footer>
