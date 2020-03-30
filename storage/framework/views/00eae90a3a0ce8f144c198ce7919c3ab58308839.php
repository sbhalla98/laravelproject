<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link href="<?php echo e(asset('css/reset.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		
			
            <?php echo $__env->make('view.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
		

			<section class="caption">
				<h2 class="caption" style="text-align: center;font-family:Didact Gothic"><?php echo $__env->yieldContent('content'); ?> Find Your Dream Cars For Rent!</h2>
				<h3 class="properties" style="text-align: center;font-family:Didact Gothic">Mercedes Benz - Toyota - Range Rovers</h3>
			</section>
	</section><!--  end hero section  -->



	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php $__currentLoopData = $c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li style="box-shadow: 3px 4px 8px 4px #aaaaaa;">
					<a href="cons">
						<img class="thumb" src="<?php echo e(URL::asset('cars/' . $c->image)); ?>" width="300" height="200">
					</a>
					<span class="price"><?php echo e($c->hire_cost); ?></span>
					<div class="property_details">
						<h1>
							<a href="cons"><?php echo e($c->car_type); ?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo e($c->car_name); ?></span></h2>
					</div>
				</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->
	
			<?php echo $__env->make('view.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
		<!--  end footer  -->
	
</body>
</html><?php /**PATH /Users/sonalibhalla/carproject/resources/views/index.blade.php ENDPATH**/ ?>