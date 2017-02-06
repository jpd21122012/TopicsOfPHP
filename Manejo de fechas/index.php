<?php
include_once('utilities.php');
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
        <h3>Manejo de fechas</h3>
          <p>Datos de una fecha</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Desglose</li>
                <li class="price"><?php echo date('m-d-Y h:i'); ?></li>
                <li class="description"><?php echo date('y'); ?></li>
                <li class="bullet-item"><?php echo date('t'); ?></li>
                <li class="bullet-item"><?php echo date('a'); ?></li>
                <li class="bullet-item"><?php echo date('H'); ?></li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>