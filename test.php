<?php
//Start the PHP session
session_start();

//Calls to base hit counter with unique visitors IP tracking.
include_once("hit_counter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
<!-- || Page Head || -->
<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<title>Page Under Construction</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
	window.onload=function() {
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$(".border_bottom").remove();
		}
		$(".fit_me_height").each(function() {
			$(this).height($(this.parentNode).innerHeight());
		})
	}
	</script>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">
	<!--
	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="img/logo_bg.png"></img></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.html">Keynote</a></li>
						<li><a href="workshops.html">Workshops</a></li>
						<li><a href="resources.html">Resources</a></li>
						<li><a href="contactus.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt = "World Affairs Conference" height="30px"></img></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Registration</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conference Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="keynote.php">Keynote Address</a></li>
            <li><a href="#">Morning Panel</a></li>
            <li><a href="#">Plenaries</a></li>
            <li><a href="#">Closing Panel</a></li>
            <li><a href="#">Schedule</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About WAC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="#">Meet the Team</a></li>
            <li><a href="#">Contact Us</a></li>
            <!--
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
        	-->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</br>
</br>
</br>

<div>&nbsp;</div>
<div style="background-color:rgba(0,0,0,0.3); color:#FFF; padding:0 30px 0 30px; vertical-align:middle; box-sizing:border-box; white-space:nowrap; position:absolute; bottom:0px; left:0px; width:100%;">
		<span class="footer" style="border-left:none;">
			<a href="about_us.php>
				ABOUT US
			</a>
		</span>
		<span class="footer">
			<a href="construction.php">
				PLENARIES
			</a>
		</span>
		<span class="footer">
			<a href="construction.php">
				REGISTER
			</a>
		</span>


<?php include_once("tracking.php") ?>
<!-- | Menu Bar (Construction) | -->

<?php
$rando = rand(1,2);
$randa = rand(1,3);
if($rando == 1){
	$teamNames = "Jack Sarick, and Matthew Wang";
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
}
elseif($rando == 2){
	$teamNames = "Matthew Wang, and Jack Sarick";
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
}

?>
		
		<span style="text-align:right; width:100%; color:#888; font-size:11px; vertical-align:middle; display:table-cell;">Handmade by the WAC Webmaster Team:<br /><?php echo $teamNames; ?><br />With help from last year's team:<br /><?php echo $lteamNames; ?></span>
</div>

<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>