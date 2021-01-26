<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Blog</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li> 
      <li class="active"><a href="create.php">Add new post</a></li>   
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['user'])): ?>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['name']; ?></a></li>
         <li><a href="auth/logout.php"><span class="glyphicon glyphicon-user"></span>logout</a></li>
      <?php else: ?>
        <li><a href="auth/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="auth/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        }
      </ul>
    <?php endif ?>
  </div>
</nav>