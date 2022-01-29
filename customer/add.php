

<?php include '../shared/header.php'; 
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/functions.php';

if(isset($_POST ['send'])){
    $name = $_POST ['name'];
    $phone = $_POST ['phone'];
    $password = $_POST ['password'];
  $insert = "INSERT INTO customers VALUES( null , '$name' , '$phone' , '$password')";
  $i= mysqli_query($conn , $insert);

  testMessage($i, "Insert");

}
$name="";
$phone="";
$update=false;
if (isset($_GET['edit'])){
    $update=true;
    $id=$_GET['edit'];
    $select = "SELECT * FROM customers WHERE id =$id ";
    $ss = mysqli_query($conn , $select);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    $id = $row['id'];
    $phone = $row['phone'];
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $update = "UPDATE customers SET name ='$name', phone= '$phone' WHERE id =$id ";
        $u = mysqli_query ($conn , $update);
        header("location: /ecommerce/customer/list.php");
    }
}
auth();




?>




<?php if ($update): ?>
    <h1 class="text-center text-info display-3">Update  Customer Page:<?php echo $id ;?></h1>
                        <?php else:?>
                            <h1 class="text-center text-info display-2">Add Customer Page</h1>
                            <?php endif; ?>





<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label >Customer Name</label>
                        <input  value="<?php  echo $name?>" name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >Customer Phone</label>
                        <input   value="<?php  echo $phone?>" name="phone" type="text" class="form-control">
                    </div>


                    <?php if ($update): ?>
                   
                        <?php else:?>
                            <div class="form-group">
                        <label >Customer Password</label>
                        <input    name="password" type="text" class="form-control">
                            <?php endif; ?>
                   
                    </div>
                    <?php if ($update): ?>
                        <div>
                    <button name="update" class="btn btn-primary ">Update Data</button> </div>
                        <?php else:?>
                                <button name="send" class="btn btn-info ">Send Data</button>
                            <?php endif; ?>
                </form>

            </div>
        </div>
    </div>
<?php include '../shared/script.php' ?>
