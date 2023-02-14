<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestedMovie extends Model
{
    use HasFactory;

    protected $table='interestedmovies';
    public $timestamps = false;

    protected $fillable = [
        'UserID',
        'MovieID'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
