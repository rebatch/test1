@extends ('layouts.master')

@section('content')

<div class="container">
<div class="ui-20">
<div class="container">
<div class="row">


<! Page Title -->
<div class="container">
<div class="row page-title">
<button type="button" class="btn btn-title"><strong>Create a Batch</strong></button>
</div>
</div>


<! Sidebar Begin -->
<!-- Call Batch -->
    <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->





<!-- Member Info Begin -->
<div class="col-md-3">
    <div class="alert alert-success text-center" style="margin-top:20px"><strong>Preview:</strong></div>
    <div class="ui-item">
    <h4>...</h4>
    <img src="/art/batch-icons/placeholder.png" alt="" class="img-responsive img-thumbnail" /></a>

<!-- Details Expandable Area-->
    <h5>Created By<BR><strong>Mr Koyen</strong></h5>
    <p class="text-center">...</p>
    <ul class="list-unstyled">
    <li>DURATION <span> days</span></li>
    <li>STARTS <span></span></li>
    <li>ENDS <span></span></li>
    <li class="bg-closing-soon">CLOSES <span></span></li>
    </ul>
</div>
</div>


<!-- Member Info End -->



<! Start Right Side Content -->
<div class="col-sm-8" style="margin-top:20px;">
<div class="panel panel-default">
<div class="panel-heading">Batch Details</div>
<div class="panel-body">


<form>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" value="..." id="batchName" placeholder="Name">
  </div>

  <div class="form-group">
    <label>Description <span class="small">(20 words max.)</span></label>
    <input type="text" class="form-control" value="..." id="batchDescription" placeholder="Description">
  </div>



  <div class="form-group">
    <div class="row">
      <div class="col-md-12">
      <label>Starts & Ends</label> 
      <input type="text" class="form-control" name="daterange" value="" />
      <p><small>31-day max. duration, must end within the next three months</small></p>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-md-6">
      <label>Grace Period</label>
    <div class="row">
      <div class="col-md-4">
      <input type="number" class="form-control" value="10" id="batchDuration" placeholder="# Days">
      </div>
    </div>
      <p><small>15-day max. grace period</small></p>
      </div>
    </div>
  </div>



  <div class="form-group">
    <div class="row">
        <div class="col-md-5 col-sm-5">
        <div class="ui-item" style="border:none;box-shadow:none;margin:0;padding:0;">
      <label>Icon</label>
        <img src="/art/batch-icons/placeholder.png" alt="" class="img-responsive img-thumbnail" /></a>
        </div>
        </div>
        <div class="col-md-5 col-sm-5">
        <p style="padding-top:20px">Please upload an image to appear with your batch. Ideal image: square, 1200px max, JPG or PNG. But don't worry, we'll convert it for you.</p>
        <span class="btn btn-primary btn-block"><input type="file"></span>
        <p style="padding-top:20px">Or, let us choose a photo for you:</p>
        <span class="btn btn-primary btn-block">Random Image</span>
        </div>
        </div>
        </div>
    
</form>

    <! Buttons Begin -->
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                    <a class="btn btn-info btn-block" data-toggle="modal" data-target="#modalBatchCreated">Create this Batch</a>
                    </div>
                </div>          
    <! Buttons End -->


</div>
</div>
</div>

<! End Right Side Content -->





</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalBatchCreated" tabindex="-1" role="dialog" aria-labelledby="modalBatchCreated" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Batch Created</h2>
            </div>

            <div class="modal-body">
                <p>Your batch <strong>...</strong> has been created.</p>
                <p>It will now appear in your Active batches, and other writers will be welcome to join you.</p>
                <hr>
                <h3>What's next?</h3>
                <div class="row">
                <div class="col-md-4">
                <a href="write-entry.php" class="btn btn-success btn-xs btn-block" role="button"><span class="fa fa-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Write an Entry</a>
                </div>
                <div class="col-md-4">
                <a href="write-choose-batch.php" class="btn btn-default btn-xs btn-block" role="button"><span class="fa fa-eye" aria-hidden="true"></span>&nbsp;&nbsp;My Batches</a>
                </div>
                <div class="col-md-4">
                <a href="members-overview.php" class="btn btn-info btn-xs btn-block" role="button"><span class="fa fa-user" aria-hidden="true"></span>&nbsp;&nbsp;Other Writers</a>
                </div>
                </div>
            </div>


            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
            </div>


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="footer">
    <div class="container">

        <div class="row">

            <div class="col-sm-4 col-xs-12">
                <p><strong>&copy; 2018 <a href="http://chaoticneutral.org/" target="_blank">Chaotic Neutral LLC</a></strong></p>
                <p>All rights reserved</p>
            </div>          

            <div class="col-sm-8 col-xs-12">
                <p class="footer-links">
                    <a href="roy-read-single-entry-base.php">Special Link for Roy</a>
                    <a href="admin-about.php">About</a>
                    <a href="admin-terms.php">Terms & Conditions</a>
                    <a href="admin-contact.php">Contact Us</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
$(function() {
    $('input[name="daterange"]').daterangepicker({
    "dateLimit": {
        "days": 31
    },
    "startDate": "02/12/2018",
    "endDate": "03/14/2018",
    "minDate": "02/12/2018",
    "maxDate": "05/12/2018"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});});
</script>

@endsection