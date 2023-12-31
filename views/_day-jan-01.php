<?php
/* @var $this \yii\web\View */

$currentYear = date("Y"); // Get the current year
$nextYear = $currentYear + 1; // Calculate the next year
?>

<div class="special-day-loader-wrapper">
    <div class="loading">
        <h2><?php echo $currentYear; ?></h2> <!-- Display current year -->
        <div class="bar"></div>
        <h2><?php echo $nextYear; ?></h2> <!-- Display next year -->
    </div>
    <div class="center">
        <div><h2>Happy New Year</h2></div>
        <div></div>
        <div><h2><?php echo $nextYear; ?></h2></div> <!-- Display next year -->
        <div></div>
    </div>
</div>
