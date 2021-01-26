<?php include '../layouts/header.php'; ?>
<?php include '../controller/Auth.php';?>
<?php 
    $auth = new Auth; 
	if (isset($_POST['submit'])&& $_POST['submit']=='signup') {
		if (empty($_POST['username'])) {
			$errors['username']= 'Username is required';
		}
		if (empty($_POST['email'])) {
			$errors['email']= 'email is required';
		}
		if (empty($_POST['pwd'])) {
			$errors['pwd']= 'pwd is required';
		}

		if (empty($errors)) {
			echo $auth->signup($_POST);	
		}

	}

 ?>
 <div class="container"> 
    <h1> 
        <form action="login.php">
      <span style="color:green">welcome to  my blog</span> 
       <button  class='btn btn-success pull-right'>Log in</button> 
      </form>
    </h1> 
 </div> 




<div class="container">
	<div class="row">
		<div class="col-md-6 col-sm-offset-3" style="margin-top: 60px;">
			<div class="well">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				  <div class="form-group">
				  	<label for="username">username</label>
				  	 <input type="text" class="form-control" name="username" id="username">
				  	 <?php echo isset($errors['username']) ? $errors['username'] : '' ?>
				  	</div>
				  	 <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" name="email" id="email">
				     <?php echo isset($errors['email']) ? $errors['email'] : '' ?>
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" name="pwd" id="pwd">
				     <?php echo isset($errors['pwd']) ? $errors['pwd'] : '' ?>
				  </div>
				  <button type="submit" name="submit" value="signup" class="btn btn-default">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include '../layouts/footer.php'; ?>