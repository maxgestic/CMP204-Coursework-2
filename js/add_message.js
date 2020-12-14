$(function () {

    $('#form').on('submit', function (event) {

        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'php/add_message.php',
            data: $('form').serialize(),
            success: function () {
                document.getElementById("message_box").value = "";
                alert('Message has been submitted!');
            },
            error: function (){
                alert('Failed to post message, please make sure to be logged in!');

            }


        });
    });
});