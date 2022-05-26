<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colis extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['contenu', 'nomDestinataire', 'telephoneDestinataire'];
    protected $primaryKey = 'idColis';

    public function voyage() {
        return $this->belongsTo('app/Models/Voyage', 'idVoyage');
    }

    public function client() {
        return $this->belongsTo('app/Models/Client', 'idClient');
    }
}
