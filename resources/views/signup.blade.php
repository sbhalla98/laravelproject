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
<body style="background-color:whitesmoke">

	<section>
		
			@include('view.header')
		

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
			<form  method="post">
				<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper" class="container">
			
				<div style="border:'2px solid black">
				<form method="post" action="{{ route('signup.validate') }}">
                @csrf
				<h3 style="text-align:center">Signup Here</h3>
					<table style="margin:0 auto">
				
						<tr>
							<td>Full Name:</td>
							<td><input type="text" class="form-control" placeholder="Full name" name="fname" required></td>
						</tr>
						<tr>
							<td>Phone Number:</td>
							<td><input type="text" class="form-control" placeholder="Enter Phone number" name="phone" required></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><input type="email" class="form-control" placeholder="Enter Email Address" name="email" required></td>
						</tr>
						<tr>
							<td>ID Number:</td>
							<td><input type="text" class="form-control"  placeholder="Enter ID Number"name="id_no" required></td>
						</tr>
						<tr>
							<td>Gender:</td>
							<td>
								<select name="gender" class="form-control">
									<option> Select Gender </option>
									<option> Male </option>
									<option> Female </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Location:</td>
							<td style="margin:5px;"><input type="text" class="form-control" placeholder="Enter Your Location" name="location" required></td>
						</tr>
						<tr>
							<td colspan="1" style="text-align:left;padding-top:5px;"><input type="submit" class="btn btn-success" name="save" value="Submit Details"></td>
							<td style="text-align:right;padding-top:5px;"> <a href="login">Login Here</a></td>
						</tr>
					</table>
			
				</form>
				</div>
				
			</ul>
		</div>
	</section>	<!--  end listing section  -->

    @include('view.footer');
	
</body>
</html>