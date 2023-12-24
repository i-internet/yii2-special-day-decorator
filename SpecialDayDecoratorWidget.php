<?php

namespace workaholicdevelopers\specialdaydecorator;

/**
 * This is just an example.
 */
class SpecialDayDecoratorWidget extends \yii\base\Widget
{

    private $currentDate;
    private $shouldRunWidget = false;
    private $holidayMappings = [
        'dec-23' => 'dec-25', // Christmas Eve
        'dec-24' => 'dec-25', // Christmas Day
        'dec-31' => 'jan-01', // New Year's Eve
    ];

    public function init()
    {
        parent::init();
        $this->currentDate = strtolower(date("M-d"));
        $this->updateDateForHoliday();
        $this->registerHolidayAsset();
    }

    public function run()
    {
        if ($this->shouldRunWidget) {
            echo $this->render("_day-{$this->currentDate}");
        }
    }

    private function updateDateForHoliday()
    {
        if (array_key_exists($this->currentDate, $this->holidayMappings)) {
            $this->currentDate = $this->holidayMappings[$this->currentDate];
        }
    }

    private function registerHolidayAsset()
    {
        $holidays = $this->getHolidays();
        if (in_array($this->currentDate, $holidays)) {
            $assetDate = ucfirst(str_replace('-', '', $this->currentDate));
            $this->getView()->registerAssetBundle("workaholicdevelopers\specialdaydecorator\Day{$assetDate}Asset");
            $this->shouldRunWidget = true;
        }
    }

    private function getHolidays()
    {
        return [
            'dec-25', // Christmas
          //  'jan-01'  // New Year
        ];
    }

}