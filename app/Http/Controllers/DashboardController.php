<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller{

    public function getUserName(){
        
        if(Auth::check()){
            $user = Auth::user();
            $userName = $user->name;
            return $userName;
        }

        return 'Usuario no encontrado';
    }
}