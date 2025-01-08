let name;
(function($){
    $(document).ready(function(){
        // Set height of chat window
        $(".chat-message").height($("body").height() - $('.chat-message').offset().top);
        // Set height of input field
        $("#chat-text").height($("#chat-text").parent().height() - 8);
        // Get user name
        name = prompt("What is your name?");
        // Focus on input field
        $("#chat-text").focus();
    });

    // Send message
    $("#chat-text").on("keypress", function(e){
        // Check if enter key is pressed to send message to server
        if(e.keyCode == 13){
            // Get message
            let msg = name + ": " + $('#chat-text').val();
            // Send message
            $('#chat-text').val("");
            // Append message to chat window
            // $('</p>').html(msg).appendTo($('.chat-body'));
            // Scroll to bottom of chat window after sending message
            // $('.chat-body').scrollTop($('.chat-body').prop("scrollHeight"));

            $.post("data.php",{message: msg, sender: name}, function(data){
                $('.chat-body').html(data);
                $(".chat-body").scrollTop($(".chat-body").prop("scrollHeight"));
            });
            return false;
        }
    });

    setInterval(function(){
        $.post("data.php", {refresh:1}, function(data){
            $(".chat-body").html(data);
            $(".chat-body").scrollTop($(".chat-body").prop("scrollHeight"));
        });
    }, 5000);
})(jQuery);