<?php namespace Goty\Festival;

use System\Classes\PluginBase;
use Backend;


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

    public function registerNavigation()
    {
        return [
            'festival' => [
                'label' => 'goty.festival::lang.navigation.label',
                'url' => Backend::url('goty/festival/festival'),
                'icon' => 'icon-picture-o',
                'permissions' => ['goty.festival.access_festival'],
                'order' => 500,
                'sideMenu' => [
                    'slideshows' => [
                        'permissions' => ['goty.festival.access_festival'],
                        'label' => 'goty.festival::lang.navigation.sideMenu.festivals',
                        'icon' => 'icon-picture-o',
                        'url' => Backend::url('goty/festival/festival'),
                    ]
                ]
            ]
        ];
    }

    public function registerComponents()
    {
        return [
           '\Goty\Festival\Components\Festival' => 'festival'
        ];
    }
}