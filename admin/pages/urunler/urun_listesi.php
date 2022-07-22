
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Listesi</title>
</head>
<body>



<?php
    $urunler = $db->query('SELECT * FROM urunler');

?>

<div class="row">
    <div class="col-6"><h2>Ürün Listesi</h2>
    
    </div>
    <div class="col-6 text-right justify-content-end ">
        <a href="#" class="btn btn-dark float-end" onclick="window.print()">Yazdır</a>
    </div>
</div>
<hr>



<table class="table table-bordered table-hover table-striped">

    <thead>
        <tr>
            <th width="50">ID</th>
            <th>Ürün</th>
            <th>Fiyat</th>
            <th>Stok</th>
            <th class="text-center">Alt Başlık</th>
            <th>Eklenme Tarihi</th>
            <th>Ürüne Git</th>
            <th>Resim</th>
            <th width="50"></th>
            <th width="50"></th>
        </tr>
    </thead>



    <tbody>
    <?php while($urun = $urunler->fetch_array()){ ?>
        <tr>
            <td><?php echo $urun["id"] ?></td>
            <td><?php echo $urun["baslik"] ?>   </td>
            <td><?php echo $urun["fiyat"] ?></td>
            <td><?php echo $urun["stok"] ?></td>
            <td><?php echo $urun["aciklama"] ?></td>
            <td><?php echo $urun["eklenme"]?></td>
            <td>
                    <a target="_blank" href="<?php echo SITE_URL.'?page=detay&id='.$urun['id']; ?>">Ürüne Git</a>
            </td>
            <td>
                <img src="<?php echo  SITE_URL.'/assets/uploads/'. $urun['gorsel'];  ?>" alt=""  style="width: 72px; height: 80px;">
        </td>
         
            <td><a href="<?php echo url('?page=urunler&is=duzenle&id='.$urun['id']); ?>" class="btn btn-warning btn-sm">Düzenle</a></td>
            <td><a href="<?php echo url('?page=urunler&is=sil&id='.$urun['id']); ?>" class="btn btn-danger btn-sm">Sil</a></td>
        </tr>
        <?php }?>


    </tbody>



</table>

</body>
</html>



