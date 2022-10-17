<!DOCTYPE html>
<html lang="en">

<head>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<meta name="csrf-token" content="{{ csrf_token() }}">
				<title>Connectifly - @yield("title")</title>
				<link rel="stylesheet" href="{{ asset('css/app.css') }}">
				<link rel="stylesheet" href="{{ asset('custom/css/app.css') }}">
				<link rel="shortcut icon" href="{{ asset('images/web/connect-it-logo2.png') }}" type="image/x-icon">
				<script src="https://kit.fontawesome.com/7ae40850c4.js" crossorigin="anonymous"></script>
				<link rel="stylesheet" href="{{ asset('owl/dist/assets/owl.carousel.min.css') }}">
				<link rel="stylesheet" href="{{ asset('owl/dist/assets/owl.theme.default.min.css') }}">
</head>

<body>

				<div class="page-wrapper">
								@include("subviews.header")
								@yield('content')
				</div>

				@include("subviews.footer")

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

                @if (auth("user")->check() || auth("company")->check())
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

</html>
