<?php
/**
 * Provides everything needed for the Plugin
 */
    $this->loadTranslationsFrom(__DIR__.'/Lang', 'Plugins/Payment/CreditCard');
    $this->loadViewsFrom(__DIR__.'/Views', 'Plugins/Payment/CreditCard');

    if (sc_config('CreditCard')) {
    // $this->mergeConfigFrom(
    //     __DIR__.'/config.php', 'key_define_for_plugin'
    // );
    }
