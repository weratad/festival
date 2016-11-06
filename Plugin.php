<?php namespace Goty\Festival;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Goty เทศกาล',
            'description' => 'แสดงหน้าเทศกาล ตามวันสำคัญๆ ของไทย',
            'author'      => 'Goty weratad',
            'icon'        => 'icon-sun-o'
        ];
    }

    public function registerComponents()
    {
        return [
           '\Goty\Festival\Components\Festival' => 'festival'
        ];
    }
}