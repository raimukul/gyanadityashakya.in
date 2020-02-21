<?php include("header.php") ;
?>
<?php 
    define("xxyy", TRUE);
  ?>
  <style type="text/css" media="screen">

  	.btn-primary{color:#fff!important;
  		background-color:#428bca!important;
  		border-color:#357ebd!important;
  	}
  	.btn-primary{
  		color:#fff;
  		background-color:#3276b1;
  		border-color:#285e8e
  	}
  		.btn-primary:active,.btn-primary.active,.open .dropdown-toggle.btn-primary{
  			background-image:none!important;
  			}
  			.btn-primary.active{
  				background-color:#428bca!important;
  			}
  	
  </style>
  <div class="header text-center">
	<h2 style="color: #fff;">Error</h2>
</div>
  <div class="container mt-2 mb-2">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Sorry, an error has occured, Requested page not found!
                </div>
                <div class="error-actions">
                    <a href="index" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a><a href="contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php") ;
?>