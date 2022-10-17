<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Connectifly - Chats </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('custom/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/web/connect-it-logo2.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7ae40850c4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('owl/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/dist/assets/owl.theme.default.min.css') }}">
</head>

<body>

    <div class="page-wrapper" style="background-color:#F7F7F7;">
        @include('subviews.header')
        <section id="main-chats">
            <div class="chat-custom-container">
                <div class="container-fluid">
                    <div class="chat-wrapper chat-wrapper-area">
                        <div class="sidebar">
                            <div class="user-info flex no-wrap">
                                <div class="flex no-wrap user-info-img">
                                    <div class="img-box">
                                        <img src="@if (auth('user')->check() and !empty(auth('user')->user()->profile)) {{ asset('profile_images/' . auth('user')->user()->profile) }}@elseif (auth('company')->check() and !empty(auth('company')->user()->logo)) {{ asset('company_logos/' . auth('company')->user()->logo) }}@else {{ asset('images/web/profile-placeholder.png') }} @endif"
                                            alt="" id="user_profile_image">
                                    </div>
                                    <div class="ml-2 name-box">
                                        <a href="@if (auth('user')->check()) {{ route('profile') }}@elseif (auth('company')->check()) {{ route('company.profile') }} @endif"
                                            class="auth-name">
                                            @if (auth('user')->check())
                                                {{ auth('user')->user()->first_name . ' ' . auth('user')->user()->last_name }}
                                            @elseif (auth('company')->check())
                                                {{ auth('company')->user()->name }}
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="search-box">
                                <input type="text" name="search_user" placeholder="Search Chat...">
                            </div>
                            <div class="chats-info">
                                <div class="flex">
                                    <div class="col1">
                                        <p class="title">Inbox</p>
                                    </div>
                                    @auth('company')
                                        {{-- <div class="col1">
                                                    <a href="javascript:void(0)" class="pill">{{ auth("company")->user()->requests->count() }} {{ $plural = Str::plural('request', auth('company')->user()->requests->count()) }}</a>
                                                </div> --}}
                                    @endauth
                                </div>
                            </div>
                            <div class="chats" id="all_chats">



                                @forelse ($users as $user )


                                    <div class="single-inbox flex no-wrap" data-id="{{ $user->id }}">
                                        <div class="img-box">
                                            <img src="@if (auth('company')->check() and !empty($user->profile)) {{ asset('profile_images/' . $user->profile) }}
                                                        @elseif (auth('user')->check() and !empty($user->logo))
                                                        {{ asset('company_logos/' . $user->logo) }}
                                                        @else
                                                        {{ asset('images/web/profile-placeholder.png') }} @endif"
                                                alt="">
                                        </div>
                                        <div class="ml-2 name-box">
                                            <a href="javascript:void(0)" class="auth-name">
                                                @company()
                                                    {{ $user->first_name . ' ' . $user->last_name }}
                                                @endcompany
                                                @user()
                                                    {{ $user->name }}
                                                    @enduser @if ($user->conversation_count)
                                                        <span id="unread"></span>
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    @empty

                                    @endforelse



                                    {{-- <div class="single-inbox flex no-wrap">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                                </div>
                                                <div class="ml-2 name-box">
                                                    <a href="javascript:void(0)" class="auth-name">Sender svsdvasvsdvsdwevsdd   </a>
                                                </div>
                        
                                            </div> --}}

                                </div>
                            </div>

                            <div class="main-chat-box grid-area-chat  hidden-sm">
                                <div class="top-bar flex no-wrap">

                                    <div class="btn-container back">
                                        <a href="javascript:void(0)" class="back-btn" id="chat-select-back">
                                            <i class="fas fa-chevron-left"></i>
                                        </a>
                                    </div>
                                    <div class="img-box" id="top_sender_profile">
                                        <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                    </div>
                                    <div class="ml-2 name-box" id="top_sender_name">
                                        <a href="javascript:void(0)" class="auth-name"></a>
                                    </div>

                                    <div class="btn-container dots">
                                        <a href="javascript:void(0)" class="back-btn popup-toggle" id=""
                                            data-popup="chat-popup">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>

                                        <div class="popup hide-popup" id="chat-popup">
                                            <li><a href="javascript:void(0)" id="chat-about-toogle">about</a></li>
                                        </div>
                                    </div>

                                </div>

                                <div class="replies">
                                    <div class="preloader">
                                        <img src="{{ asset('images/web/Spinner-1s.gif') }}" alt="">
                                    </div>

                                    <div class="to-bottom">
                                        <i class="fas fa-angle-down"></i>
                                    </div>

                                    {{-- <div class="sender flex no-wrap">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                                </div>
                                                <div class="details">
                                                    <div class="sender-info">
                                                        <p class="time">Nov 11, 3:06 PM</p>
                                                        <a href="{{ asset("chat_files/1639136652.png") }}" class="message_file" download="">
                                                            <div class="">
                                                                <span class="">
                                                                    <i class="far fa-file"></i>
                                                                </span>
                                                                <p>
                                                                    image.jpg
                                                                </p>
                                                            </div>
                                                        </a>
                                                        <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate quaerat corrupti</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="you flex no-wrap">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                                </div>
                                                <div class="details">
                                                    <div class="sender-info">
                                                        <p class="time">Nov 11, 3:06 PM</p>
                                                        <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate quaerat corrupti</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="you flex no-wrap">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                                </div>
                                                <div class="details">
                                                    <div class="sender-info">
                                                        <p class="time">Nov 11, 3:06 PM</p>
                                                        <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate quaerat corrupti</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="you flex no-wrap">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                                </div>
                                                <div class="details">
                                                    <div class="sender-info">
                                                        <p class="time">Nov 11, 3:06 PM</p>
                                                        <p class="message">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ducimus excepturi enim harum aliquid, ratione sed saepe, corporis, repudiandae a amet laboriosam illo quo? Fugit consequuntur nobis totam? Debitis, tempora?</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                        
                                            <div class="sender flex no-wrap">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                                </div>
                                                <div class="details">
                                                    <div class="sender-info">
                                                        <p class="time">Nov 11, 3:06 PM</p>
                                                        <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate quaerat corrupti</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                        
                                            <div class="sender flex no-wrap">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                                </div>
                                                <div class="details">
                                                    <div class="sender-info">
                                                        <p class="time">Nov 11, 3:06 PM</p>
                                                        <p class="message">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate quaerat corrupti</p>
                                                    </div>
                                                </div>
                                            </div>
                        
                        
                                            <div class="sender flex no-wrap">
                                                <div class="img-box">
                                                    <img src="{{ asset('images/web/profile-placeholder.png') }}" alt="">
                                                </div>
                                                <div class="details">
                                                    <div class="sender-info">
                                                        <p class="time">Nov 11, 3:06 PM</p>
                                                        <p class="message">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus ut nulla, cumque aliquid numquam eos totam dolorem illum doloremque, reprehenderit temporibus omnis reiciendis asperiores! Corporis blanditiis enim modi quia illo!</p>
                                                    </div>
                                                </div>
                                            </div> --}}

                                </div>

                                <div class="message-reply-section">

                                    <form class="send-section" id="message-send-form" action="{{ route('send.chat') }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="file-name-show">
                                            <p>custom.js</p>
                                        </div>
                                        <div class="attachment-box">
                                            <label for="attachment">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M20 10.9696L11.9628 18.5497C10.9782 19.4783 9.64274 20 8.25028 20C6.85782 20 5.52239 19.4783 4.53777 18.5497C3.55315 17.6211 3 16.3616 3 15.0483C3 13.7351 3.55315 12.4756 4.53777 11.547L12.575 3.96687C13.2314 3.34779 14.1217 3 15.05 3C15.9783 3 16.8686 3.34779 17.525 3.96687C18.1814 4.58595 18.5502 5.4256 18.5502 6.30111C18.5502 7.17662 18.1814 8.01628 17.525 8.63535L9.47904 16.2154C9.15083 16.525 8.70569 16.6989 8.24154 16.6989C7.77738 16.6989 7.33224 16.525 7.00403 16.2154C6.67583 15.9059 6.49144 15.4861 6.49144 15.0483C6.49144 14.6106 6.67583 14.1907 7.00403 13.8812L14.429 6.88674"
                                                        stroke="#001A72" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </label>
                                            <input type="file" name="attachment" class="attachment" id="attachment"
                                                disabled>
                                        </div>
                                        <div class="message">
                                            <input type="text" name="message" id="message" placeholder="message..."
                                                disabled>
                                        </div>
                                        <div class="send-box">
                                            <button class="send-message" type="submit" disabled>
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.15" d="M20 4L3 11L10 14L13 21L20 4Z"
                                                        fill="#001A72" />
                                                    <path d="M20 4L3 11L10 14L13 21L20 4Z" stroke="#001A72"
                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                        <input type="hidden" name="sender_id" id="sender_id">
                                        @if (auth('company')->check())
                                            <input type="hidden" id="me" name="me" value='company'>
                                            {{-- <input type="hidden" value='{{ company }}'> --}}
                                        @elseif(auth('user')->check())
                                            <input type="hidden" id="me" name="me" value='user'>
                                        @endif
                                    </form>
                                </div>

                                <div class="about-sender">
                                    <div class="img-box">
                                        <img src="{{ asset('images/web/profile-placeholder.png') }}" alt=""
                                            id="about-section-image">
                                    </div>

                                    <p class="title text-center mt-2" id="about-section-title"></p>
                                    <p class="company text-center" id="about-section-company"></p>
                                    <p class="from mt-4">From: <span id="about-section-country"></span></p>
                                    <p class="from mt-2">Contact: <span id="about-section-number"></span></p>

                                    <button class="back-to-chat">Back</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </section>

        </div>
        <script src="{{ asset('js/modal.js') }}"></script>
        <script src="{{ asset('js/navbar.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('owl/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('owl/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/owl_config.js') }}"></script>
        <script src="{{ asset('js/company_profile.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/chat.js') }}"></script>
        <script src="{{ asset('js/message.js') }}"></script>
        <script src="{{ asset('js/file-selected.js') }}"></script>
        <script src="{{ asset('js/clipboard.js') }}"></script>

        @if (auth('user')->check() || auth('company')->check())
            <script src="{{ asset('js/unread.js') }}"></script>
        @endif
        <script>
            $(document).ready(function() {

                $(document).on("click", ".single-result", function() {

                    var text = $(this).find("p");
                    $("#company-ajax").val(text.text());

                    $(".search-result").css({
                        "display": "none"
                    })

                });

                $("#company-ajax").on("input", function() {
                    var term = $("#company-ajax").val();

                    if (term != '') {

                        $(".search-result").css({
                            "display": "block"
                        })
                        var token = $('meta[name="csrf-token"]').attr('content');

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        $.ajax({
                            url: "{{ route('profile') }}",
                            type: 'POST',
                            dataType: "json",
                            data: {
                                _token: token,
                                term: term,
                            },
                            success: function(response) {

                                document.querySelectorAll(".single-result").forEach(search => {
                                    search.remove();
                                });
                                response.companies.forEach(element => {

                                    var single_result = document.createElement("div");
                                    single_result.classList.add("flex");
                                    single_result.classList.add("single-result");

                                    var img_box = document.createElement("div");
                                    img_box.classList.add("img-box");

                                    var company_box = document.createElement("div");
                                    company_box.classList.add("company-name");

                                    var p = document.createElement("p");
                                    p.textContent = element.name;

                                    var com_img = document.createElement("img");
                                    if (element.logo == null) {
                                        com_img.setAttribute('src',
                                            "/images/web/profile-placeholder.png"
                                        )
                                    } else {
                                        com_img.setAttribute('src',
                                            "/company_logos/" +
                                            element.logo)
                                    }

                                    img_box.appendChild(com_img);
                                    company_box.appendChild(p);
                                    single_result.appendChild(img_box);
                                    single_result.appendChild(company_box);
                                    document.querySelector(".search-result").appendChild(
                                        single_result);
                                });
                            }
                        });

                    } else {

                        $(".search-result").css({
                            "display": "none"
                        })
                    }
                });



            });
        </script>
    </body>
