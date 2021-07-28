<?php session_start(); 
include("model/functions.php");


//random password generator
if(isset($_POST['gen'])) {
	$char= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$generatedPassword = substr(str_shuffle($char), 0, 12);

}
?>

<h2 style="text-align:center;">Change Your Password</h2>
<form action="change_pass.php" method="post"> 
	
	
	
	<table align="center" width="600">
	<tr>
	<td align="right"><b>Enter Current Password:</b></td>
	<td><input type="password" name="current_pass" ></td>
	</tr>
	
	<tr>
	<td align="right"><b>Enter New Password:</b></td>
	<td><input type="password" name="new_pass" ></td>
	</tr>
	
	<tr>
	<td align="right"><b>Enter New Password Again:</b></td>
	<td><input type="password" name="new_pass_again" ></td>
	</tr>
	
	<tr align="center">
	<td colspan="3"><input type="submit" name="change_pass" value="Change Password"/></td>
	</tr>
	
	</table>
	
	<input type="submit" value="Generate" name="gen"> <?php if(isset($generatedPassword)) {echo $generatedPassword; } ?>


</form>
<?php 

include("includes/db.php"); 


	if(isset($_POST['change_pass'])){
		
		$user = $_SESSION['customer_email']; 
	
		$current_pass = $_POST['current_pass']; 
		$new_pass = $_POST['new_pass']; 
		$new_again = $_POST['new_pass_again']; 
		
		$sql = "SELECT * FROM customers WHERE customer_pass='$current_pass' AND customer_email='$user'";
		
		$data = mysqli_query($con, $sql); 
		
		$count = mysqli_num_rows($data); 
		
		if($count==0){
		
		echo "<script>alert('Your Current Password is wrong!')</script>";
		exit();
		}
		
		if($new_pass!=$new_again){
		
		echo "<script>alert('New password do not match!')</script>";
		exit();
		}
		else {
		
		$sql1 = "UPDATE customers SET customer_pass='$new_pass' WHERE customer_email='$user'";
		
		$data = mysqli_query($con, $sql1); 
		
		echo "<script>alert('Your password was updated succesfully!')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
		}
	
	}




?>

