<?php

namespace Depiedra\Menus\Tests;

use Depiedra\Menus\MenuBuilder;
use Depiedra\Menus\MenuItem;
use Illuminate\Config\Repository;

class MenuBuilderTest extends BaseTestCase
{
    /** @test */
    public function it_makes_a_menu_item()
    {
        $builder = new MenuBuilder('main', app(Repository::class));

        self::assertInstanceOf(MenuItem::class, $builder->url('hello', 'world'));
    }
}
