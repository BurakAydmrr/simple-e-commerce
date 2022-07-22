<?php
$id = $_GET["id"];
    $uye = $db->query("SELECT * FROM  uyeler WHERE id=$id");

    $bilgi = $uye->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

    </style>
</head>
<body>
<form action="" method="post">
<div class="container">
<div class="row gutters">
<div class=" col-lg-3   col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="" alt="">
				</div>
				<h5 class="user-name"><?php echo $bilgi['adsoyad']; ?></h5>
				<h6 class="user-email"><?php echo $bilgi['email']; ?></h6>
			</div>
			<div class="about">
				<h5></h5>
				<p><span style="color:red;"><?php echo $bilgi['adsoyad'];?></span> Sitemize <?php echo $bilgi['eklenme'] ?>  Tarihinde  Üye Olmuştur.</p>
			</div>
		</div>
	</div>
</div>
</div>


<?php

if($_POST){
            
    $adres = $_POST["adres"];
	$adsoyad = $_POST["adsoyad"];
	$email = $_POST["email"];
	$telefon = $_POST["telefon"];

    $prepare = $db->prepare('UPDATE uyeler SET adres=?,adsoyad=?,email=?,telefon=? WHERE id=?');
    $prepare->bind_param("ssssi",$adres,$adsoyad,$email,$telefon,$id);
    $prepare->execute();
    echo '<div class="alert alert-success">Güncelleme Başarılı</div>';

}


?>





<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Kullanıcı Bilgisi</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Tam Adı </label>
					<input type="text" class="form-control" id="fullName" name="adsoyad" value="<?php echo $bilgi['adsoyad'];?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="eMail" name="email" value="<?php echo $bilgi['email'];?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" name="telefon" value="<?php echo $bilgi['telefon'] ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="tarih">Üye Olma Tarihi</label>
					<input type="text" class="form-control" id="tarih" value="<?php echo $bilgi['eklenme'];?>">
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Adres Bilgisi</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Şehir</label>
					<input type="text" class="form-control" id="Street"   value="<?php echo $bilgi['il']; ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="ciTy">Tam Adres</label>
					<input type="text" class="form-control" id="ciTy"   name="adres" value="<?php echo $bilgi['adres'];?>">
				</div>
			</div>
	<br><br><br><br>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<a href="<?php echo url()?>"id="submit" class="btn btn-secondary">Ana Sayfaya Dön</a>
					<button  id="submit" class="btn btn-primary">Bilgilerimi Güncelle</button>
                    <a href="?page=logout" id="submit"  class="btn btn-primary">Çıkış Yap</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>