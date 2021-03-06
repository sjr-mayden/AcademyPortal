<?php

use PHPUnit\Framework\TestCase;
use Portal\Factories\UserModelFactory;
use Portal\Models\UserModel;
use Psr\Container\ContainerInterface;

class UserModelFactoryTest extends TestCase
{
    function testInvoke()
    {
        $db = $this->createMock(\PDO::class);
        $container = $this->createMock(ContainerInterface::class);
        $container->method('get')
            ->willReturn($db);

        $factory = new UserModelFactory;
        $case = $factory($container);
        $expected = UserModel::class;
        $this->assertInstanceOf($expected, $case);
    }

}
