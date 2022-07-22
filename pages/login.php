
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Giriş Yap</title>

</head>
<body>
<?php



if($_POST){
    $username = $_POST['username'];
    $password = $_POST["password"];
    

    if(strlen($username) < 3){
        echo '<div class="alert alert-danger">Geçerli bir kullanıcı adı girmediniz!</div>';
    }elseif(strlen($password) < 0){
        echo '<div class="alert alert-danger">Geçerli bir parola girmediniz!</div>';
    }else{



        $password = md5($password);
        $sql = "SELECT * FROM uyeler WHERE username='$username' AND password='$password'";
        $dbUye = $db->query($sql);
        if($dbUye->num_rows<1){
            header('Location:index.php?page=login&error=true');
        }else{
            $uye = $dbUye->fetch_array();
            
            $_SESSION['uye_giris'] = 1;
            $_SESSION['uye_bilgileri'] = ['id'=>$uye['id'], 'username'=>$uye['username'],'email'=>$uye['email']];
            header('Location:index.php');

            
        }

        



    } 
} 
?>


<h4 class="text-center text-danger"> Giriş Yapma Sayfası</h4>


    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-3">

             
            <form action="" method="POST">
                <div class="card">
                    <div class="card-header"><h3>Giriş Yap</h3></div>

                    <div class="card-body">

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Kullanıcı Adı" name="username">
                        </div>

                        <div class="">
                            <input type="password" class="form-control" placeholder="Şifre" name="password">
                        </div>
                        <div>
                           Hesabın Yoksa : <a  href="?page=register">Kayıt Ol!</a>
                            <?php
                                if(@$_GET['error']=='true'){
                                    echo '  <p class="alert alert-danger">Hatalı Kullanıcı Bilgileri</p>';
                                }
                            ?>

                        </div>

                    </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-primary">Giriş Yap</button>

                    </div>
                </div>
                </form>


            </div>
        </div>
    </div>



    

<script src="https://kit.fontawesome.com/0f4c9b9802.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>
</html>