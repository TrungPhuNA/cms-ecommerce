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
        return Menu::with('parent:id,mn_name')->get();
    }

    public function recursive($parents = 0 ,$level = 1 ,&$listMenusSort)
    {
        $categories = $this->getListMenus();
        if(count($categories) > 0 )
        {
            foreach ($categories as $key => $value) {
                if($value->mn_parent_id  == $parents)
                {
                    $value->level = $level;
                    $listMenusSort[] = $value;
                    unset($categories[$key]);
                    $parent = $value->id;

                    $this->recursive( $parent ,$level + 1 , $listMenusSort);
                }
            }
        }
    }
}
