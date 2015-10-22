<?php

namespace App\assets;

use Micro\mvc\views\IView;
use Micro\web\Asset;

class RestAngularAsset extends Asset
{
    public static $name = 'REST-AngularJS';
    public static $version = '1.5.1';


    /**
     * @param IView $view
     * @throws \Micro\base\Exception
     */
    public function __construct(IView $view)
    {
        if ($view->container->kernel->isDebug()) {
            $this->js[] = '/restangular.js';
        } else {
            $this->js[] = '/restangular.min.js';
        }

        $this->sourcePath = $view->container->kernel->getAppDir() . '/../vendor/bower/restangular/dist';

        parent::__construct($view);
    }
}
