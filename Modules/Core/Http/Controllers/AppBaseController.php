<?php

namespace Modules\Core\Http\Controllers;

use InfyOm\Generator\Utils\ResponseUtil;
use App\Http\Controllers\Controller;
use Response;


class AppBaseController extends Controller
{
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }
}
