<?php

use Micro\Web\Html\Html;

/** @var string $content */
/** @var \Micro\Mvc\Views\PhpView $this */

(new \App\Assets\AppAsset($this))->publish();

?>
<?= Html::doctype('html5') ?>
<?= Html::openTag('html', ['lang' => 'ru', 'ng-app' => 'app'])?>
<?= Html::openTag('head') ?>
    <?= Html::meta('language', 'ru') ?>
    <?= Html::charset('utf-8') ?>
    <?= Html::meta('viewport', 'width=device-width, initial-scale=1.0') ?>
    <?= Html::meta('X-UA-Compatible', 'IE=edge') ?>
    <?= Html::title($this->container->company) ?>
    <?= Html::tag('base', ['href'=>'/']) ?>
<?= Html::closeTag('head') ?>
<?= Html::openTag('body', ['class'=>'container-fluid', 'ngView'=>'']) ?>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-12 text-center"><h2><headerbar></headerbar></h2></div>
    </div>
    <div class="row-fluid">
        <div class="col-md-2">
            Sidebar
        </div>
        <div class="col-md-10">
            <?= $content; ?>
        </div>
    </div>
</div>


<?= Html::closeTag('body') ?>
<?= Html::closeTag('html') ?>
