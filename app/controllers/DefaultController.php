<?php

namespace App\Controllers;

use Micro\Base\IContainer;
use Micro\Mvc\Controllers\ViewController;
use Micro\Mvc\Views\PhpView;
use Micro\web\Html\Html;

/**
 * Class DefaultController
 *
 * @package App\Controllers
 */
class DefaultController extends ViewController
{
    /**
     * Constructor controller
     *
     * @access public
     *
     * @param IContainer $container
     * @param string $modules
     *
     * @result void
     */
    public function __construct(IContainer $container, $modules = '')
    {
        parent::__construct($container, $modules);

        $this->layout = 'maket';
    }

    /**
     * Default action
     *
     * @return PhpView
     */
    public function actionIndex()
    {
        return new PhpView($this->container);
    }

    /**
     * Error action
     *
     * @return PhpView
     */
    public function actionError()
    {
        $result = null;
        /** @var \Micro\Base\Exception $error */
        if ($error = $this->container->request->post('error')) {
            $result .= Html::heading(3, $error->getMessage(), ['class' => 'text-danger bg-danger']);
        }
        $v = new PhpView($this->container);
        $v->data = $result ?: 'undefined error';

        return $v;
    }
}
