<?php

namespace App\Assets;

use Micro\Mvc\Views\IView;
use Micro\Web\Asset;

class RestAngularAsset extends Asset
{
    public static $name = 'REST-AngularJS';
    public static $version = '1.5.1';


    /**
     * @param IView $view
     * @throws \Micro\Base\Exception
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
