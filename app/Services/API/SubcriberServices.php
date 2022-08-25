<?php

namespace App\Services\API;

use Config;

use App\Models\Subscriber;


class SubcriberServices
{


    public function store($req)
    {
        $check = Subscriber::where('email', $req['email'])->count();
        if ($check == 0) {
            Subscriber::create($req);
            return 'Add';
        } else {
            return 'already';
        }
    }

    public function apiResponce($status = 1, $method = 'POST', $message = '', $data = [])
    {
        $response = [
            'status' => $status,
            'method' => $method,
            'message' => $message,
            'response' => $data
        ];
        return $response;
    }
}
