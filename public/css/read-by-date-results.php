<?php $pageNav = "Read";
$pageSubNav = "Date";
$entryDateRandom = rand( strtotime("May 1 2001"), strtotime("Feb 1 2016") );
$entryDate = date("F j, Y", $entryDateRandom);
$entryMonth = date('F', strtotime($entryDate));
$entryDay = date('j', strtotime($entryDate));
$entryYear = date('Y', strtotime($entryDate));
$batchName = date("F Y", $entryDateRandom);
$pageTitle = "Read: $entryDate";
$todayDate = date("m/d/Y");
?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>

<!-- Additional calls for the datepicker -->
      <link rel="stylesheet" type="text/css" media="all" href="css/daterangepicker.css" />
      <script type="text/javascript" src="js/moment.js"></script>
      <script type="text/javascript" src="js/daterangepicker.js"></script>


<body>


<?php include 'nav-main.php';?>
<?php $entryPage = "date" ?>

<div class="container">
<div class="ui-20">
<div class="container">
<div class="row">
<h2>Read</h2>


<?php include 'nav-subnav-read.php';?>


	<!-- Datepicker -->
<div class="col-md-12">
	<div class="row">
	<div class="col-md-3">
	<h4>Pick Another Date</h4>
	</div>
	</div>
	<div class="row">
	<div class="col-md-3">
	<input type="text" class="form-control" name="daterange" value=""/>
	</div>
	<a href="read-by-date-results.php" class="btn btn-primary">Go</a>
	<hr>
	</div>
</div>


<div class="col-md-3 col-sm-6">
<div class="ui-item sidebar-date">
<div class="sidebar-date">
	<span class="month"><?php echo $entryMonth; ?></span>
	<h1 class="day"><?php echo $entryDay; ?></h1>
	<span class="year"><?php echo $entryYear; ?></span>
</div>
</div>
</div>




<! Start Right Side Content -->
<div class="col-sm-9" style="padding-top:20px">
<div class="row">
<div class="col-md-12">
<p>6 writers finished this batch</p>


<!-- Photos in a row-->
<div class="row">
	<div class="col-md-12 carouselThumbnails">
		<ul class="list-inline">
		<li data-target="#entryCarousel" data-slide-to="0"><a href="#0"><img class="pix-link active" src="art/member-photos/0.png"></a></li>
		<li data-target="#entryCarousel" data-slide-to="1"><a href="#1"><img class="pix-link" src="art/member-photos/1.png"></a></li>
		<li data-target="#entryCarousel" data-slide-to="2"><a href="#2"><img class="pix-link" src="art/member-photos/2.png"></a></li>
		<li data-target="#entryCarousel" data-slide-to="3"><a href="#3"><img class="pix-link" src="art/member-photos/3.png"></a></li>
		<li data-target="#entryCarousel" data-slide-to="4"><a href="#4"><img class="pix-link" src="art/member-photos/4.png"></a></li>
		<li data-target="#entryCarousel" data-slide-to="5"><a href="#5"><img class="pix-link" src="art/member-photos/5.png"></a></li>
		</ul>
	</div>
</div>
</div>

</div>
</div>
</div>

<! End Right Side Content -->

<! Start Full Page Entry Content -->


<div class="row">
<div class="container">
	<div class="row">
    	<div class="col-md-12">

<?php if($_GET["batchDisplay"] == "list") {?>

<!-- Previous and Next buttons -->
						<nav>
						<ul class="pager">
						<a href="read-by-date-results.php" class="btn btn-sm btn-primary">Read as Slideshow</a>
						</ul>
						</nav>
<a name="0"></a> 
						<hr>
						<div class="row">
						<div>
						<?php $memberName = "Neena Kagen" ?>
						<?php $memberOrder = "0" ?>
						<?php $memberPhoto = "0" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
<a name="1"></a> 
						<hr>
						<div class="row">
						<div>
						<?php $memberName = "Chairman Mao" ?>
						<?php $memberOrder = "1" ?>
						<?php $memberPhoto = "1" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
<a name="2"></a> 
						<hr>
						<div class="row">
						<div>
						<?php $memberName = "President Trump" ?>
						<?php $memberOrder = "2" ?>
						<?php $memberPhoto = "2" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>

<a name="3"></a>
						<hr>
						<div class="row">
						<div>
						<?php $memberName = "Jackie Oh Oh Oh" ?>
						<?php $memberOrder = "3" ?>
						<?php $memberPhoto = "3" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
<a name="4"></a>
						<hr>
						<div class="row">
						<div>
						<?php $memberName = "Ranjeet" ?>
						<?php $memberOrder = "4" ?>
						<?php $memberPhoto = "4" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
<a name="5"></a>
						<hr>
						<div class="row">
						<div>
						<?php $memberName = "A T-Rex" ?>
						<?php $memberOrder = "5" ?>
						<?php $memberPhoto = "5" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
                    </div>


<?php } else {?>

<!-- Previous and Next buttons -->
						<nav>
						<ul class="pager">
						<li class="previous"><a href="#entryCarousel" data-slide="prev" aria-label="Previous"><span aria-hidden="true">&larr;</span> Previous Writer</a></li>
						<a href="read-by-date-results.php?batchDisplay=list" class="btn btn-sm btn-primary">Read as List</a>
						<li class="next"><a href="#entryCarousel" data-slide="next" aria-label="Next">Next Writer <span aria-hidden="true">&rarr;</span></a></li>
						</ul>
						</nav>

<hr>
<!-- Carousel -->

            <div id="entryCarousel" class="carousel slide" data-interval="false">
                <div class="carousel-inner">
					<!-- First Entry Slide -->
	                <div class="item active">
						<div class="row">
						<div>
						<?php $memberName = "Neena Kagen" ?>
						<?php $memberOrder = "0" ?>
						<?php $memberPhoto = "0" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
                    </div>

					<!-- Second Entry Slide -->
                    <div class="item">
						<div class="row">
						<div>
						<?php $memberName = "Chairman Mao" ?>
						<?php $memberOrder = "1" ?>
						<?php $memberPhoto = "1" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
                     </div>

					<!-- Third Entry Slide -->
                    <div class="item">
						<div class="row">
						<div>
						<?php $memberName = "President Trump" ?>
						<?php $memberOrder = "2" ?>
						<?php $memberPhoto = "2" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
                    </div>

					<!-- Fourth Entry Slide -->
                    <div class="item">
						<div class="row">
						<div>
						<?php $memberName = "Jackie Oh Oh Oh" ?>
						<?php $memberOrder = "3" ?>
						<?php $memberPhoto = "3" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
                    </div>

					<!-- Fifth Entry Slide -->
                    <div class="item">
						<div class="row">
						<div>
						<?php $memberName = "Ranjeet" ?>
						<?php $memberOrder = "4" ?>
						<?php $memberPhoto = "4" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
                    </div>

					<!-- Sixth Entry Slide -->
                    <div class="item">
						<div class="row">
						<div>
						<?php $memberName = "A T-Rex" ?>
						<?php $memberOrder = "5" ?>
						<?php $memberPhoto = "5" ?>
						<?php include 'panel-member-profile.php';?>

						<!-- Call Single Entry Panel -->
						<?php $entryPage = "date" ?>
						<?php $entryDateDisable = "disabled" ?>
						<?php include 'panel-entry-single.php';?>
						</div>
						</div>
                    </div>


                </div>              
            </div><!-- End Carousel -->  
<!-- Previous and Next buttons -->
						<nav>
						<ul class="pager">
						<li class="previous"><a href="#entryCarousel" data-slide="prev" aria-label="Previous"><span aria-hidden="true">&larr;</span> Previous Writer</a></li>
						<li class="next"><a href="#entryCarousel" data-slide="next" aria-label="Next">Next Writer <span aria-hidden="true">&rarr;</span></a></li>
						</ul>
						</nav>

<?php }?>
    	</div>
    </div>
</div>


</div>
</div>
</div>
</div>


<?php include 'modal-share.php';?>
<?php include 'footer.php';?>
<?php include 'javascript.php';?>
<!-- Datepicker this page only-->
<script type="text/javascript">
	
$(function() {
    $('input[name="daterange"]').daterangepicker({
   "singleDatePicker": true,
    "startDate": "<?php echo $todayDate; ?>",
    "endDate": "<?php echo $today; ?>",
    "minDate": "05/01/2001",
    "maxDate": "<?php echo $todayDate; ?>"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
});
</script>
    
</body>
</html>
