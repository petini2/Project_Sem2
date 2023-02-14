<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;
    protected $table = 'showtimes';
    public $timestamps = false;

    protected $fillable = [
        'StartTime'
    ];

    public function show(){
        return $this->hasMany(Show::class);
    }
}
