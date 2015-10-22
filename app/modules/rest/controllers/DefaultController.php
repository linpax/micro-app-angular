<?php

namespace App\modules\rest\controllers;

use App\modules\catalog\models\Category;
use Micro\mvc\controllers\RichController;
use Micro\mvc\models\Query;
use Micro\mvc\views\PhpView;

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
