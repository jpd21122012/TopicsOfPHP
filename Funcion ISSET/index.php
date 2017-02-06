<?php
include_once('utilities.php');
$email = isset( $_GET['email'] ) ? $_GET['email'] : '';
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
        <h3>Ejemplo de isset()</h3>
        <?php if( !empty($email) ){ ?>
        <div data-alert class="alert-box success radius">
          Se ha agregado tu correo a nuestra base
          <a href="#" class="close">&times;</a>
        </div>
        <?php } ?>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <form>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Correo
                      <input type="text" name="email" value="<?php echo $email; ?>" placeholder="ej. correo@dominio.com" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-6 columns">
                    <label>¿Deseas recibir noticias?</label>
                    <input name="chkNews" type="checkbox" value="yes"><label for="checkbox1">Recibir</label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-6 columns">
                    <input type="submit" value="ENVIAR" class="button tiny radius success" />
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>

    </div>
    

    <?php require_once('footer.php'); ?>