<?php

namespace App\assets;

use Micro\mvc\views\IView;
use Micro\web\Asset;

class AngularBootstrapAsset extends Asset
{
    public static $name = 'Angular-Bootstrap';
    public static $version = '0.14.1';


    /**
     * @param IView $view
     * @throws \Micro\base\Exception
     */
    public function __construct(IView $view)
    {
        if ($view->container->kernel->isDebug()) {
            $this->js[] = '/ui-bootstrap.js';
            $this->js[] = '/ui-bootstrap-tpls.js';
        } else {
            $this->js[] = '/ui-bootstrap.min.js';
            $this->js[] = '/ui-bootstrap-tpls.min.js';
        }

        $this->sourcePath = $view->container->kernel->getAppDir() . '/../vendor/bower/angular-bootstrap';

        parent::__construct($view);
    }
}
