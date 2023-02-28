<?php

namespace App\Ultis;

class CookieEditor
{
    public function setCookie(Request $request)
    {
        $name = $request->name;
        $value = $request->value;
        $minutes = $request->minutes;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie($name, $value, $minutes));
        return $response;
    }
    
    public function getCookie(Request $request){
        $value = $request->cookie($request->name);
        return $value;
     }
}
