<?php
#App\Plugins\Shipping\NoShipping\Controllers\FrontController.php
namespace App\Plugins\Shipping\NoShipping\Controllers;

use App\Plugins\Shipping\NoShipping\AppConfig;
use SCart\Core\Front\Controllers\RootFrontController;
class FrontController extends RootFrontController
{
    public $plugin;

    public function __construct()
    {
        parent::__construct();
        $this->plugin = new AppConfig;
    }

    public function index() {
        return view($this->plugin->pathPlugin.'::Front',
            [
                //
            ]
        );
    }

    public function processOrder(){
        // Function require if plugin is payment method
    }
}
