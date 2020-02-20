<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrConreoller extends Controller
{
    public function make(){
        $file=public_path('qr.png');
        return \QRCode::text('Kavindu')->svg();   
    }
}
