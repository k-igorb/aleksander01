<?php

namespace ZFT;

use Zend\ModuleManager\Feature\ServiceProviderInterface;

/**
 * Created by PhpStorm.
 * User: Kroati
 * Date: 7/10/2018
 * Time: 2:23 PM
 */
class Module implements ServiceProviderInterface
{
    public function getServiceConfig()
    {
        return [];
    }
}