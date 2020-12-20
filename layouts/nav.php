<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url('/user/index.php'); ?>">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url('/post/index.php'); ?>">Post</a>
      </li>
      <?php if(!auth()): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url('/auth/login.php'); ?>">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url('/auth/register.php'); ?>">Register</a>
      </li>
      <?php endif; ?>
      <?php if(auth()): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url('/auth/logout.php'); ?>">Logout</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
  </div>
</nav>