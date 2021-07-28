<?php 
include("header.php");
?>

			
	<div id="products_box">
				
		<?php 

		if(!isset($_SESSION['customer_email'])) {
			include("customer_login.php");

		}else {
			include("payment.php");
		}
		?>
				
	</div>
		
<?php include('footer.php'); ?>