$(document).ready(function () {

    function message_send() {

        let id = $("#top_sender_profile img").attr("data-id");
        let url = "/chats/" + id;
        var token = $('meta[name="csrf-token"]').attr('content');

        // $(".replies .preloader").css({
        //     "display": "grid"
        // });

        $.ajax({
            url: url,
            type: 'GET',
            dataType: "json",
            data: {
                _token: token,
                id: id,
            },
            success: function (response) {

                document.querySelectorAll(".sender").forEach(search => {
                    search.remove();
                });
                document.querySelectorAll(".you").forEach(search => {
                    search.remove();
                });

                document.querySelectorAll("#all_chats .single-inbox").forEach(single => {
                    single.remove();
                });

                //creating messages
                response.jobs.conversation.forEach(element => {
                    // console.log(response.jobs.conversation);

                    // console.log(element)
                    var sender = document.createElement("div");
                    sender.classList.add("flex", "no-wrap");

                    var img_box = document.createElement("div");
                    img_box.classList.add("img-box");

                    var img = document.createElement("img");


                    if (element.sender == $("#me").val()) {
                        sender.classList.add("you");

                        img.setAttribute("src",
                            $("#user_profile_image").attr("src")
                        );
                    } else {
                        sender.classList.add("sender");

                        if (response.jobs.profile != null) {

                            img.setAttribute("src",
                                "/profile_images/" +
                                response.jobs.profile);

                        } else if (response.jobs.logo != null) {
                            img.setAttribute("src",
                                "/company_logos/" +
                                response.jobs.logo);

                        } else {
                            img.setAttribute("src",
                                "/images/web/profile-placeholder.png"
                            );
                        }
                    }

                    //senders
                    if ($("#me").val() != "user" && response.jobs.profile != null) {
                        $("#top_sender_profile img").attr("src", "/profile_images/" +
                            response.jobs.profile);
                        $("#about-section-image").attr("src", "/profile_images/" +
                            response.jobs.profile);
                        $("#about-section-title").text()
                    } else if ($("#me").val() != "company" && response.jobs.logo != null) {
                        $("#top_sender_profile img").attr("src", "/company_logos/" +
                            response.jobs.logo);
                        $("#about-section-image").attr("src", "/company_logos/" +
                            response.jobs.logo);
                    } else {

                        $("#top_sender_profile img").attr("src", "/images/web/profile-placeholder.png");
                        $("#about-section-image").attr("src", "/images/web/profile-placeholder.png");
                    }

                    //senders title and description
                    if (response.jobs.title != null) {
                        $("#about-section-title").text(response.jobs.title)
                        $("#about-section-company").text(response.jobs.company)
                    } else if (response.jobs.description != null) {
                        $("#about-section-title").text(response.jobs.website);
                        $("#about-section-company").text(response.jobs.description);
                    } else {
                        $("#about-section-title").text(null);
                        $("#about-section-company").text(null);
                    }


                    //senders country
                    if (response.jobs.country != null) {
                        $("#about-section-country").text(response.jobs.country)
                    } else if (response.jobs.country != null) {
                        $("#about-section-country").text(response.jobs.country);
                    } else {
                        $("#about-section-country").text("Not Available");
                    }

                    //senders phone
                    if (response.jobs.phone != null) {
                        $("#about-section-number").text(response.jobs.phone)
                    } else if (response.jobs.phone != null) {
                        $("#about-section-number").text(response.jobs.phone);
                    } else {
                        $("#about-section-number").text("Not Available");
                    }

                    //senders name
                    if ($("#me").val() != "user") {
                        $("#top_sender_name a").text(response.jobs.first_name + " " + response.jobs.last_name);
                    } else {
                        $("#top_sender_name a").text(response.jobs.name);
                    }

                    var details = document.createElement("div");
                    details.classList.add("details");

                    var sender_info = document.createElement("div");
                    sender_info.classList.add("sender-info");

                    var time = document.createElement("p");
                    time.classList.add("time");
                    // var human_time = element.created_at;
                    time.textContent = element.created_at;

                    var message = document.createElement("p");
                    message.classList.add("message");
                    message.textContent = element.message;

                    img_box.appendChild(img);
                    sender.appendChild(img_box);
                    sender_info.appendChild(time);
                    if(element.file !=null){
                        var file_link= document.createElement("a");
                        file_link.classList.add("message_file");
                        file_link.setAttribute("href", "/chat_files/"+element.file);
                        file_link.setAttribute("download", "true");
                        var file_box= document.createElement("div");
                        var file_span= document.createElement("span");
                        var file_i= document.createElement("i");
                        file_i.classList.add("far","fa-file");
                        var file_p=document.createElement("p");
                        file_p.textContent = element.file;

                        file_span.appendChild(file_i);
                        file_box.appendChild(file_span);
                        file_box.appendChild(file_p);
                        file_link.appendChild(file_box);
                        sender_info.appendChild(file_link);
                    }
                    sender_info.appendChild(message);
                    details.appendChild(sender_info);
                    sender.appendChild(details);
                    document.querySelector(".replies").appendChild(sender);
                });

                response.users.forEach(element => {

                    console.log(element);

                    let single_inbox= document.createElement("div");
                    single_inbox.classList.add("single-inbox", "flex" ,"no-wrap");
                    single_inbox.setAttribute("data-id", element.id);


                    //creating senders image
                    let user_img_box=document.createElement("div");
                    user_img_box.classList.add("img-box");

                    var user_inner_img_src = "/images/web/profile-placeholder.png";

                    let user_inner_img = document.createElement("img");

                    if(element.profile != null){
                        user_inner_img_src = "/profile_images/" + element.profile;
                    } else if (element.logo != null) {
                        user_inner_img_src = "/company_logos/" + element.logo;
                    }

                    user_inner_img.setAttribute("src", user_inner_img_src);

                    //creating senders name and unread messages
                    let user_name=document.createElement("div");
                    user_name.classList.add("ml-2", "name-box");

                    let user_link = document.createElement("a");
                    user_link.classList.add("auth-name");
                    user_link.setAttribute("href", "javascript:void(0)");

                    if (element.name !=null) {
                        user_link.textContent = element.name;
                    } else if (element.first_name !=null) {
                        user_link.textContent = element.first_name +" "+ element.last_name;
                    }

                    if (element.conversation_count > 0) {

                        var unread_span = document.createElement("span");
                        unread_span.id = "unread";
                        user_link.appendChild(unread_span);

                    }

                    user_img_box.appendChild(user_inner_img);
                    single_inbox.appendChild(user_img_box);
                    single_inbox.appendChild(user_link);

                    document.querySelector("#all_chats").appendChild(single_inbox);

                });


                // $(".replies .preloader").css({
                //     "display": "none"
                // });

                $("#message-send-form #sender_id").val(id);
            }
        });
    }

    $("#message-send-form").on("submit", function (event) {

        event.preventDefault();
        let url = "/chats";
        let formData = new FormData(this);
        var token = $('meta[name="csrf-token"]').attr('content');
        var message = $('#message').val();
        $("#message-send-form button").attr("disabled", true);
        $("#message-send-form input").attr("disabled", true);
        $(".file-name-show p").append(" Sending...");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "/chats",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                document.getElementById('message-send-form').reset();
                message_send();
                $("#message-send-form button").attr("disabled", false);
                $("#message-send-form input").attr("disabled", false);
                $(".file-name-show p").text("");
                $(".file-name-show").css({
                    "opacity" : "0",
                });

                setTimeout(() => {
                    document.querySelector(".replies").scrollTop = document.querySelector(".replies").scrollHeight - document.querySelector(".replies").clientHeight;
                }, 500);
            }
        })

    })

    setInterval(() => {

        if($("#top_sender_profile img").attr("data-id") != undefined){
            message_send();
        }

    }, 1000);


});
