<div class="row">
    <div class="col-6"><h3>Ürün Sil</h3></div>
    <div class="col-6 text-end">
        <a href="<?php echo url('?page=urunler'); ?>" class="btn btn-primary">Ürün Listesi</a>
    </div>
</div>
<hr>


<div class="row">
    <div class="col-8">
        <?php 
        $urun_id = $_GET["id"];
        if($_POST){
            
            $prepare = $db->prepare('DELETE FROM urunler WHERE id=?');
            $prepare->bind_param("i", $urun_id);
            $prepare->execute();
            header('Location:index.php?page=urunler');

            
        }   
        ?>

        <form action="" method="POST">

            <p> Ürünü silmek istediğinize emin misiniz? <strong>Bu işlem bir daha geri alınamaz.</strong></p>
            <input type="hidden" name="sil" value="1">
            <button class="btn btn-danger">Eminim Sil</button>
            <a href="<?php echo url('?page=urunler'); ?>" class="btn btn-secondary">Vazgeç</a>

        </form>

    </div>
</div>