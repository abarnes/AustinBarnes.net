<!--
    =================================
    Thank you for looking at my code!

    <?php /* And thank you for looking at my code on Github */ ?>

    This entire site is available on Github at https://github.com/abarnes/AustinBarnes.net

        -Austin
    =================================
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Austin Barnes - Knoxville, TN based Full Stack Web Developer</title>

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

        <div class="row normal-margins" id="header">
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

        <div id="content" class="row normal-margins">

            <div class="row" id="profile">
                <div class="col-sm-6">
                    <div class="photo-inner"><img src="img/photo.jpg" height="186" width="153"></div>
                    <h1>AUSTIN BARNES</h1>
                    <h3>FULL STACK WEB DEVELOPER</h3>
                    <p>Experienced developer and project manager with keen ability to bring together the technical, operational, and business perspectives to work with clients and company executives alike.
                    </p>
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


            <div class="row normal-margins" id="nav">
                <div class="col-xs-12">
                        <ul class="tabs">
                            <li class="tmenu active"><a href="#profile" class="tab-profile active" data-link="profile">Profile</a></li>
                            <li class="tmenu"><a href="#resume" class="tab-resume" data-link="resume">Resume</a></li>
                            <li class="tmenu"><a href="#portfolio" class="tab-portfolio" data-link="portfolio">Portfolio</a></li>
                            <li class="tmenu"><a href="#contact" class="tab-contact" data-link="contact">Contact</a></li>
                        </ul>
                </div>
            </div>

            <div class="row normal-margins hidden-block" id="resume">
                <img class="loading" src="img/loading.gif">
            </div>

            <div class="row normal-margins hidden-block" id="portfolio">
                <img class="loading" src="img/loading.gif">
            </div>

            <div class="row normal-margins hidden-block" id="contact">
                <img class="loading" src="img/loading.gif">
            </div>

        </div>

    </div>

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery.gmap.min.js"></script>
    <script src="js/custom.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-34501402-1', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>