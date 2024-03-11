<?php
namespace App\presenter;

use App\presenter\Presenter;

class JsonResponse implements Presenter
{

    public static function sendSuccess($data, $message)
    {
        return response()->json(
            [
                "state" => 1,
                "data" => $data,
                "message" => $message
            ]
        );
    }

    public static function sendFailed($data, $message)
    {

        return response()->json([
            'state' => 0,
            "errors" => $data,
            "message" => $message
        ]);
    }
}
