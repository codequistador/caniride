<?php 

$city = 'Salt Lake City';
$time_zone = 'America/Denver';

include '../includes/header.php'; 

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

<?php include '../includes/footer.php'; ?>