<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>-- Sintoni Sports Club --</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/success.css" rel="stylesheet">

  </head>

  <body id="page-top">

    
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <!-- Sintoni home button -->
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="../Home.php">Sintoni Sports Club</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>

        <?php
		/*
		Answers: 1C, 2B, 3D, 4C, 5A
		*/
		$errors = array();
		$answer1 = $_POST['q1'];
		$answer2 = $_POST['q2'];
		$answer3 = $_POST['q3'];
		$answer4 = $_POST['q4'];
		$answer5 = $_POST['q5'];
		$totalCorrect = 0;

		if ($answer1 == "1C") { $totalCorrect++; }
		else{$errors[] = '1C.';}
		if ($answer2 == "2B") { $totalCorrect++; }
		else{$errors[] = '2B.';}
		if ($answer3 == "3D") { $totalCorrect++; }
		else{$errors[] = '3D.';}
		if ($answer4 == "4C") { $totalCorrect++; }
		else{$errors[] = '4C.';}
		if ($answer5 == "5A") { $totalCorrect++; }
		else{$errors[] = '5A.';}
		
		?>

      <a class="navbar-brand">| Quiz Answers |</a>
       <!-- Login / Logout -->
      <ul class="navbar-nav mr-auto">
        <li class="navbar-item">
          <a class="navlink" href="../membership/login/logout.php">Logout</a>
        </li>
      </ul>
      

      </div>
    </nav>


    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading"><?php echo "<div id='results'>$totalCorrect / 5 correct</div>"; ?></h1>

              <p class="intro-text"><?php echo "<h3>The Right Answer(s):</h3>";
			foreach ($errors as $msg) {
			echo "- $msg <br/>";} ?></p>
              <a href="../Home.php" class="btn btn-default btn-lg">Home Page</a>
              <a href=javascript:history.go(-1) class="btn btn-default btn-lg">Return to the quiz</a>
            </div>
          </div>
        </div>
      </div>
    </header>


    <!-- Map Section -->
    
    <!--
    <div id="map"></div>
    -->

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Your Website 2018</p>
      </div>
    </footer>




    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/grayscale.min.js"></script>


  </body>

</html>
