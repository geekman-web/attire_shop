<?php
#App\Plugins\Payment\CreditCard\Controllers\FrontController.php
namespace App\Plugins\Payment\CreditCard\Controllers;

use App\Plugins\Payment\CreditCard\AppConfig;
use SCart\Core\Front\Controllers\ShopCartController;
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
                'test' => 'Testing...',
            ]
        );
    }

    public function processOrder(){
        return (new ShopCartController)->completeOrder();
    }
}
