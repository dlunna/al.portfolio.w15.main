<!DOCTYPE html>
<html class="full" lang="es">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="mandra/images/favicon.ico">

    <title>Alamandra</title>

    <!-- Bootstrap Core CSS -->
    <link href="mandra/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="mandra/the-big-picture.css" rel="stylesheet">

<?php
  $bg = array(
    'mandra/fotos/fw2010_0103cancun0263.jpg',
	'mandra/fotos/fwDSCF0734.jpg',
	'mandra/fotos/fwDSCF0756.jpg',
	'mandra/fotos/fwDSCF5228.jpg',
	'mandra/fotos/fwIMG_20140309_173949.jpg',
	'mandra/fotos/fwIMG_20140315_154228.jpg',
	'mandra/fotos/fwIMG_20140315_161909.jpg',
	'mandra/fotos/fwIMG_20140315_162316.jpg'
  ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

    <style type="text/css">
	  .full {
		  background: url(<?php echo $selectedBg; ?>) no-repeat center center fixed;
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
	  }
	</style>




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.alamandra.com"><img src="mandra/images/logo.png" height="20"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li> <a href="archivos.php">Portafolio</a> </li>
                    <li> <a href="http://alamandra-me.blogspot.com">Notas</a> </li>
                    <li> <a href="archivos.php">Ensamblador</a> </li>
                    <li> <a href="ra/">Realidad Aumentada</a> </li>
                    <li> <a href="https://sourceforge.net/projects/plantillatesis/"><img src="mandra/images/latex.fw.png"></a> </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h1>Alamandra</h1>
                <p>Mi página personal<br />
                dlunna@gmail.com</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="mandra/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="mandra/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
