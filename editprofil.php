<?php
  require("classproses.php");
  session_start();
  $id = $_SESSION['id'];
  $username = $_SESSION['name'];
?>
</form>
<!DOCTYPE html>
 <html>
 <head>
    <meta name="viewport" content="width-divice-width, initial-scale-1">
    <link rel="stylesheet" href="css\bootstrap.min.css"/>
 </head>
 <body>
    <div class="container">
        <div class="row">
            <div class="col">
            <form action="form.php" method="POST">
                    <div class="form-group">
                        <label for="forpassword">Password</label>
                        <input type="text" class="form-control" id="forpassword" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="forbaru">Password Baru</label>
                        <input type="password" class="form-control" id="forbaru" placeholder="Password Baru" name="passwordbaru">
                    </div>
                    <div class="form-group">
                        <label for="forconfirm">Confirm Password Baru</label>
                        <input type="password" class="form-control" id="forconfirm" name="password" placeholder="Confirm Password Baru">
                    </div>
                    <div class="form-group">    
                    </div>
                    <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                    <div>
                    <a href="dashboard.php">Halaman Dashboard</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </body>
 </html>