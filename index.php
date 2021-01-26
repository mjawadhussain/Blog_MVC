<?php 
	session_start();
	include "layouts/header.php";
	include  "layouts/nav.php";
	include  "controller/Post.php";
	$post= new Post;
?>

<div class="container-fluid">
	<div class="row">
		<?php foreach ($post->getPosts() as $key => $post): ?>
			<div class="col-md-12">
				<div class="well">
					<h4 style="font-weight: bold">
						<?php echo $post['title']; ?>
						<small><?php echo date('M d Y h:s A', strtotime($post['created_at'])); ?></small>
					</h4>
					<p><?php echo $post['description']; ?></p>
					<div class="btn btn-group btn-group-sm">
					<button type="button" class="btn btn-primary">Delete</button>
					</div>
				</div>
		<?php endforeach ?>
			</div>
	</div>
</div>
	
		
			 
	<?php
		include  "layouts/footer.php";
	?>