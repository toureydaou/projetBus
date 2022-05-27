<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['numPlace', 'depart', 'arrivee', 'prix', 'statut'];
    protected $primaryKey = 'idTicket';

    public function voyage() {
        return $this->belongsTo('app/Models/Voyage', 'idVoyage');
    }

    public function client() {
        return $this->belongsTo('app/Models/Client', 'idClient');
    }
}
