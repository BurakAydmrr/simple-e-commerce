<?php 
    $sayfa_id = $_GET['id'];
    $dbSayfa = $db->query("SELECT * FROM sayfalar WHERE id=$sayfa_id");
    $sayfa = $dbSayfa->fetch_array();
?>

<div class="container">
    <div class="p-5 my-5 bg-secondary">
        <h1 class="text-white"><?php echo $sayfa['baslik']?></h1>
    </div>
    <div>
        <?php echo $sayfa['icerik']; ?>
    </div>
</div>