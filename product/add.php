

<?php include '../shared/header.php'; 
include '../shared/nav.php'; 
include '../genral/config.php';
include '../genral/functions.php';

if(isset($_POST ['send'])){
    $name = $_POST ['name'];
    $desc = $_POST ['desc'];
    $categoryid = $_POST ['categoryid'];

   
    $image_type = $_FILES['image']['type'];
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $location='./upload/';
    move_uploaded_file($image_tmp , $location . $image_name);




    $insert = "INSERT INTO product VALUES( NULL , '$name' , '$desc' ,'$image_name', $categoryid)";
  $i= mysqli_query($conn , $insert);

  testMessage($i, "Insert");

}
$name="";
$desc="";

$update=false;
if (isset($_GET['edit'])){
    $update=true;
    $id=$_GET['edit'];
    $select = "SELECT * FROM product WHERE id =$id ";
    $ss = mysqli_query($conn , $select);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    $id = $row['id'];
    $desc = $row['desc'];
    $categoryid = $row ['categoryid'];

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $categoryid = $_POST ['categoryid'];

        $update = "UPDATE product SET `name` ='$name', categoryid=$categoryid , `desc`= '$desc' WHERE id =$id ";
        $u = mysqli_query ($conn , $update);
        header("location: /ecommerce/product/list.php");
    }
}


auth();


?>




<?php if ($update): ?>
    <h1 class="text-center text-info display-3">Update  product Page:<?php echo $id ;?></h1>
                        <?php else:?>
                            <h1 class="text-center text-info display-2">Add product Page</h1>
                            <?php endif; ?>





<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label >product Name</label>
                        <input  value="<?php  echo $name?>" name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >product description</label>
                        <input  type="text" value="<?php  echo $desc?>" name="desc" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >product image</label>
                        <input  type="file"  name="image" type="text" class="form-control">
                    </div>


                            <div class="form-group">
                        <label >Category ID</label>




                        <?php 
                        $select = "SELECT  * FROM category ";
                        $c = mysqli_query($conn ,$select  );
                        ?>
                <select name="categoryid"  class="form-control">

      <?php foreach($c as $data){ ?>
<option value="<?php echo $data['id']?>"> <?php echo $data['name'] ?></option>
<?php }?>


</select>
                    </div>
                      
                    <?php if ($update): ?>
                        
                    <button name="update" class="btn btn-primary"> Update Data </button> 
                        <?php else:?>
                                <button name="send" class="btn btn-info ">Send Data</button>
                            <?php endif; ?>
                </form>

            </div>
        </div>
    </div>
<?php include '../shared/script.php' ?>
