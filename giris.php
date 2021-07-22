<?php require_once "php/ayar.php";
if(isset($_SESSION["id"])){ 
@header("Location: cvekle");

 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sitemize Giriş yapın</title>

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
            <h1>Cv Oluşturmak için Giriş Yapın</h1>
            <span class="lead">Giriş Yap</span>

            <div class="about-text">

              
              <a href="giris"  class="btn btn-info">Giriş yap</a>
               <a href="kaydol"  class="btn btn-primary">Kaydol</a>
               <br> <br> <br> <br>
                <p>
                 Eklenen cvler:
<?php
$vt = new Veritabanim();
$sorgu = $vt->select("ozgecmis","");
if($sorgu != null) foreach( $sorgu as $satir ) {  

 ?> <a href="<?php echo $satir['geti']; ?>" class="label label-primary"><?php echo $satir['adsoyad']; ?></a> 
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


if(isset($_POST['giris'])){
    @$kullaniad=$_POST['kadi'];
    @$sifr=$_POST['sifre'];
    $sorgus = $vt->select("ozgecmis","where eposta='".$kullaniad."' && sifre='".$sifr."'");
    if($sorgu != null)  foreach( $sorgus as $satird ) {  
  if($satird['eposta']==$kullaniad && $satird['sifre']==$sifr){
        $_SESSION["id"]=$satird['id'];
            @header("Location: cvekle");

  }else{
    echo '<div class="alert alert-danger" role="alert">Kullanıcı adı veya şifre yanlış</div>';
  }
    }
      

}
?>
                <div class="feedback-form">
                    <h2>Cv Hazırlamak için Giriş yap</h2>

                    <form id="contactForm" action="giris" name="giris" method="POST">
                        <div class="form-group">
                            <label for="InputName">Eposta adresiniz</label>
                            <input type="text" name="kadi" required="" class="form-control" 
                                   >
                        </div>
                        
                      <div class="form-group">
                            <label for="InputName">Şifre</label>
                            <input type="password" name="sifre" required="" class="form-control"
                                   >
                        </div>
                        <button type="submit" name="giris" class="btn btn-info">Giriş Yap</button>
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