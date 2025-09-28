<?php
#App\Plugins\Shipping\NoShipping\Admin\AdminController.php

namespace App\Plugins\Shipping\NoShipping\Admin;

use SCart\Core\Admin\Controllers\RootAdminController;
use App\Plugins\Shipping\NoShipping\AppConfig;

class AdminController extends RootAdminController
{
    public $plugin;

    public function __construct()
    {
        parent::__construct();
        $this->plugin = new AppConfig;
    }
    public function index()
    {
        return view($this->plugin->pathPlugin.'::Admin',
            [
                
            ]
        );
    }
}
