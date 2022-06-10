<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voyage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['dateVoyage', 'heure_depart', 'ticketsVendus', 'idVehicule', 'idLigne'];
    protected $primaryKey = 'idVoyage';

    public function ticket() {
        return $this->hasMany('app/Models/Ticket', 'idTicket');
    }

    public function colis() {
        return $this->hasMany('app/Models/Colis', 'idColis');
    }

    public function ligne() {
        return $this->belongsTo('app/Models/Ligne', 'idLigne');
    }

    public function vehicule() {
        return $this->belongsTo('app/Models/Vehicule', 'idVehicule');
    }
}
