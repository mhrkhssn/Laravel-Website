<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PageServices;
use Config;
class AboutController extends Controller
{

    public function __construct(PageServices $PageServices)
    {
        $this->PageServices = $PageServices;
    }

    public function index()
    {
        $data = $this->PageServices->about();
        $res = $this->PageServices->apiResponce(1, $method = '', $message = 'Data get successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }

}
