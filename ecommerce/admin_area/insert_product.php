	<!DOCTYPE html>

<?php

include('../header.php');

?>

   
   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	
	
    <div class="container">
		<div class="row">
		<div class="col-sm-10">
    <form id="product_insert" action="insert_product.php" method="post" enctype="multipart/form-data">
        
        
        
        
           
       
            
       
<div class="form-group row">
<label for="ProductTitle" class="col-sm-2 col-form-label">Product Title</label>
	

<input type="text" class="form-control" name="product_title" id="inputPassword" placeholder="Title">
</div>

				
            
<!--
            <tr>
                <td align="right">Product Title</td>
                <td><input type="text" name="product_title" size="60" required></td>
            </tr>
-->
            
			<div class="form-group">
            <select name="product_cat" class="form-control form-control-sm">
  <option>Select a category</option>
			 <?php
    $get_cats = "SELECT * FROM categories";
    
    $run_cats = mysqli_query($con, $get_cats);
    
    while ($row_cats=mysqli_fetch_array($run_cats)){
        
    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];
        
    echo "<option value='$cat_id'>$cat_title</a><option>";
        
    }
   ?>	
</select>
		   </div>
			
			<div class="form-group">
			
			<select name="product_brand" class="form-control form-control-sm">
  <option>Select a brand</option>
			 <?php
                    $get_brands = "SELECT * FROM brands";
    
    $run_brands = mysqli_query($con, $get_brands);
    
    while ($row_brands=mysqli_fetch_array($run_brands)){
        
        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];
        
        echo "<option value='$brand_id'>$brand_title<option>";
        
    }
                    ?>	
</select>
					
					</div>
               
<!--
            <tr>
                <td align="right">Product Category:</td>
                
                <td>
                    <select name="product_cat">
                        <option>Select a Category</option>
   
                   </select>
                </td>
            </tr>
-->
            
            
<!--
            <tr>
                <td align="right">Product Brand:</td>
                <td>
                    <select name="product_brand" required>
                        <option>Select a Brand</option>
                
                    </select>
                </td>
            </tr>
-->
			
            <div class="form-group">
    <label for="exampleFormControlFile1">Product image</label>
    <input type="file" name="product_image" class="form-control-file" id="exampleFormControlFile1">
  </div>
				
            
<!--
            <tr>
                <td align="right">Product Image:</td>
                <td><input type="file" name="product_image" required></td>
            </tr>
-->
            
            <div class="form-group">
                <td align="right">Product Price:</td>
                <td><input type="text" name="product_price"></td>
		   </div>
            
            <div class="form-group">
                <td align="right">Product Description:</td>
                <td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
		   </div>
            
            <div class="form-group">
                <td align="right">Product Keywords:</td>
                <td><input type="text" name="product_keywords" size="60"></td>
		   </div>
            
            <input type="submit" class="btn btn-success" name="insert_post" value="Insert Now">
</form>
       </div>
       </div>
		</div>
        
        
    
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
<?php

    if(isset($_POST['insert_post'])){
		
        
		//get data from input fields
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_keywords = $_POST['product_keywords'];
        
		//get image from input field	
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];
        
        move_uploaded_file($product_image_tmp, "product_images/$product_image");
        
        $insert_product = "INSERT INTO products (product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) VALUES ('$product_cat', '$product_brand', '$product_title', '$product_price', '$product_desc', '$product_image', '$product_keywords')";
        
        $insert_pro = mysqli_query($con, $insert_product);
		
		
        
        if($insert_pro) {
            echo "<script>alert('product inserted')</script>";
            echo "<script>window.open('insert_product.php','_self')<script>";
            
        }
    }

?>
