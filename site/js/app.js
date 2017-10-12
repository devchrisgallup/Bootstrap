var counter = 0; 
$(function(){
    var current_page_URL = location.href;
    $( "a" ).each(function() {
        if ($(this).attr("href") !== "#") {
            counter++; 
            var target_URL = $(this).prop("href");
            if (target_URL == current_page_URL) {
            $('nav a').parents('li, ul').removeClass('active');
            $(this).parent('li').addClass('active');
                return false;
            } 
        }
    }); 
    if(counter === 1) {
        $('#home').addClass('active'); 
    } else {
        $('#home').removeClass('active'); 
    }
});
