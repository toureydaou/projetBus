<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bus extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['nbPlaces', 'marque', 'climatisation', 'statut'];
    protected $primaryKey = 'idBus';

    public function voyages() {
        return $this->hasMany('app/Models/Voyage', 'idVoyage');
    }
}
