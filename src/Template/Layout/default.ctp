<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'IDE - Corrientes';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon', 'idecorr_ico.png', ['type'=>'image/png'])?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


    <!-- Font-awesome -->
    <?= $this->Html->css('fontawesome6/css/all.css') ?>
    <!-- Flat Icons -->
    <?= $this->Html->css('flaticon.css') ?>




    <!-- Libraries Stylesheet -->
    <?= $this->Html->css('lib/animate/animate.min.css') ?>
    <?= $this->Html->css('lib/owlcarousel/assets/owl.carousel.min.css') ?>
    <?= $this->Html->css('lib/lightbox/css/lightbox.min.css') ?>


    <!-- Bootstrap modifies? -->
    <?= $this->Html->css('bootstrap_template.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('ide_corrientes.css') ?>



    <?= $this->Html->script('jquery-3.6.0.min.js') ?>


    <?= $this->Html->script('bootstrap.bundle.min.js') ?>



</head>
<body id="body">

    <?= $this->Flash->render() ?>

    <div class="container-xxl bg-white p-0">
        <?= $this->fetch('content') ?>
    </div>


    <!-- JavaScript Libraries -->
    <?= $this->Html->script('lib/wow/wow.min.js') ?>
    <?= $this->Html->script('lib/easing/easing.min.js') ?>
    <?= $this->Html->script('lib/waypoints/waypoints.min.js') ?>
    <?= $this->Html->script('lib/owlcarousel/owl.carousel.min.js') ?>
    <?= $this->Html->script('lib/isotope/isotope.pkgd.min.js') ?>
    <?= $this->Html->script('lib/lightbox/js/lightbox.min.js') ?>
    <?= $this->Html->script('template_main.js') ?>
</body>
</html>
