<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor">
  <title>Mon site Test</title>

  <?php wp_head(); ?>

</head>
<body>

  <div class="container">
    <div class="jumbotron">
      <h1>Salut c'est moi</h1>
    </div>
  </div>

  <section>
    <div class="container">
      <div class="row  m-dw-30">
        <div class="col-sm-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/ms-icon.png" alt="" class="img-responsive">
        </div>
        <div class="col-sm-8">
            <h1>Titre de l'article</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>

      <div class="row m-dw-30">
        <div class="col-sm-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/ms-icon.png" alt="" class="img-responsive">
        </div>
        <div class="col-sm-8">
            <h1>Titre de l'article</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>

      <div class="row m-dw-30">
        <div class="col-sm-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/ms-icon.png" alt="" class="img-responsive">
        </div>
        <div class="col-sm-8">
            <h1>Titre de l'article</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>

      <div class="row m-dw-30">
        <div class="col-sm-4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/ms-icon.png" alt="" class="img-responsive">
        </div>
        <div class="col-sm-8">
            <h1>Titre de l'article</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>


    </div>
  </section>

    <?php wp_footer(); ?>
</body>
</html>
