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
    <?= $this->Html->css('page5.css'); ?>
    

<style>
.centered
{
    text-align:center;
}
</style>

</head>
<body class="home">
    <header>
        <div class="header-image" id = "banner">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>Get the Ovens Ready</h1>
        </div>
    </header>

<?php include 'header.php'; ?>

<h1>Conclusion</h1>
<p> 
Overall we found our experience with CakePHP to be pleasant. The framework provided a light weight and increased functionality compared to the standard PHP. The framework can appeal to several different types of developers (blogs, online shopping, etc). One of CakePHPs most prominent benefits we found was the Components and Helpers. Components and Helpers eliminate many boring and repetitive tasks as well as simplify view coding and logic. 
<br><br>
It can be seen from our installation page the set-up procedure required to use CakePHP is fairly simple and straight forward. It requires around 6 steps depending on the type of server you wish to use. In our case using a third party hosting service it took 6 steps and we found many resources available to assist with the installation process. 
<br><br>
The learning curve for CakePHP is fairly steep compared to HTML/CSS. This is not exactly a surprise considering PHP in general is not as straightforward. However, once you get a hang of it, it becomes fairly simple to grasp and create pages with. Developers with prior PHP knowledge with also find picking up CakePHP to be a piece of cake. We believe we made a good choice choosing CakePHP and would not change anything if we had to do it all over again. I mean who doesn't like cake?
</p>
<br>

<center>
<img class="resize" src="http://puzzlersworld.com/wp/wp-content/uploads/2014/09/circular-cake-in-eight-equal-pieces-puzzle.jpg" alt="cake" style="width:80%";>
</center>

<div id="secret">
The cake is a LIE! :( 
</div>

<br><br><br><br>

</body>
</html>
