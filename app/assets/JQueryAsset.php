<?php

namespace App\assets;

use Micro\mvc\views\IView;
use Micro\web\Asset;

/**
 * Class JQueryAsset
 * @package App\assets
 */
class JQueryAsset extends Asset
{
    public static $name = 'JQuery';
    public static $version = '1.9.1';


    /**
     * @param IView $view
     * @throws \Micro\base\Exception
     */
    public function __construct(IView $view)
    {
        if ($view->container->kernel->isDebug()) {
            $this->js[] = '/jquery.js';
        } else {
            $this->js[] = '/jquery.min.js';
        }

        $this->sourcePath = $view->container->kernel->getAppDir() . '/../vendor/bower/jquery/dist';

        parent::__construct($view);
    }
}
