

<?php include '../shared/header.php'; 
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/functions.php';

 if($_SESSION['role'] == 0){






if(isset($_POST['signUp'])){
    $name= $_POST['name'];
    $password= $_POST['password'];
    $role = $_POST ['role'];
    $insert = "INSERT INTO admin VALUES (null , '$name' , '$password' ,$role)";
    $i = mysqli_query ($conn , $insert);
    testMessage($i , "Insert Admin");
  
 
}


?>
<h1 class="text-center md-3 display-3 text-info"> Add Admin Page </h1>
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
                <div class="form-group" >
                    <label > Role : </label>
                    <select name="role" class=" form-control" >

                    <option value="0"> All Access </option>
                    <option value="1"> Semi Access </option>

                    </select>

                </div>

                <button class="btn btn-info"name="signUp" >Sign Up</button>
            </form>
        </div>
    </div>
</div>

<?php  } 

else{

    ?>


<img width=" 100%" src="https://cdn4.vectorstock.com/i/1000x1000/29/48/not-authorized-rubber-stamp-vector-11512948.jpg" alt="">



                
<?php } include   '../shared/script.php' ;?>


