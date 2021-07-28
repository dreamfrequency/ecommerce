<?php include('header.php'); ?>
	
<!--customer registration form-->

	<div class="container" style="margin-top: 200px;">
		<div class="row">
			<div class="col-sm-10 offset-sm-1">
				<form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>">
					<div class="form-group">

						<label for="c_registrationName">Name</label>
						<input name="c_name" type="text" class="form-control" id="c_registrationName" placeholder="Enter name" required>
						<span><?php $name_error ?></span>
						
					</div>
			
					
					<div class="form-group">
						<label for="c_registrationEmail">Email</label>
						<input name="c_email" type="text" class="form-control" id="c_registrationEmail" placeholder="Enter email" required>
					</div>
					
					
					<div class="form-group">
						<label for="c_registrationPass">Password</label>
						<input name="c_pass" type="password" class="form-control" id="c_registrationPass" placeholder="Enter password" required>
					</div>

					<button type="submit" name="register" class="btn btn-primary">Create account</button>
				</form>
			</div>
		</div>
	</div>

<?php 

//form validation

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		if(empty($_POST["c_name"])) {
			$name_error = '';
			}

		if(empty($_POST["c_email"])) {
			echo "email is required";
			}

		if(empty($_POST["c_pass"])) {
			echo "password is required";
			}

//form registration
		
		if($name_error == '') {

			$ip = getIp();

			$c_name = $_POST['c_name'];
			$c_email = $_POST['c_email'];
			$c_pass = $_POST['c_pass'];

			 $sql = "INSERT INTO customers (customer_ip,customer_name,customer_email,customer_pass) VALUES ('$ip','$c_name','$c_email','$c_pass')";

			$data = mysqli_query($con, $sql); 

			$sql1 = "SELECT * FROM cart WHERE ip_add='$ip'";

			$data = mysqli_query($con, $sql1); 

			$check_cart = mysqli_num_rows($data); 


			if($check_cart==0){

			$_SESSION['customer_email']=$c_email; 

			echo "<script>alert('Account has been created successfully, Thanks!')</script>";
			echo "<script>window.open('shop.php,'_self')</script>";

			}
			else {

			$_SESSION['customer_email']=$c_email; 

			echo "<script>alert('Account has been created successfully, Thanks!')</script>";

			echo "<script>window.open('checkout.php','_self')</script>";

			}
		}
	}

?>

<?php include('footer.php'); ?>









