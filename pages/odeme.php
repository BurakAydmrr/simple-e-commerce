<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
   body {
    background-color: #eee
}

.container {
    height: 100vh
}

.card {
    border: none
}

.form-control {
    border-bottom: 2px solid #eee !important;
    border: none;
    font-weight: 600
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #8bbafe;
    outline: 0;
    box-shadow: none;
    border-radius: 0px;
    border-bottom: 2px solid blue !important
}

.inputbox {
    position: relative;
    margin-bottom: 20px;
    width: 100%
}

.inputbox span {
    position: absolute;
    top: 7px;
    left: 11px;
    transition: 0.5s
}

.inputbox i {
    position: absolute;
    top: 13px;
    right: 8px;
    transition: 0.5s;
    color: #3F51B5
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0
}

.inputbox input:focus~span {
    transform: translateX(-0px) translateY(-15px);
    font-size: 12px
}

.inputbox input:valid~span {
    transform: translateX(-0px) translateY(-15px);
    font-size: 12px
}

.card-blue {
    background-color: #492bc4
}

.hightlight {
    background-color: #5737d9;
    padding: 10px;
    border-radius: 10px;
    margin-top: 15px;
    font-size: 14px
}

.yellow {
    color: #fdcc49
}

.decoration {
    text-decoration: none;
    font-size: 14px
}

.btn-success {
    color: #fff;
    background-color: #492bc4;
    border-color: #492bc4
}

.btn-success:hover {
    color: #fff;
    background-color: #492bc4;
    border-color: #492bc4
}

.decoration:hover {
    text-decoration: none;
    color: #fdcc49
}
 </style>
</head>
<body>
<div class="container mt-5 px-5">
    <div class="mb-4">
        <h2>Selay Fide Ödeme Sayfası</h2> 
    </div>
    <form action="?page=siparisal" method="POST">
    <div class="row">
        <div class="col-md-8">
            <div class="card p-3">
                <h6 class="text-uppercase">Kart Bilgileri</h6>
                
                  
                <div class="inputbox mt-3"> <input type="text" class="form-control" required="required"> <span>Kart Sahibi Adı Soyadı</span> </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="inputbox mt-3 mr-2"> <input type="text"  class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Kart Numarası</span> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div class="inputbox mt-3 mr-2"> <input type="text"  class="form-control" required="required"> <span>S.K.K.</span> </div>
                            <div class="inputbox mt-3 mr-2"> <input type="text"  class="form-control" required="required"> <span>CVV</span> </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4">
                    <h6 class="text-uppercase">Adres Bilgileri</h6>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="baslik" class="form-control" required="required"> <span>Adres Başlığı </span> </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="sehir" class="form-control" required="required"> <span>Şehir</span> </div>
                        </div>
                        
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"> <input type="text" name="adres" class="form-control" required="required"> <span>Tam Adres</span> </div>
                        
                        </div>
                        
                      
                    </div>
                    
                </div>
            </div>
            <?php
      



            ?>
            <div class="mt-4 mb-4 d-flex justify-content-between"> <a href="?page=urunler">Geri Dön</a> <button type="sumbit" class="btn btn-success px-3">Tamamla</button> </div>
        </div>
        <div class="col-md-4">
        
        <?php
        $toplamfiyat = 0;
        foreach($_SESSION["sepet"] as $key => $value) {
            $toplamfiyat += $value["adet"] * $value["fiyat"];
        }
        ?>

            <div class="card card-blue p-3 text-white mb-3"> <span>You have to pay</span>
                <div class="d-flex flex-row align-items-end mb-3">
                    <h1 class="mb-0 yellow"><?php echo $toplamfiyat; ?> TL</h1>
                </div> <span>Siparişleriniz %100 Selay Fide Güvencesiyle sizlere teslim edilir.
                <div class="hightlight"> <span>3 İş Günü İçerisinde Teslimat.</span> </div>
            </div>
        </div>
    </div>
    
   
    </form>
</div>

</body>
</html>

