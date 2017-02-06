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
        <h3>Manejo de archivos</h3>
          <p>Hola, <?php echo isset( $_SESSION['name'] ) ? $_SESSION['name'] : 'Invitado'; ?></p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
               <a href="./show_file.php?type=1" class="button radius">Ver imagen</a>
               <a href="./show_file.php?type=2" class="button info radius">Ver PDF</a>
              </div>
              <div class="row">
               <a href="./show_file.php?type=1&download=1" class="button radius">Descargar imagen</a>
               <a href="./show_file.php?type=2&download=1" class="button info radius">Descargar PDF</a>
              </div>
              <div class="row">
               <a href="./set_session_variable.php?new_value=Bernardo" class="button radius">Asignar 1</a>
               <a href="./set_session_variable.php?new_value=Marco" class="button info radius">Asignar 2</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>