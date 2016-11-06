<?php

namespace Goty\Festival\Controllers;

use Flash;
use Lang;
use BackendMenu;
use Backend\Classes\Controller;


/**
 * Slideshow Back-end Controller
 */
class Festival extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.RelationController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yml';
    public $relationConfig = 'config_relations.yml';
    public $listConfig = 'config_list.yml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Flosch.Festival', 'festival', 'festival');
    }

}
