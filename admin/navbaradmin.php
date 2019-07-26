<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="adminpage.php">ElectroDOM</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb"  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="navb" class="navbar-collapse collapse hide">
    <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" href="adminusercontrol.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
     
    </ul>
    <ul class="navbar-nav">
      <li>
        <form class="form-inline ml-auto" action="adminsearchlog.php" method="POST">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </li>
    </ul>
    

    <ul class="nav navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link" href="../logout.php">Logout</a>
        
      </li>
    </ul>
    
  </div>
</nav>