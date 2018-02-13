@extends ('layouts.master')

@section('content')

<div class="container">
<div class="ui-20">
<div class="container">

<div class="row">
<! Page Title -->
<div class="container">
<div class="row page-title">
<button type="button" class="btn btn-title"><strong>Meet Our Writers</strong></button>

                        <span class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Show&nbsp;&nbsp;<span class="caret"></span></button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li class="active"><a href="#">Most Batches</a></li>
                            <li><a href="#">Most Favorites</a></li>
                            <li><a href="#">Most Followers</a></li>
                            <li><a href="#">Oldest Members</a></li>
                            <li><a href="#">Newest Members</a></li>
                        </ul>
                        </span>
</div>
</div>
</div>


<div class="row">

<div class="row">
<!-- Member Info Begin -->

<div class="col-md-3 col-sm-6">

<div class="ui-item">
    <a data-toggle="collapse" href="#collapseDetails1" aria-expanded="false" aria-controls="collapseDetails1"><h4>A MYSTICAL LEAF OF AFRO ZEN</h4></a>
    <a data-toggle="collapse" href="#collapseDetails1" aria-expanded="false" aria-controls="collapseDetails1" class=""><img src="art/member-photos/1.png" alt="A MYSTICAL LEAF OF AFRO ZEN" class="img-responsive img-thumbnail" /></a>
<a data-toggle="collapse" href="#collapseDetails1" aria-expanded="false" aria-controls="collapseDetails1" class=""><p class="expand"><i class="fa fa-chevron-down"></i></p></a>

<!-- Details Expandable Area-->
<div class="collapse " id="collapseDetails1">
<div>
    <ul class="list-unstyled">
    <li><i class="fa fa-calendar"></i>JOINED <span>12/31/1969</span></li>
    <li><i class="fa fa-pencil"></i>BATCHES <span>120</span></li>
    <li><i class="fa fa-star"></i>FAVED <span>5</span></li>
    <li><i class="fa fa-heart"></i>FAVES <span>532</span></li>
    <li><i class="fa fa-group"></i>FOLLOWERS <span>2116</span></li>
    <li><i class="fa fa-eye"></i>FOLLOWING <span>1636</span></li>
    </ul>
</div>
</div>

<!-- Buttons-->
<div class="row">

<!-- Button Logic-->
        <div class="col-md-8" style="padding:5px"><a href="members-profile.php?member=56" class="btn btn-default btn-sm btn-block " role="button"><span class="fa fa-eye" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;View Profile</a></div>
    


<!-- Follow Logic-->
<div class="col-md-4" style="padding:5px"><button type="button" class="btn btn-success btn-sm btn-block " data-toggle="tooltip" data-placement="bottom" title="Following: Click to Unfollow"><span class="fa fa-check" aria-hidden="true"></span></button></div>


</div>


</div>
</div>
<!-- Member Info End -->

<td><div class="choice">&nbsp;</div></td>
<td><div class="choice">&nbsp;</div></td>
<td><div class="choice">&nbsp;</div></td>
</tr>

<!-- More Button -->

<div class="row">
<div class="col-md-6 col-md-offset-3"><button type="button" class="btn btn-default btn-lg btn-block">Load More</button></div>
</div>


            </div><!-- /Container -->
        </div><!-- / UI X -->
        
</div>


@endsection