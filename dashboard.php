<head>
<meta name="viewport" content="width-divice-width, initial-scale-1">
<link rel="stylesheet" href="css\bootstrap.min.css"/>
</head>
<?php
session_start();
?>
<form action="" method="post">
    <table align="center">
        <tr>
            <td><a href="dashboard.php">DASH BOARD</a></td>
            <td><a href="newData.php">ADD DATA</a></td>
            <td><a href="lihatprofil.php">LIHAT PROFIL</a></td>
            <td><a href="index.php">LOGOUT</a></td>
            <td><a href="editprofil.php">EDIT PROFILE</a></td>
        </tr>
    </table>
</form>
<?php
require("classproses.php");
?>
<form method="post" value="search">
    <table align="center">
        
     </table>
</form>
    <table class="table table-hover table-dark" border="1" align="center">
        <tr>
            <td colspan="10" align="center">  Search : <input type="text" name="search"><input type="submit" value="search"></td>
        </tr>   
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Hobi</th>
            <th scope="col">Genre Film</th>
            <th scope="col">Tempat Wisata</th>
            <th scope="col">Email</th>
            <th scope="col">#</th>
            <th scope="col">#</th>
        <?php
        $no=1;
        $result = $proses ->lihat_data();
        while($row =$result -> fetch(PDO :: FETCH_ASSOC)){
    ?>
    <tr>
        <td><?php echo $no;?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['nim'];?></td>
            <td><?php echo $row['tgl_lahir'];?></td>
            <td><?php echo $row['hobi'];?></td>
            <td><?php echo $row['film'];?></td>
            <td><?php echo $row['wisata'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><a href="delete.php?id=<?php echo $row['nim']?>">Hapus</a></td>
            <td><a href="editposting.php?id=<?php echo $row['nim']?>">Edit</a></td>
    </tr>
        <?php
             $no++;
     }
         ?>        
</table>