<?php 

namespace App\Repositories\Front;

use App\Models\Event as ModelsEvent;
use App\Models\Storage;
use Illuminate\Http\Request;

class Event {

    public function all(){
        
        return ModelsEvent::all();
    
    }

    public function save( Request $request ){

        $event = new ModelsEvent();

        $start_date = stringToDate($request['start_date']);
        $end_date = stringToDate($request['end_date']);

        $event->start_date = $start_date->format('Y-m-d');
        $event->end_date = $end_date->format('Y-m-d');

        $event->title = $request['title'];
        $event->description = $request['description'];
        
        $event->location = $request['location'] ?? 'Location';


        $event->cover = Storage::upload( $request , 'cover', 'covers');
        
        $event->save();

    }

}