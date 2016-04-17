<?php

namespace App\Assets;

use Micro\Mvc\Views\IView;
use Micro\Web\Asset;

/**
 * Class AppAsset
 *
 * @package App\Assets
 */
class AppAsset extends Asset
{
    public static $name = 'ApplicationJS';
    public static $version = '0';


    /**
     * @param IView $view
     * @throws \Micro\Base\Exception
     */
    public function __construct(IView $view)
    {
        // required
        $this->required = [
            '\App\Assets\JQueryAsset',
            '\App\Assets\BootstrapAsset',
            '\App\Assets\AngularAsset',
            '\App\Assets\AngularRouteAsset',
            '\App\Assets\AngularBootstrapAsset',
            '\App\Assets\LodashAsset',
            '\App\Assets\RestAngularAsset'
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
