<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Astronomy</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- Prepare a container for your calendar. -->
    <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>
    <!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"/>
  </head>

  <body>
        <?php 
            include('includes/nav.html');
        ?>
        <div id='main' class='container'>
            <div id='ngts_summary' class='col-lg-6 col-md-12 col-sm-12 col-xs-12'>
                <div id='ngts_cover'>
                    <img id='ngts_img' src="img/NGTS_original.jpg">
                </div>
                <p class='facility_summary'>
                    The Next Generation Transit Survey (NGTS) is an array of twelve 20-cm robotic telescopes 
                    located at the European Southern Observatory (ESO) Paranal site in the Atacama Desert, Chile.
                    NGTS is surveying the southern sky for transiting exoplanets around bright stars and is 
                    sensitive to Neptune and super-Earth sized exoplanets.

                    NGTS has been observing robotically since January 2015. The 12th telescope was installed in 
                    Feb 2016. We recently completed our first season of survey observations and the publication
                    of our initial discoveries is imminent.
                </p>
            </div>

            <div id='nites_w1m_summary' class='col-lg-6 col-md-12 col-sm-12 col-xs-12'>
                <div id='nites_w1m_cover'>
                    <img id='w1m_img' src="img/NITES_W1M_original.jpg">
                </div>
                <p class='facility_summary'>
                    The Near Infra-red Transiting ExoplanetS (NITES) telescope is 0.4-m semi-robotic telescope 
                    located at El Observatorio del Roque de los Muchachos (ORM) on La Palma in the Canary Islands. 
                    NITES is used to obtain high-precision light curves of transiting exoplanets from the SuperWASP
                    survey.

                    Next to the NITES telescope is the Warwick 1-m (W1m) robotic telescope. W1m is used to measure 
                    a host of transient objects (variable white dwarfs, eclipsing binaries, transiting exoplanets) 
                    simultaneously in two colours.
                </p>
            </div>

            <div id='superwasp_cover' class='col-lg-6 col-md-12 col-sm-12 col-xs-12'>
                <div id='swasp_cover'>
                    <img id='swasp_img' src="img/swasp_photo.jpg">
                </div>
                <p class='facility_summary'> <!-- class='facility_summary' -->
                    SuperWASP (Wide Angle Survey for Planets) consists of 2 robotic telescopes (ORM and South Africa) 
                    each with 8 wide field cameras (Cannon 200mm f/1.8) and has been in operation since 2004. 
                    With over 160 exoplanets discovered and confirmed, SuperWASP is the most sucessful ground-based 
                    transiting exoplanet survey to date. 
                </p>
            </div>
        </div>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html>
