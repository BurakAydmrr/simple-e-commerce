<div class="row">
    <div class="col-6"><h3>Sipariş Detay Listesi</h3></div>
    <div class="col-6 text-end">
      
   
    </div>
</div>
<hr>
<table class="table table-bordered table-striped table-hover">
  <thead>
      <tr>
        <th width="50">ID</th>
        <th>Ürün Adı</th>
        <th>Adet</th>
        <th>Toplam Fiyat</th>
        <th>Stok</th>
       
        <th>Ürün Resmi</th>
        <th></th>

      </tr>
  </thead>

  <?php
  if(!isset($_GET['id'])){
    header('location: index.php?page=siparisler');
    }
    $odemeid = $_GET['id'];
    
  $SQL = "SELECT * FROM alisveris inner join urunler on urunler.id = alisveris.urunid WHERE alisveris.odemeid = $odemeid  ";
  $siparisler = $db->query($SQL);
  //echo "<pre>";
        while($siparis = $siparisler->fetch_assoc()) {
          //print_r ($siparis);
    
  ?>
  
      <tbody>
        <tr>
          <td>
            <?php echo $siparis['odemeid']; ?>
          </td> 
          <td>
            <?php echo $siparis['baslik']; ?>
          </td> 
          <td>
            <?php echo $siparis['adet']; ?>
          </td>
          <td>
            <?php echo $siparis['toplamfiyat']; ?>
          </td>
          <td>
            <?php echo $siparis['stok']; ?>
          </td>
         
          <td>
          <img src="<?php echo  SITE_URL.'/assets/uploads/'. $siparis['gorsel'];  ?>" alt=""  style="width: 100px; height: 100px;">
          </td>
        </tr>
      </tbody>
          <?php } ?>
</table>




<?php




   


?>

