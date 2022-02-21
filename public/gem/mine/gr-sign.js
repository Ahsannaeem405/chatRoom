$(document).ready(function(){

    $(".login_type").click(function(){
        $(".login_type").removeClass('active');
        $(this).addClass('active');
        var type=$(this).attr('typ');
        if(type=='login')
        {
            $(".gr_sign").show();
            $(".guest").hide();
        }
        else {
           $(".guest").show();
           $(".gr_sign").hide();
        }
    });
});
