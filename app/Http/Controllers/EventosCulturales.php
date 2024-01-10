<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventosCulturales as EventsCulturals;

class EventosCulturales extends Controller{
    
    public function getEventos() {
        $getEventosReales = EventsCulturals::take(2)->get();
        $getEventosFake = EventsCulturals::skip(2)->inRandomOrder()->take(3)->get();

        $arrayEvents = $getEventosReales->concat($getEventosFake);
        return view('welcome', compact('arrayEvents'));
    }
}