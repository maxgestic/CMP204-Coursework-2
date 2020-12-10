$(function () {

    $('#form').on('submit', function (event) {

        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'php/add_message.php',
            data: $('form').serialize(),
            success: function () {
                document.getElementById("message_box").value = "";
                alert('message was submitted');
            },
            error: function (){
                alert('fail, please make sure you are logged in');

            }


        });
    });
});