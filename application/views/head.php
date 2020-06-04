<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>ButuhEvent For Your Event</title>

    <!-- Favicon -->
    <link rel="icon" type="icon" href="<?php echo base_url()?>assets/bootstrap/img/core-img/logo.png">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url()?>assets/bootstrap/style.css" type="text/css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url()?>assets/bootstrap/css/responsive.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/bootstrap/login/login.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/bootstrap/w3/w3.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
	
	
	
	
	<script>
		$(window, document, undefined).ready(function() {

		$('.input').blur(function() {
			var $this = $(this);
			if ($this.val())
			  $this.addClass('used');
			else
			  $this.removeClass('used');
		  });
		  
		  });


		$('#tab1').on('click' , function(){
			$('#tab1').addClass('login-shadow');
		   $('#tab2').removeClass('signup-shadow');
		});

		$('#tab2').on('click' , function(){
			$('#tab2').addClass('signup-shadow');
		   $('#tab1').removeClass('login-shadow');


		});
		
		
		</script>
		
		
</head>