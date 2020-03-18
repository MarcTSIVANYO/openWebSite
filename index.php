<?php $domaine=$_SERVER['SERVER_NAME']; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="agencehost.com | Hébergeur de site Web avec nom de domaine, serveur dédié Linux et Windows, serveur VPS| a hébergé <?echo $domaine?>">
  <title>AgenceHost a hebergé <?php echo $domaine ?></title>
	<link rel="icon" href="favicon.png" type="image/png">

  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
  <!--================ Banner Section start =================-->
  <section class="hero-banner text-center">
    <div class="container">
      <p class="text-uppercase">AGENCEHOST</p>
      <h1>Congratulations!</h1>
      <h3 style="color: white;"><a href="https://agencehost.com/" target="_blank"style="color: white;">AgenceHost</a> a ouvert votre nom de domaine <?php echo $domaine ?></h3>
      <a class="button button-outline" href="https://agencehost.com/" target="_blank">www.agencehost.com</a>
    </div>
  </section>
  <!--================ Banner Section end =================-->


  <!--================ Domain Search section start =================-->
  <section class="bg-gray domain-search">
    <div class="container">
      <div class="row no-gutters"> 
        <div class="col-md-12 col-lg-12 pl-2 pl-xl-5">
          <form method="get" action="https://agencehost.com/domaine#maSection" class="form-inline flex-nowrap form-domainSearch" target="_blank">
            <div class="form-group"> 
              <input type="text" class="form-control" name="domaine" placeholder="Trouvez le domaine parfait!" style="background-color: white" required="">
            </div>
            <button type="submit" class="button rounded-0">Rechercher</button>
          </form> 
        </div>
      </div>
    </div>
  </section>
  <!--================ Domain Search section end =================-->
     <!--================ Feature section start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="card-feature card-feature-content">
            <h2>Choisissez votre propre espace virtuel</h2>
            <!-- <p>Form male saying shed so every fifth winged and after spirit male land moving won seasons fish shall given fifth form male saying she'd soev bundantly green unes </p> -->
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card-feature text-center">
            <div class="feature-icon">
              <img src="img/home/png/004-home-page.png" alt="">
            </div>
            <h3>Transfert de domaine gratuit</h3>
            <!-- <p>Let place fly together third creature night at called fowl fill upon the grass </p> -->
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card-feature text-center">
            <div class="feature-icon">
              <img src="img/home/png/003-pencil.png" alt="">
            </div>
            <h3>Facile à personnaliser</h3>
           <!--  <p>Let place fly together third creature night at called fowl fill upon the grass </p> -->
          </div>
        </div>


        <div class="col-md-6 col-lg-4">
          <div class="card-feature text-center">
            <div class="feature-icon">
              <img src="img/home/png/001-unlock.png" alt="">
            </div>
            <h3>Serveur sécurisé</h3>
            <!-- <p>Let place fly together third creature night at called fowl fill upon the grass </p> -->
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card-feature text-center">
            <div class="feature-icon">
              <img src="img/home/png/002-shield.png" alt="">
            </div>
            <h3>Fonction de sauvegarde</h3>
            <!-- <p>Let place fly together third creature night at called fowl fill upon the grass </p> -->
          </div>
        </div>


        <div class="col-md-6 col-lg-4">
          <div class="card-feature text-center">
            <div class="feature-icon">
              <img src="img/home/png/005-headset.png" alt="">
            </div>
            <h3>Support de chat en direct</h3>
            <!-- <p>Let place fly together third creature night at called fowl fill upon the grass </p> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
		<div class="container">
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12" style="color: white;">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.<i class="ti-heart" aria-hidden="true"></i> by <a href="https://agencehost.com" target="_blank" style="color: white;">AgenceHost</a> 
        </p>
				<div class=" text-lg-right footer-social">
					<a href="https://www.facebook.com/agencehost"><i class="fa fa-facebook-f"></i></a>
					<!-- <a href="#"><i class="ti-twitter-alt"></i></a>
					<a href="#"><i class="ti-dribbble"></i></a>
					<a href="#"><i class="ti-linkedin"></i></a> -->
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

</body>
</html>