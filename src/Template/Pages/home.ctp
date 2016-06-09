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
    <?= $this->Html->css('page1.css') ?>

</head>
<body class="home">
    <header>
        <div class="header-image" id = "banner">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>Get the Ovens Ready</h1>
        </div>
    </header>

<?php include 'header.php'; ?>

<h2 class="header"> CakePHP </h2>

<div id ="first">
<ul class="list">
<li>Open scource web application framework, modeled after the concept of Ruby on Rails</li>
<li>Released in April 2005</li>
<li>First ever PHP to use MVC(Model View Controller) approach</li>
<li> Can make a wide variety of websites including blogs and online shopping sites </li>
</ul> 
<br>
<div class="image3">
<img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/MVC-Process.svg" alt="MVC"style="width:404px;height:228px;"/>
</div>
</div>

<a href="http://dinnerbooking.com/">
<img class="image1" src="http://i.imgur.com/2SaucFf.png" alt="ex1"style="width:300px;height:200px;"/>
    </a>

    <a href="http://tribehr.com/">
<img class="image2" src="http://i.imgur.com/upJYqF0.png" alt="ex2"style="width:300px;height:200px;"/>
    </a>
    <a href="http://www.hotscripts.com/">
<img class="image4" src="http://i.imgur.com/4mtbPIN.png" alt="ex3"style="width:300px;height:200px;"/>
    </a>

<h2 class="header"> Popularity </h2>
<ul class="list">
<li>Not the most popular, definitly above average in terms of rankings</li>
<li>2015 ranked 11 for most popular framework</li>
</ul>
<br>
<img class="image1" src="http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2015/03/1427547433php_framework_popularity_in_personal_projects_-_sitepoint2c_2015.png" alt="Popularity at personal projects"style="width:600px;height:500px;">

<img class="image2" src="http://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2015/03/1427547421php_framework_popularity_at_work_-_sitepoint2c_2015.png" alt="Popularity at work" style="width:600px;height:500px;left:20px;">

<h2 class="header"> Strengths </h2>
<ul class="list" id="strength">
<li>Relative to other frameworks, has a lower learning curve</li> 
<li>Zero configuration, don't need to specify location to library or url of site, everything is auto-detected except the database connection settings</li>
<li>Cuts down on develpment time because of ORM (Object Relational Mapping) and follows convention over configuration </li>
<li>Open source</li>
<li>Supports multiple programming languages</li>
<li>Supports Plugins</li>
<li>Build-in validation, authorization and security</li>
</ul>

<h2 class="header"> Weakness </h2>

<ul class="list" id="weak">
<li>Poor documentation, not written with beginners in mind</li>
<li>Slow at adapting newer PHP versions</li>
<li>Mostly coding based</li>
</ul>
<br><br><br><br>

</div>
</body>
</html>
