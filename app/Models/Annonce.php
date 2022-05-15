<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [ 'id_objet', 'prix', 'ville', 'date_debut', 'date_fin','premium','etat'];


        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
