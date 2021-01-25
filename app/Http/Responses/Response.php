<?php


namespace App\Http\Responses;


class Response
{

    public static function MethodNotAllowed($method, $content = null)
    {
        return [
            "progress_code" => "0000",
            "progress_type" => "error",
            "progress_message" => strtoupper($method) . " Method Not Allowed For This Api",
            "content" => $content
        ];
    }

    public static function EmptyTokenResponse($content = null)
    {
        return [
            "progress_code" => "0001",
            "progress_type" => "error",
            "progress_message" => "_token is required on header",
            "content" => $content
        ];
    }

    public static function WrongTokenResponse($content = null)
    {
        return [
            "progress_code" => "0002",
            "progress_type" => "error",
            "progress_message" => "_token is not correct",
            "content" => $content
        ];
    }

    public static function EmptyUserResponse($content = null)
    {
        return [
            "progress_code" => "0003",
            "progress_type" => "error",
            "progress_message" => "User ID is not correct. There is not found registered any user with this ID",
            "content" => $content
        ];
    }

    public static function AlreadyExistResponse($content = null)
    {
        return [
            "progress_code" => "0004",
            "progress_type" => "error",
            "progress_message" => "This data already registered for this user on this date",
            "content" => $content
        ];
    }

    public static function EmptyVariableResponse($variable, $content = null)
    {
        return [
            "progress_code" => "0005",
            "progress_type" => "error",
            "progress_message" => "$variable is required",
            "content" => $content
        ];
    }

    public static function SuccessfullyRegisteredArrivalTimeResponse($content = null)
    {
        return [
            "progress_code" => "0006",
            "progress_type" => "success",
            "progress_message" => "Users arrival time registered successfully",
            "content" => $content
        ];
    }

    public static function SuccessResponse($content = null, $message = null)
    {
        return [
            "progress_code" => "000A",
            "progress_type" => "success",
            "progress_message" => "$message",
            "content" => $content
        ];
    }

    public static function ErrorResponse($content = null, $message = null)
    {
        return [
            "progress_code" => "00FF",
            "progress_type" => "error",
            "progress_message" => "$message",
            "content" => $content
        ];
    }

}
