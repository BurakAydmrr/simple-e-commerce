<?php

if(!$_POST){
    header('Location:index.php');
}

$baslik = $_POST['baslik'];
$sehir = $_POST['sehir'];
$adres = $_POST['adres'];
$uyeid = intval($_SESSION['uye_bilgileri']['id']);
$toplamfiyat = 0;
foreach($_SESSION["sepet"] as $key => $value) {
    $toplamfiyat += $value["adet"] * $value["fiyat"];
}




$durum = 1;
$prepare = $db->prepare('INSERT INTO odemeler (uyeid, fiyat, baslik,sehir,adres,durum) VALUES (?, ?, ?, ?, ?, ?)');
$prepare->bind_param("idsssi", $uyeid, $toplamfiyat, $baslik,$sehir,$adres,$durum);
$sonuc = $prepare->execute();

if($sonuc){
    $odemeid = $db->insert_id;
    foreach($_SESSION["sepet"] as $key => $value) {
        $prepare = $db->prepare('INSERT INTO alisveris (urunid, odemeid, adet,birimfiyat,toplamfiyat) VALUES (?, ?, ?, ?, ?)');
        $urunid = $value["id"];
        $adet = $value["adet"];
        $fiyat = $value["fiyat"];
        $uruntoplamfiyat = $value["adet"] * $value["fiyat"];
        $prepare->bind_param("iiidd",$urunid,$odemeid,$adet,$fiyat,$uruntoplamfiyat);
       
        $sonuc = $prepare->execute();
        $db->query("UPDATE  urunler SET stok = stok - $adet WHERE id = $urunid");

    }
    unset($_SESSION["sepet"]);
    header('Location:index.php?page=odemesonuc&sonuc=1');
}else{
    header('Location:index.php?page=odemesonuc&sonuc=0');
}


?>