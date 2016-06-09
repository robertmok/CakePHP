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

</head>
<body class="home">
    <header>
        <div class="header-image" id = "banner">
            <?= $this->Html->image('http://cakephp.org/img/cake-logo.png') ?>
            <h1>Get the Ovens Ready</h1>
        </div>
    </header>

<?php include 'header.php'; ?>

<h2>Step #1:</h2>
<ul>
<li>
Location: Web Hosting > cPanel Hosting > Web Applications
</li>
<li>
Find CakePHP under "Apps for Content Management"
</li>
</ul>


<?php echo $this->Html->image('01.jpg', ['alt' => 'pic1']); ?>
<style="width:50%;height:50%;">
<h2>Step #2:</h2>
<ul>
<li>
Location: Web Hosting > cPanel Hosting > Web Applications > CakePHP
</li>
<li>
Click Install this application
</li>
</ul>


<?php echo $this->Html->image('02.jpg', ['alt' => 'pic2']); ?>
<h2>Step #3:</h2>
<ul>
<li>
Location: Web Hosting > cPanel Hosting > Web Applications > CakePHP > Installatron
</li>
<li>
Enter the domain that you want to use.
<ul>
 <li>
Optional: Enter the directory if you wish to keep this a seperate installation from the main website.
</li>
</ul>
</li>
<li>
Accept the license agreement and choose the prefered automatic/manual settings.
</li>
</ul>


<?php echo $this->Html->image('03.jpg', ['alt' => 'pic3']); ?>
<?php echo $this->Html->image('04.jpg', ['alt' => 'pic4']); ?>
<h2>Step #4:</h2>
<ul>
<li>
Location: Web Hosting > cPanel Hosting > Web Applications > CakePHP > Installatron > Installation
</li>
<li>
Wait for the installation to complete.
</li>
</ul>
<?php echo $this->Html->image('05.jpg', ['alt' => 'pic5']); ?>
<h2>Step #5:</h2>
<ul>
<li>
Location: Web Hosting > cPanel Hosting > Web Applications > CakePHP > Installatron > Installation > CakePHP Homepage
</li>

<li>
You will be redirected to your CakePHP homepage!
</li>
</ul>
<?php echo $this->Html->image('06.jpg', ['alt' => 'pic6']); ?>

<h1>Installation Process Complete!</h1>
<?php echo $this->Html->image('07.jpg', ['alt' => 'pic']); ?>




</body>
</html>
