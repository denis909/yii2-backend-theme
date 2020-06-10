<?php

namespace backend\theme;

class MainLayout extends \yii\base\Widget
{

    public $copyright;

    public $optionsMenu = [];

    public $content;

    public $breadcrumbs = [];

    public $user;

    public $infoMessages = [];

    public $errorMessages = [];

    public $successMessages = [];

    public $actionMenu = [];

    public $mainMenu = [];

    public $enableCard = true;

    public $cardTitle;

}