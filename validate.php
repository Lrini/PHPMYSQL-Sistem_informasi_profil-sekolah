<?php
      //  error_reporting(0);
        include("koneksi.php");

        if(isset($_POST['login'])){
            $username=$_POST['nama'];
            $pass=$_POST['nis'];

            $sql=mysql_query("SELECT * from t_siswa where nama ='$username' and nis='$pass'");
            $row=mysql_num_rows($sql);
            $data=mysql_fetch_array($sql);

            if($username == "'or 1=1--"){
                echo "tidak bisa di injection lagi";
            }
            elseif($username == "'or1=1--"){
                echo "tidak bisa di injection lagi";

            }
            elseif($username== "' or 1=1 --"){
                    echo "tidak bisa di injection lagi";
            }

            elseif($username== "' or 1=1--"){
                    echo "tidak bisa di injection lagi";
            }
            elseif($username== "' or 1=1  --"){
                    echo "tidak bisa di injection lagi";
            }
            elseif($username== "' or 1=1   --"){
                    echo "tidak bisa di injection lagi";
            }else{

            
                if($row > 0){
                    session_start();
                    $_SESSION['nis']=$data['nis'];
                        echo'    <script>alert("berhasil");window.location=""http://localhost/kp/index.php""</script>';
                }
            else
            {
                ?>
                <div style="color: red;font-size: 30px">
                <center>
                <b>Username dan Password Salah  !!</b>
                </center>
                </div>
                <?php
            }
        }}

        ?>