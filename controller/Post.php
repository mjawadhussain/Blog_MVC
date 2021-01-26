<?php 
include 'db.php';
/**
 * 
 */
class post extends Database
{
	public function getposts(){
		$query = 'select *FROM posts ORDER BY created_at DESC';
		return $this->conn->query($query);
	}
	public function savePost($post){
         $title = $post['title'];
         $description = $post['description'];
         $user_id=$_SESSION['user']['id'];
         $query = "INSERT INTO posts (user_id,title, description) VALUES  ('$user_id','$title', '$description')";
         if (mysqli_query($this->conn,$query)) {
    	header("Location: index.php");
				exit();
    }
    else {
    	echo "Error: " . $query . "<br>" . mysqli_error($this->conn);
    }
  }
  public function deletePost($post){
			
			$query = "DELETE FROM posts where id=$post";
			$this->conn->query($query);
			header("Location: index.php");
			exit();
}
public function getPost($id)
		{
			$query = "SELECT * FROM posts WHERE id='$id'";
			return $this->conn->query($query)->fetch_assoc();
		}

		public function updatePost($post)
		{
			$id = $post['id'];
			$title = $post['title'];
			$description = $post['description'];

			$query = "UPDATE posts SET title='$title', description = '$description' WHERE id = '$id'";
			if ($this->conn->query($query) === TRUE) {
				header("Location: index.php");
				exit();
			} else {
			  	echo "Error updating record: " . $conn->error;
			}
		}
}
 ?>