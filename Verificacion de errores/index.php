<?php
include_once('utilities.php');
$tech_support_available = true;
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
        <h3>Contáctanos</h3>
          <p>Nos encantaría ponernos en contacto contigo. Envíanos comentarios y sugerencias a través del siguiente formulario.</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Contact nuestra compañía</a></h5>
            <div class="content" data-slug="panel1">
              <form action="formulario_contacto_proceso.php" method="post">
                <div class="row collapse">
                  <div class="large-2 columns">
                    <label class="inline">Nombre</label>
                  </div>
                  <div class="large-10 columns">
                    <input type="text" name="name"  />
                  </div>
                </div>
                <div class="row collapse">
                  <div class="large-2 columns">
                    <label class="inline">Idioma</label>
                  </div>
                  <div class="large-10 columns">
                    <select name="language">
                      <?php 
                      $i = 0;
                      while( $i < count( $languages ) ){ 
                        ?>
                      <option value="<?php echo $i; ?>"><?php echo $languages[$i]; ?></option>
                      <?php 
                      $i++;
                      } ?>
                    </select>
                  </div>
                </div>
                <div class="row collapse">
                  <div class="large-2 columns">
                    <label class="inline">Urgente</label>
                  </div>
                  <div class="large-10 columns">
                    <input type="radio" name="urgent" value="1" id="pokemonRed"><label for="pokemonRed">Si</label>
                    <input type="radio" name="urgent" value="0" id="pokemonBlue"><label for="pokemonBlue">No</label>
                  </div>
                </div>
                <div class="row collapse">
                  <div class="large-2 columns">
                    <label class="inline">¿Desea recibir noticias?</label>
                  </div>
                  <div class="large-10 columns">
                    <input id="checkbox1" type="checkbox" name="news[]" value="sitio"><label for="checkbox1">Del sitio</label>
                    <input id="checkbox2" type="checkbox" name="news[]" value="blog"><label for="checkbox2">Del blog</label>
                  </div>
                </div>
                <button type="submit" class="radius button">Enviar</button>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>