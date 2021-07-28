<?php include('header.php'); ?>

	
	<div class="container"><!--bootstrap content area-->
		<div class="row">
			<!--SIDEBAR-->
			<div class="col-md-2 list-group" id="sidebar">

				<li href="#" id="sidebar_title" class="list-group-item" 
					style="color: white">Categories</li>	
	
					<?php getCats(); ?>

				<a href="#" id="sidebar_title" class="list-group-item" 
				   style="color: white">Brands</a>
					
					<?php getBrands(); ?>
			</div>

		
			<div class="col-md-10" id="content_area">
			
					<?php cart(); ?>

			<div id="products_box">
				
				<form action="" method="post" enctype="multipart/form-data">
					
					<table class="table table-hover">
						
						<thead style="background: skyblue; color: white">
							<tr>
								<th scope="col">Title</th>
								<th scope="col">Image</th>
								<th scope="col">Remove</th>
								<th scope="col">quantity</th>
								<th scope="col">total price</th>
							</tr>
						</thead>

						<tbody>

								<?php 

								$total = 0;

								global $con;
								$ip = getIp();

								$sql = "SELECT * FROM carte WHERE ip_add='$ip'";

								$data = mysqli_query($con, $sql);

								while($p_price = mysqli_fetch_array($data)) {

									$pro_id = $p_price['p_id'];

									//Select items from products db, using cart p_id

									$sql1 = "SELECT * FROM products WHERE product_id='$pro_id'";

									$data1 = mysqli_query($con, $sql1);

										while ($pp_price = mysqli_fetch_array($data1)) {

											$product_price = array($pp_price['product_price']);
											$single_price = $pp_price['product_price'];
											$product_title = $pp_price['product_title'];
											$product_image = $pp_price['product_image'];

											$values = array_sum($product_price);

											$total +=$values;
								?>

								<tr>
									<th scope="row"><?php echo $product_title;?></th>
									<td align="center"><img src="admin_area/product_images/<?php echo $product_image;?>" width="100" height="100"></td>
									<td align="center"><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"></td>
									<td align="center"><input type="text" size="4" name="qty"</td>
									<td align="center"><?php echo "£" . $single_price; ?></td>
								</tr>

									<?php 	
											}
										} 
									?>

								<tr style="background: skyblue">
									<td colspan="4" style="text-align: right"><b>Sub Total:</b></td>
									<td align="center"><?php echo "£" . $total;?></td>
								</tr>
							</tbody>
						</table>

						<div class="btn-group" role="group" aria-label="Basic example" style="float: right;">

						<button class="btn btn-info btn-checkout" type="submit" name="update_cart">Delete checked</button>
						<button class="btn btn-primary btn-continous" type="submit" name="continue">continue shopping</button>
						<button class="btn btn-basic btn-checkout"><a style="text-decoration: none; color: white" href="checkout.php">checkout</a></button>

						</div>
					</form>
						
									<?php

									$ip = getIp();

									if(isset($_POST['update_cart'])) {

										foreach($_POST['remove'] as $remove_id) {

											$sql = "DELETE FROM carte WHERE p_id='$remove_id' AND ip_add='$ip'";

											$data = mysqli_query($con, $sql);

											if($data) {
												echo "<script>window.open('cart.php', '_self')</script";
											}
										}
									}

									if(isset($_POST['continue'])) {

										echo "<script>window.open('index.php', '_self')</script";
									}
									?>
					</div>
				</div>
			</div>
		<!--Content wrapper ends-->
		</div>

<!--Main Container ends here-->
			
<?php include('footer.php'); ?>