<?php

namespace App\Http\Controllers;
use App\Models\EventosCulturales as EventsCulturals;
use Illuminate\Http\JsonResponse;

class EventosCulturales extends Controller{
    
    public function getEventos() {
        $getEventosReales = EventsCulturals::take(2)->get();
        $getEventosFake = EventsCulturals::skip(2)->inRandomOrder()->take(3)->get();

        $arrayEvents = $getEventosReales->concat($getEventosFake);
        return view('welcome', compact('arrayEvents'));
    }

    public function getEventById($id){
        $eventById = EventsCulturals::find($id);
        return view('eventos.event', compact('eventById'));
    }

    public function getEventByIdApi($id): JsonResponse {
        $eventByIdApi = EventsCulturals::find($id);
        if(!$eventByIdApi){
            return response()->json(['error' => 'Evento no encontrado'], 404);
        }
        return response()->json($eventByIdApi, 200);
    }

    public function getEventsByPaginationApi($pages): JsonResponse {
        $eventosPorPagina = 10;
        $eventsPaginationApi = EventsCulturals::paginate($eventosPorPagina, ['*'],'page', $pages);
        if(!$eventsPaginationApi){
            return response()->json(['error' => 'Evento no encontrado'], 404);
        }

        return response()->json($eventsPaginationApi, 200);
    }
}
