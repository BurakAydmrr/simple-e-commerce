<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üyelerimiz</title>
</head>
<body>

<div class="row">
    <div class="col-6"><h2>Selay Fide Müşteri Bilgi Formu</h2>
    
    </div>
    <div class="col-6 text-right justify-content-end ">
        <a href="#" class="btn btn-dark float-end" onclick="window.print()">Yazdır</a>
    </div>
</div>
<hr>


<?php
    $uyelerimiz = $db->query("SELECT * FROM uyeler")
?>

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Adı Soyadı</th>
      <th scope="col">Kullanıcı Adı</th>
      <th scope="col">Şifre</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Şehir</th>
      <th scope="col">Adres</th>
      <th scope="col">Telefon</th>
      <th scope="col">Kayıt Tarihi</th>

    </tr>
  </thead>
  <tbody >
      <?php while($veri = $uyelerimiz->fetch_array()){ ?>
    <tr class="text-info">
      <th scope="row"><?php echo $veri['id'];?></th>
      <td><?php echo $veri['adsoyad'];?></td>
      <td><?php echo $veri['username'];?></td>
      <td><?php echo "******";?></td>
      <td><?php echo $veri['email'];?></td>
      <td><?php echo $veri['il'];?></td>
      <td><?php echo $veri['adres'];?></td>
      <td><?php echo $veri['telefon'];?></td>
      <td><?php echo $veri['eklenme'];?></td>
    </tr>
    <tr>
<?php } ?>
  </tbody>
</table>
</body>
</html>