<?php 
	session_start();
	include 'db.php';
	/**
	 * 
	 */
	class Auth extends Database 
	{
		public function login($post)
		{
			$email = $post['email'];
			$password = $post['pwd']; 
			$user = $this->conn->query("SELECT * from users WHERE email = '$email'");
			if (mysqli_num_rows($user)) {
				$userData = $user->fetch_assoc();
				if (password_verify($password, $userData['password'])) {
					$_SESSION['user'] = $userData;
					header('Location: ../index.php');	
				} else {
					echo "Password not match";
				}
			} else {
				echo "Account Not Found";
			}
		}
		public function signup($post)
		{
			$username = $post['username'];
			$email = $post['email'];
			$password = password_hash($post['pwd'], PASSWORD_DEFAULT);  
			// check if email already exists
			$emailDb = $this->conn->query("SELECT email FROM users WHERE email = '$email'");
			if (mysqli_num_rows($emailDb)) { // check if count is greater which means email exists
				return 'Email already exists';
			}
			// save new user
			$query = "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$password')";
			if ($this->conn->query($query) === TRUE) {
				header('location: login.php');
			  return "Account created successfully!";
			} else {
			  echo "Error: " . $query . "<br>" . $this->conn->error;
			}
		}
	}