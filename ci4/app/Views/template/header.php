<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/bootstrap.min.css');?>">
  </head>
  <body>
    <div id="container">
  	<header>
  		<h1>Layout Sederhana</h1>
  	</header>

  	<nav>
        <div class="navbar-nav">
        <a class"nav-link active" aria-current="page" href="<?= base_url('/');?>" class="active">Home</a>
        <a class="nav-link" href="<?= base_url('/artikel');?>" class="active">artikel</a>
        <a class="nav-link" href="<?= base_url('/about');?>" class="active">about</a>
        <a class="nav-link" href="<?= base_url('/contact');?>" class="active">Contact</a>
      </div>
    </div>
  </nav>
      <section id="wrapper">
        <section id="main">
