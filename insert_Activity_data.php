<?php session_start()?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Activity Packages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="margin-top:40px;">
            <div class="card-header" style="text-align:center;">
              <h4>Insert Activity Packages</h4>
            </div>
            <div class="card-body">
            <?php
              if(isset($_SESSION['status']) && $_SESSION != ''){
                    ?>
                    <div class="alert alert-warning" role="alert"><?php echo $_SESSION['status']; ?></div>
                    <?php
                    unset($_SESSION['status']);
              }else{

              }
              
              ?>
            <form action="Activity_insert.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Activity Package Name</label>
                <input type="text" name="name" required class="form-control" placeholder="Enter Name">
              </div>
              <div class="form-group" >
                <label for="">Activity Package Location</label>
                <input type="text" name="location" required class="form-control" placeholder="Enter Location">
              </div>
              <div class="form-group" >
                <label for="">Activity Package Price</label>
                <input type="text" name="price" required class="form-control" placeholder="Enter Price">
              </div>
              <div class="form-group" >
                <label for="">Activity Package Description</label>
                <input type="text" name="description" required class="form-control" placeholder="Enter Description">
              </div>
              <div class="form-group">
                <label for="">Activity Package Image</label>
                <input type="file" name="image" accept="image/*" required class="form-control">
              </div>
              <br>
              <div>
                <button type="submit" name="save_des_image" class="btn btn-primary bg-warning">SUBMIT</button>
              </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>