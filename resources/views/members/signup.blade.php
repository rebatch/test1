@extends ('layouts.master')

@section('content')

<div class="container">

<! Page Title -->
<div class="container">
<div class="row page-title">
<button type="button" class="btn btn-title"><strong>Register for Your Free Account:</strong></button>
</div>
</div>

            <div class="row" style="margin-top:20px">
                <div class="col-sm-12 col-md-6">

                    <form class="form-vertical">
                        <fieldset>
                            <div class="row">  
                                <div class="col-md-12 col-sm-6 col-xs-12" >
                                    <div class="well">
                                        <div class="form-group">
                                            <label for="exampleUsername">Username<small> (40 chars. max)</small></label>
                                            <input type="text" class="form-control" id="exampleUsername" placeholder="Your public name -- you can change it later">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Valid email required -- we won't share it">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="At least 6 characters">
                                        </div>
<!--
                                       <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Join the 100 Words mailing list
                                            </label>
                                        </div>
-->
                                        <div class="col-md-6 col-md-offset-6"><label class="small"><input type="checkbox"> Accept <a href="admin-terms.php" target="_blank">Terms & Conditions</a></label></div>
                                        <div style="margin-top:10px"><a href="account-profile.php" class="btn btn-primary">Create Account</a></div>
                                    </div>
                                    <a href="user-login.php" class="btn btn-success">Already have an account? Sign in here.</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                        <h4>Or create your account using:</h4>
                            <div class="row">
                                <div class="col-sm-5">
                                <a class="btn btn-block btn-social btn-facebook" data-toggle="modal" data-target="#modalSSO"  href="#"><span class="fa fa-facebook"></span> Facebook</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-5">
                                <a class="btn btn-block btn-social btn-twitter" data-toggle="modal" data-target="#modalSSO"  href="#"><span class="fa fa-twitter"></span> Twitter</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-5">
                                <a class="btn btn-block btn-social btn-linkedin" data-toggle="modal" data-target="#modalSSO"  href="#"><span class="fa fa-linkedin"></span> LinkedIn</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-5">
                                <a class="btn btn-block btn-social btn-google" data-toggle="modal" data-target="#modalSSO"  href="#"><span class="fa fa-google-plus"></span> Gmail</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </fieldset>
            </form>

        </div>


<!-- Modal -->
<div class="modal fade" id="modalSSO" tabindex="-1" role="dialog" aria-labelledby="modalSSO" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in with Facebook/Twitter/Linked/G+</h4>
            </div>
            <div class="modal-body">
                <h1>Fire up the APIs</h1>
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
                <p><strong>&copy;
2018 <a href="http://chaoticneutral.org/" target="_blank">Chaotic Neutral LLC</a></strong></p>
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

@endsection