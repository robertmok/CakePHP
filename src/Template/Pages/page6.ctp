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
    <?= $this->Html->css('page6.css') ?>

</head>
<body class="home">
    <header>
        <div class="header-image" id = "banner">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>Get the Ovens Ready</h1>
        </div>
    </header>

<?php include 'header.php'; ?>

<h1>Credits</h1>
<div id="mid">
<h2>Members</h2>
<p id="first">Name: Zhe Zeng </p>
<p id="second">Name: Robert Mok </p>
<p id="third">Name: Qingbo Jiang </p>
<p id="fourth">Name: Michael Kwan </p>
</div>

<br>
<h2>References</h2>
<p> 
<a href="http://cakephp.org/">http://cakephp.org/</a>
<br>
<a href="http://book.cakephp.org/3.0/en/index.html">http://book.cakephp.org/3.0/en/index.html</a>

</p>
<br>
<p>
Images Source: <br> <br>
<a href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/MVC-Process.svg/2000px-MVC-Process.svg.png">https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/MVC-Process.svg/2000px-MVC-Process.svg.png</a>
<br>
<a href="http://www.sitepoint.com/best-php-framework-2015-sitepoint-survey-results/">http://www.sitepoint.com/best-php-framework-2015-sitepoint-survey-results/</a>
<br>
<a href="http://puzzlersworld.com/wp/wp-content/uploads/2014/09/circular-cake-in-eight-equal-pieces-puzzle.jpg">http://puzzlersworld.com/wp/wp-content/uploads/2014/09/circular-cake-in-eight-equal-pieces-puzzle.jpg</a>

</p>

<br><br><br><br>
</body>
</html>
