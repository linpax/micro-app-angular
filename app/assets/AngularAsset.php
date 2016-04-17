<?php

namespace App\Assets;

use Micro\Mvc\Views\IView;
use Micro\Web\Asset;

/**
 * Class AngularAsset
 * @package App\Assets
 */
class AngularAsset extends Asset
{
    public static $name = 'AngularJS';
    public static $version = '1.4.7';


    /**
     * @param IView $view
     * @throws \Micro\Base\Exception
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
