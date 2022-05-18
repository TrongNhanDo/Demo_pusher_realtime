<?php

namespace App\Http\Controllers;

use App\Events\PusherEvent;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function getPusher(){
        return view('pusher');
    }
    public function event(){
        event(new PusherEvent('Có đơn hàng mới'));
        return "Đã đặt hàng";
    }
}
