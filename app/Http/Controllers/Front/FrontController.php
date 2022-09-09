<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\Front\Event;

class FrontController extends Controller
{
    

    public function index(Event $event){

        $events = $event->all();

        return view( 'front.index' , compact('events'));

    }

    public function calendar(Event $event){

        $events = $event->all();

        return view('front.calendar.index', compact('events'));

    }

    public function contact(){

        return view('front.contact.index');

    }

}
