<?php
    require("classproses.php");
    $nim = $_GET['id'];
    $sql = $proses -> data_mhs($nim);
    $row = $sql -> fetch(PDO::FETCH_ASSOC);

     $hobi_terpilih = explode(", ",$row['hobi']);
     $film_terpilih = explode(", ",$row['film']);
     $wisata_terpilih = explode(", ",$row['wisata']);
     
?>
<form action="" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" pattern="\d*" maxlength="10" min="0" required value="<?php echo $row['nim'] ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="25" required value="<?php echo $row['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgl" id=""value="<?php echo $row['tgl_lahir'] ?>"></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="checkbox" name="hobi[]"<?php if(array_search("Makan",$hobi_terpilih) > -1) { echo "checked"; }?> value="Makan">Makan
                <input type="checkbox" name="hobi[]"<?php if(array_search("Minum",$hobi_terpilih) > -1) { echo "checked"; }?> value="Minum">Minum
                <input type="checkbox" name="hobi[]"<?php if(array_search("Tidur",$hobi_terpilih) > -1) { echo "checked"; }?> value="Tidur">Tidur
            </td>
        </tr>
        <tr>
            <td>Genre Film</td>
            <td>:</td>
            <td><input type="checkbox" name="film[]"<?php if(array_search("Horror",$film_terpilih) > -1) { echo "checked"; }?>    value="Horror">Horror
                <input type="checkbox" name="film[]"<?php if(array_search("Anime",$film_terpilih) > -1) { echo "checked"; }?>    value="Anime">Anime
                <input type="checkbox" name="film[]"<?php if(array_search("Action",$film_terpilih) > -1) { echo "checked"; }?>     value="Action">Action
                <input type="checkbox" name="film[]"<?php if(array_search("Drama",$film_terpilih) > -1) { echo "checked"; }?>    value="Drama" >Drama</td>
        </tr>
        <tr>
            <td>Tempat Wisata</td>
            <td>:</td>
            <td><input type="checkbox" name="wisata[]"<?php if(array_search("Jakarta",$wisata_terpilih) > -1) { echo "checked"; }?> value="Jakarta">Jakarta
                <input type="checkbox" name="wisata[]"<?php if(array_search("Lombok",$wisata_terpilih) > -1) { echo "checked"; }?> value="Lombok">Lombok
                <input type="checkbox" name="wisata[]"<?php if(array_search("Bali",$wisata_terpilih) > -1) { echo "checked"; }?> value="Bali">Bali
                <input type="checkbox" name="wisata[]"<?php if(array_search("Tanjung Selor",$wisata_terpilih) > -1) { echo "checked"; }?> value="Tanjung Selor">Tanjung Selor</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" pattern="[a-z0-9._%+-]+@gmail.com" required value="<?php echo $row['email'] ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
    <a href="dashboard.php">ke halaman utama</a>
</form>