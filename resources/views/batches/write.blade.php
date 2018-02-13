@extends ('layouts.master')

@section('content')

<div class="container">
<div class="ui-20">
<div class="container">

<div class="row">
<! Page Title -->
<div class="container">
<div class="row page-title">
<button type="button" class="btn btn-title"><strong>Write: Choose a Batch</strong></button>

                        <span class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Show&nbsp;&nbsp;<span class="caret"></span></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Your Active Batches</a></li>
                            <li><a href="#">Other Active Batches</a></li>
                            <li><a href="#">Upcoming Batches</a></li>
                            <li class="active"><a href="#">All Batches</a></li>
                        </ul>
                        </span>
</div>
</div>
</div>


<!-- Begin Your Active Batches Row -->

    <h3>Your Active Batches&nbsp;&nbsp;<small><a data-toggle="modal" data-target="#modalActive" href="#"><span class="fa fa-info-circle" style="color:#000;"></span></a></small></h3>
    
    

<!-- Begin Row -->
<div class="row">

<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails1" aria-expanded="false" aria-controls="collapseDetails1"><h4>January 2016</h4></a>
    <a data-toggle="collapse" href="#collapseDetails1" aria-expanded="false" aria-controls="collapseDetails1"><img src="/art/batch-icons/january-2016.png" alt="January 2016" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails1" aria-expanded="false" aria-controls="collapseDetails1"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails1">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>100 Words</strong></a></h5>
    <p class="text-center"></p>
    <ul class="list-unstyled">
    <li>DURATION <span>18 days</span></li>



    <!-- Starting Logic-->
        <li>STARTED <span>01/10/2012</span></li>
    

    <!-- Ending Logic-->
        <li>ENDED <span>01/27/2012</span></li>
    

    <!-- Closing/Grace Period Logic-->
        <li class="bg-closing-soon">CLOSES <span>02/05/2012</span></li>
    

    <!-- Writer Logic-->
        <li>WRITERS <span>92</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-8" style="padding:5px"><a href="write-entry.php" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Write Entry</a></div>
<div class="col-md-4" style="padding:5px"><a href="#" class="btn btn-warning btn-sm btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title="Leave this Batch"><span class="fa fa-times" aria-hidden="true"></span></a></div>



</div>
</div>
</div>

<!-- Batch Info End -->





<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails2" aria-expanded="false" aria-controls="collapseDetails2"><h4>February 2016</h4></a>
    <a data-toggle="collapse" href="#collapseDetails2" aria-expanded="false" aria-controls="collapseDetails2"><img src="/art/batch-icons/february-2016.png" alt="February 2016" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails2" aria-expanded="false" aria-controls="collapseDetails2"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails2">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>100 Words</strong></a></h5>
    <p class="text-center"></p>
    <ul class="list-unstyled">
    <li>DURATION <span>3 days</span></li>



    <!-- Starting Logic-->
        <li>STARTED <span>03/13/2008</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>03/15/2008</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>80</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-8" style="padding:5px"><a href="write-entry.php" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Write Entry</a></div>
<div class="col-md-4" style="padding:5px"><a href="#" class="btn btn-warning btn-sm btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title="Leave this Batch"><span class="fa fa-times" aria-hidden="true"></span></a></div>



</div>
</div>
</div>

<!-- Batch Info End -->





<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails3" aria-expanded="false" aria-controls="collapseDetails3"><h4>Vegan Life</h4></a>
    <a data-toggle="collapse" href="#collapseDetails3" aria-expanded="false" aria-controls="collapseDetails3"><img src="/art/batch-icons/vegan-life.png" alt="Vegan Life" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails3" aria-expanded="false" aria-controls="collapseDetails3"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails3">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>Pig Lover</strong></a></h5>
    <p class="text-center">Meat is murder yo I'm a hippie dickbag</p>
    <ul class="list-unstyled">
    <li>DURATION <span>6 days</span></li>



    <!-- Starting Logic-->
        <li>STARTED <span>09/29/2012</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>10/04/2012</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>42</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-8" style="padding:5px"><a href="write-entry.php" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Write Entry</a></div>
<div class="col-md-4" style="padding:5px"><a href="#" class="btn btn-warning btn-sm btn-block" role="button" data-toggle="tooltip" data-placement="bottom" title="Leave this Batch"><span class="fa fa-times" aria-hidden="true"></span></a></div>



</div>
</div>
</div>

<!-- Batch Info End -->






</div><!-- /End Your Active Batches Row -->

<hr class="dividebar"/>


<!-- Begin Other Active Batches Row -->

<div class="row">
    <div class="col-md-12">
        <h3>Other Active Batches&nbsp;&nbsp;<small><a data-toggle="modal" data-target="#modalOther" href="#"><span class="fa fa-info-circle" style="color:#000;"></span></a></small></h3>
    </div>
</div>


<!-- Begin Row -->
<div class="row">

<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails4" aria-expanded="false" aria-controls="collapseDetails4"><h4>Fuck Valentine's Day (All Month!)</h4></a>
    <a data-toggle="collapse" href="#collapseDetails4" aria-expanded="false" aria-controls="collapseDetails4"><img src="/art/batch-icons/fuck-valentines-day-all-month.png" alt="Fuck Valentine's Day (All Month!)" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails4" aria-expanded="false" aria-controls="collapseDetails4"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails4">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>Jimmy Heartbender</strong></a></h5>
    <p class="text-center">Let's bitch about the year's worst holiday.</p>
    <ul class="list-unstyled">
    <li>DURATION <span>10 days</span></li>



    <!-- Starting Logic-->
        <li>STARTED <span>10/29/2009</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>11/07/2009</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>91</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-12"><a href="#" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Join this Batch</a></div>



</div>
</div>
</div>

<!-- Batch Info End -->




    
<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails5" aria-expanded="false" aria-controls="collapseDetails5"><h4>David Bowie's Bulge</h4></a>
    <a data-toggle="collapse" href="#collapseDetails5" aria-expanded="false" aria-controls="collapseDetails5"><img src="/art/batch-icons/david-bowies-bulge.png" alt="David Bowie's Bulge" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails5" aria-expanded="false" aria-controls="collapseDetails5"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails5">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>John Doe</strong></a></h5>
    <p class="text-center">Labyrinth scarred me</p>
    <ul class="list-unstyled">
    <li>DURATION <span>31 days</span></li>



    <!-- Starting Logic-->
        <li>STARTED <span>05/18/2006</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>06/17/2006</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>61</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-12"><a href="#" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Join this Batch</a></div>



</div>
</div>
</div>

<!-- Batch Info End -->





<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails6" aria-expanded="false" aria-controls="collapseDetails6"><h4>Puppies!</h4></a>
    <a data-toggle="collapse" href="#collapseDetails6" aria-expanded="false" aria-controls="collapseDetails6"><img src="/art/batch-icons/puppies.png" alt="Puppies!" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails6" aria-expanded="false" aria-controls="collapseDetails6"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails6">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>Maria Macomba</strong></a></h5>
    <p class="text-center">Let's cheer ourselves up with puppies</p>
    <ul class="list-unstyled">
    <li>DURATION <span>15 days</span></li>



    <!-- Starting Logic-->
        <li>STARTED <span>07/22/2006</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>08/05/2006</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>65</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-12"><a href="#" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Join this Batch</a></div>



</div>
</div>
</div>

<!-- Batch Info End -->





<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails7" aria-expanded="false" aria-controls="collapseDetails7"><h4>You Should Love Marty Feldman</h4></a>
    <a data-toggle="collapse" href="#collapseDetails7" aria-expanded="false" aria-controls="collapseDetails7"><img src="/art/batch-icons/you-should-love-marty-feldman.png" alt="You Should Love Marty Feldman" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails7" aria-expanded="false" aria-controls="collapseDetails7"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails7">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>Movie Buff Diver</strong></a></h5>
    <p class="text-center"></p>
    <ul class="list-unstyled">
    <li>DURATION <span>22 days</span></li>



    <!-- Starting Logic-->
        <li>STARTED <span>05/31/2013</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>06/21/2013</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>87</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-12"><a href="#" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Join this Batch</a></div>



</div>
</div>
</div>

<!-- Batch Info End -->






</div><!-- /End Other Active Batches Row -->

<hr class="dividebar"/>

<!-- Begin First Upcoming Batches Row -->

<div class="row"><div class="col-md-12">
    <h3>Upcoming Batches through May 31, 2016&nbsp;&nbsp;<small><a data-toggle="modal" data-target="#modalUpcoming" href="#"><span class="fa fa-info-circle" style="color:#000;"></span></a></small></h3>
</div></div>

<!-- Begin Row -->
<div class="row">

<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails8" aria-expanded="false" aria-controls="collapseDetails8"><h4>Donald Trump Is the Best</h4></a>
    <a data-toggle="collapse" href="#collapseDetails8" aria-expanded="false" aria-controls="collapseDetails8"><img src="/art/batch-icons/donald-trump-is-the-best.png" alt="Donald Trump Is the Best" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails8" aria-expanded="false" aria-controls="collapseDetails8"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails8">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>Roy Bachelorette</strong></a></h5>
    <p class="text-center">I fucking love this guy. Who's with me?</p>
    <ul class="list-unstyled">
    <li>DURATION <span>19 days</span></li>



    <!-- Starting Logic-->
        <li>STARTS <span>12/30/2009</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>01/17/2010</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>71</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-12"><a href="#" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Join this Batch</a></div>



</div>
</div>
</div>

<!-- Batch Info End -->




    
<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails9" aria-expanded="false" aria-controls="collapseDetails9"><h4>Donald Trump Is the Worst</h4></a>
    <a data-toggle="collapse" href="#collapseDetails9" aria-expanded="false" aria-controls="collapseDetails9"><img src="/art/batch-icons/donald-trump-is-the-worst.png" alt="Donald Trump Is the Worst" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails9" aria-expanded="false" aria-controls="collapseDetails9"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails9">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>Jeff Kagen</strong></a></h5>
    <p class="text-center">Roy Bachelorette is out of his mind</p>
    <ul class="list-unstyled">
    <li>DURATION <span>23 days</span></li>



    <!-- Starting Logic-->
        <li>STARTS <span>06/21/2007</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>07/13/2007</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>64</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-12"><a href="#" class="btn btn-default btn-sm btn-block" role="button"><span class="fa fa-plus" aria-hidden="true"></span>&nbsp;&nbsp;Join this Batch</a></div>



</div>
</div>
</div>

<!-- Batch Info End -->





<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails10" aria-expanded="false" aria-controls="collapseDetails10"><h4>May 2016</h4></a>
    <a data-toggle="collapse" href="#collapseDetails10" aria-expanded="false" aria-controls="collapseDetails10"><img src="/art/batch-icons/may-2016.png" alt="May 2016" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails10" aria-expanded="false" aria-controls="collapseDetails10"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails10">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>100 Words</strong></a></h5>
    <p class="text-center"></p>
    <ul class="list-unstyled">
    <li>DURATION <span>21 days</span></li>



    <!-- Starting Logic-->
        <li>STARTS <span>07/02/2008</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>07/22/2008</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>8</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-12"><a href="#" class="btn btn-warning btn-sm btn-block" role="button"><span class="fa fa-times" aria-hidden="true"></span>&nbsp;&nbsp;Leave this Batch</a></div>



</div>
</div>
</div>

<!-- Batch Info End -->





<!-- Batch -->
                            <!-- Status logic
Ended: Started/Ended
Active: Started/Ends
Closing: Started/Ended with extra Closing date
Future: Starts/Ends
-->


<!-- Batch Info Begin -->
<div class="col-md-3 col-sm-6">
<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails11" aria-expanded="false" aria-controls="collapseDetails11"><h4>June 2016</h4></a>
    <a data-toggle="collapse" href="#collapseDetails11" aria-expanded="false" aria-controls="collapseDetails11"><img src="/art/batch-icons/june-2016.png" alt="June 2016" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails11" aria-expanded="false" aria-controls="collapseDetails11"><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails11">
<div>
    <h5>Created By<BR><a href="members-profile.php"><strong>100 Words</strong></a></h5>
    <p class="text-center"></p>
    <ul class="list-unstyled">
    <li>DURATION <span>3 days</span></li>



    <!-- Starting Logic-->
        <li>STARTS <span>12/27/2011</span></li>
    

    <!-- Ending Logic-->
        <li>ENDS <span>12/29/2011</span></li>
    

    <!-- Closing/Grace Period Logic-->
    

    <!-- Writer Logic-->
        <li>WRITERS <span>91</span></li>
    
    </ul>


</div>
</div>


<!-- Buttons-->
<div class="row">


<div class="col-md-12"><a href="#" class="btn btn-warning btn-sm btn-block" role="button"><span class="fa fa-times" aria-hidden="true"></span>&nbsp;&nbsp;Leave this Batch</a></div>



</div>
</div>
</div>

<!-- Batch Info End -->






</div><!-- /End Other Active Batches Row -->

<hr class="dividebar"/>





            </div><!-- /Inner Container -->
        </div><!-- / UI X -->
</div><!-- /Main Container -->



<!-- Modal -->
<div class="modal fade" id="modalActive" tabindex="-1" role="dialog" aria-labelledby="modalActive" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title">Active Batches</div>
            </div>

            <div class="modal-body">
                <p>You are automatically added to the ongoing monthly batches. To opt out, please de-select the option under <strong><a href="account-entries.php">Your Account: Entries & Batches</a></strong>. Or, you can leave individual batches below.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
            </div>


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="modalOther" tabindex="-1" role="dialog" aria-labelledby="modalOther" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title">Other Batches</div>
            </div>

            <div class="modal-body">
                <p>These batches were created by other writers. Click <strong><a href="batch-create.php">Create a Batch</a></strong> to start your own.</p>
            </div>


            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
            </div>


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div class="modal fade" id="modalUpcoming" tabindex="-1" role="dialog" aria-labelledby="modalUpcoming" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title">Upcoming Batches</div>
            </div>

            <div class="modal-body">
                <p>You are automatically added to the ongoing monthly batches. To opt out, please de-select the option under <strong><a href="account-entries.php">Your Account: Entries & Batches</a></strong>. Or, you can leave individual batches below.</p>
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
            </div>


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection