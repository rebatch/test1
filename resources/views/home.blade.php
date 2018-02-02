<?php
include '/home/mywallah/public_html/100words.net/includes/initialize.php';
?>
<?php $signedIn = "no" ?>
<?php $pageTitle = "Home" ?>
<?php $pageNav = "Home" ?>


<?php
if ($session->is_logged_in() == TRUE) {
    $signedIn = "yes";
    // echo 'logged in';
}
?>

<?php $startTimeStamp = strtotime("2001/05/01");
$today = date("Y/m/d");
$endTimeStamp = strtotime($today);
$timeDiff = abs($endTimeStamp - $startTimeStamp);
$numberDays = $timeDiff/86400;
$numberDays = intval($numberDays);
$numberDays = number_format($numberDays);

 ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>

<body>
<?php include 'nav-main.php';?>

<div class="container">
<div class="col-md-12 text-center">
<h1 class="text-center" style="padding-top:100px;">1,389 writers<br><?php echo $numberDays; ?> days<br>16,676,300 published words</h1>
</div>
</div>


<div class="container">
<div class="col-md-12 text-center" style="margin-top:100px">
<button type="button" class="btn btn-default">Default</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-link">Link</button> 
</div>
</div>


<div class="container">
<div class="col-md-12 text-center" style="margin-top:30px">
<div class="alert alert-success text-center">Success</div>
<div class="alert alert-info text-center">Info</div>
<div class="alert alert-warning text-center">Warning</div>
<div class="alert alert-danger text-center">Danger</div>
</div>
</div>


<?php include 'footer.php';?>

<?php include 'javascript.php';?>

</body>
</html>
