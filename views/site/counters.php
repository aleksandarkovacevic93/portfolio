<?php

use yii\helpers\Url;

?>
<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?=Url::to('@web/')?>images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="colorlib-narrow-content">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="0" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Cups of coffee</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="999" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Projects</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="0" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Clients</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="colorlib-counter js-counter" data-from="0" data-to="1" data-speed="5000" data-refresh-interval="50"></span>
                <span class="colorlib-counter-label">Partners</span>
            </div>
        </div>
    </div>
</div>