<div class="row">
    <div class="col-6"><h3>Sayfa Listesi</h3></div>
    <div class="col-6 text-end">
      
       <!-- <a href="<//?php echo url('?page=sayfalar&is=ekle'); ?>" class="btn btn-primary">Sayfa Ekle</a>-->
    </div>
</div>
<hr>

<?php 
$sayfalar = $db->query('SELECT * FROM sayfalar');
?>


<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th width="30">ID</th>
            <th>Sayfa Adı</th>
            <th></th>
            <th width="50"></th>
            <th width="50"></th>
            <th width="50"></th>
        </tr>
    </thead>


    <tbody>

        <?php while($sayfa = $sayfalar->fetch_array()){ ?>
            <tr>
                
                <td><?php echo $sayfa['id']; ?></td>
                <td><?php echo $sayfa['baslik']; ?></td>
                <td>
                    <a target="_blank" href="<?php echo SITE_URL.'?page=sayfa&id='.$sayfa['id']; ?>">Sayfaya Git</a>
                </td>
                <td><?php
                    if($sayfa['durum'] == 1){
                        echo 'Yayında';
                    }else{
                        echo 'Gizli';
                    }
                ?></td>
                <td><a href="<?php echo url('?page=sayfalar&is=duzenle&id='.$sayfa['id']); ?>" class="btn btn-warning btn-sm">Düzenle</a></td>
                <td><a href="<?php echo url('?page=sayfalar&is=sil&id='.$sayfa['id']); ?>" class="btn btn-danger btn-sm">Sil</a></td>
            </tr>
        <?php }?>

    </tbody>
</table>