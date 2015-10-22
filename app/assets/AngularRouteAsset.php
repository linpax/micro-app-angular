<?php

namespace App\assets;

use Micro\mvc\views\IView;
use Micro\web\Asset;

/**
 * Class AngularRouteAsset
 * @package App\assets
 */
class AngularRouteAsset extends Asset
{
    public static $name = 'AngularJS Route';
    public static $version = '1.4.7';


    /**
     * @param IView $view
     * @throws \Micro\base\Exception
     */
    public function __construct(IView $view)
    {
        if ($view->container->kernel->isDebug()) {
            $this->js[] = '/angular-route.js';
        } else {
            $this->js[] = '/angular-route.min.js';
        }

        $this->sourcePath = $view->container->kernel->getAppDir() . '/../vendor/bower/angular-route';

        parent::__construct($view);
    }
}
