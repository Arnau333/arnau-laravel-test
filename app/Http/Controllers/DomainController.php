<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Server;
use App\Models\Domain;
use App\Models\Client;

class DomainController extends Controller
{
    public function index($id)
    {
        $server = Server::getServerById($id);
        $domain = Domain::getDomainByServerId($id);
        $client = array();

        foreach($domain as $key){
        array_push($client, Client::getClientById($key['client_id']));
        }
        
        return view('infoServer', array(
             'titulo' =>  'Server information',
             'server' => $server,
             'domain' => $domain,     
             'client' => $client

             

        ));
    }
}
