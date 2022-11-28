<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lekar;

class DomZdravlja extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresa',
        'email',
        'grad',
        'zastupnik'
    ];

    public function lekari(){
        return $this->hasMany(Lekars::class);
    }

}
