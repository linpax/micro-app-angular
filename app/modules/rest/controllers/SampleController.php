<?php

namespace App\modules\rest\controllers;

use Micro\mvc\controllers\RichController;

/**
 * Class SampleController
 *
 * @package App\modules\rest\controllers
 */
class SampleController extends RichController
{
    /**
     * @return void
     */
    public function actionsTypes()
    {
        // TODO: Implement actionsTypes() method.
    }

    /**
     * Restangular.getList('sample')
     *
     * @return array
     */
    public function actionIndex()
    {
        return [
            ['name' => 'MicroPHP'],
            ['name' => 'AngularJS'],
            ['name' => 'Restangular'],
            ['name' => 'CoffeeScript']
        ];
    }
}
