

<?php include '../shared/header.php'; 
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/functions.php';

if(isset($_POST ['send'])){
    $name = $_POST ['name'];
  
  $insert = "INSERT INTO category VALUES( null , '$name' )";
  $i= mysqli_query($conn , $insert);

  testMessage($i, "Insert");

}
$name="";

$update=false;
if (isset($_GET['edit'])){
    $update=true;
    $id=$_GET['edit'];
    $select = "SELECT * FROM category WHERE id =$id ";
    $ss = mysqli_query($conn , $select);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    $id = $row['id'];

    if(isset($_POST['update'])){
        $name = $_POST['name'];
    
        $update = "UPDATE category SET name ='$name' WHERE id =$id ";
        $u = mysqli_query ($conn , $update);
        header("location: /ecommerce/category/list.php");
    }
}


auth();

?>




<?php if ($update): ?>
    <h1 class="text-center text-info display-3">Update  category Page:<?php echo $id ;?></h1>
                        <?php else:?>
                            <h1 class="text-center text-info display-2">Add category Page</h1>
                            <?php endif; ?>





<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label >category Name</label>
                        <input  value="<?php  echo $name?>" name="name" type="text" class="form-control">
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
