<?php
    require("classproses.php");
    session_start();
    $id = $_SESSION['id'];
    $username = $_SESSION['name'];
?>
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
                <form action="class.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="forpassword">Password</label>
                        <input type="text" class="form-control" id="forpassword" placeholder="Nama" name="password" value="<?php echo $username; ?>" readonly>
                    </div>
                    <a href="dashboard.php">Halaman Dashboard</a>
                    <a href="editprofil.php">Edit Profile</a>
                    <a href="index.php">Logout</a>
                </form>
            </div>
        </div>
    </div>
 </body>
 </html>
 