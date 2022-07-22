<div class="row">
    <div class="col-6"><h3>İletişim Form Silme</h3></div>
    <div class="col-6 text-end">
        <a href="<?php echo url('?page=sayfalar'); ?>" class="btn btn-primary">Sayfa Listesi</a>
    </div>
</div>
<hr>


<div class="row">
    <div class="col-8">
        <?php 
        $sayfa_id = $_GET["id"];
        if($_POST){
            
            $prepare = $db->prepare('DELETE FROM iletisim WHERE id=?');
            $prepare->bind_param("i", $sayfa_id);
            $prepare->execute();
            header('Location:index.php?page=form');

        }
        ?>

        <form action="" method="POST">

            <p>Bu sayfayı silmek istediğinize emin misiniz? <strong>Bu işlem bir daha geri alınamaz.</strong></p>
            <input type="hidden" name="sil" value="1">
            <button class="btn btn-danger">Eminim Sil</button>
            <a href="<?php echo url('?page=form'); ?>" class="btn btn-secondary">Vazgeç</a>

        </form>

    </div>
</div>