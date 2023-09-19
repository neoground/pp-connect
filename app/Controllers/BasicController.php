<?php
/**
 * This file contains the BasicController class
 */

namespace PentaPaper\Connect\Controllers;

use Charm\Vivid\Controller;
use Charm\Vivid\Kernel\Output\Json;
use Charm\Vivid\Router\Attributes\Route;

/**
 * Class BasicController
 *
 * Handling basic endpoints
 */
class BasicController extends Controller
{
    #[Route("GET", "/ppconnect", "connect.index")]
    public function getIndex() : Json
    {
        return Json::make([
            'status' => 'ok'
        ]);
    }

}