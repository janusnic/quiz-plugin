<?php namespace Mossadal\Quiz\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * quiz Back-end Controller
 */
class Quiz extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mossadal.Quiz', 'quiz', 'quiz');
    }
}