<?php

namespace App\Http\Controllers;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        $events = Event::all();
        return view('front.calendar.index', compact('events'));
    }

    public function store(){


        $event = new Event();

        $date1 = \Carbon\Carbon::parse(request('start_date'));
        $date2 = \Carbon\Carbon::parse(request('end_date'));

        $event->start_date = $date1->format('Y-m-d');
        $event->end_date = $date2->format('Y-m-d');

        $event->title = request('title');
        $event->description = request('description');
        
        $event->location = request('location') ?? 'Guadalajara, Jal.';


        $event->cover = $this->storeFile(request(), 'covers', 'cover');
        
        $event->save();

        return back()->with(['success' => 'Evento Creado Extosamente']);

    }

    public function storeFile($request, $directoyName = 'images' ,$image_name = 'image'){
        $filename = time() . '-' . $request->file($image_name)->getClientOriginalName();
        $filePath = $request[$image_name]->storeAs($directoyName, $filename, 'public');

        return $filePath;
    }
}
