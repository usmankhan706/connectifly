{{-- header starts here --}}
<header  class="default-color" style="position
:fixed;">
    <div class="container">
        <nav class="">
            <div class="nav-header">
                <a href="{{ route("search") }}" class="nav-brand">
                    <img src="{{ asset('images/web/connect-it-logo.png') }}" alt="">
                </a>
            </div>

            <ul class="menu-ul">
                <li class="menu--link">
                    <!-- <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }} nav-items">Home</a> -->
                </li>

                @if (auth('user')->check() || auth('company')->check() )
                    <li class="menu--link">
                        <a href="{{ route('search') }}" class="nav-items {{ request()->routeIs('search') ? 'active' : '' }}">Jobs zoeken</a> 
                    </li>
                    <li class="menu--link">
                        <a href="{{ route('chats') }}" class="nav-items {{ request()->routeIs('chats') ? 'active' : '' }}">Berichten</a>
                    </li>
                @else
                    <li class="menu--link">
                        <a href="{{route('hoe_werkt_het')}}" class="nav-items  {{ request()->routeIs('hoe_werkt_het') ? 'active' : '' }}">Hoe werkt het?</a>
                    </li>

                    <li class="menu--link">
                        <a href="{{ route('how-it-works') }}" class="nav-items {{ request()->routeIs('how-it-works') ? 'active' : '' }} ">Hoe starten</a>
                    </li>
                @endif

                <li class="menu--link">
                    <a href="{{ route('home') }}/#price-package" class="nav-items">Prijzen</a>
                </li>

                <li class="menu--link">
                    <a href="{{ route('contact') }}" class="nav-items {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
                </li>

                @if (Auth::guard('user')->check() || Auth::guard('company')->check())
                <li class="auth-li">
                    <ul>
                        {{-- <li>
                                <a href="{{ route('search') }}" class="nav-actions"><i class="fas fa-search"></i></a>
                </li> --}}

                <li class="main-dropdown">
                    <a href="javascript:void" class="sub-menu">

                        @company()
                        {{ auth("company")->user()->name }}
                        @endcompany

                        @user()
                        {{ auth("user")->user()->first_name." ".auth("user")->user()->last_name }}
                        @enduser
                        
                        <span class="unread-dot"></span>
                    </a>

                    <div class="sub-ul">
                        <ul>
                            <li>
                                @if (auth('user')->check() || auth('company')->check() )
                                <a href="{{ route('search') }}" class="nav-actions">Search</a>
                                @endif
                            </li>

                            <li>
                                <a href="@if (auth('user')->check() )
                                
                                                {{ route('profile') }}
                                            @else
                                            {{ route('company.profile') }}
                                            @endif" class="nav-actions">
                                    Profile
                                </a>
                            </li>

                                 <a href="{{ route('chats') }}" class="nav-actions" id="nav-chat-link" data-user="@if ((Auth::guard('user')->check())){{ auth('user')->user()->id }}@else {{ auth('company')->user()->id }}@endif">
                            <li>
                                    Messages
                                </li>
                                    <span class="unread-dot"></span></a>

                            <li>
                                <form action="@if (auth('user')->check())
                                                {{ route('logout') }}
                                            @else
                                            {{ route('company.logout') }} 
                                            @endif" method="POST">
                                    @csrf
                                    <button type="submit" class="nav-actions logout-btn">
                                       <i class="fas fa-sign-out-alt"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li>
                                <a href="@if (auth('user')->check())
                                    {{ route('profile') }}
                @else
                {{ route('company.profile') }}
                @endif" class="nav-actions">
                <i class="far fa-user"></i>
                </a>
                </li>

                <li>
                    <a href="{{ route('chats') }}" class="nav-actions" id="nav-chat-link" data-user="@if ((Auth::guard('user')->check())){{ auth('user')->user()->id }}@else {{ auth('company')->user()->id }}@endif">
                        <span id="unread-dot"></span>
                        <i class="far fa-comment-dots"></i></a>
                </li>

                <li>
                    <form action="@if (auth('user')->check())
                                    {{ route('logout') }}
                                @else
                                {{ route('company.logout') }}
                                @endif" method="POST">
                        @csrf
                        <button type="submit" class="nav-actions logout-btn"><i class="fas fa-sign-out-alt"></i></button>
                    </form>
                </li> --}}
            </ul>
            </li>
            @endif


            @if (!Auth::guard('user')->check() AND !Auth::guard('company')->check())
            <li>
                <a href="{{ route('company_register') }}" class="{{ request()->routeIs('company_register') ? 'active' : '' }} login-btn" style="background: #4044A7; color: #ffffff;">Registreren</a>
            </li>
            @endif

            {{-- @auth("company")
                <li>
                    <a href="{{ route('company.profile') }}" class="post-btn">Job Post</a>
            </li>
            @endauth --}}

            @if (Auth::guard('user')->check() || Auth::guard('company')->check())
            <li>
                <form action="@if (auth('user')->check())
                    {{ route('logout') }}
                @else
                {{ route('company.logout') }}
                @endif" method="POST">
                    @csrf
                    <button type="submit" class="{{ request()->routeIs('user_register') ? 'active' : '' }} login-btn login-li">Logout</button>
                </form>
            </li>
            @endif
            @if (!Auth::guard('user')->check() AND !Auth::guard('company')->check())
            
            <li>
                <a href="{{ route('comapny_login') }}" class="{{ request()->routeIs('comapny_login') ? 'active' : '' }} login-btn modi" >Login</a>
            </li>
            @endif
            </ul>

            @if (Auth::guard('user')->check() || Auth::guard('company')->check())
            <ul class="auth-ul">
                <li>
                    <a href="{{ route('search') }}" class="nav-actions"><i class="fas fa-search"></i></a>
                </li>

                <li>
                    <a href="{{ route('home') }}" class="nav-actions"><i class="far fa-user"></i></a>
                </li>

                <li>
                    <a href="{{ route('chats') }}" class="nav-actions"><i class="far fa-comment-dots"></i></a>
                </li>

                <li>
                    <form action="@if (auth('user')->check())
                        {{ route('logout') }}
                    @else
                    {{ route('company.logout') }}
                    @endif" method="POST">
                        @csrf
                        <button type="submit" class="nav-actions logout-btn"><i class="fas fa-sign-out-alt"></i></button>
                    </form>
                </li>
            </ul>
            @endif


            <div class="nav-toogler">
                <a href="javascript:void(0)" class="btn-toogler">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>
</header>
{{-- header ends here --}}
