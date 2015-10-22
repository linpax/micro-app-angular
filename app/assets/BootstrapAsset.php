<?php

namespace App\assets;

use Micro\mvc\views\IView;
use Micro\web\Asset;

/**
 * Class BootstrapAsset
 * @package App\assets
 */
class BootstrapAsset extends Asset
{
    public static $name = 'TwitterBootstrap';
    public static $version = '3.3.5';


    /**
     * @param IView $view
     * @throws \Micro\base\Exception
     */
    public function __construct(IView $view)
    {
        if ($view->container->kernel->isDebug()) {
            $this->js[] = '/js/bootstrap.js';
            $this->css[] = '/css/bootstrap.css';
        } else {
            $this->js[] = '/js/bootstrap.min.js';
            $this->css[] = '/css/bootstrap.min.css';
        }

        $this->sourcePath = $view->container->kernel->getAppDir() . '/../vendor/bower/bootswatch-dist';

        parent::__construct($view);
    }
}
