<link href="netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="code.jquery.com/jquery-1.11.1.min.js"></script>

 <?php

   

/* 
    $sepet = [
        26 => [
            'id' => 26,
            'ad' => 'Elvan Saksı',
            'fiyat' => '10',
            'adet' => 1,
            'resim' => '1647797394-632609-elvan saksı.jpg'
        ],

       


    ];

*/

if(isset($_SESSION['sepet'])){

    if(!is_array($_SESSION['sepet'])){
        $_SESSION['sepet'] = array();


    }



}else{
    $_SESSION['sepet'] = [];
}

    
 ?>






<div class="container">
    <div class="row">
        
        <div class="row">
            <table class="col-sm-12 col-md-10 col-md-offset-1 table table-hover">
               
                <thead>
                    <tr>
                        
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $toplamfiyat = 0;

                    ?>
                    <?php foreach ($_SESSION['sepet'] as $urun) { 
                        $toplamfiyat = $toplamfiyat+($urun['adet'] * $urun['fiyat']);
                        $_SESSION['ad'] = $urun['ad'];
                    ?>
                    
                    <tr>
                        
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php  echo  SITE_URL.'/assets/uploads/'. $urun['resim'];?>" style="width: 72px; height: 72px;"> </a>
                            <form action="" method="POST">
                            <div class="media-body">
                               
                                
                                <h4 class="media-heading"><?php echo $urun['ad'];?></a></h4>
                             
                                <span class="text-warning"><strong>3 İş Günü İçerisinde Teslimat.</strong></span>
                            </div>
                            </form>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="number" class="form-control" onchange="sepetDuzunle(<?php echo $urun['id'];?>,event);" value="<?php echo $urun['adet'];?>">
                        </td>
                        <td class="col-md-1 text-center"><strong><?php echo $urun['fiyat'];?>TL</strong></td>
                        <td class="col-md-1 text-center"><strong><?php echo $urun['adet'] * $urun['fiyat'];?>TL</strong></td>
                        <td class="col-md-1">
                        <a href="?page=sepet-sil&id=<?php $urun['id'];?>" type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Sil
                    </a></td>
                    </tr>
                 <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="col-md-1 text-center"> <strong><?php echo $toplamfiyat; ?> TL</strong> </td>
                            <td></td>
                        </tr>
               
                    <tr>
                        <td>  </td>
                        <td>  </td>
                        <td><a href="?page=sepet-sil" type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Sepeti Temizle
                    </a> </td>
                        <td>
                        <a href="?page=urunler" type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Alışverişe Devam Et.
                    </a></td>
                        <td>
                        <a  href= "?page=odeme" type="button" class="btn btn-success">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Sipariş Et
                    </a></td>
                    
                    </td>
                   
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <hr>
<?php
  

?>



</div>
</div> 
<br><br>




<script>

function sepetDuzunle(id,e){
  
    location.href="<?php echo SITE_URL ?>?page=sepete-ekle&id="+id+"&adet="+e.target.value+"&duzenle=1";

    
}

</script>