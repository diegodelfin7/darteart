  <?php include('includes/header.php');?>

  <section class="landing">
    <div class="container">
      <h1 class="title_app">Bievenidos a Darte Art</h1>
      <p class="landing_slogan">Aquí podrás compartir tus trabajos artisticos de manera fácil.</p>
      <a href="registro.php" class="btn btn-lg btn-success">Registrate</a>
      <p class="landing_slogan">También puedes unirte con </p>
      <a href="" class="zocial facebook">Facebook</a>
    </div>
  </section>

  <section class="landing_result_top">   
    <div class="container">
      <h2 class="landing_title_result">Otros ya compartieron y vendieron</h2>
      <div class="row">
      <?php for ($i=0; $i <6 ; $i++) { ?>
         <div class="col-sm-4 col-lg-4 col-md-4">
          <div class="thumbnail">
            <img src="img/obra123.jpg" alt="" width="100%">
            <div class="caption">
                <h4 class="pull-right">$24.99</h4>
                <h4><a href="#">First Product</a></h4>
                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
            </div>
            <div class="ratings">
                <p class="pull-right">15 reviews</p>
                <p>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                </p>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </section>

  <?php include('includes/footer.php'); ?>