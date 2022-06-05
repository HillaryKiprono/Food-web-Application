


<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>

body
      {
        background-image: url("https://images.unsplash.com/photo-1594179047519-f347310d3322?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZmFzdCUyMGZvb2R8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80");
      
      }
</style>
<BODY>
      <form method="POST" Action="SaveMenuItem.php" enctype="multipart/form-data">
                   
              <div class="form-group">
                  <label for="exampleInputName">Add Food Item </label>
                  <input type="string" class="form-control" id="ItemName" name="food_name"  placeholder="New Food Item"> 
              </div>

             <div class="form-group">
                  <label for="exampleInputName">Price</label>
                  <input type="string" class="form-control" id="Price" name="food_price"  placeholder="Price">   
              </div>

              <div class="form-group">
                  <label for="exampleInputName">quantity</label>
                  <input type="string" class="form-control" id="Price" name="qty"  placeholder="Price"> 
              </div>

              <div class="form-group">
                  <label for="exampleInputName">food code</label>
                  <input type="string" class="form-control" id="Price" name="food_code"  placeholder="Price"> 
              </div>

              <div class="form-group">
                  <label for="exampleInputName">Upload Item Image</label>
                  <input type="file" name="image" id="fileToUpload">              
                </div>  

             <div>
              <button type="submit" name= "submit" class="btn btn-primary">Submit</button>
             </div>
             
            </form>
     
</BODY>
</HTML>
