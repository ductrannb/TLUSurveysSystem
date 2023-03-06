<?php

namespace App\Ultis;

use Illuminate\Support\Facades\Cookie;

class CookieEditor
{
    public function setCookie($name, $value, $minutes)
    {
        Cookie::queue($name, $value, $minutes);
    }
    
    public function getCookie(Request $request){
        $value = $request->cookie($request->name);
        return $value;
     }
}
