<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0f4c9b9802.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <title> YÖNETİCİ SAYFASI </title>
</head>
<body>
<?php
  $urunler = $db->query("SELECT * from urunler");
  $rows = $urunler->num_rows;

  $sayfalar = $db->query("SELECT * from sayfalar");
  $rowss = $sayfalar->num_rows;

  $formlar = $db->query("SELECT * from iletisim");
  $formsay = $formlar->num_rows;

    $siparis = $db->query("SELECT * from odemeler");
    $siparissayi = $siparis->num_rows;
?>

<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="<?php echo url(); ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="data:image/png;base64,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" class="img-fluid" style="height: 40px;">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="padding-left: 20px !important;">
          <li><a href="<?php echo url(''); ?>" class="nav-link px-2 text-white">Anasayfa</a></li>
          <li><a href="<?php echo url('?page=sayfalar'); ?>" class="nav-link px-2 text-white">Sayfa Listesi <span class="badge bg-secondary"><?php echo $rowss ?></span> </a></li>
          <li><a href="<?php echo url('?page=sayfalar&is=ekle'); ?>" class="nav-link px-2 text-white">Sayfa Ekle</a></li>
          <li><a href="<?php echo url('?page=urunler'); ?>" class="nav-link px-2 text-white">Ürün Listesi <span class="badge bg-secondary"><?php echo $rows ?></span></a></li>
          <li><a href="<?php echo url('?page=urunler&is=ekle'); ?>" class="nav-link px-2 text-white">Ürün Ekle <span class="badge bg-secondary"></a></li>
          
          <li><a href="<?php echo url('?page=siparisler'); ?>" class="nav-link px-2 text-white">Siparişler <span class="badge bg-secondary"><?php echo $siparissayi;?></span> </a></li>
          <li><a href="<?php echo url('?page=form')?>" class="nav-link px-2 text-white">  İletişim Formları <span class="badge bg-secondary"><?php echo $formsay;?></span></a></li>
         <li>
           <a href="" class=" nav-link px-2 text-white dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Diğer</a>
    
           <div class="dropdown-menu">
      <a class="dropdown-item" href="?page=uyeler">Üyeler</a>
      <a class="dropdown-item" href="#">Link</a>
        </li>
   
            
 
    
      
        </ul>

    

        <div class="text-end">
          <a href="<?php echo url('logout.php'); ?>" type="button" class="btn btn-outline-light me-2">Çıkış Yap</a>
          <a href="<?php echo SITE_URL; ?>" target="_blank" type="button" class="btn btn-outline-light me-2">Siteyi Aç</a>
          <span> <strong>Hoşgeldin: </strong> <?php echo $_SESSION['admin_bilgileri']['username']; ?> </span>
        </div>
      </div>
    </div>
  </header>