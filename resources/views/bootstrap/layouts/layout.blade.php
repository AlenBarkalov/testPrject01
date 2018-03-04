<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Описание...">
    <meta name="author" content="Баркалов Ален">
    <link rel="icon" href="../../../../favicon.ico">

    <!-- <title><?php //echo $title;?></title> -->
    <title>{{ $title }}</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    
  </head>

  <body>

    @section('navbar')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo route('bs'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articles') }}">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('article',array('id'=>10)) }}">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="{{ route('home') }}">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              v4.0
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
              <a class="dropdown-item active" href="/docs/4.0/">Latest (4.x)</a>
              <a class="dropdown-item" href="https://v4-alpha.getbootstrap.com/">v4 Alpha 6</a>
              <a class="dropdown-item" href="https://getbootstrap.com/docs/3.3/">v3.3.7</a>
              <a class="dropdown-item" href="https://getbootstrap.com/2.3.2/">v2.3.2</a>
            </div>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo route('about'); ?>">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('contact') }}">Контакты <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    @endsection
    @yield('navbar')
    <!--   -->

    <!-- <main role="main"> -->

      @section('header')
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{ $title }}</h1>
          

          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more {{ date('d.m.Y',time() )}} &raquo;</a></p>
        </div>
      </div>
      @show

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">

          <div class="col-md-3">
            @section('sidebar')
            <div class="sidebar-module">
                <h2>Архив</h2>
                <ol class="list-unstyled">
                  <li><a href="#">001</a></li>
                  <li><a href="#">002</a></li>
                  <li><a href="#">003</a></li>
                  <li><a href="#">004</a></li>
                  <li><a href="#">005</a></li>
                </ol>
            </div>
            @show
          </div>

          @yield('content')
        </div>

        <!-- <hr> -->

       <!-- /container -->

    <!-- </main> -->

    <hr>
    <footer class="container">
      <p>&copy; Company 2017-2018</p>
    </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- <script src="../../../../assets/js/vendor/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
