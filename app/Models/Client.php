<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = "client";
    

    protected $fillable 
    = ["name",
    "lastName",
    "telephone"];


    protected $hidden = ['id'];

    public function getAllClient()
    {
        return Client::all();
    }
    
    public function getClientById($id)
    {
        return Client::find($id);
    }

}






