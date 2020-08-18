<?php


namespace App\Service\Menus;


use App\Models\Blog\Menu;

class MenusService
{
    public static $instance = null;
    public $menus = null;
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getListMenus()
    {
        return Menu::with('parent:id,mn_name')
            ->orderBy('mn_sort','asc')
            ->get();
    }

    public function recursive($parents = 0 ,$level = 1 ,&$listMenusSort)
    {
        if ($this->menus == null) {
            $this->menus = $this->getListMenus();
        }

        if(count($this->menus) > 0 )
        {
            foreach ($this->menus as $key => $value) {
                if($value->mn_parent_id  == $parents)
                {
                    $value->level = $level;
                    $listMenusSort[] = $value;
                    unset($this->menus[$key]);
                    $parent = $value->id;

                    $this->recursive( $parent ,$level + 1 , $listMenusSort);
                }
            }
        }
    }
}
