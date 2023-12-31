<?php

namespace workaholicdevelopers\specialdaydecorator;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class DayJan01Asset extends  AssetBundle
{

    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . '/assets/jan_01';
    }

    public $css = [
        "css/style.css"
    ];

    public $js = [
      //  "js/script.js"
    ];

    public $depends = [JqueryAsset::class];

}   