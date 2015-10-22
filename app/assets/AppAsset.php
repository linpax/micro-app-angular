<?php

namespace App\assets;

use Micro\mvc\views\IView;
use Micro\web\Asset;

/**
 * Class AppAsset
 *
 * @package App\assets
 */
class AppAsset extends Asset
{
    public static $name = 'ApplicationJS';
    public static $version = '0';


    /**
     * @param IView $view
     * @throws \Micro\base\Exception
     */
    public function __construct(IView $view)
    {
        // required
        $this->required = [
            '\App\assets\JQueryAsset',
            '\App\assets\BootstrapAsset',
            '\App\assets\AngularAsset',
            '\App\assets\AngularRouteAsset',
            '\App\assets\AngularBootstrapAsset',
            '\App\assets\LodashAsset',
            '\App\assets\RestAngularAsset'
        ];

        // _common
        $this->js[] = '/index.js';
        $this->js[] = '/js/_common/directives.js';
        $this->js[] = '/js/_common/filters.js';

        // Site
        $this->js[] = '/js/site/SiteModule.js';
        $this->js[] = '/js/site/SiteCtrl.js';
        $this->js[] = '/js/site/SampleService.js';


        $this->sourcePath = __DIR__ . '/app';

        parent::__construct($view);
    }
}
