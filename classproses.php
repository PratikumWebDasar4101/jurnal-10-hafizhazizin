<?php
    class proses{
        private $pdo;

        public function __construct(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "modul8";     
            try {
                $this->pdo = new PDO("mysql:host={$host}; dbname={$db};", $user, $pass);
                $this->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                print "Koneksi atau query bermasalah : " . $e -> getMessage() . "<br>";
                die();
            }                      
        }
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function tambah(){
            if(isset($_POST['nim'])){
                $nim = $_POST['nim'];
                $username = $_POST['username'];
                $password =MD5($_POST['password']); 
                $nama = $_POST['nama'];
                $tgl = $_POST['tgl'];
                $hobi = $_POST['hobi'];
                $film = $_POST['film'];
                $wisata = $_POST['wisata'];
                $email = $_POST['email'];
                $list_hobi = implode(", ",$hobi);
                $list_film1 = implode(", ",$film);
                $list_wisata2 = implode(", ",$wisata);
            }
        $query =$this->pdo ->prepare("INSERT INTO mahasiswa(nim,username,password,nama,tgl_lahir,hobi,film,wisata,email) VALUES ('$nim','$username','$password','$nama','$tgl','$list_hobi','$list_film1','$list_wisata2','$email')");
        $query -> execute();
            if($query){
                header("location:dashboard.php");
            }else{
                die("tambah data gagal");
              }
        }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function edit($nama,$nim,$tgl,$hobi_terpilih,$film_terpilih,$wisata_terpilih,$email){
            $sql=$this->pdo -> prepare("UPDATE mahasiswa SET nama = '$nama', nim='$nim',tgl_lahir='$tgl', hobi='$hobi_terpilih', film='$film_terpilih', wisata='$wisata_terpilih', email='$email' WHERE nim ='$nim'");
            $sql -> execute();
                if($sql){
                    ?>
                    <script>
                    alert("inputan berhasil");
                    location = "editposting.php";
                </script>
                <?php
                }
            }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
            public function edit_profil($username,$password,$passwordbaru){
                $sql=$this->pdo -> prepare("UPDATE regis SET username = '$username', password='$password', password_baru='$passwordbaru' WHERE id ='$id'");
                $sql -> execute();
                    if($sql){
                        ?>
                        <script>
                        alert("inputan berhasil");
                        location = "editprofil.php";
                    </script>
                    <?php
                    }
                }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function hapus(){
                if(isset($_GET['id'])){
                    $nim =$_GET['id'];
                
                    $query = $this->pdo -> prepare("DELETE FROM mahasiswa WHERE nim ='$nim'");
                    $query -> execute();
                
                    if($query){
                        ?>
                        <script>
                            alert("data Berhasil Terhapus");
                            location ="dashboard.php";
                        </script>
                        <?php
                    } else{
                        ?>
                        <script>
                            alert("Data gagal Terhapus");
                            location="dashboard.php";
                        </script>
                        <?php
                    }      
                }
            }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            public function lihat($id){
                $sql = $this->pdo  -> prepare("SELECT id FROM regis WHERE id = '$id'");
                $sql -> execute();
                return $query;
                }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function lihat_data(){
            @$search =$_POST['search'];
            $query =$this->pdo -> prepare("SELECT * FROM mahasiswa WHERE nim LIKE '%$search%'");
            $query -> execute();
                return $query;
            }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function data_mhs($nim) {
            $sql = $this->pdo-> prepare("SELECT * FROM mahasiswa WHERE nim = '$nim'");
            $sql -> execute();
            return $sql;
        }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////        
        public function data_mhs_profile($id) {
            $sql = $this->pdo-> prepare("SELECT * FROM mahasiswa WHERE id = '$id'");
            $sql -> execute();
            return $sql;
    }
 }
    $proses = new proses();
    if(isset($_GET['tambah'])){
        $proses->tambah();
    }
    if(isset($_GET['edit'])){
        $proses->edit($_GET['edit'],$_POST['nama'],$_POST['hobi'],$_POST['film'],$_POST['wisata'],$_POST['email']);
    }
    if(isset($_GET['hapus'])){
    $proses->hapus($_GET['hapus']);
    }
    if(isset($_GET['edit_profile'])){
        $proses->edit_profile($_GET['edit_profile'],$_POST['passwordbaru'],$_POST['passwordbaru1']);
    }  
?> 