<?php session_start(); include('../settings.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Giriş Yap</title>
    <style>
        body { 
          background: url(https://wallpaperaccess.com/full/16676.jpg);
        }
        .mg{
            margin-top:200px;       
         }

       
    </style>
</head>
<body>

    <?php 



    if($_POST){
        $username = $_POST['username'];
        $password = $_POST["password"];

        if(strlen($username) < 3){
            echo '<div class="alert alert-danger">Geçerli bir kullanıcı adı girmediniz!</div>';
        }elseif(strlen($password) < 2){
            echo '<div class="alert alert-danger">Geçerli bir parola girmediniz!</div>';
        }else{

  

            $password = md5($password);
            $sql = "SELECT * FROM adminuye WHERE username='$username' AND password='$password'";
            $dbUye = $db->query($sql);
            if($dbUye->num_rows<1){
                header('Location:login.php');
            }else{

                $uye = $dbUye->fetch_array();
                $_SESSION['admin_giris'] = 1;
                $_SESSION['admin_bilgileri'] = ['id'=>$uye['id'], 'username'=>$uye['username'], 'email'=>$uye['email'], 'durum'=>$uye['durum']];
               
                header('Location:index.php');

            }
            
            



        } 
    } 
    ?>


    <div class="container my-6 py-6 mg">
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

                    </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-primary">Giriş Yap</button>
                    </div>
                </div>
                </form>


            </div>
        </div>
    </div>

    <footer class="text-center text-white fixed-bottom" style="background-color: #262927;">

  <div class="container"></div>
 

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" href="https://www.instagram.com/burak.aydemir00/">Burak Aydemir</a>
  </div>
  
</footer>
    <script src="https://kit.fontawesome.com/0f4c9b9802.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>
</html>