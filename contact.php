<!DOCTYPE html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$to      = 'ivo.kirov@gmail.com';
	$subject = 'Contact Form Submission';
	$message = $_POST['comment'];
	$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);
	
}

?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ivo Kirov</title>

<!-- Bootstrap -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet" />
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/style.css">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php">Ivo Kirov</a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myDefaultNavbar1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Portfolio <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Other Interests <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="physics.php">Physics</a></li>
            <li><a href="edm.php">EDM</a></li>
<!--            <li role="separator" class="divider"></li>-->
<!--            <li><a href="photography.html">Photography</a></li>         -->
          </ul>
        </li>
      </ul>
      
</div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<section>
  <div class="jumbotron text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs12">
          <h1 class="mainheading">What can I help you with?</h1>
          	<p class="mainheading">I am open to freelance work at the moment, please contact me with any questions.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, magni, doloribus, possimus eum sapiente deleniti doloremque fugit ut expedita molestiae iusto debitis eveniet modi obcaecati ipsam quos quis labore dicta.</p>
      </div>
    </div>
  </div>
</section>-->
<!--<section>
  <div class="container well">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/35X35.gif" alt="..."> </a> </div>
          <div class="media-body">
            <h2 class="media-heading">Media heading</h2>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/35X35.gif" alt="..."> </a> </div>
          <div class="media-body">
            <h2 class="media-heading">Media heading</h2>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="images/35X35.gif" alt="..."></a></div>
          <div class="media-body">
            <h2 class="media-heading">Media heading</h2>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<section class="first">
	<div class="container">
	<div class="row">
		<form class="form-horizontal" action="contact.php" method="post" id="contact_form">
		<fieldset>

		<div class="form-group">
		  <label class="col-md-4 control-label">First Name</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
			</div>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label">Last Name</label> 
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
			</div>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label">Email</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
			</div>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label">Phone #</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		  <input name="phone" placeholder="(416) 416-4164" class="form-control" type="text">
			</div>
		  </div>
		</div>

<!--
		<div class="form-group">
		  <label class="col-md-4 control-label">Address</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input name="address" placeholder="Address" class="form-control" type="text">
			</div>
		  </div>
		</div>
-->

<!--
		<div class="form-group">
		  <label class="col-md-4 control-label">City</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input name="city" placeholder="city" class="form-control"  type="text">
			</div>
		  </div>
		</div>
-->

<!--
		<div class="form-group">
		  <label class="col-md-4 control-label">Zip Code</label>  
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
			</div>
		</div>
		</div>
-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Website or domain name</label>  
		   <div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
		  <input name="website" placeholder="Website or domain name" class="form-control" type="text">
			</div>
		  </div>
		</div>

<!--
		<div class="form-group">
			<label class="col-md-4 control-label">Do you have hosting?</label>
			<div class="col-md-4">
				<div class="radio">
					<label>
						<input type="radio" name="hosting" value="yes" /> Yes
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="hosting" value="no" /> No
					</label>
				</div>
			</div>
		</div>
-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Details</label>
			<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
					<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
		  </div>
		  </div>
		</div>

		<!-- Success message -->
		<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for your message, I will get back to you within 12 hours.</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
			<button id="submit" name="submit" type="submit" class="btn btn-primary" >Send <span class="glyphicon glyphicon-send"></span></button>
		  </div>
		</div>

		</fieldset>
		</form>
		</div>
	</div>
<?php include_once "footer.php"; ?>
</section>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>