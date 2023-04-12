<?php

namespace app\modules\orders;

use yii\base\Module;

/**
 * orders module definition class
 */
class Orders extends Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\orders\controllers';
    /**
     * @var array mapping from controller ID to controller configurations.
     * Each name-value pair specifies the configuration of a single controller.
     * A controller configuration can be either a string or an array.
     * If the former, the string should be the fully qualified class name of the controller.
     * If the latter, the array must contain a `class` element which specifies
     * the controller's fully qualified class name, and the rest of the name-value pairs
     * in the array are used to initialize the corresponding controller properties. For example,
     *
     * ```php
     * [
     *   'account' => 'app\controllers\UserController',
     *   'article' => [
     *      'class' => 'app\controllers\PostController',
     *      'pageTitle' => 'something new',
     *   ],
     * ]
     * ```
     */
    public $controllerMap = [
        'orders' => 'app\modules\orders\controllers\OrderController',
        'pageTitle' => 'Заказы',
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
