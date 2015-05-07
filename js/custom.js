var loaded = []; //store a list of pages already loaded

$(document).ready(function(){
    //disable jQuery mobile "loading" message because jQuery mobile is only used for swipe actions
    $.mobile.loading().hide();

    //nav bar hover effect
    $('.tabs li a').hover(
        function() {
            $(this).stop().animate({ marginTop: "-7px" }, 200);
        },function(){
            $(this).stop().animate({ marginTop: "0px" }, 300);
        }
    );

    //handle tab navigation
    $('.tmenu a').click(function(){
        var speed = 500; //speed of transitions
        var name = $(this).attr('data-link'); //name of clicked tab, such as "resume"

        //move the "active" class to the correct tag
        $('.tabs .active').removeClass('active');
        $(this).addClass('active').parents('li.tmenu').addClass('active');


        if ($('.hidden-block:visible').length) {    //currently open tab is NOT profile tab

            //hide name and tagline on profile page
            if (name=="profile") $('#logo').hide(speed);
            //animate content block transition
            $('.hidden-block:visible').slideUp(speed,function(){
                load_tab(name,speed);
            });

        } else {                                    //profile tab is currently open

            $('#logo').show(speed);
            $('#profile').slideUp(speed,function(){
                load_tab(name,speed);
            });

        }

        return false;
    });

});

function load_tab(name,speed) {
    if (!(name in window.loaded)) {
        $.get(name+'.html',function(data){$('#'+name).html(data)});
        window.loaded.push(name);
    }
    $('#'+name).slideDown(speed);
    callbacks(name);
    return true;
}

//handle tab-specific callbacks when changing tabs
function callbacks(name) {
    if (name=="portfolio" && (name in loaded)) show_grid();
    return true;
}

//submit contact form
var $contactform 	= $('#contactform'),
    $success		= 'Your message has been sent. Thank you!';
$contactform.submit(function(){
    $.ajax({
        type: "POST",
        url: "php/emailer.php",
        data: $(this).serialize(),
        success: function(msg)
        {
            if(msg == 'sent'){
                response = '<div class="success">'+ $success +'</div><br>';
            }
            else{
                response = '<div class="error">'+ msg +'</div><br>';
            }
            // Hide any previous response text
            $(".error,.success").remove();
            // Show response message
            $contactform.prepend(response);
        }
    });
    return false;
});