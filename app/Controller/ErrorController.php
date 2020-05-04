<?php
class ErrorController{
    public static function message(){

        $msg = [
            'message' => 'Wrong request'
        ];

        header('Content-type: application/json');
        http_response_code(400);

        $json = json_encode($msg);
        echo($json);
    }
}