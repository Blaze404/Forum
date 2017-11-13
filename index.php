
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSE Forum</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css" /> 
	<link rel="shortcut icon" type="image/png" href="img/firebirds2.gif" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<header>
		<div id="header-inner" style="background-color: fuchsia;" >
			<a href="index.html" id="logo"></a>
			<nav id="top_nav">
				<a href="#" id="menu-icon"></a>
				<div id="my_nav_bar"><ul>
					<li><a class="current" href="index.html">Home</a></li>
					<li><a href="#wander">Wander</a></li>
					<li><a href="loginredirection.php">Login</a></li>
					<li><a href="https://resublaze.netlify.com/">About Me</a></li>
					<li><a href="#foot">Contact</a></li>

				</ul>
                </div>
			</nav>

		</div>
	</header>
	<!--- End Header ---> 
	<section class="banner">
		<div class="banner-inner">
			<img src="img/rocket_design.png" alt="">
		</div>
	</section>
	<!--- End Banner --->

	<section class="one-fourth" id="explore">
		<h3>Explore</h3>
	</section>
	<section class="one-fourth" id="cruise">
		<h3>Cruise</h3>
	</section>
	<section class="one-fourth" id="think">

		<h3>Think</h3>
	</section>
	<section class="one-fourth" id="dream">
		<h3>Dream</h3>
	</section>
	<!--- End Four Colum Section --->

	<section class="inner-wrapper" id="wander">
		<article id="tablet">
			<img src="img/hand_ipad.png" alt="">
		</article>
		<aside id="tablet2">
			<h2>Ask. Elucidate. Analyze.</h2>
			<p>Find all the solutions to any problem you might occur. Our community will help 
            you to get what you dream of. Seek and ye shall find is our motto. 
            </p>
		</aside>
	</section>
	<section class="inner-wrapper-2">
		<article id="mobile">
			<h2>Of my own spirit let me be in sole though feeble mastery.</h2>
			<p>A master have failed more times than a beginner has tried. Get the words of the masters on things you pursue for. </p>
		</article>
		<aside class="heand-mobile">
			<img src="img/hand_mobile.png" alt="">
		</aside>
	</section>

	<section class="inner-wrapper">
		<article>
			<img src="img/desktop.png" alt="">
		</article>
		<aside id="desktop">
            <h2>Become a majestic Community member.</h2>
			<p>A word kept to yourself is the word wasted. Sign up with us and help the rookies to come up the solutions for thier ambitions.</p>
		</aside>
	</section>
	<!--- End Main Two Column Sections--->
	<section class="inner-wrapper-3">
		<section class="one-third" id="register">
			<h3>Register</h3>
			<p>Register and either ask about your doubts to our community or be a cool person and become the master of all, a community member. Being a community member gives you access to areas.   </p>
		</section>
		<section class="one-third" id="roam">
			<h3>Roam</h3>
			<p>Browse through tons of already asked doubts and answered by our fantastic community members. Whether it be designing or programming or backend programming. We got you covered. </p>
		</section>
		<section class="one-third" id="customers">
			<h3>Enjoy</h3>
			<p>Everything at your fingertips!. <br>
                Join<br>
                Become a community member or a champ member.<br>
                Do superhero-like stuff.
            </p>
		</section>
	</section>
	<!--- ENd Therr Column Section --->

	<section id="smiley">
		<h2>: )</h2>
	</section>
	<!--- End Smiley Face --->

	<footer>
		<ul class="social">
			<li><a href="https://www.facebook.com/mustafa.qazi.10"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="https://www.instagram.com/blaze_qazi/"><i class="fa fa-instagram"></i></a></li>

		</ul>
	</footer>
	<!--- End Foooter Section --->
	
	<footer class="second" id="foot">
		<p>&copy; A Blaze Product</p>
       <address class="credential1"> <a href="mailto:mus.qazi999@gmail.com">Mail me</a>  |    <a href="https://resublaze.netlify.com/"> Visit Me</a> </address>
	</footer>
	<!--- End Second Footer --->



<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#my_nav_bar a, header-inner a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
<div class="counter">
    <!--hit counter-->
    <!-- Start of Globel Code -->
    <a href="http://www.statistics.006.free-counters.co.uk?count=blazecount" target="_blank">
<img src="http://006.free-counters.co.uk/count-040.pl?count=blazecount&type=links&prog=hit" width="150" height="26" border="0" alt="Free Counters" title="Free Counters"></a>
    <br>
    <a href="http://www.free-counters.co.uk" target="_blank" class="textLink">
        <font size="3  %">Hit Counter</font>
    </a>
    <noscript>The following text will not be seen after you upload your website,
please keep it in order to retain your counter functionality 
<br><a href="http://www.free-counters.co.uk/trackers/" target="_blank">Trackers</a><br> <a href="http://www.free-counters.co.uk/help/counter/" target="_blank">Counter Help</a><br>
</noscript>
    <!-- End of Globel Code -->

</div>
<!--hit counter end-->
</body>

</html>
