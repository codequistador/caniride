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
