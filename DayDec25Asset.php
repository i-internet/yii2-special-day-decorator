<?php

namespace workaholicdevelopers\specialdaydecorator;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class DayDec25Asset extends  AssetBundle
{

    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . '/assets/dec_25';
    }

    public $css = [
        "css/style.css"
    ];

    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js',
        "js/script.js"
    ];

    public $depends = [JqueryAsset::class];

}   