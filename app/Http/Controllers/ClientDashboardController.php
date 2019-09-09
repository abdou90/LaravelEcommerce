<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index(){

        $clients = Client::paginate(20);

        
        return view('clients.index', compact('clients'));
    }

    public function show(Client $client){

        return view('clients.show', compact('client') );
    }
}
