@include ('layouts.header')

<body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo hidden-xs">
                        <a href="index.php" class="logo"><span><img src="art/logo-header.png"></span> </a>
                    </div>
                    <div class="logo hidden-sm hidden-md hidden-lg visible-xs-*">
                        <a href="index.php" class="logo"><span><img src="art/logo-header-xs.png"></span> </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href="search.php"><i class="fa fa-search"></i></a>
                                </form>
                            </li>

                            <li class="dropdown">
                                    <li><a href="user-login.php">Sign In</a></li>
                            </li>

                        </ul>

                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End topbar -->


            <!-- Navbar Start -->
            <div class="navbar-custom">
                <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu ">
                            <a href="read-by-batch.php"><i class="fa fa-eye"></i>Read</a>
<!--                            <ul class="submenu">
                                <li><a href="read-by-batch.php">By Batch</a></li>
                                <li><a href="read-by-date.php">By Date</a></li>
                                <li><a href="read-by-writer.php">By Writer</a></li>
                                <li><a href="read-random.php">Random Entry</a></li>
                            </ul>
-->
                        </li>
                        <li class="has-submenu ">
                            <a href="write-choose-batch.php"><i class="fa fa-pencil"></i>Write</a>
                        </li>
                        <li class="has-submenu ">
                            <a href="members-overview.php"><i class="fa fa-user"></i>Meet Our Writers</a>
                        </li>
                        <li class="has-submenu ">
                            <a href="batch-create.php"><i class="fa fa-gears"></i>Create a Batch</a>
                        </li>
                        <li class="has-submenu hidden-sm hidden-md hidden-lg visible-xs-* ">
                            <a href="search.php"><i class="fa fa-search"></i>Search</a>
                        </li>

                        <li class="has-submenu ">
                            <a href="user-register.php"><i class="fa fa-thumbs-up"></i>Join Us</a>
                        </li>



                    </ul>
                    <!-- End navigation menu -->
                </div>
            </div>
            </div>
        </header>
        <!-- End Navigation Bar-->
<div class="container">
<div class="col-md-12 text-center">
<h1 class="text-center" style="padding-top:100px;">1,389 writers<br>6,123 days<br>16,676,300 published words</h1>
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

@include ('layouts.footer')

</body>
</html>
