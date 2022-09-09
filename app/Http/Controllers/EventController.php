<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Repositories\Front\Event as FrontEvent;

class EventController extends Controller
{
    public function index() {
        
        //

    }

    public function store( FrontEvent $saveEvent ){

        $event = $saveEvent->save( request() );

        return back()->with(['success' => 'Evento Creado Exitosamente']);

    }
    
}
