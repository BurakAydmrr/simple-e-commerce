
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
  <style>
    .renk {
      color: red;
    }
  </style>
</head>

<body>

<?php
  $uye = $db->query("SELECT * FROM uyeler ORDER BY id DESC LIMIT 0,5");
  $kisi = $uye->fetch_array();
?>

<?php

  if($_POST){
      $adsoyad = $_POST['adsoyad'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $il = $_POST['il'];
      $adres = $_POST['adres'];
      $telefon = $_POST['telefon'];

     $password = md5($password);
      if(strlen($username) < 3){
          echo '<div class="alert alert-danger">Tüm Bilgileri Doğru Girdiğinizden Emin Olun !</div>';
      }else{
          $prepare = $db->prepare('INSERT INTO uyeler (username,adsoyad, email, password,il,adres,telefon) VALUES (?, ?, ?, ?, ?, ?, ?)');
          $prepare->bind_param("ssssssi", $username,$adsoyad ,$email, $password,$il,$adres,$telefon);
          $prepare->execute();
          echo '<div class="alert alert-success text-center">Kayıt İşlemi Başarılı. Hoş Geldin'  . "". "<a href='?page=login'; ?>Giriş Sayfasına Dön</a>"  ."</div>";
          
      }

      

  }

  
    ?>





<div class="container">
<form action="" method="POST">

  <div class="mb-4">
    <label  class="form-label">Kullanıcı Adı</label>
    <input type="text" class="form-control" name="username" >
  </div>

  <div class="mb-4">
    <label  class="form-label">Ad Soyad</label>
    <input type="text" class="form-control" name="adsoyad" >
  </div>


  <div class="mb-4">
  <label class="form-label">E Posta Adresinzi Girin</label>
<input type="email" class="form-control" name="email">
</div>

<div class="mb-4">
  <label class="form-label">Şehir Seçiniz</label>
<select name="il" class="form-control">
<option value="">İl Seçiniz</option>
<option value="İstanbul">İstanbul</option>
<option value="Ankara">Ankara</option>
<option value="İzmir">İzmir</option>
<option value="Adana">Adana</option>
<option value="Adıyaman">Adıyaman</option>
<option value="Afyonkarahisar">Afyonkarahisar</option>
<option value="Ağrı">Ağrı</option>
<option value="Aksaray">Aksaray</option>
<option value="Amasya">Amasya</option>
<option value="Antalya">Antalya</option>
<option value="Ardahan">Ardahan</option>
<option value="Artvin">Artvin</option>
<option value="Aydın">Aydın</option>
<option value="Balıkesir">Balıkesir</option>
<option value="Bartın">Bartın</option>
<option value="Batman">Batman</option>
<option value="Bayburt">Bayburt</option>
<option value="Bilecik">Bilecik</option>
<option value="Bingöl">Bingöl</option>
<option value="Bitlis">Bitlis</option>
<option value="Bolu">Bolu</option>
<option value="Burdur">Burdur</option>
<option value="Bursa">Bursa</option>
<option value="Çanakkale">Çanakkale</option>
<option value="Çankırı">Çankırı</option>
<option value="Çorum">Çorum</option>
<option value="Denizli">Denizli</option>
<option value="Diyarbakır">Diyarbakır</option>
<option value="Düzce">Düzce</option>
<option value="Edirne">Edirne</option>
<option value="Elazığ">Elazığ</option>
<option value="Erzincan">Erzincan</option>
<option value="Erzurum">Erzurum</option>
<option value="Eskişehir">Eskişehir</option>
<option value="Gaziantep">Gaziantep</option>
<option value="Giresun">Giresun</option>
<option value="Gümüşhane">Gümüşhane</option>
<option value="Hakkâri">Hakkâri</option>
<option value="Hatay">Hatay</option>
<option value="Iğdır">Iğdır</option>
<option value="Isparta">Isparta</option>
<option value="Kahramanmaraş">Kahramanmaraş</option>
<option value="Karabük">Karabük</option>
<option value="Karaman">Karaman</option>
<option value="Kars">Kars</option>
<option value="Kastamonu">Kastamonu</option>
<option value="Kayseri">Kayseri</option>
<option value="Kırıkkale">Kırıkkale</option>
<option value="Kırklareli">Kırklareli</option>
<option value="Kırşehir">Kırşehir</option>
<option value="Kilis">Kilis</option>
<option value="Kocaeli">Kocaeli</option>
<option value="Konya">Konya</option>
<option value="Kütahya">Kütahya</option>
<option value="Malatya">Malatya</option>
<option value="Manisa">Manisa</option>
<option value="Mardin">Mardin</option>
<option value="Mersin">Mersin</option>
<option value="Muğla">Muğla</option>
<option value="Muş">Muş</option>
<option value="Nevşehir">Nevşehir</option>
<option value="Niğde">Niğde</option>
<option value="Ordu">Ordu</option>
<option value="Osmaniye">Osmaniye</option>
<option value="Rize">Rize</option>
<option value="Sakarya">Sakarya</option>
<option value="Samsun">Samsun</option>
<option value="Siirt">Siirt</option>
<option value="Sinop">Sinop</option>
<option value="Sivas">Sivas</option>
<option value="Şırnak">Şırnak</option>
<option value="Tekirdağ">Tekirdağ</option>
<option value="Tokat">Tokat</option>
<option value="Trabzon">Trabzon</option>
<option value="Tunceli">Tunceli</option>
<option value="Şanlıurfa">Şanlıurfa</option>
<option value="Uşak">Uşak</option>
<option value="Van">Van</option>
<option value="Yalova">Yalova</option>
<option value="Yozgat">Yozgat</option>
<option value="Zonguldak">Zonguldak</option>
</select>
</div>

<div class="mb-4">
  <label class="form-label">Açık Adres</label>
<input type="text" class="form-control" name="adres">
</div>

<div class="mb-4">
  <label class="form-label">Telefon Numarası</label>
<input type="tel" class="form-control" name="telefon" placeholder="Başında 0 Olmadan">
</div>

  <div class="mb-4">
    <label class="form-label">Şifreyi Girin</label>
    <input type="password" minlength="5" maxlength="16" class="form-control" name="password">
  </div>


  <button type="submit" class="btn btn-primary">Kayıt Ol</button> <br>
</form>
<br>
</div>
</div>

<

</body>

</html>