<div class="row">
    <div class="col-6"><h3>Sayfa Sil</h3></div>
    <div class="col-6 text-end">
        
    </div>
</div>
<hr>


<div class="row">
    <div class="col-8">
        <?php 
        $odemeid = $_GET["id"];
        if($_POST){
            $SQL = " DELETE FROM alisveris inner join urunler on urunler.id = alisveris.urunid WHERE alisveris.odemeid = odemeid=? ";
           
            $prepare = $db->prepare($SQL);
            $prepare->bind_param("i", $odemeid);
            $prepare->execute();
            header('Location:index.php?page=sayfalar');

        }
        ?>

        <form action="" method="POST">

            <p>Bu sayfayı silmek istediğinize emin misiniz? <strong>Bu işlem bir daha geri alınamaz.</strong></p>
            <button class="btn btn-danger">Eminim Sil</button>
            <a href="<?php echo url('?page=sayfalar'); ?>" class="btn btn-secondary">Vazgeç</a>

        </form>

    </div>
</div>