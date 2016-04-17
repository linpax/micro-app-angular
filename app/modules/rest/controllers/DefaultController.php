<?php

namespace App\Modules\Rest\Controllers;

use Micro\Mvc\Controllers\RichController;

class DefaultController extends RichController
{
    public function actionsTypes()
    {
        // TODO: Implement actionsTypes() method.
    }

    public function actionHeader()
    {
        return $this->container->company;
    }
}
