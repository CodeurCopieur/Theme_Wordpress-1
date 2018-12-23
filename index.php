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
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown link
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

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
