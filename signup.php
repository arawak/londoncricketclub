<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- BASIC NEEDS
    ================================================== -->
	<meta charset="utf-8" />
	<title>London Cricket Club</title>
	<meta name="description" content="London Cricket Club">
	<meta name="author" content="">
    
	<!-- MOBILE META
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements
    ================================================== -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
    <!-- CSS
    ================================================== -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/custom-style.css" rel="stylesheet">

    <!-- GOOGLE FONT
    ================================================== -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700" />
    <link rel='stylesheet' id='mission-font-css'  href='http://fonts.googleapis.com/css?family=Oswald&#038;ver=3.3.2' type='text/css' media='all' />
    
	<!-- FABICON
	================================================== -->
	<link rel="shortcut icon" href="">

</head>
<body>

    <header id="header" class="navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div  class="logo">
                        <h3><a href="index.html">London Cricket Club</a> <small>we're Canadian, eh!</small></h3>
                    </div>
                </div>
                <div class="span8">
                    <div class="menu">
                        <ul class="main-menu">
			    	        <li><a href="index.html">Home</a></li>
	        		    	<li><a href="about.html">About Us</a></li>	        		    	
                            <li><a href="membership.html">Membership</a></li>
			            	<!--<li><a href="fixtures.html">Fixtures</a></li>-->
	        		    	<li><a class="current" href="contact.html">Contact</a></li>
		    	        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header> 
    <div id="main">
        <div class="container">
            <div class="row">
                <section id="page-title" class="span12">
                    <h1>Sign Up</h1>
                    <hr>
                </section>
            </div>
            <div class="row">
<form role="form" action="process-email.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Full name, eg: John Smith">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    <label for="exampleInputEmail1">Phone</label>
    <input type="tel" name="tel" class="form-control" id="phone" placeholder="telephone number">
  </div>

<p>Membership type</p>
<select class="form-control" name="membership-type">
  <option>-- pick one --</option>
  <option>student</option>
  <option>regular</option>
</select>

<hr>
<p class="text-primary">To help the club organise practices please tell us about yourself as a cricketer.</p>

<h3>Cricket Experience</h3>
<p>What is the highest standard of cricket you have played regularly?</p>
<select class="form-control" name="standard">
  <option>-- pick one --</option>
  <option>never played before</option>
  <option>backyard/street cricket</option>
  <option>played in school</option>
  <option>friendly cricket</option>
  <option>competitive league cricket</option>
  <option>professional</option>
</select>

<h3>Batting</h3>
<p>Where do you prefer to bat (check all that apply)</p>
<label class="checkbox-inline"> <input name="opener" type="checkbox" id="inlineCheckbox1" value="option1">opener</label>
<label class="checkbox-inline"> <input name="middle-order" type="checkbox" id="inlineCheckbox1" value="option1">middle order</label>
<label class="checkbox-inline"> <input name="lower-order" type="checkbox" id="inlineCheckbox1" value="option1">lower order</label>

<h3>Bowling</h3>
<p>Please indicate if you bowl and what type of bowling (check all that apply)</p>
<label class="checkbox-inline"> <input type="checkbox" name="bowl-fast" id="inlineCheckbox1" value="option1">fast</label>
<label class="checkbox-inline"> <input type="checkbox" name="bowl-medium" id="inlineCheckbox1" value="option1">medium pace</label>
<label class="checkbox-inline"> <input type="checkbox" name="bowl-spin" id="inlineCheckbox1" value="option1">spin</label>

<h3>Wicketkeeping</h3>
<p>Can you keep wicket in games?</p>
<select class="form-control" name="wicketkeeper">
  <option>-- pick one --</option>
  <option>no</option>
  <option>a little</option>
  <option>yes</option>
</select>

<h3>Comments</h3>
<textarea rows="10" cols="40" name="comments">
</textarea>

<div>
  <button type="submit" class="btn btn-default">Submit</button>
</div>
</form>

            </div>
        </div>
    </div>


    <!-- JAVASCRIPTS
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>

</body>
</html>
