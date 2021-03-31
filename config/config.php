<?php

return [

    'styles' => [
        'navbar' => \Depiedra\Menus\Presenters\Bootstrap\NavbarPresenter::class,
        'navbar-right' => \Depiedra\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
        'nav-pills' => \Depiedra\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
        'nav-tab' => \Depiedra\Menus\Presenters\Bootstrap\NavTabPresenter::class,
        'sidebar' => \Depiedra\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
        'navmenu' => \Depiedra\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
        'adminlte' => \Depiedra\Menus\Presenters\Admin\AdminltePresenter::class,
        'zurbmenu' => \Depiedra\Menus\Presenters\Foundation\ZurbMenuPresenter::class,
    ],

    'ordering' => false,

];
