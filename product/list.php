
<?php include '../shared/header.php'; 
include '../shared/nav.php';
include '../genral/config.php';
include '../genral/functions.php';

$select = "SELECT  product.id,product.name product, product.desc, category.name cat FROM `product` JOIN category ON product.categoryid = category.id";
    $s = mysqli_query($conn ,$select  );

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = "DELETE FROM product WHERE id =$id";
    $d = mysqli_query($conn , $delete);
    header("location: /ecommerce/product/list.php");

}
auth();

?>

 


<h1 class="text-center text-info display-2">List product Page</h1>
<div class="container text-center col-md-6 mt-3">
    <div class="card">
        <div class="card-body">
            <table class="table table-dark">
               
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Descreption</th>
                <th>Category</th>
                <th colspan="2">Action </th>
            </tr>

                    <?php foreach($s as $data){?>
            <tr>
            <th> <?php echo $data ['id']?>  </th>
            <th> <?php echo $data ['product']?>  </th>
            <th> <?php echo $data ['desc']?>  </th>
            <th> <?php echo $data ['cat']?>  </th>


            <th> <a onclick="return confirm('Are You Sure ?')" href="/ecommerce/product/list.php?delete=<?php echo $data ['id']?>" class="btn btn-danger">Remove</a></th>
            <th><a  href="/ecommerce/product/add.php?edit=<?php echo $data ['id']?>" class="btn btn-info">Edit</a></th> 
            </tr>
            <?php }?>
            </table>
        </div>
    </div>
</div>
<?php include '../shared/script.php' ;?>

