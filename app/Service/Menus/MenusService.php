<?php


namespace App\Service\Menus;


use App\Models\Blog\Menu;

class MenusService
{
    public static $instance = null;
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getListMenus()
    {
        return Menu::all();
    }
}
