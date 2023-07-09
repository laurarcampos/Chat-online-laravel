<?php

namespace App\Models\Models;
use App\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ModelNoticias extends Model
{   
    protected $table = 'noticias';
    protected $fillable = ['id', 'id_users', 'titulo', 'mensagem'];

    
    public function relUsers(){

        return $this->hasOne(related: 'App\User', foreignKey: 'id', localKey:'id_users');
/*         return $this->belongsTo(User::class, 'id_users', 'id'); */


    }


}
