<?php

namespace workaholicdevelopers\specialdaydecorator;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class DayDec25Asset extends  AssetBundle
{

    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . '/assets';
    }

    public $css = [
        "css/day_dec_25.css"
    ];

    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js',
        "js/day_dec_25.js"
    ];

    public $depends = [JqueryAsset::class];

}   