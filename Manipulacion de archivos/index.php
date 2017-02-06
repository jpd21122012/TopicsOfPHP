<?php
include_once('utilities.php');
$tech_support_available = true;
$content = file_get_contents('config.txt');
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
          <p>Modifica la configuración desde esta interfaz web</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">config.txt</a></h5>
            <div class="content" data-slug="panel1">
              <form action="modify_file.php" method="post">
                <div class="row collapse">
                  <div class="large-12 columns">
                    <textarea name="content"><?php echo $content; ?></textarea>
                  </div>
                </div>                
                <button type="submit" class="radius button">Modificar</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>