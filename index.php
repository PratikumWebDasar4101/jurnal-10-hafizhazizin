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
            <form action="classlogin.php?login=login" method="post">
                    <div class="form-group">
                        <label for="fornuser">Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="name">
                    </div>
                    <div class="form-group"> 
                        <label for="forpassword">Password</label>
                        <input type="password" class="form-control"  placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                    </div>
                    <input type="submit" class="btn btn-primary" name="Submit" value="Login">
                    <div>
                        <a href="regis.php">Daftar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </body>
 </html>