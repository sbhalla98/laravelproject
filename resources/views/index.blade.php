<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		
			
            @include('view.header')
            
		

			<section class="caption">
				<h2 class="caption" style="text-align: center;font-family:Didact Gothic">@yield('content') Find Your Dream Cars For Rent!</h2>
				<h3 class="properties" style="text-align: center;font-family:Didact Gothic">Mercedes Benz - Toyota - Range Rovers</h3>
			</section>
	</section><!--  end hero section  -->



	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			@foreach($c as $c)
			<li style="box-shadow: 3px 4px 8px 4px #aaaaaa;">
					<a href="cons">
						<img class="thumb" src="{{ URL::asset('cars/' . $c->image) }}" width="300" height="200">
					</a>
					<span class="price">{{ $c->hire_cost }}</span>
					<div class="property_details">
						<h1>
							<a href="cons">{{ $c->car_type }}</a>
						</h1>
						<h2>Car Name/Model: <span class="property_size">{{ $c->car_name }}</span></h2>
					</div>
				</li>
			@endforeach
			</ul>
		</div>
	</section>	<!--  end listing section  -->
	
			@include('view.footer');
		<!--  end footer  -->
	
</body>
</html>