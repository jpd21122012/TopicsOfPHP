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
      <a href="#" id="btnHTML" class="button tiny secondary">Cargar HTML</a>
      <a href="#" id="btnJSON" class="button tiny success">Cargar JSON</a>
    </div> 
    <div class="row">
 
      <div class="large-12 columns">
        <h3>Hola <span id="spnUser">Invitado</span></h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <div class="large-12 columns" id="divTable">
                  Contenido a cambiar
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>