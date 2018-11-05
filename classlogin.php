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
        
        Public function login(){
            if(isset($_POST['name'])){
                $user = $_POST['name'];
                $password = MD5($_POST['password']);

                $query = $this->pdo -> prepare("SELECT id FROM regis WHERE username = '$user' AND password = '$password'");
                $query -> execute();

                $row = $query -> rowcount();
                $data = $query -> fetch(PDO::FETCH_ASSOC);

                if ($row != 0) {
                    session_start();
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['name'] = $user;
                     header("Location: dashboard.php");
                }else {
                    ?>
                <script>
                    alert("Username atau Password salah..!");
                    location = "index.php";
                </script>
                <?php
                }
            }
        }
     public function regis(){
        if(isset($_POST['username'])){
            $username =$_POST['username'];
            $password =MD5($_POST['password']);
            $cpassword =MD5($_POST['cpassword']);
    
            if ($password == $cpassword) {
                $query =$this->pdo ->prepare("INSERT INTO regis(username,password) VALUES ('$username','$password')");
                $query -> execute();
                if($query){
                    header("location:index.php");
                }else{
                    die("tambah data gagal");
                }
            } else {
                ?>
                <script>
                    alert("Password Tidak Sama");
                    location="regis.php";
                </script>
                <?php
            }
        }
     }
 }
 $proses = new proses();
 if(isset($_GET['login'])){
    $proses->login($_GET['login']);
}  
if(isset($_GET['regis'])){
    $proses->regis($_GET['regis']);
}
?>