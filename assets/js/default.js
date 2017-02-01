$(document).ready(function() {

    $('.cell').each(function() {
        $(this).click(function () {
            $(this).toggleClass('active');
         });
    });

    $('.submit').click(function () {

        var alive = [];

        $('.active').each(function() {
            alive.push(this.id)
        });

        console.log(alive);

        $.ajax({
            url: 'work.php',
            type: "POST",
            dataType: "json",
            data: {
               cells : alive
            },
            success: function(data){
                $.each(data.number, function(index,value){
                    var input = $("#"+value);
                    console.log(input);
                    input.addClass('active');
                });

            }
        });
    })

});

