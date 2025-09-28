<?php
/**
 * Provides everything needed for the Plugin
 */
    $this->loadTranslationsFrom(__DIR__.'/Lang', 'Plugins/Shipping/NoShipping');
    $this->loadViewsFrom(__DIR__.'/Views', 'Plugins/Shipping/NoShipping');

    if (sc_config('NoShipping')) {
    // $this->mergeConfigFrom(
    //     __DIR__.'/config.php', 'key_define_for_plugin'
    // );
    }
