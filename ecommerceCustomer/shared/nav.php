<?php  session_start();
   if (isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("location: /ecommerce/Admin/login.php");
  } ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
   
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
         Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mele</a>
          <a class="dropdown-item" href="/ecommerce/ecommerceCustomer/products/female.php">  Female</a>
  
        </div>
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a   name="logout" class="btn btn-outline-danger my-2 my-sm-0" href="/ecommerce/ecommerceCustomer/admin/login.php"">Log Out</a>
    </form>
    <form class="form-inline my-2 my-lg-0">

      <a class="btn btn-outline-success my-2 my-sm-0" href="/ecommerce/ecommerceCustomer/admin/login.php">Login</a>
    </form>
  </div>
</nav>