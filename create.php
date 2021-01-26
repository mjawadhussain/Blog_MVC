<?php 
	session_start();
	include  'layouts/header.php';
	include  'layouts/nav.php';
	include 'controller/Post.php';
	$post = new post;
	if(isset($_SESSION['userName'])) {
	  echo "Your session is running " . $_SESSION['userName'];
	}
	if (isset($_POST['type'])&& $_POST['type'] == 'post') {
		if (empty($_POST['title'])) {
			$errors['title']='title is required';
		}if (empty($_POST['description'])) {
			$errors['description']='description is required';
		}
		if (empty($errors)) {
			$post->savePost($_POST);
		}
	}
?>
<div class="well">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control" placeholder="Enter Post Title" name="title">
			<?php echo isset($errors['title']) ? $errors['title'] : '' ?>
		</div>

		<div class="form-group">
			<label>Description</label>
			<textarea name="description" class="form-control" rows="4" placeholder="Enter Post Description"></textarea>
			<?php echo isset($errors['description']) ? $errors['description'] : '' ?>
		</div>

		<div class="form-group">
			<button type="submit"  class="btn btn-default" name="type" value="post">save</button>
		</div>
	</form>
</div>
<?php include 'layouts/footer.php'; ?>