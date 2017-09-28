x<!DOCTYPE html>
<html>
<head>
  <title>Welcom to SamenDoorSamen</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   

        <!--Calendar CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.print.css" media="print">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css">
    	
         <!-- Calender JS librarys-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

           <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/projectweek/assests/css/style.css">

    <!-- Custom fonts -->
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
        
  
</head>
<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img class="nav-logo" src="/projectweek/assests/imgs/sds.jpg"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/projectweek/index.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/projectweek/index.php/welcome/about">Over Ons</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/projectweek/index.php/welcome/projects">Projecten</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/projectweek/index.php/welcome/events">Events</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/projectweek/index.php/welcome/join">Doe mee</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/projectweek/index.php/welcome/contact">Contact</a>
                    </li>
                </ul>
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Content -->
    <h1 class="calender-title">Onze events</h1>
    <hr class="star-primary">
<div class="container calendar-text row col-lg-4">
    <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin augue elit, tristique ac ligula quis, dapibus posuere mauris. Aliquam risus dolor, mattis eget lobortis quis, sodales in leo. Duis ut arcu a augue pulvinar convallis. Nunc in malesuada velit, non feugiat urna. Sed feugiat leo ex, et venenatis purus auctor et. Vivamus eget gravida metus, ac imperdiet magna. Morbi quis tellus et tellus malesuada laoreet sit amet nec ligula. Mauris sed molestie mi. Phasellus lacinia justo lacus, vel varius libero laoreet in.

            In tempus erat vitae malesuada scelerisque. Duis et diam velit. Morbi egestas quis dui sed dignissim. Curabitur dignissim a ipsum sit amet pharetra. Vivamus dignissim sem et quam vulputate aliquet.

        </p>
</div>
<div class="container-fluid row">

    <div class="col-lg-7">
    
	<div id='calendar'>
	
	<script type="text/javascript">
	console.log(<?php echo json_encode($data);?>);
	$(document).ready(function() {

    	// page is now ready, initialize the calendar...

	   	 $('#calendar').fullCalendar({
	    	header: 
	    	{
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay',
			},
			navLinks: true, // can click day/week names to navigate views
	        editable: true,
	        eventLimit: true, // allow "more" link when too many events
			events:<?php echo json_encode($data);?>
	  	 })

	});
	</script>
	</div>
    </div>  
</div>

<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Locatie</h3>
                        <p> Admiraliteitskade 85 c 01 <br>
                            3063 EG Rotterdam</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/stichtinghoedjevanpapier/" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://slack.com/" class="btn-social btn-outline"><span class="sr-only">Slack</span><i class="fa fa-hashtag"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>SamenDoorSamen is onderdeel van Hoedje van Papier</h3>
                        <p>
                        <a href="/projectweek/index.php/welcome/about/#about">SamenDoorSamen werkt samen met </a>
                        </p>
                        <a href="https://www.stichtinghoedjevanpapier.nl/"><img class="footer-logo" src="/projectweek/assests/imgs/hvp.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; SamedDoorSamen 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>


    
        <!-- Custom Jquery -->
    
    <script type="text/javascript" src="/projectweek/assests/js/js.js"></script>
    

</body>
</html>