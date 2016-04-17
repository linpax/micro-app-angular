<?php

namespace App\Assets;

use Micro\Mvc\Views\IView;
use Micro\Web\Asset;

class LodashAsset extends Asset
{
    public static $name = 'Lodash';
    public static $version = '3.10.1';


    /**
     * @param IView $view
     * @throws \Micro\Base\Exception
     */
    public function __construct(IView $view)
    {
        if ($view->container->kernel->isDebug()) {
            $this->js[] = '/lodash.js';
        } else {
            $this->js[] = '/lodash.min.js';
        }

        $this->sourcePath = $view->container->kernel->getAppDir() . '/../vendor/bower/lodash';

        parent::__construct($view);
    }
}
