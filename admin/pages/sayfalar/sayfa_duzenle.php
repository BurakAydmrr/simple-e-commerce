<div class="row">
    <div class="col-6"><h3>Sayfa Düzenle</h3></div>
    <div class="col-6 text-end">
        <a href="<?php echo url('?page=sayfalar'); ?>" class="btn btn-primary">Sayfa Listesi</a>
    </div>
</div>
<hr>


<div class="row">
    <div class="col-8">
        <?php 
        $sayfa_id = $_GET["id"];
        $dbSayfa = $db->query("SELECT * FROM sayfalar WHERE id=$sayfa_id");
        $sayfa = $dbSayfa->fetch_array();

        if($_POST){
            
            $baslik = $_POST['baslik'];
            $durum = $_POST['durum'];
            $icerik = $_POST['icerik'];

           
            if(strlen($baslik) < 3){
                echo '<div class="alert alert-danger">Lütfen bir sayfa başlığı girin.</div>';
            }else{
                $prepare = $db->prepare('UPDATE sayfalar SET baslik=?, icerik=?, durum=? WHERE id=?');
                $prepare->bind_param("ssii", $baslik, $icerik, $durum, $sayfa_id);
                $prepare->execute();
                header('Location:index.php?page=sayfalar&is=duzenle&id='.$sayfa_id);
            }

        }
        ?>

        <form action="" method="POST">


            <div class="mb-3">
                <label for="" class="form-label">Sayfa Başlığı</label>
                <input type="text" class="form-control" name="baslik" value="<?php echo $sayfa['baslik']?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Durumu</label>
                <select class="form-select" id="" name="durum">
                    <option value="1" <?php if($sayfa['durum']==1){ echo 'selected'; } ?>>Yayında</option>
                    <option value="0" <?php if($sayfa['durum']==0){ echo 'selected'; } ?>>Gizli</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">İçerik</label>
                <textarea name="icerik" id="summernote"><?php echo $sayfa['icerik']?></textarea>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Güncelle</button>
            </div>


        </form>

    </div>
</div>