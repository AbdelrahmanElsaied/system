<?php  
include '../shared/header.php';
include '../shared/nav.php';
include '../genral/config.php';
include '../genral/functions.php';



$select = " SELECT * FROM product  where categoryid = 11";
$s= mysqli_query($conn , $select);

$customerid =   $_SESSION['id'] ;


if(isset($_POST['send'])){
    $productid = $_POST['productid'];
    $customerid= $_POST['customerid'];
    $insert = "INSERT INTO order VALUES (NULL ,  $customerid , $productid )";
    $i = mysqli_query ($conn , $insert);
    testMessage($i , "Insert Order") ;

}
?>

<h1 class="display-2 text-center text-info" > Make Orde Page </h1>
<div class="container text-center col-md-6 mt-3">

                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group">
                            <input  type="text"  class="form-control" name = "productid" value=<?php echo $_GET['pid']?>>
                            </div>
                       
                   
                    <div class="form-group">
                        <input   type="text"   class="form-control" name = "customerid" value=<?php echo $customerid?>>
</div>
                        <button name="send" class = "btn btn-info"> Make Order</button>
                        </form>
           
       
</div>
</div>
</div>


<?php 

include '../shared/script.php';
?>