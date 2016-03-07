<?php
date_default_timezone_set('America/Denver');
function is_odd( $int ) {
	if ( $int & 1 ) :
		return 'odd';
	else :
		return 'even';
	endif;
}

$day = date('j');
$status = is_odd($day);

if ( $status == 'even' ) {
	$mcstatus = 'open';
	$mcclass = 'alert-success';
	$ccstatus = 'closed';
	$ccclass = 'alert-danger';
} else {
	$mcstatus = 'closed';
	$mcclass = 'alert-danger';
	$ccstatus = 'open';
	$ccclass = 'alert-success';
}

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Where Can I Ride? | Salt Lake City</title>

	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">


	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->

  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="../css/main.css">

</head>
<body class="text-center">

<div class="container-fluid">
  <div class="row">
  	<div class="col-md-12">
			  <div class="page-header">
			    <?php if ( $status == 'odd' ) : ?>
					<h1>Oddly enough...</h1>
					<?php else : ?>
					<h1>I can't even...</h1>
					<?php endif; ?>
					<h3>Where can I ride my bike on <?php echo date('l, F j, Y'); ?>?</h3>
			  </div>
			  <div class="panel-body">
			    <div class="alert <?php echo $mcclass; ?>">
						<h2>Upper MillCreek</h2>
						<h3>is <?php echo $mcstatus; ?> to bicycles today.*</h3>
					</div>
					<div class="alert <?php echo $ccclass; ?>">
						<h2>City Creek Canyon</h2>
						<h3>is <?php echo $ccstatus; ?> to bicycles today.**</h3>
					</div>
					<div class="fine_print">
						<p class="text-muted">* Upper MillCreek Trails (Big Water, Little Water, Great Western) are open to cyclists on even days. <a target="_blank" href="http://slco.org/recreation/parks/millCreekCanyon/">Click here for more information.</a></p>
						<p class="text-muted">** City Creek is open to bicycles all winter and on odd days from the last Monday in May until the last even day in September. Bicycles are not allowed on Memorial Day, July 4, Pioneer Day, or Labor Day, regardless of the day. <a target="_blank" href="http://www.bikeslc.com/wheretoride/multi-usepavedtrails/citycreekmemorygrove.html">Click here for more information.</a></p>
					</div>
			</div>
  	</div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
  	<div class="col-md-12">
			<div class="footer center">
				<div class="inner">
					<p>&copy; <?php echo date('Y'); ?> <a target="_blank" href="http://www.justindaining.com">JustinDaining.com</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
		
	<!-- JS 
	================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/all.min.js"></script>
	<!-- Make IE8 and below responsive by adding CSS3 MediaQuery support -->
	<!--[if lt IE 9]>
	  <script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65209726-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Needed for gulp-connect-php to work -->
<script async="" src="/browser-sync/browser-sync-client.2.11.1.js"></script>

</body>
</html>