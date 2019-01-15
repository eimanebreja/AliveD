<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1, maximum-scale=1, initial-scale=1" />
    <meta name="description" content="<?php bloginfo('description');?>">
    <meta name="author" content="">
    <title>
        <?php bloginfo('name');?>
    <?php wp_title();?>
    </title>
  <link rel="icon" href="<?php bloginfo('template_url');?>/assets/images/icon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo('template_url');?>/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url');?>/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />
  <script src="<?php bloginfo('template_url');?>"></script>

  <?php wp_head();?>
</head>
<body>

<nav>
    <div class="nav-padding">
      <div class="nav-wrapper">
        <a href="/" class="brand-logo"><img src="<?php bloginfo('template_url');?>/assets/images/logo.png"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">HOME</a></li>
          <li><a href="/concept">CONCEPT</a></li>
          <li><a href="/service">SERVICE</a></li>
          <li><a href="/company">COMPANY</a></li>
          <li><a class="waves-effect waves-light btn" href="/contact/">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="/">HOME</a></li>
    <li><a href="/concept">CONCEPT</a></li>
    <li><a href="/service">SERVICE</a></li>
    <li><a href="/company">COMPANY</a></li>
    <li><a href="/contact/">CONTACT</a></li>


  </ul>




