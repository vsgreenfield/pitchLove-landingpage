<?php
$value = $_GET["subscribe"]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>pitchLove | The 30 sec spark to make your idea a reality!</title>
	 
	<link href="css/bootstrap.css" rel="stylesheet">
	 
	<link href="css/main.css" rel="stylesheet">
 
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	<![endif]-->
 
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js/pace.js"></script>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="preloader"></div>
	
    <! -- ******************** MASTHEAD SECTION ******************** -->	
	<main id="top" class="masthead" role="main">
		<div class="container">
			
            <div class="row">
                <div class="col-md-2">
                    <div class="logo"> <a href="index.php#"><img src="images/logo.png" alt="logo" height="200"></a>
			         </div>
                </div>
                <div class="col-md-3">
                    <h1 class="left"><strong>pitchLove</strong></h1>
                    <h3 class="left">The 30 sec spark to make your idea a reality!</h3>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <br>
                    <h4 class='words mywords' data-type-words="What happens to a dream deferred?, Does it dry up like a raisin in the sun?, Or fester like a sore-- And then run?, Does it stink like rotten meat?, Or crust and sugar over-- like a syrupy sweet?, Maybe it just sags like a heavy load., Or does it explode?">A Dream Deferred</h4>
                </div>
            
            </div>
            
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <div class="mobile"> <a href="index.php#"><img src="images/signin-image.png" alt="logo" height="300"></a>
			         </div>
                </div>
                <div class="col-md-5 col-md-offset-1 info left">
                    <h4>Why defer your dream, make it a reality.</h4>
                    <h4>Just upload a pitch for your idea or innovation to easily market & do crowd testing w/ pitchLove.</h4>
                    <h4>The responses to your pitch will provide the info you need to whether your idea is worth your $$$ & time.</h4>
                    <h4>It's as easy as: <br><strong>1) Sign Up --> <br>2) Fill out a profile + create you pitchTest --> <br>3) Get expert, investor, and community feedback. --> <br>4) Build a profitable business!!!</strong></h4>
                </div>
            </div>
 
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="inc/subscribe.php" name="subscribeForm" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<input class="form-control input-lg" name="email" type="email" id="address" placeholder="Enter your email" data-validate="validate(required, email)" required="required">
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" name="submit" class="btn cta btn-lg">GET EARLY ACCESS</button>
							</div>
						</div>
					</form>
					 </div>
				</div>
            <div class="row">
                <div class="col-md-8 col-sm-12 col-md-offset-2">
                    <span id="result" class="alert alert-warning alert-dismissible" role="alert">
                    <?php
if(isset($value) && ($value=='y')) {
    echo("<button type=\"button\" class=\"close btn-warning\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>");
  echo("<strong>Form successfully submitted. Thanks, email info@e2.is if you have any questions. You will receive more information shortly.</strong>");
} elseif(isset($value) && ($value=='i')) {
    echo("<button type=\"button\" class=\"close btn-warning\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>");
  echo("<strong>Form successfully submitted. Thanks, email info@e2.is if you have any questions.</strong>");
} elseif(isset($value) && ($value=='a')) {
    echo("<button type=\"button\" class=\"close btn-warning\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>");
  echo("<strong>Form successfully submitted, but it seems you are already on the list. Email info@e2.is if you would like to check in.</strong>");
} elseif(isset($value) && ($value=='d')) {
    echo("<button type=\"button\" class=\"close btn-warning\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>");
  echo("<strong>Sorry, there seems like there was an error. Email info@e2.is to figure out the data issue.</strong>");
} 
elseif(!(isset($value))) {
   
} else {
    echo("<button type=\"button\" class=\"close btn-warning\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>");
    echo("<p>Sorry, there was an error submitting the form. Email info@e2.is for more information.</p>");
}
?>
                    </span>
                    </div>
            </div>
 
				<a href="index.php#explore" class="scrollto">
				<p>SCROLL DOWN TO EXPLORE</p>
				<p class="scrollto--arrow"><img src="images/scroll_down.png" alt="scroll down arrow"></p>
				</a>
		</div><! --/container -->
	</main><! --/main -->
 

    <! -- ******************** FEATURES SECTION ******************** -->	
	<div class="container" id="explore">
 
		<div class="section-title">
			<h2>pitchLove</h2>
			<h4>The 30 sec spark to make your idea a reality!</h4>
		</div>

		<section class="row heroimg breath">
			<div class="col-md-12 text-center"> 
				<img src="images/laptop+ipad+iphone-image.png" alt="mockup">
			</div>
		</section><! --/section -->
 
		<div class="section-title">
			<h4>More information about pitchLove.</h4>
		</div>
		
		<section class="row features">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/filmshowcase.png" alt="showcase">
					<div class="caption">
						<h3>Showcase Innovations</h3>
						<p>Show off how great your new business idea or innovation is with your amazing pitch and get loyal customers immediately.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/understanding.png" alt="understanding">
					<div class="caption">
						<h3>Understand Your Customers</h3>
						<p>Know exactly who is in your target market and what their needs are in order to sell more efficiently.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/experiment.png" alt="experiments">
					<div class="caption">
						<h3>Test the Opportunity</h3>
						<p>Does anyone even have this problem? Find out who and if they'll actually pay for your solution. The users that respons to your pitch will tell you.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/help.png" alt="help">
					<div class="caption">
						<h3>Get Expert Help</h3>
						<p>Expert entrepreneurs, marketers, salespeople, technologists, investors, and more view your pitch and provide you with feedback, areas for improvement, and provide you assistance to build your business better.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
		</section><! --/section -->
 

	  
 
	    <! -- ******************** FOOTER ******************** -->	  
		<main class="footercta" role="main">
			<div class="container">
				<h1>The Most Simple & <strong>Powerful Way</strong> <br>
					to <strong>launch or grow</strong> your business, product, service, or innovation.</h1>
 
				<div class="row">
					<div class="col-md-12 breath text-center"> 
						<a href="index.php#top" class="btn cta btn-lg gototop">GET EARLY ACCESS</a> 
					</div>
				</div>
			</div><! --/container -->
		</main><! --/main -->
 
		<div class="container">
			<section class="row breath">
				<div class="col-md-12 footerlinks">
					<p>&copy; 2014 pitchLove. All Rights Reserved</p>
				</div>
			</section><! --/section -->
		</div><! --/container -->
 
 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/nicescroll.js"></script>
 
<script>
 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('php, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });
</script>
        
<script src='js/wordTypeErase.js'></script>
        
<script>
    $('.mywords').wordTypeErase({
        delayOfStart: 1800,
        naturalTypingSpeed: true,
        letterSpeed: 120
    }); 
</script>
        
<script>
        
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57035862-1', 'auto');
  ga('send', 'pageview');

</script>
 
</body>
</html>
