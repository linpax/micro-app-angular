<?php

namespace App\assets;

use Micro\mvc\views\IView;
use Micro\web\Asset;

/**
 * Class AngularAsset
 * @package App\assets
 */
class AngularAsset extends Asset
{
    public static $name = 'AngularJS';
    public static $version = '1.4.7';


    /**
     * @param IView $view
     * @throws \Micro\base\Exception
     */
    public function __construct(IView $view)
    {
        if ($view->container->kernel->isDebug()) {
            $this->js[] = '/angular.js';
        } else {
            $this->js[] = '/angular.min.js';
        }

        $this->sourcePath = $view->container->kernel->getAppDir() . '/../vendor/bower/angular';

        parent::__construct($view);
    }
}
