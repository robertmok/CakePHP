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

#codes 
{
     margin-left: 100px;
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
<script> 
$(document).ready(function(){
    $("#s5").click(function(){
        $("code#step5").toggle();
    });
});

$(document).ready(function(){
    $("#s6").click(function(){
        $("code#step6").toggle();
    });
});

$(document).ready(function(){
    $("#s7").click(function(){
        $("code#step7").toggle();
    });
});

$(document).ready(function(){
    $("#s8").click(function(){
        $("code#step8").toggle();
    });
});

$(document).ready(function(){
    $("#s9").click(function(){
        $("code#step9").toggle();
    });
});

$(document).ready(function(){
    $("#s10").click(function(){
        $("code#step10").toggle();
    });
});

</script>
</head>

<body id ="carousel" class="home">
    <header>
        <div class="header-image" id = "banner">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>Get the Ovens Ready</h1>
        </div>
    </header>

<?php include 'header.php'; ?>

<div id="top"> How to Create a Simple Blog </div>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
 
      <div class="item active">
        <?php echo $this->Html->image('step1.jpg', ['alt' => 'step1']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #1</h1>
          <p>Create blog database</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('step2.jpg', ['alt' => 'step2']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #2</h1>
          <p>Configure database settings in app.php</p>
        </div>
      </div>
   
      <div class="item">
        <?php echo $this->Html->image('step3.jpg', ['alt' => 'step3']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #3</h1>
          <p>Create file ArticlesTable.php</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('step4.jpg', ['alt' => 'step4']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #4</h1>
          <p>Initialize settings in ArticlesTable.php</p>
        </div>
      </div>

      <div class="item">
        <?php echo $this->Html->image('step5.jpg', ['alt' => 'step5']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #5</h1>
          <p>Create file ArticlesController.php</p>
          <p>Create link for home page, view page, add page, edit page </p>
          <p>Create add, edit, delete function </p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('step6.jpg', ['alt' => 'step6']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #6</h1>
          <p>Create home page of blog by creating index.ctp</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('step7.jpg', ['alt' => 'step7']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #7</h1>
          <p>Create file add.ctp for add page</p>
        </div>
      </div>
 
      <div class="item">
        <?php echo $this->Html->image('step8.jpg', ['alt' => 'step8']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #8</h1>
          <p>Create file edit.ctp for edit page</p>
        </div>
      </div>

      <div class="item">
        <?php echo $this->Html->image('step9.jpg', ['alt' => 'step9']); ?> 
        <div class="carousel-caption" style="position: static">
          <h1>Step #9</h1>
          <p>Create file view.ctp for view page</p>
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

<br>

<div id="codes">
<button id="s5" type="button" class="btn btn-default-info btn-md" style="background: #AAF4FB">Show/Hide Step 5 Code</button>
<button id="s6" type="button" class="btn btn-default-info btn-md" style="background: #AAF4FB">Show/Hide Step 6 Code</button>
<button id="s7" type="button" class="btn btn-default-info btn-md" style="background: #AAF4FB">Show/Hide Step 7 Code</button>
<button id="s8" type="button" class="btn btn-default-info btn-md" style="background: #AAF4FB">Show/Hide Step 8 Code</button>
<button id="s9" type="button" class="btn btn-default-info btn-md" style="background: #AAF4FB">Show/Hide Step 9 Code</button>

<code id="step5" style="display:none"> <br>
<?php 
highlight_file("C:/wamp/www/testing/src/Controller/ArticlesController.php");
?>
</code>

<code id="step6" style="display:none"> <br>
<?php 
highlight_file("C:/wamp/www/testing/src/Template/Articles/index.ctp");
?>
</code>

<code id="step7" style="display:none"> <br>
<?php 
highlight_file("C:/wamp/www/testing/src/Template/Articles/add.ctp");
?>
</code>

<code id="step8" style="display:none"> <br>
<?php 
highlight_file("C:/wamp/www/testing/src/Template/Articles/edit.ctp");
?>
</code>

<code id="step9" style="display:none"> <br>
<?php 
highlight_file("C:/wamp/www/testing/src/Template/Articles/view.ctp");
?>
</code>

</div>

<br><br><br><br>
</body>
</html>
