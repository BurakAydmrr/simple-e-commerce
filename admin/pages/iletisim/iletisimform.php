<div class="row">
    <div class="col-6"><h3 class="">İletişim Formları</h3></div>


<div class="col-6 text-right justify-content-end ">
        <a href="#" class="btn btn-dark float-end" onclick="window.print()">Yazdır</a>
    </div>
    </div>
    <hr>

<?php 

$iletisim = $db->query('SELECT * FROM iletisim');

?>


<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th width="30">ID</th>
            <th>Müşteri Adı</th>
            <th>E-posta</th>
            <th>Konu Başlığı <th>
            <th >Mesaj</th>
            <th>E-Posta Gönder</th>
            <th width="50"></th>
          
        </tr>
    </thead>


    <tbody>
    <?php while($icerik = $iletisim->fetch_array()) {

   ?>
            <tr>  
             <td><?php echo $icerik['id'];?></td>
             <td><?php echo $icerik['ad'];?></td>
             <td><?php echo $icerik['eposta'];?></td>
             <td><?php echo $icerik['konubaslik'];?></td>
             <td><?php echo $icerik['eklenme'];?></td>
             <td><?php echo $icerik['mesaj'];?></td>
             <td><a href="mailto:<?php echo $icerik['eposta'];?>">Gönder</a></td>
             <td><a href="<?php echo url('?page=form&is=sil&id='.$icerik['id']); ?>" class="btn btn-danger btn-sm">Cevaplandı Sil</a></td>
               
            </tr>
   <?php }?>
    </tbody>
</table>

<br>   
<div class="alert alert-secondary ">Mesajlar Site Kurumsal E postası Üzerinden Çalışanlarımız Tarafından Cevaplanıp Siliniyor.</div>