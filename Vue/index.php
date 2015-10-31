<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo($titre) ?></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="css/hicham.bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
		<link href="css/hicham.css" rel='stylesheet' type='text/css' />
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/contact-buttons.css" rel="stylesheet">
	
		<script src="js/jquery.min.js"></script>
	
		<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script src="js/faq.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
			
			});
		</script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	
    </head>
    <body>
        <?php

            include_once('sections/hautDePage.php');
		?>
		
		<a id='backTop'>Back To Top</a>
		<!-- /Retour au haut de la page -->
		
		<?php
            include_once($main);
            include_once('sections/basDePage.php'); 
        ?>
		<!-- Core JavaScript Files -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.backTop.min.js"></script>
		<script src="js/backTop.js"></script>
		<script src="js/jquery.contact-buttons.js"></script>
		<script src="js/demo.js"></script>
    </body>
</html>