@extends ('layouts.master')

@section('content')

<div class="container">

<!-- UI X -->
<div class="ui-20">
<!-- Container -->
<div class="container">
<div class="row">


    <!-- Mini Nav -->
    <div class="container">
<div class="row" style="margin-bottom:50px;margin-top:30px">
<div class="btn-group subnav-buttons" role="group" aria-label="Read Navigation">
<button type="button" class="btn btn-title"><strong>Read:</strong></button>
<a href="read-by-batch.php"><button type="button" class="btn btn-primary active">Batches</button></a>
<a href="read-by-date.php"><button type="button" class="btn btn-primary ">Dates</button></a>
<a href="read-by-writer.php"><button type="button" class="btn btn-primary ">Writers</button></a>
<a href="read-random.php"><button type="button" class="btn btn-primary ">Random</button></a>
</div>
</div>
</div>

<!-- Dropdown for Sorting -->
<div class="col-md-2 col-sm-2">
<div class="dropdown">
<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sort By&nbsp;&nbsp;<span class="caret"></span></button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a href="#">Newest First</a></li>
<li><a href="#">Oldest First</a></li>
<li><a href="#">Most Popular</a></li>
</ul>
</div>
</div>
<div class="col-md-6">
<label class="small" style="margin-top:10px"><input type="radio"  name="batchSort" checked>&nbsp;&nbsp;All Batches&nbsp;&nbsp;</label><label class="small" style="margin-right:10px"><input type="radio" name="batchSort">&nbsp;&nbsp;Monthly Batches</label><label class="small" style="margin-right:10px"><input type="radio" name="batchSort">&nbsp;&nbsp;User Batches</label>
</div>
</div><!--End this Header Row -->



<!-- Begin Whole Row -->

<div class="row">
<!-- Clone Here Start -->

<!-- Batch Info Begin --> <div class="col-md-3 col-sm-6"> <div class="ui-item"> <a data-
toggle="collapse" href="#collapseDetails0" aria-expanded="false" aria-
controls="collapseDetails0"><h4>October 2014</h4></a> <a data-toggle="collapse"
href="#collapseDetails0" aria-expanded="false" aria- controls="collapseDetails0"><img src="/art
/batch-icons/vegan-life.png" alt="Vegan Life" class="img-responsive img-thumbnail" /></a> <a data-
toggle="collapse" href="#collapseDetails0" aria-expanded="false" aria-
controls="collapseDetails0"><p class="expand"><i class="fa fa-chevron- down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails0">
    <div>
        <h5>Created By<BR><a href="members-profile.php"><strong>Martin Landau</strong></a></h5>
        <p class="text-center">Meat is murder.</p>
        <ul class="list-unstyled">
            <li>DURATION <span>29 days</span></li>

            <!-- Starting Logic-->
            <li>STARTED <span>2014-10-01</span></li>

            <!-- Ending Logic-->
            <li>ENDED <span>07/22/2004</span></li>

            <!-- Closing/Grace Period Logic-->

            <!-- Writer Logic-->
            <li>WRITERS <span>0</span></li>
        
        </ul>

    </div>
</div>


<!-- Buttons-->
    <div class="row">

        <div class="col-md-12"><a href="read-by-batch-results.php?batch_id=191" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-eye" aria-hidden="true"></span>&nbsp;&nbsp;Read</a></div>
        </div>
    </div>
</div>


<!-- Clone Here Start -->

<!-- Batch Info Begin --> <div class="col-md-3 col-sm-6"> <div class="ui-item"> <a data-
toggle="collapse" href="#collapseDetails1" aria-expanded="false" aria-
controls="collapseDetails1"><h4>September 2014</h4></a> <a data-toggle="collapse"
href="#collapseDetails1" aria-expanded="false" aria- controls="collapseDetails1"><img src="/art
/batch-icons/vegan-life.png" alt="Vegan Life" class="img-responsive img-thumbnail" /></a> <a data-
toggle="collapse" href="#collapseDetails1" aria-expanded="false" aria-
controls="collapseDetails1"><p class="expand"><i class="fa fa-chevron- down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails1">
    <div>
        <h5>Created By<BR><a href="members-profile.php"><strong>Martin Landau</strong></a></h5>
        <p class="text-center">Meat is murder.</p>
        <ul class="list-unstyled">
            <li>DURATION <span>29 days</span></li>

            <!-- Starting Logic-->
            <li>STARTED <span>2014-09-01</span></li>

            <!-- Ending Logic-->
            <li>ENDED <span>07/22/2004</span></li>

            <!-- Closing/Grace Period Logic-->

            <!-- Writer Logic-->
            <li>WRITERS <span>14</span></li>
        
        </ul>

    </div>
</div>


<!-- Buttons-->
    <div class="row">

        <div class="col-md-12"><a href="read-by-batch-results.php?batch_id=190" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-eye" aria-hidden="true"></span>&nbsp;&nbsp;Read</a></div>
        </div>
    </div>
</div>


<!-- Clone Here Start -->

<!-- Batch Info Begin --> <div class="col-md-3 col-sm-6"> <div class="ui-item"> <a data-
toggle="collapse" href="#collapseDetails2" aria-expanded="false" aria-
controls="collapseDetails2"><h4>August 2014</h4></a> <a data-toggle="collapse"
href="#collapseDetails2" aria-expanded="false" aria- controls="collapseDetails2"><img src="/art
/batch-icons/vegan-life.png" alt="Vegan Life" class="img-responsive img-thumbnail" /></a> <a data-
toggle="collapse" href="#collapseDetails2" aria-expanded="false" aria-
controls="collapseDetails2"><p class="expand"><i class="fa fa-chevron- down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails2">
    <div>
        <h5>Created By<BR><a href="members-profile.php"><strong>Martin Landau</strong></a></h5>
        <p class="text-center">Meat is murder.</p>
        <ul class="list-unstyled">
            <li>DURATION <span>29 days</span></li>

            <!-- Starting Logic-->
            <li>STARTED <span>2014-08-01</span></li>

            <!-- Ending Logic-->
            <li>ENDED <span>07/22/2004</span></li>

            <!-- Closing/Grace Period Logic-->

            <!-- Writer Logic-->
            <li>WRITERS <span>18</span></li>
        
        </ul>

    </div>
</div>


<!-- Buttons-->
    <div class="row">

        <div class="col-md-12"><a href="read-by-batch-results.php?batch_id=189" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-eye" aria-hidden="true"></span>&nbsp;&nbsp;Read</a></div>
        </div>
    </div>
</div>


<!-- Clone Here Start -->

<!-- Batch Info Begin --> <div class="col-md-3 col-sm-6"> <div class="ui-item"> <a data-
toggle="collapse" href="#collapseDetails3" aria-expanded="false" aria-
controls="collapseDetails3"><h4>July 2014</h4></a> <a data-toggle="collapse"
href="#collapseDetails3" aria-expanded="false" aria- controls="collapseDetails3"><img src="/art
/batch-icons/vegan-life.png" alt="Vegan Life" class="img-responsive img-thumbnail" /></a> <a data-
toggle="collapse" href="#collapseDetails3" aria-expanded="false" aria-
controls="collapseDetails3"><p class="expand"><i class="fa fa-chevron- down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails3">
    <div>
        <h5>Created By<BR><a href="members-profile.php"><strong>Martin Landau</strong></a></h5>
        <p class="text-center">Meat is murder.</p>
        <ul class="list-unstyled">
            <li>DURATION <span>29 days</span></li>

            <!-- Starting Logic-->
            <li>STARTED <span>2014-07-01</span></li>

            <!-- Ending Logic-->
            <li>ENDED <span>07/22/2004</span></li>

            <!-- Closing/Grace Period Logic-->

            <!-- Writer Logic-->
            <li>WRITERS <span>23</span></li>
        
        </ul>

    </div>
</div>


<!-- Buttons-->
    <div class="row">

        <div class="col-md-12"><a href="read-by-batch-results.php?batch_id=188" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-eye" aria-hidden="true"></span>&nbsp;&nbsp;Read</a></div>
        </div>
    </div>
</div>

</div><!-- /End This Row of Batches Since 4 --><div class="row">
<!-- Clone Here Start -->

<!-- Batch Info Begin --> <div class="col-md-3 col-sm-6"> <div class="ui-item"> <a data-
toggle="collapse" href="#collapseDetails4" aria-expanded="false" aria-
controls="collapseDetails4"><h4>June 2014</h4></a> <a data-toggle="collapse"
href="#collapseDetails4" aria-expanded="false" aria- controls="collapseDetails4"><img src="/art
/batch-icons/vegan-life.png" alt="Vegan Life" class="img-responsive img-thumbnail" /></a> <a data-
toggle="collapse" href="#collapseDetails4" aria-expanded="false" aria-
controls="collapseDetails4"><p class="expand"><i class="fa fa-chevron- down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails4">
    <div>
        <h5>Created By<BR><a href="members-profile.php"><strong>Martin Landau</strong></a></h5>
        <p class="text-center">Meat is murder.</p>
        <ul class="list-unstyled">
            <li>DURATION <span>29 days</span></li>

            <!-- Starting Logic-->
            <li>STARTED <span>2014-06-01</span></li>

            <!-- Ending Logic-->
            <li>ENDED <span>07/22/2004</span></li>

            <!-- Closing/Grace Period Logic-->

            <!-- Writer Logic-->
            <li>WRITERS <span>22</span></li>
        
        </ul>

    </div>
</div>


<!-- Buttons-->
    <div class="row">

        <div class="col-md-12"><a href="read-by-batch-results.php?batch_id=61" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-eye" aria-hidden="true"></span>&nbsp;&nbsp;Read</a></div>
        </div>
    </div>
</div>


<!-- Clone Here Start -->

<!-- Batch Info Begin --> <div class="col-md-3 col-sm-6"> <div class="ui-item"> <a data-
toggle="collapse" href="#collapseDetails5" aria-expanded="false" aria-
controls="collapseDetails5"><h4>May 2014</h4></a> <a data-toggle="collapse"
href="#collapseDetails5" aria-expanded="false" aria- controls="collapseDetails5"><img src="/art
/batch-icons/vegan-life.png" alt="Vegan Life" class="img-responsive img-thumbnail" /></a> <a data-
toggle="collapse" href="#collapseDetails5" aria-expanded="false" aria-
controls="collapseDetails5"><p class="expand"><i class="fa fa-chevron- down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails5">
    <div>
        <h5>Created By<BR><a href="members-profile.php"><strong>Martin Landau</strong></a></h5>
        <p class="text-center">Meat is murder.</p>
        <ul class="list-unstyled">
            <li>DURATION <span>29 days</span></li>

            <!-- Starting Logic-->
            <li>STARTED <span>0000-00-00</span></li>

            <!-- Ending Logic-->
            <li>ENDED <span>07/22/2004</span></li>

            <!-- Closing/Grace Period Logic-->

            <!-- Writer Logic-->
            <li>WRITERS <span>20</span></li>
        
        </ul>

    </div>
</div>


<!-- Buttons-->
    <div class="row">

        <div class="col-md-12"><a href="read-by-batch-results.php?batch_id=186" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-eye" aria-hidden="true"></span>&nbsp;&nbsp;Read</a></div>
        </div>
    </div>
</div>

</div><!-- /End This Row of Batches Odd Row --><!-- Batch Info End -->

<!-- Clone Here End -->


<!-- Batch Info End -->

<!-- Clone Here End -->


<!-- More Button -->

<div class="row">
    <div class="col-md-6 col-md-offset-3"><button type="button" class="btn btn-default btn-lg btn-block">Load More</button></div>
</div>

<!-- End interior -->

</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalShare" tabindex="-1" role="dialog" aria-labelledby="modalShare" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Share on Facebook/Twitter/LinkedIn/Google+/Email/Instagram</h4>
            </div>
            <div class="modal-body">
                <h1>FIRE UP THE VARIOUS MODALS FOR THE SHARING</h1>
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-xs">Share</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection