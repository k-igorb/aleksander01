<?php

namespace ZFTest;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use ZFT\User;

class UserTest extends AbstractHttpControllerTestCase
{
    public function testCanCreateUserObject()
    {
        $user = new User();

        $this->assertInstanceOf(User::class, $user);
    }
}