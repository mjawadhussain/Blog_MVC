<?php 
	include '../layouts/header.php'; 
	include '../controller/Auth.php';
?>
<?php

	$auth = new Auth;

	if (isset($_POST['submit'])&& $_POST['submit']=='signin') {
		$auth->login($_POST);
	}
?>
    <div class="container"> 
       <h1> 
       	 <form action="Signup.php">
      <span style="color:green">welcome to  my blog</span> 
      <button  class='btn btn-success pull-right'> Signup </button> 
      </form>
      </h1> 
    </div> 

<div class="container">
	<div class="row">
		<div class="col-md-6 col-sm-offset-3" style="margin-top: 60px;">
			<div class="well">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				  <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" id="email" name="email">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd" name="pwd">
				  </div>
				  <button type="submit" name="submit" value="signin" class="btn btn-default">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include '../layouts/footer.php'; ?>