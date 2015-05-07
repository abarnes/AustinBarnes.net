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
                $('#'+name).slideDown(speed);
                callbacks(name);
            });
        } else {                                    //profile tab is currently open
            $('#logo').show(speed);
            $('#profile').slideUp(speed,function(){
                //show name & tagline above content
                $('#'+name).slideDown(speed);
                callbacks(name);
            });
        }

        return false;
    });

});

//handle tab-specific callbacks when changing tabs
function callbacks(name) {
    if (name=="contact") map();
    if (name=="portfolio") show_grid();
    return true;
}

//expand portfolio item
$(document).ready(function() {
    $('.portfolio-item a.more-info').click(function(){
        $('.portfolio-hide').hide();
        var clicked = $(this).parents('.portfolio-item');
        clicked.find('.portfolio-icon').hide();
        $('.portfolio-item').not(clicked).hide(400,function(){
            clicked.addClass('force-width').find('a.more-info').hide();
            clicked.find('.details').show(300,function(){
                clicked.find('.portfolio-icon').fadeIn(200);
                $('a.close-link').fadeIn(200)
            });
        });
    });
    $('a.close-link').click(function(){$('.tab-portfolio').trigger('click');});

    $(".carousel").swiperight(function() {
        $(this).carousel('prev');
    });
    $(".carousel").swipeleft(function() {
        $(this).carousel('next');
    });
});

//return to portfolio grid
function show_grid() {
    $('.portfolio-item').removeClass('force-width').show();
    $('.details,a.close-link').hide();
    $('a.more-info, .portfolio-hide').show();
}

//load map on contact page
function map(){
    var address = 'Knoxville, TN, USA';
    $('#map').gMap({
        address: address,
        zoom: 6,
        markers: [
            { 'address' :address }
        ]
    });
};

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