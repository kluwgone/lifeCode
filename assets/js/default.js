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
            url: 'work.php?width='+width+'&height='+height,
            type: "POST",
            dataType: "json",
            data: {
               cells : alive
            },
            success: function(data){
                $.each(data.new, function(index,value){
                    var input = $("#"+value);
                    console.log(input);
                    input.addClass('active');
                });
                $.each(data.delete, function(index,value){
                    var input = $("#"+value);
                    console.log(input);
                    input.removeClass('active');
                });

            }
        });
    })

});

