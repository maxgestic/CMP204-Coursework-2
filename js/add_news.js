$(function () {
    $('form').on('submit', function (event) {
        // using this page stop being refreshing
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'php/add_news.php',
            data: $('form').serialize(),
            success: function () {
                alert('form was submitted');
            },
            error: function (){
                alert('fail');

            }


        });
    });
});