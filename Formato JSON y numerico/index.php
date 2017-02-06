<?php
include_once('utilities.php');
$content = file_get_contents('http://127.0.0.1/curso_php/03/06/json1.php');
//debug($content);
$product = json_decode($content,true);
//debug($product);
$price = $product['price'];
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
        <h3>Ejemplo de formato numérico</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Standard</li>
                <li class="price">$<?php echo number_format($price, 2, '.',',') ?></li>
                <li class="description">Desarrollo de página dinámica</li>
                <li class="bullet-item">1 Base de datos</li>
                <li class="bullet-item">5 GB de almacenamiento</li>
                <li class="bullet-item">5 Usuario</li>
                <li class="cta-button"><a class="button" href="#">Compra ahora</a></li>
              </ul>
          </section>
        </div>
      </div>

    </div>
    

    <?php require_once('footer.php'); ?>