<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objet extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [ 'nom', 'etat', 'description', 'image', 'user_id'];


        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
