$(document).ready(function(){

    setInterval(() => {


        var token = $('meta[name="csrf-token"]').attr('content');
        var message = $('#message').val();
        var id = $("#nav-chat-link").attr("data-user");
        var url = "/chats/unread/" + id;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: url,
            data: {id},
            success: function (response) {
                console.log(response);
                if(response.unread > 0){
                    document.querySelectorAll(".unread-dot").forEach(unread => {
                        unread.style.display = "block";
                    });
                } else {
                    document.querySelectorAll(".unread-dot").forEach(unread => {
                        unread.style.display = "none";
                    });
                }
            }
        })




    }, 1000);

})
