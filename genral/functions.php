<?php

function testMessage($condation , $mess){

        if($condation){
            echo " <div class='alert alert.info text-center mx-auto w-50'>
            
            <h5> $mess Is True Proccrss  </h5>
            </div>";

         }else{
                echo " <div class='alert alert.danger text-center mx-auto w-50'>
            
                <h5> $mess Is False Proccrss  </h5>
                </div>";
    
            }

        }

function auth(){
    if ($_SESSION['admin']){

    }else{
        header("location: /ecommerce/Admin/login.php");
    }
}





?>