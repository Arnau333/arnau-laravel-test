<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;
    protected $table = "_server";
    

    protected $fillable 
    = ["phpVersion",
    "storageCapacity",
    "diskType",
    "_database",
    "_email",
    "username"];
    protected $hidden = ['id', 'pass'];

    public function getAllServer()
    {
        return Server::all();
    }
    
    public function getServerById($id)
    {
        return Server::find($id);
    }
}
