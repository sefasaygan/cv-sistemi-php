<?php require_once "php/ayar.php";
if(empty($_SESSION["id"])){ 
@header("Location: giris");

 }
 $id=$_SESSION["id"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CV EKLE</title>

    <!-- favicon -->
    <link href="favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="columns-block container">
<div class="left-col-block blocks">
    <header class="header theiaStickySidebar">
        <div class="content">
              <?php
$vt = new Veritabanim();
$id=$_SESSION["id"];
$sorgu = $vt->select("ozgecmis","where id='".$id."'");
if($sorgu != null) foreach( $sorgu as $satir ) {  

 ?> 
            <h1>Kendi CV'nizi oluşturun</h1>
            <span class="lead">Merhaba, <?=$satir['adsoyad'];?></span>

            <div class="about-text">
   
               <a href="<?=$satir['geti'];?>"  class="btn btn-info">CV'mi GÖR</a><?php } ?>
               <a href="cikis"  class="btn btn-primary">Çıkış Yap</a>
               <br> <br> <br> <br>
                
                <p>
                <h2> Son eklenen Görünümü açık 5 CV</h2> 
<style>.cvm .cvs{     height: 30px;
    padding: 0 20px;
    font-size: 13px;
    line-height: 30px;
    border: 1px solid #cccccc;
    border-radius: 0;
    box-shadow: none;
    box-sizing: border-box; text-transform: uppercase; word-break: break-all;
    margin-bottom:10px;}
.cvm small{
 line-height: 30px;
     font-size: 9.5px;
  color:white;
text-transform: uppercase; word-break: break-all;
}
.cvm a{ color:#337ab7; 

}
.cvm i{ color:#337ab7; text-align: right;

}
  </style>
  <?php
$vt = new Veritabanim();
$sorgu = $vt->select("ozgecmis"," LIMIT 5");
if($sorgu != null) foreach( $sorgu as $satir ) {  

 ?>  <div class="row cvm"><a href="<?php echo $satir['geti']; ?>">
                  <div class="col-md-6  label-primary ">
                <small > <?php echo $satir['unvan']; ?></small>
                 </div>
                 <div class="col-md-6 cvs">
                <?php echo $satir['adsoyad']; ?>
                 </div>
</a>
               </div>

<?php } ?>
              

              </p>
            </div>


        </div>

    </header>
    <!-- .header-->
</div>
<!-- .left-col-block -->


<div class="right-col-block blocks">
<div class="theiaStickySidebar">

<!-- .expertise-wrapper -->

<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
       
        <div class="row">
            <div class="col-md-12">

           

<?php 


if(isset($_POST['ekle'])){
    @$unvan=$_POST['unvan'];
     @$facebook=$_POST['facebook'];
     @$twitter=$_POST['twitter'];
     @$instagram=$_POST['instagram'];
     @$dilbilgisi=$_POST['dilbilgisi'];
     @$adres=$_POST['adres'];
     @$hakkinda=$_POST['hakkinda'];
     @$isdeneyimi=$_POST['isdeneyimi'];
     @$egitim=$_POST['egitim'];
     @$tezproje=$_POST['tezproje'];
      @$uzmanlik=$_POST['uzmanlik'];

if(isset($_FILES['dosya']) && $_FILES['dosya']['error'] == 0){
   $hata = $_FILES['dosya']['error'];
   if($hata != 0) {
      echo 'Yüklenirken bir hata gerçekleşmiş.';
   } else {
      $boyut = $_FILES['dosya']['size'];
      if($boyut > (1024*1024*5)){
         echo 'Dosya 5MB den büyük olamaz.';
      } else {
         $tip = $_FILES['dosya']['type'];
         $isim = $_FILES['dosya']['name'];
         $uzanti = explode('.', $isim);
         $uzanti = $uzanti[count($uzanti)-1];
         if($tip != 'image/jpeg' ||  $uzanti != 'jpg') {
            echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
         } else {
            $dosya = $_FILES['dosya']['tmp_name'];
            $do='img/' . $_FILES['dosya']['name'];
            copy($dosya, $do);
            $sonuc = $vt->idGuncelle("ozgecmis",array("unvan"=>$unvan,"facebook"=>$facebook,"twitter"=>$twitter,"instagram"=>$instagram,"dilbilgisi"=>$dilbilgisi,"resim"=>$do,"adres"=>$adres,"hakkinda"=>$hakkinda,"isdeneyimi"=>$isdeneyimi,"egitimbilgisi"=>$egitim,"isdeneyimi"=>$isdeneyimi,"tezproje"=>$tezproje,"isdeneyimi"=>$isdeneyimi,"uzmanlikalanim"=>$uzmanlik),$id);
         }
      }
   }
}else{

    $sonuc = $vt->idGuncelle("ozgecmis",array("unvan"=>$unvan,"facebook"=>$facebook,"twitter"=>$twitter,"instagram"=>$instagram,"dilbilgisi"=>$dilbilgisi,"adres"=>$adres,"hakkinda"=>$hakkinda,"isdeneyimi"=>$isdeneyimi,"egitimbilgisi"=>$egitim,"isdeneyimi"=>$isdeneyimi,"tezproje"=>$tezproje,"isdeneyimi"=>$isdeneyimi,"uzmanlikalanim"=>$uzmanlik),$id);
}


if($sonuc){
    echo '<div class="alert alert-success" role="alert">Başarıyla Cvniz güncellendi.</div>';
}else{
echo '<div class="alert alert-danger" role="alert">Cv güncellenirken hata oluştu.</div>';

}

}

?>


                <div class="feedback-form">
                    <h2>Kendi CV'ni Hazırla</h2>

                    <form id="contactForm" action="" enctype="multipart/form-data" name="ekle" method="POST">
                        <?php
$vt = new Veritabanim();

$sorgu = $vt->select("ozgecmis","where id='".$id."'");
if($sorgu != null) foreach( $sorgu as $satir ) {  

 ?> 
                        <div class="form-group">
                            <label for="InputSubject">Ünvan</label>
                            <input type="text"  class="form-control" value="<?=$satir['unvan'];?>" name="unvan" id="InputSubject" 
                                   >
                        </div>

                        <div class="form-group">
                            <label for="InputSubject">Facebook</label>
                            <input type="text"  class="form-control" value="<?=$satir['facebook'];?>" name="facebook" id="InputSubject"
                                   >
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Twitter</label>
                            <input type="text"  class="form-control" value="<?=$satir['twitter'];?>" name="twitter"  id="InputSubject"
                                 >
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">İnstagram</label>
                            <input type="text" class="form-control" value="<?=$satir['instagram'];?>" name="instagram" id="InputSubject"
                                   >
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Dil Bilgisi (İngilizce,Almanca gibi)</label>
                            <input type="text" class="form-control" value="<?=$satir['dilbilgisi'];?>" name="dilbilgisi" id="InputSubject" >
                        </div>
                        <div class="form-group">
                            <label for="InputSubject">Resim seçin</label>
                            <input type="file"  class="form-control"  name="dosya" id="InputSubject"
                                  >
                        </div>
                         <div class="form-group">
                            <label for="message-text" class="control-label">Adres</label>
                            <textarea class="form-control" rows="4" required="" name="adres" id="message-text"
                                      ><?=$satir['adres'];?> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Hakkında</label>
                            <textarea class="form-control" rows="4" required="" name="hakkinda" id="message-text"
                                      ><?=$satir['hakkinda'];?></textarea>
                        </div>
                         <div class="form-group">
                            <label for="message-text" class="control-label">İş deneyimi</label>
                            <textarea class="form-control" rows="4" required="" name="isdeneyimi" id="message-text"
                                      ><?=$satir['isdeneyimi'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Eğitim Bilgisi</label>
                            <textarea class="form-control" rows="4" required="" name="egitim" id="message-text"
                                      ><?=$satir['egitimbilgisi'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Tez ve Projeler</label>
                            <textarea class="form-control" rows="4" required="" name="tezproje" id="message-text"
                                      ><?=$satir['tezproje'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Uzmanlık Alanlarım</label>
                            <textarea class="form-control" rows="4" required="" name="uzmanlik" id="message-text"
                                      ><?=$satir['uzmanlikalanim'];?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="ekle">CV  DÜZENLE</button>
                        <?php } ?>
                    </form>

                </div>
                <!-- .feedback-form -->


            </div>
        </div>
    </div>
    <!--.container-fluid-->
</section>
<!--.section-contact-->

<footer class="footer">
    <div class="copyright-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copytext">&copy; <a href="https://sayganweb.com" >Sefa SAYĞAN</a></div>
                </div>
            </div>
            <!--.row-->
        </div>
        <!-- .container-fluid -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->
</div>
<!-- Sticky -->
</div>
<!-- .right-col-block -->
</div>
<!-- .columns-block -->
</div>
<!-- #main-wrapper -->

<!-- jquery -->
<script src="js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/theia-sticky-sidebar.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>