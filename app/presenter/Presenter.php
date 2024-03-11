<?php
namespace App\presenter;

    interface Presenter{

        public static function sendSuccess($data , $message);

        public static function sendFailed($data , $message);

    }



?>
