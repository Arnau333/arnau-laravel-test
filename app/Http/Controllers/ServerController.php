<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Server;

class ServerController extends Controller
{
    public function viewServer()
    {
        $titulo = "Server list"; 
        $server = Server::getAllServer();
        
        return view('home', array(
            'titulo' =>  $titulo,
            'server' => $server
        ));
    }

}