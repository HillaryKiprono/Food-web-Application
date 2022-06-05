<?php  
include 'config.php';
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO testimage(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM  <?php  
 include'config.php';
 if(isset($_POST["submit"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  <?php
           // Create database connection
           $db = mysqli_connect("localhost", "root", "", "image_upload");
         
           // Initialize message variable
           $msg = "";
         
           // If upload button is clicked ...
           if (isset($_POST['upload'])) {
               // Get image name
               $image = $_FILES['image']['name'];
               // Get text
               $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
         
               // image file directory
               $target = "images/".basename($image);
         
               $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
               // execute query
               mysqli_query($db, $sql);
         
               if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                   $msg = "Image uploaded successfully";
               }else{
                   $msg = "Failed to upload image";
               }
           }
           $result = mysqli_query($db, "SELECT * FROM images");
         ?>
         <!DOCTYPE html>
         <html>
         <head>
         <title>Image Upload</title>
         <style type="text/css">
            #content{
                width: 50%;
                margin: 20px auto;
                border: 1px solid #cbcbcb;
            }
            form{
                width: 50%;
                margin: 20px auto;
            }
            form div{
                margin-top: 5px;
            }
            #img_div{
                width: 80%;
                padding: 5px;
                margin: 15px auto;
                border: 1px solid #cbcbcb;
            }
            #img_div:after{
                content: "";
                display: block;
                clear: both;
            }
            img{
                float: left;
                margin: 5px;
                width: 300px;
                height: 140px;
            }
         </style>
         </head>
         <body>
         <div id="content">
           <?php
             while ($row = mysqli_fetch_array($result)) {
               echo "<div id='img_div'>";
                   echo "<img src='images/".$row['image']."' >";
                   echo "<p>".$row['image_text']."</p>";
               echo "</div>";
             }
           ?>
           <form method="POST" action="index.php" enctype="multipart/form-data">
               <input type="hidden" name="size" value="1000000">
               <div>
                 <input type="file" name="image">
               </div>
               <div>
               <textarea 
                   id="text" 
                   cols="40" 
                   rows="4" 
                   name="image_text" 
                   placeholder="Say something about this image..."></textarea>
               </div>
               <div>
                   <button type="submit" name="upload">POST</button>
               </div>
           </form>
         </div>
         </body>
         </html>
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>   ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  