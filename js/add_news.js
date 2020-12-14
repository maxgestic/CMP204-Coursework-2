$(function () {

    $('#form').on('submit', function (event) {

        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'php/add_news.php',
            data: $('form').serialize(),
            success: function () {
                alert('You have been added to the newsletter!');
            },
            error: function (){
                alert('fail');

            }


        });
    });
});