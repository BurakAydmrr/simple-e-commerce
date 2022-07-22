<div class="row">
    <div class="col-6"><h3>Sipariş Listesi</h3></div>
    <div class="col-6 text-end">
      
   
    </div>
</div>
<hr>
<table class="table table-bordered table-striped table-hover">
  <thead>
  <tr>
            <th width="30">ID</th>
            <th>Ad soyad</th>
            <th>Adres</th>
            <th>Telefon</th>
            <th>Şehir</th>
            <th>Toplam Ödenecek Tutar</th>
            <th></th>
            <th></th>
        </tr>
  </thead>
    <?php
    $SQL = 'SELECT odemeler.id as odeme_id , uyeler.id as uye_id , odemeler.* , uyeler.*  FROM odemeler inner join uyeler on odemeler.uyeid = uyeler.id ORDER BY odemeler.id DESC';
    $siparisler = $db->query($SQL);
    //echo "<pre>";
 
       while($siparis = $siparisler->fetch_assoc()) {
       // print_r ($siparis);
        
     
    ?>
    <tbody>
        <tr>
          <td>
            <?php echo $siparis['odeme_id'];?>
          </td>

          <td>
          <?php echo $siparis['adsoyad'];?>
          </td>
          <td>
          <?php echo $siparis['adres'];?>
          </td>
          <td>
            <?php echo $siparis['telefon']; ?>
          </td>
          <td>
            <?php echo $siparis['sehir']; ?>
          </td>
          <td><?php echo $siparis['fiyat']; ?>₺</td>
          <td>
            <a class="btn btn-warning btn-sm" href="?page=siparis&id=<?php echo $siparis['odeme_id'];?>">Sipariş Detayı</a>
       
          </td>
          <td>
          <a class="btn btn-danger btn-sm" href="?page=odemesil&id=<?php echo $siparis['odeme_id'];?>">Sil</a>
          </td>




        </tr>
    </tbody>
        <?php } ?>
</table>




<?php


                        


?>

