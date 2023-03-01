<?php
namespace App\Services;

class ResponseService
{
    public function success(string $message)
    {
        return response()->json([
            'status' => 'success', 
            'message' => $message
        ]);
    }

    public function error($message)
    {
        return response()->json([
            'status' => 'error', 
            'message' => $message
        ]);
    }

}
