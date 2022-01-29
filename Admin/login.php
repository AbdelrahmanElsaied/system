

<?php include '../shared/header.php'; 
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/functions.php';






if(isset($_POST['login'])){
    $name= $_POST['name'];
    $password= $_POST['password'];
    $select = "SELECT * from admin where name='$name' and password='$password' ";
    $s = mysqli_query($conn , $select);
   $numRow= mysqli_num_rows($s);
   $row = mysqli_fetch_assoc($s);
   if( $numRow > 0){
       $_SESSION['admin']=$name;
       $_SESSION['role']  = $row['role'];
       header("location: /ecommerce/index.php");
    echo  "<div class='alert alert-info text-center mx-auto w-50'>
    <h5>True Admin</h5>
    </div>";
  

   }else{
    echo  "<div class='alert alert-danger text-center mx-auto w-50'>
    <h5>False Admin</h5>
    </div>";
   }


}


?>
<h1 class="text-center md-3 display-3 text-info"> Login Page </h1>
<div class="container text-center col-md-6 mt-3">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <lable> Admin Name </lable>
                    
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <lable> Admin Password </lable>
                    
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-info"name="login" >Login</button>
            </form>
        </div>
    </div>
</div>


                
<?php include '../shared/script.php' ;?>
