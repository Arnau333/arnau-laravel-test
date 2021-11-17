<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Server;

class Domain extends Model
{
    use HasFactory;
    protected $table = "domain";
    

    protected $fillable 
    = ["name",
    "expirationDate"];


    protected $hidden = ['id', 'pass', 'server_id', 'client_id'];

    public function getAllDomain()
    {
        return Domain::all();
    }
    
    public function getDomainById($id)
    {
        return Domain::find($id);
    }

    public function getDomainByServerId($id)
    {
        
        $domains = Domain::where('server_id', $id)->get();
        return $domains;
        
    }

}