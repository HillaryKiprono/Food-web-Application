<?php
include'config.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['food_name'];
    $fprice=$_POST['food_price'];
    $fqty=$_POST['qty'];
    $fcode=$_POST['food_code'];
    $filename = 'image/'.$_FILES['image']['name'];
    $sql="INSERT INTO fooditem(food_name,food_price,qty,food_code,image) 
    VALUES('$fname','$fprice','$fqty','$fcode','$filename')";         
          if(mysqli_query($conn,$sql))
           {
                 echo '<script> alert("Menu Item Successful Uploaded");</script>';
                $_SESSION['message']="Successfully uploaded";
               
                header('refresh:0;url=adminlogin.php');
              }
               else{
                 echo '<script> alert("Fail to upload the food item");</script>';

              }
     
          }
    
        
         else
       {
           $_SESSION['message']="Please upload only!JPG,PNG or GIF image!";  
       }


?> 


