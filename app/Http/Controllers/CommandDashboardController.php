<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commande;

class CommandDashboardController extends Controller
{
    public function index(){

        $commands = Commande::paginate(20);


        return view('commands.index', compact('commands'));
    }

    public function show(Commande $command){

        return view('commands.show', compact('command') );
    }
}
