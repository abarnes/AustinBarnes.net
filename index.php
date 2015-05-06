<!--
    =================================
    Thank you for looking at my code!
    <?php /*-- And thanks for looking at my code on Github --*/ ?>

    This entire site is available on Github at https://github.com/abarnes

        -Austin
    =================================
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Austin Barnes - Professional Web Developer &amp; Entrepreneur</title>

    <!-- Bootstrap -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">

        <div class="row" id="header">
            <div class="col-sm-8">
                <div id="logo">
                    <h2>AUSTIN BARNES</h2>
                    <h4>FULL STACK WEB DEVELOPER</h4>
                </div>
            </div>
            <div class="col-sm-4">
                <ul class="socialicons">
                    <li><a href="javascript:void(0);" class="social-text">SOCIAL PROFILES</a></li>
                    <li><a href="https://www.facebook.com/AustinBarnes.net" class="social-facebook"></a></li>
                    <li><a href="http://www.linkedin.com/in/austinbarnes1" class="social-in"></a></li>
                </ul>
            </div>
        </div>

        <div id="content" class="row">
            <div class="row" id="profile">
                <div class="col-sm-6">
                    <div class="photo-inner"><img src="img/photo.jpg" height="186" width="153"></div>
                    <h1>AUSTIN BARNES</h1>
                    <h3>FULL STACK WEB DEVELOPER</h3>
                    <p>I work with companies to bridge the gap between the business world and the technical world, and enjoy working with start-up companies.</p>
                    <br style="clear:both;">
                </div>
                <div class="col-sm-6">
                    <ul class="personal-info">
                        <li><label>Name</label><span>Austin Barnes</span></li>
                        <li><label>Location</label><span>Knoxville, TN</span></li>
                        <li><label>Email</label><span>austin@austinbarnes.net</span></li>
                        <li><label>Phone</label><span>214 794 5328</span></li>
                        <li><label>Website</label><span>http://austinbarnes.net</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="nav">
            <div class="col-xs-12">
                <ul class="tabs">
                    <li class="tmenu active"><a href="#profile" class="tab-profile active" data-link="profile">Profile</a></li>
                    <li class="tmenu"><a href="#resume" class="tab-resume" data-link="resume">Resume</a></li>
                    <li class="tmenu"><a href="#portfolio" class="tab-portfolio" data-link="portfolio">Portfolio</a></li>
                    <li class="tmenu"><a href="#contact" class="tab-contact" data-link="contact">Contact</a></li>
                </ul>
            </div>
        </div>

        <?php include('resume.php'); ?>

        <?php include('portfolio.php'); ?>

        <?php include('contact.php'); ?>

    </div>

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery.gmap.min.js"></script>

    <script type="text/javascript">
        $('.tabs li a').hover(
            function() {
                $(this).stop().animate({ marginTop: "-7px" }, 200);
            },function(){
                $(this).stop().animate({ marginTop: "0px" }, 300);
            }
        );
        function map(){
            $('#map').gMap({
                address: 'Knoxville, TN, USA',
                zoom: 6,
                markers: [
                    { 'address' :'Knoxville, TN, USA' }
                ]
            });
        };
        $('.tmenu a').click(function(){
            var speed = 500;
            var name = $(this).attr('data-link');
            $('.tabs .active').removeClass('active');
            $(this).addClass('active').parents('li.tmenu').addClass('active');
            if ($('.hidden-block:visible').length) {
                if (name=="profile") $('#logo').hide(speed);
                $('.hidden-block:visible').slideUp(speed,function(){
                    $('#'+name).slideDown(speed);
                });
            } else {
                $('#logo').show(speed);
                $('#profile').slideUp(speed,function(){
                    $('#'+name).slideDown(speed);
                    if (name=="contact") map();
                });
            }
            return false;
        });

        var $contactform 	= $('#contactform'),
        $success		= 'Your message has been sent. Thank you!';

        $contactform.submit(function(){
            $.ajax({
                type: "POST",
                url: "php/contact.php",
                data: $(this).serialize(),
                success: function(msg)
                {
                    if(msg == 'SEND'){
                        response = '<div class="success">'+ $success +'</div>';
                    }
                    else{
                        response = '<div class="error">'+ msg +'</div>';
                    }
                    // Hide any previous response text
                    $(".error,.success").remove();
                    // Show response message
                    $contactform.prepend(response);
                }
            });
            return false;
        });
    </script>
</body>
</html>