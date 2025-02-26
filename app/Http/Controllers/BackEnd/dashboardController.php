<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){

        $users = User::with(['requsting', 'donates'])->get();;
        $user = User::all()->count();
        $donate = User::whereHas('donates')->count();
        $requsting = User::whereHas('requsting')->count();
        $view = User::doesntHave('donates')->doesntHave('requsting')->where('role','0')->count();
        return view('backend.dashboard.dashboard',compact('donate','requsting','user','view','users'));
    }
}
  