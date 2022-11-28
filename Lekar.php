<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DomZdravlja;
use App\Models\Pacijent;


class Lekar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'email',
        'telefon',
        'broj_licence',
        'dom_zdravlja_id'
    ];


    public function domzdravlja(){
        return $this->belongsTo(DomZdravlja::class);    
    }

    public function pacijenti(){
        return $this->hasMany(Pacijent::class);
    }

}
