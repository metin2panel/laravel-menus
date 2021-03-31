<?php

namespace Depiedra\Menus\Tests;

use Collective\Html\HtmlServiceProvider;
use Depiedra\Menus\MenusServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class BaseTestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlServiceProvider::class,
            MenusServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('menus', [
            'styles' => [
                'navbar' => \Depiedra\Menus\Presenters\Bootstrap\NavbarPresenter::class,
                'navbar-right' => \Depiedra\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
                'nav-pills' => \Depiedra\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
                'nav-tab' => \Depiedra\Menus\Presenters\Bootstrap\NavTabPresenter::class,
                'sidebar' => \Depiedra\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
                'navmenu' => \Depiedra\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
            ],

            'ordering' => false,
        ]);
    }
}
