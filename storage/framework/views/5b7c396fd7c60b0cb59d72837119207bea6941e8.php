
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div style="color:blue">
				<h1 class="logo">Simple Car Rental System</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php">Rent Cars</a></li>
						
						<li><a href="cons">Contact</a></li>
					
					
					<li><a href="login">Client Login</a></li>
					<li><a href="cons">Admin Login</a></li>
					</ul>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
								<li><a href="admin/logout.php">Logout</a></li>
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>
      <?php /**PATH /Users/sonalibhalla/carproject/resources/views/view/header.blade.php ENDPATH**/ ?>