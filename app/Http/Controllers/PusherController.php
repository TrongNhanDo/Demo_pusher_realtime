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
        event(new PusherEvent('lolo con cac'));
        return "Msg has been sent";
    }
}
