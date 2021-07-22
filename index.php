<?php require_once "php/ayar.php";
$vt = new Veritabanim();
if($baslik){
$sorgu = $vt->select("ozgecmis","where geti='".$baslik."'");
if($sorgu != null) foreach( $sorgu as $satir ) {  $id=$satir['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php  echo $satir['adsoyad'];  ?> CV - Özgeçmiş</title>

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
        <div class="profile-img">
            <img src="<?php  echo $satir['resim'];  ?>" class="img-responsive" alt=""/>
        </div>
        <div class="content">
            <h1><?php  echo $satir['adsoyad'];  ?> </h1>
            <span class="lead"><?php  echo $satir['unvan'];  ?></span>

            <div class="about-text">
                <p> <?php  echo $satir['hakkinda'];  ?>
                </p>

             

              
            </div>


            <ul class="social-icon">
                <li><a href="<?php  echo $satir['facebook'];  ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="<?php  echo $satir['twitter'];  ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="<?php  echo $satir['instagram'];  ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>

    </header>
    <!-- .header-->
</div>
<!-- .left-col-block -->


<div class="right-col-block blocks">
<div class="theiaStickySidebar">
<section class="expertise-wrapper section-wrapper gray-bg">
    <div class="container-fluid">
 <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Uzmanlık Alanım</h2>
                </div>
            </div>
        </div>
        <!-- .row -->

        <div class="row" style="    font-weight: bold;">

              <?php
  echo $satir['uzmanlikalanim'];  
              /*
$say=0;
$sorgu = $vt->select("uzmanlikalanim","where gelenid='".$id."'");
if($sorgu != null) foreach( $sorgu as $satirims ) { 
                 ?>
<div class="col-md-12 ">
                <div class="expertise-item">
                    <h3><?php  echo $satirims['baslik'];  ?></h3>

                    <p>
                       <?php  echo $satirims['icerik'];  ?>
                    </p>
                </div>
            </div>


            <?php }*/ ?>
        </div>

</div>
 <div class="col-md-6">
    <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>İş Deneyimi</h2>
                </div>
            </div>
        </div>
        <!-- .row -->

        <div class="row">
            <div class="col-md-12">
                <div class="content-item">

                    <p><?php  echo $satir['isdeneyimi'];  ?></p>
                </div>
            </div>
        </div>
    </div>
    </div>


</section>
<!-- .expertise-wrapper -->


<section class="section-wrapper section-experience gray-bg">
     <div class="container-fluid">
      <div class="col-md-6">
   
        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Eğitim Bilgileri</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <?php  echo $satir['egitimbilgisi']; /* 
$sorgu = $vt->select("egitimbilgileri","where gelenid='".$id."'");
if($sorgu != null) foreach( $sorgu as $satirim ) {

                 ?>
                <div class="content-item">
                    <small><?php  echo $satirim['yili'];  ?></small>
                    <h3><?php  echo $satirim['okul'];  ?></h3>
                    <h4><?php  echo $satirim['okuladi'];  ?></h4>

                </div>
            <?php }*/ ?>
                
                <!-- .experience-item -->
            </div>
        </div>
        <!--.row-->
    
    <!-- .container-fluid -->

</div>  <div class="col-md-6">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title"><h2>Tez ve Projeler</h2></div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">

                <?php echo $satir['tezproje']; /*
$say=0;
$sorgu = $vt->select("tezproje","where gelenid='".$id."'");
if($sorgu != null) foreach( $sorgu as $satirims ) { 

?>
<div class="content-item">
                    <h3><?php  echo $satirims['baslik'];  ?></h3>
                    <p>  <?php  echo $satirims['icerik'];  ?></p>
                </div>
            <?php }*/ ?>
                
         
            </div>
        </div>
        <!--.row-->
    </div></div>
</section>
<!-- .section-experience -->

<!-- .section-education -->

<!-- .section-publications -->


<section class="section-contact section-wrapper gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>İletişim</h2>
                </div>
            </div>
        </div>
        <!--.row-->
        <div class="row">
            <div class="col-md-12">
                <address>
                    <strong>Adres</strong><br>
                    <?php  echo $satir['adres'];  ?>

                </address>
                <address>
                    <strong>Telefon</strong><br>
                    <?php  echo $satir['telefon'];  ?>
                </address>

                <address>
                    <strong>Eposta</strong><br>
                    <?php  echo $satir['eposta'];  ?>
                </address>


                <address>
                    <strong>Eposta</strong><br>
                    <a href="mailto:<?php  echo $satir['eposta'];  ?>"><?php  echo $satir['eposta'];  ?></a>
                </address>

                 <address>
                    <strong>Yabancı Dil Bilgisi</strong><br>
                    <?php  echo $satir['dilbilgisi'];  ?>
                </address>
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
                    <div class="copytext">&copy; <a href="https://sayganweb.com" >Sefa SAYĞAN</a> </div>
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
<?php } }else{ @header("Location: giris");} ?>
