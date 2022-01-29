<?php  
include '../shared/header.php';
include '../shared/nav.php';
include '../genral/config.php';
include '../genral/functions.php';



$select = " SELECT * FROM product  where categoryid = 11";
$s= mysqli_query($conn , $select);
?>

<h1 class="display-2 text-center text-info" > List Femal Product Page </h1>
<div class="container text-center col-md-6 mt-3">
        <div class="row">
<?php  foreach ($s as $data){?>
            <div class="col-md-4">

                <div class="card">
                <img src="/ecommerce/product/upload/<?php  echo $data['image'] ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5>Product Title : <?php echo $data ['name'] ?> </h5>
                        <p> Product Description : <?php echo $data ['desc'] ?> </p>
                    </div>
                    <a href="/ecommerce/ecommerceCustomer/order/add.php?pid=<?php echo $data['id'] ?>" class = "btn btn-info"> Make Ordr</a> 
                </div>        
            </div>
        </div>
        <?php } ?>

</div>


<?php 

include '../shared/script.php';
?>