<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width-divice-width, initial-scale-1">
    <link rel="stylesheet" href="css\bootstrap.min.css"/>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col">
            <form action="classproses.php?tambah=mahasiswa" method="post">
                    <div class="form-group">
                        <h1>Tambah Data</h1>
                    </div>
                    <div class="form-group">
                        <label for="fornim">NIM</label>
                        <input type="text" class="form-control" id="fornim" placeholder="Nim" name="nim" pattern="\d*" maxlength="10" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="foruser">UserName</label>
                        <input type="text" class="form-control" id="foruser" placeholder="Username" name="username" maxlength="20" required>
                    </div>
                    <div class="form-group">
                        <label for="forpassword">Password</label>
                        <input type="password" class="form-control" id="forpassword" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="fornama">Nama</label>
                        <input type="text" class="form-control" id="fornama" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="fortgl">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="fortgl" name="tgl">
                    </div>
                    <div class="form-group">
                        <label>Hobi</label>
                    <div class="form-check">
                        <input type="checkbox" name="hobi[]" value="Membaca" id="forMembaca">
                        <label for="forMembaca">Membaca</label>
                        <input type="checkbox" name="hobi[]" value="Tidur" id="forTidur">
                        <label for="forTidur">Tidur</label>
                        <input type="checkbox" name="hobi[]" value="Makan" id="forMakan">
                        <label for="forMakan">Makan</label>
                    </div>
                    <div class="form-group">
                        <label>Film</label>
                    <div class="form-check">
                        <input type="checkbox" name="film[]" value="Horror" id="forHorror">
                        <label for="forHorror">Horror</label>
                        <input type="checkbox" name="film[]" value="Anime" id="forAnime">
                        <label for="forAnime">Anime</label>
                        <input type="checkbox" name="film[]" value="Action" id="forAction">
                        <label for="forAction">Action</label>
                        <input type="checkbox" name="film[]" value="Drama" id="forDrama">
                        <label for="forDrama">Drama</label>
                    </div>
                    <div class="form-group">
                        <label>Wisata</label>
                    <div class="form-check">
                        <input type="checkbox" name="wisata[]" value="Jakarta" id="forJakarta">
                        <label for="forJakarta">Jakarta</label>
                        <input type="checkbox" name="wisata[]" value="Lombok" id="forLombok">
                        <label for="forLombok">Lombok</label>
                        <input type="checkbox" name="wisata[]" value="Bali" id="forBali">
                        <label for="forBali">Bali</label>
                        <input type="checkbox" name="wisata[]" value="Tanjung Selor" id="forTanjung">
                        <label for="forTanjung">Tanjung Selor</label>
                    </div>
                    <div class="form-group">
                        <label for="foremail">Email</label>
                        <input type="text" class="form-control" id="foremail" name="email" placeholder="Email"  pattern="[a-z0-9._%+-]+@gmail.com" required>
                    </div>    
                    </div>
                    <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                    <a href="dashboard.php">Halaman Dashboard</a>
                </form>
            </div>
        </div>
    </div>
</form>
</body>
</html>