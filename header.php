<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Books</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <script src="https://kit.fontawesome.com/f34908d64f.js"></script>

    <link rel="stylesheet" href=<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" medial="all"/>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="#"
            ><i class="fas fa-book-reader fa-3x mx-3"></i>Books</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-align-right text-light"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Price</a>
              </li>
              <li class="nav-item dropdown">
                <div class="dropdown">
                  <a href="#" class="nav-link">Pages</a>
                  <div class="dropdown-content">
                    <a href="#">Generic</a>
                    <a href="#">Element</a>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Fact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="container text-center">
        <div class="row">
          <div class="col-md-7 col-sm-12 text-white">
            <h6>AUTHOR: DAILY TUITION</h6>
            <h1>EXCITING ADVENTURE</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipiscing elit rutrum
              faucibus sagittis, volutpat turpis ac integer.
            </p>
            <button class="btn btn-light px-5 py-2">By now for $5.99</button>
          </div>
          <div class="col-md-5 col-sm-12 h-25">
            <!-- TODO: Maybe you need to change this to /... -->
            <img src="assets/header-img.png" alt="Books" />
          </div>
        </div>
      </div>
    </header>

    <main>