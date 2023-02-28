<?php
namespace App\Services;

class ResponseService
{
    public function success($message)
    {
        return array('success' => true, 'message' => $message);
    }

    public function error($message)
    {
        return array('success' => false, 'message' => $message);
    }
}
