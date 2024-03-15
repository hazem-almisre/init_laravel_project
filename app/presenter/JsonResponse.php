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
                "message" => $message,
                "data" => $data,
            ]
        );
    }

    public static function sendFailed($data, $message)
    {

        return response()->json([
            'state' => 0,
            "message" => $message,
            "errors" => $data,
        ]);
    }
}
