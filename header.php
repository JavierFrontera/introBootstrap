<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <?php wp_head();?>
    <title>Bienvenidos</title>
</head>
<body> <?php body_class()?>>

 <div class="cabecera">
 <nav class="navbar navbar-expand-md  navbar-light bg-light">
  <a class="navbar-brand" href="<?php site_url( "/" )/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="blog">Blog <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="acerca-de-nosotros">Acerca de</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto">Contacto</a>
      </li>
    </ul>
  </div>
</nav>

 
 </div>