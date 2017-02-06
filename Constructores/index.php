<?php
die;
include_once('utilities.php');
$content = file_get_contents("http://{$_SERVER['SERVER_NAME']}{$_SERVER['REQUEST_URI']}/json1.php");
$product = json_decode($content,true);
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Ejemplo de constructores de lenguaje</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Standard</li>
                <?php foreach( $product as $title => $value ) { ?>
                <li class="description"><?php echo $title ?> <?php echo $value ?></li>
                <?php } ?>
                <li class="cta-button"><a class="button" href="#">Compra ahora</a></li>
              </ul>
          </section>
        </div>
      </div>

    </div>
    

    <?php require_once('footer.php'); ?>