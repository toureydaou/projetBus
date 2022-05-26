<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = ['nom', 'prenom', 'dateNaissance', 'telephone'];
    protected $primaryKey = 'idClient';

    public function colis() {
        return $this->hasMany('app/Models/Colis', 'idColis');
    }

    public function ticket() {
        return $this->hasMany('app/Models/Ticket', 'idTicket');
    }

}
