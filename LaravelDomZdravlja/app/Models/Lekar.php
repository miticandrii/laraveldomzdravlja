<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DomZdravlja;
use App\Models\Pacijent;

class Lekar extends Model
{
    use HasFactory;

    public function domzdravlja(){
        return $this->belongsTo(DomZdravlja::class);
    }

    public function pacijenti(){
        return $this->hasMany(Pacijent::class);
    }


}
