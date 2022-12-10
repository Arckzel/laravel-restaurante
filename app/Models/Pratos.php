<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pratos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
        'cardapio_id'
    ];

    public function cardapio(){
        return $this->belongsTo('App\Models\Cardapios','cardapio_id');
    }

}
