<?php

namespace App\Modules\Rest\Controllers;

use Micro\Mvc\Controllers\RichController;

/**
 * Class SampleController
 *
 * @package App\Modules\Rest\Controllers
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
