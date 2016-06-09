<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('stylesheet.css') ?>
    <?= $this->Html->script('jquery'); ?>
    <?= $this->Html->script('javascript'); ?>

<style>
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
 
.carousel-caption
{
    position: static;
}
 
.carousel-caption > *
{
color: black;
}

p 
{
    font-size: 20px;
}

#top 
{
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    font-family:Verdana, "Sans-serif"
}

</style>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/testing/webroot/css/stylesheet.css">

</head>

<body id ="carousel" class="home">
    <header>
        <div class="header-image" id = "banner">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>Get the Ovens Ready</h1>
        </div>
    </header>

<?php include 'header.php'; ?>

<div id="top"> How to Install Cakephp 3.0 on GoDaddy.com </div>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
 
      <div class="item active">
        <?php echo $this->Html->image('01.jpg', ['alt' => 'pic1']); ?> 
        <style> width="460" height="345" </style>
        <div class="carousel-caption" style="position: static">
          <h1>Step #1</h1>
          <p>Location: Web Hosting > cPanel Hosting > Web Applications</p>
          <p>Find CakePHP under "Apps for Content Management"</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('02.jpg', ['alt' => 'pic2']); ?>
        <div class="carousel-caption" style="position: static">
          <h1>Step #2</h1>
          <p>Location: Web Hosting > cPanel Hosting > Web Applications > CakePHP</p>
          <p>Click Install this application</p>
        </div>
      </div>
   
      <div class="item">
        <?php echo $this->Html->image('03.jpg', ['alt' => 'pic3']); ?>
        <div class="carousel-caption" style="position: static">
          <h1>Step #3</h1>
          <p>Location: Web Hosting > cPanel Hosting > Web Applications > CakePHP > Installation</p>
          <p>Enter the domain that you want to use.</p>
          <p>Optional: Enter the directory if you wish to keep this a seperate installation from the main website.</p>
          <p>Accept the license agreement and choose the prefered automatic/manual settings.</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('04.jpg', ['alt' => 'pic4']); ?>
        <div class="carousel-caption" style="position: static">
          <h1>Step #4</h1>
          <p>Location: Web Hosting > cPanel Hosting > Web Applications > CakePHP > Installatron > Installation</p>
          <p>Wait for the installation to complete.</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('05.jpg', ['alt' => 'pic5']); ?>
        <div class="carousel-caption" style="position: static">
          <h1>Step #5</h1>
          <p>Location: Web Hosting > cPanel Hosting > Web Applications > CakePHP > Installatron > Installation > CakePHP Homepage</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('06.jpg', ['alt' => 'pic6']); ?>
        <div class="carousel-caption" style="position: static">
          <h1>Step #6</h1>
          <p>You will be redirected to your CakePHP homepage!</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('07.jpg', ['alt' => 'pic']); ?>
        <div class="carousel-caption" style="position: static">
          <h1>Step #7</h1>
          <p>Installation Process Complete!</p>
        </div>
      </div>
    </div>
 
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>
