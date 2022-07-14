<nav class="navbar navbar-expand navbar-white">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">
        <p class="text-dark" style="font-size: 50px;"><i class="fa-solid fa-house"></i></p>
      </a>
      <div class="mx-auto">
        <a href="profile.php" class="nav-link  text-muted h3">Welcome, <?=$_SESSION['username']?></a>
      </div>  
          <a href="../actions/logout.php" class="nav-link text-danger nav-item" style="font-size: 40px;"><i class="fa-solid fa-user-xmark"></i></a>
      </div>
    </div>
  </nav>