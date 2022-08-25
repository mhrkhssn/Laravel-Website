<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\API\IndexServices;
use Config;


class IndexController extends Controller
{

    public function __construct(IndexServices $IndexServices)
    {
//        $this->middleware('auth:sanctum');
        $this->IndexServices = $IndexServices;
    }

    public function index()
    {
        $data = $this->IndexServices->index();
        $res = $this->IndexServices->apiResponce(1, $method = '', $message = 'Data get successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }

    public function contact(Request $request)
    {
        $data = $this->IndexServices->contact($request);
        $res = $this->IndexServices->apiResponce(1, $method = '', $message = 'form submit  successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }

    public function post(Request $request)
    {
        $data = $this->IndexServices->post($request);
        $res = $this->IndexServices->apiResponce(1, $method = '', $message = 'Data get successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }

    public function recent(Request $request)
    {
        $data = $this->IndexServices->recent();
        $res = $this->IndexServices->apiResponce(1, $method = '', $message = 'Data get successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }

    public function subcribe(Request $request)
    {
        $data = $this->IndexServices->subcribe();
        $res = $this->IndexServices->apiResponce(1, $method = '', $message = 'Data get successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }

    public function categorys()
    {
        $data = $this->IndexServices->categorys();
        $res = $this->IndexServices->apiResponce(1, $method = '', $message = 'Data get successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }

    public function sub_categorys(Request $request)
    {
        $data = $this->IndexServices->sub_categorys($request->category);
        $res = $this->IndexServices->apiResponce(1, $method = '', $message = 'Data get successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }
    public function post_all(Request $request)
    {
        $data = $this->IndexServices->post_all($request->subcategory);
        $res = $this->IndexServices->apiResponce(1, $method = '', $message = 'Data get successfully', $data);
        $status = Config::get('app.apiResponceStatus.success');
        return response()->json($res, $status);
    }

}
