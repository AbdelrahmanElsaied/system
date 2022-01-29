
     <?php session_start();
     
     if (isset($_GET['logout'])){
       session_unset();
       session_destroy();
       header("location: /ecommerce/Admin/login.php");
     }
     
     ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <?php if(isset($_SESSION['admin'])): ?>
  <a class="navbar-brand" href="/ecommerce/index.php">  <?php echo $_SESSION['admin'] ?></i></i></a>
    <?php else :?>
      <a class="navbar-brand" href="/ecommerce/index.php"> <i class="fas fa-store" style="font-size: 48px;"></i></i></a>
<?php endif; ?> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php if(isset($_SESSION['admin'])) :?>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/ecommerce/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Customers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/ecommerce/customer/add.php">Add Customer</a>
          <a class="dropdown-item" href="/ecommerce/customer/list.php">list Customer</a>
     
        </div>
      </li>
      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
        category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/ecommerce/category/add.php">Add Category</a>
          <a class="dropdown-item" href="/ecommerce/category/list.php">list Category</a>
     
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Product
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/ecommerce/product/add.php">Add Product</a>
          <a class="dropdown-item" href="/ecommerce/product/list.php">list Product</a>
     
        </div>
      </li>
      
      <?php if($_SESSION['role'] == 0): ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/ecommerce/admin/add.php">Add admin</a>
          <a class="dropdown-item" href="/ecommerce/admin/list.php">list admin</a>
     
        </div>
      </li>
       <?php  endif ;?> 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button   name="logout" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
    </form>
    <?php else:?>
    <form class="form-inline my-2 my-lg-0">
      <a href="/ecommerce/Admin/login.php"  class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</a>
    </form>
    <?php endif ; ?>
  </div>
</nav>

