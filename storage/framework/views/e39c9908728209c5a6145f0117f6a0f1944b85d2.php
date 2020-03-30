<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
    <?php echo $__env->make('view.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="container" style="padding:40px">
		<div id="fom" class="login">
			<form method="post" action="<?php echo e(route('login.validate')); ?>">
            <?php echo csrf_field(); ?>
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline;font-family:Didact Gothic">Client Login Area</h3>
				<div class="form-row">
    				<div class="row">
					Email Address:	<input type="email" name="email" placeholder="Enter Email Address" class="form-control" placeholder="Enter Email Address" required>
    				</div>
    			<div class="row">
				Password:<input type="password" name="pass" class="form-control" placeholder="Enter ID Number" required>
    			</div>
				<div class="row" style="margin-top:10px">
				  <input type="submit" name="log" class="btn btn-success" value="Login Here">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <a href="signup">Sigup Here</a>
				  </div>
				  </div>
			</form>
			
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section>
	
    <?php echo $__env->make('view.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

	<!--  end footer  -->
	
</body>
</html><?php /**PATH /Users/sonalibhalla/carproject/resources/views/login.blade.php ENDPATH**/ ?>