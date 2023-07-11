<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelNoticia extends Model
{
    use HasFactory;
    protected $table = 'noticias';
    protected $fillable = ['id', 'id_users', 'titulo', 'mensagem'];

    
    public function relUsers(){

/*         return $this->hasOne(related: 'App\User', foreignKey: 'id', localKey:'id_users');
 */        return $this->belongsTo(User::class, 'id_users', 'id'); 


    }
}
